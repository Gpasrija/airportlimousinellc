<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\BookingDetails;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingEmail;
use Illuminate\Mail\SentMessage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Faq;
use App\Services\GoogleReviewsService;


class HomeController extends Controller
{
    protected $googleReviewsService;
    public function __construct(GoogleReviewsService $googleReviewsService)
    {
        $this->googleReviewsService = $googleReviewsService;
    }

    public function index(Request $request)
    {
        $locationNamesArray = Location::pluck('name')->toArray();
        $fromLocations = $toLocations = $locationNamesArray;

        $bannerImagesData = array('imgs/page/homepage1/banner.png','imgs/page/homepage1/banner2.png','imgs/page/homepage1/banner3.png','imgs/page/homepage1/banner4.png','imgs/page/homepage1/banner5.jpeg');
        
        $bannerImagesContent = array('Elevate Your Journey,<br class="d-none d-lg-block"> Experience the Difference','First Class Travel, <br class="d-none d-lg-block">Ground Level Service','Arrive in Style, <br class="d-none d-lg-block">Depart in Luxury','From Your Doorstep, <br class="d-none d-lg-block">to the Departure Gate with Elegance','Your Bridge Between,<br class="d-none d-lg-block"> Comfort and the Clouds');

        $placeId = 'ChIJF0GaWRJna4gRg8x87hYhDjc'; 
        $reviews = $this->googleReviewsService->getReviews($placeId);

        return view('pages.home', ['locationData' => $locationNamesArray, 'bannerImages' => $bannerImagesData,'bannerImagesContent'=>$bannerImagesContent, 'fromLocations' => $fromLocations, 'toLocations' => $fromLocations,'reviews' => $reviews]);
    }

    public function searchForm(Request $request){
        // Validate the form data
        $validatedData = $request->validate([
            'vehicle' => 'required|string|max:255',
            // 'from' => 'required|string',
            // 'to' => 'required|string',
        ]);

        $vehicleType = $request->vehicle;
        $rate = $estimate = 0;

        if(isset($request->distance) && !empty($request->distance)){
            $distance = $request->distance;
            $validatedData['distance'] = $distance;
            if ($vehicleType === "Sedan"){ $rate = 3;}
            else if ($vehicleType === "Suv"){ $rate = 4;}
            else if ($vehicleType === "Mini Van"){ $rate = 3.5;}
            
            if($distance < 15){
                $estimate = 15 * $rate;
            }else{
                $estimate = $distance * $rate;
            }
        } elseif(isset($request->hours) && !empty($request->hours)){
            $hours = $request->hours;
            $validatedData['hours'] = $hours;
            if ($vehicleType === "Sedan"){ $rate = 55;}
            else if ($vehicleType === "Suv"){ $rate = 85;}
            else if ($vehicleType === "Mini Van"){ $rate = 65;}
            
            if($hours < 3){
                $estimate = 3 * $rate;
            }else{
                $estimate = $hours * $rate;
            }
        }
        $validatedData['estimate'] = $estimate;
        $carbonDate = Carbon::parse($request->date);
        // Format date as "Y-m-d" for database storage
        $validatedData['date'] = $carbonDate->format('Y-m-d');

        $timeString = str_replace(' ', '', $request->time); // Remove spaces from the time string
        $carbonTime = Carbon::parse($timeString);
        // Format date as "Y-m-d" for database storage
        $validatedData['time'] = $carbonTime->format('H:i:s A');
        $bookingData = BookingDetails::create($validatedData);
        $locationNamesArray = Location::pluck('name')->toArray();
        $fromLocations = $toLocations = $locationNamesArray;

        return view('pages.bookingForm',['bookingId'=>$bookingData->id, 'fromLocations' => $fromLocations, 'toLocations' => $fromLocations, 'bookingDetails' => $validatedData]);
    }

    public function bookingForm(Request $request){

        // Get all input fields from the request
        $requestData = $request->all();
        $bookingData = [];

        // Iterate over each input field
        foreach ($requestData as $field => $value) {
            // Check if the value is not null and not empty
            if (!is_null($value) && $value !== '') {
                if($field === 'is_return' && $value === 'on'){
                    $value=1;
                }
                if($field === 'date' || $field === 'return_date'){
                    $carbonDate = Carbon::parse($value);
                    $value = $carbonDate->format('Y-m-d');
                }
                if($field === 'time' || $field === 'return_time'){
                    $timeString = str_replace(' ', '', $value);
                    $carbonTime = Carbon::parse($timeString);
                    $value = $carbonTime->format('H:i:s A');
                }
                $bookingData[$field] = $value;
            }
        }

        $lastBooking = BookingDetails::orderBy('bookingId', 'desc')->first();
        // dd($lastBooking);
        if (isset($lastBooking) && $lastBooking !== '' && $lastBooking->bookingId !== null) {
            $lastBookingNumber = intval(substr($lastBooking->bookingId, 3));
        } else {
            $lastBookingNumber = 4999;
        }
        // Increment the last booking number
        $bookingData['bookingId'] = 'ALL' . ($lastBookingNumber + 1);
         
        $bookingData['is_booked'] = 1;

        // dd($bookingData);
        // $response = Mail::to(['gourav.luv21@gmail.com','pardeepbasson@gmail.com','Info@airportlimoindy.com', $bookingData['email']])->send(new BookingEmail($bookingData));
        $response = Mail::to($bookingData['email'])
                ->bcc(['info@airportlimoindy.com','gourav.luv21@gmail.com','pardeepbasson@gmail.com'])
                ->send(new BookingEmail($bookingData));
        if ($response instanceof SentMessage) {
            session()->flash('message', 'Your booking Id: '.$bookingData['bookingId'].' created successfully! We will connect you shortly.');
            session()->flash('alert-type', 'success');
        } else {
            session()->flash('message', 'Sorry, not able to book the car right now.');
            session()->flash('alert-type', 'error');
        }
        
        $bookingId = $request->input('booking_id'); 
        $booking = BookingDetails::findOrFail($bookingId); 

        // Update the booking record with the new data
        $booking->update($bookingData);
        return redirect()->route('home');
    }

    public function servicesSingle(){
        $request = request();
        $path = $request->path();
        $view = 'pages.'.$path;
        $locationNamesArray = Location::pluck('name')->toArray();
        $fromLocations = $toLocations = $locationNamesArray;

        return view($view,['fromLocations' => $fromLocations, 'toLocations' => $fromLocations]);
    }
    public function fetchfaq(){
        // $locationNamesArray = Faq::All();
        $faqs = Faq::all();
        // $fromLocations = $toLocations = $locationNamesArray;

        return view('pages.faq',['faqData' => $faqs]);
    }

    public function fetchCities(){
        $citiesNamesArray = Location::where('is_active', 1)->orderBy('name')->pluck('name')->toArray();
        // $citiesNamesArray = array_map('strtolower', $citiesNamesArray);
        $citiesNamesArray = array_map(function($city) {
            return ucfirst(strtolower($city));
        }, $citiesNamesArray);
        return view('pages.cityList',['cityList' => $citiesNamesArray]);
    }
}

<!-- resources/views/emails/contact_us.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Received</title>
</head>
<body>
    <h2>New Booking Received</h2>
    {!! isset($data['name']) ? "<p><strong>Name: </strong>" . $data['name'] . "</p>" : "" !!}
    {!! isset($data['bookingId']) ? "<p><strong>Booking Id: </strong>" . $data['bookingId'] . "</p>" : "" !!}
    {!! isset($data['email']) ? "<p><strong>Email: </strong>" . $data['email'] . "</p>" : "" !!}
    {!! isset($data['time']) ? "<p><strong>Time: </strong>" . $data['time'] . "</p>" : "" !!}
    {!! isset($data['from']) ? "<p><strong>From: </strong>" . $data['from'] . "</p>" : "" !!}
    {!! isset($data['date']) ? "<p><strong>Date: </strong>" . $data['date'] . "</p>" : "" !!}
    {!! isset($data['to']) ? "<p><strong>To: </strong>" . $data['to'] . "</p>" : "" !!}
    {!! isset($data['phone_number']) ? "<p><strong>Phone Number: </strong>" . $data['phone_number'] . "</p>" : "" !!}
    {!! isset($data['flight_number']) ? "<p><strong>Flight Number: </strong>" . $data['flight_number'] . "</p>" : "" !!}
    {!! isset($data['vehicle']) ? "<p><strong>Vehicle: </strong>" . $data['vehicle'] . "</p>" : "" !!}
    {!! isset($data['distance']) ? "<p><strong>Distance: </strong>" . $data['distance'] . "</p>" : "" !!}
    {!! isset($data['hours']) ? "<p><strong>Hours: </strong>" . $data['hours'] . "</p>" : "" !!}
    {!! isset($data['estimate']) ? "<p><strong>Estimate: $</strong>" . $data['estimate'] . "</p>" : "" !!}
    {!! isset($data['pickup']) ? "<p><strong>Pick Up: </strong>" . $data['pickup'] . "</p>" : "" !!}
    {!! isset($data['dropoff']) ? "<p><strong>Drop Off: </strong>" . $data['dropoff'] . "</p>" : "" !!}
    @if (isset($data['is_return']) && $data['is_return'] === 1)
        <h4>Return Booking Details</h4>
        {!! isset($data['return_date']) ? "<p><strong>Return Date: </strong>" . $data['return_date'] . "</p>" : "" !!}
        {!! isset($data['return_time']) ? "<p><strong>Return Time: </strong>" . $data['return_time'] . "</p>" : "" !!}
        {!! isset($data['return_from']) ? "<p><strong>Return Pick Up: </strong>" . $data['return_from'] . "</p>" : "" !!}
        {!! isset($data['return_to']) ? "<p><strong>Return Drop Off: </strong>" . $data['return_to'] . "</p>" : "" !!}
    @endif
    {!! isset($data['message']) ? "<p><strong>Message: </strong></p><p>" . $data['message'] . "</p>" : "" !!}
</body>
</html>

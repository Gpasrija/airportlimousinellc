<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;


class IndianaLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve Indiana locations data (e.g., from a CSV file, JSON file, or API)
        $indianaLocationsData = [
            ['name' => 'Indianapolis','city'=>'Indiana','state'=>'Indiana','country'=>'USA','zipcode'=>'317','latitude' => '39.7684', 'longitude' => '-86.1581'],
            ['name' => 'Fort Wayne','city'=>'Indiana','state'=>'Indiana','country'=>'USA','zipcode'=>'46802', 'latitude' => '41.0793', 'longitude' => '-85.1394'],
            // Add more Indiana locations data as needed
        ];

        // Insert Indiana locations data into the locations table
        foreach ($indianaLocationsData as $locationData) {
            Location::create($locationData);
        }
    }
}

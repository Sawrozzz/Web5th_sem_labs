<?php

class Flight {
    // Properties
    public $flightNumber;
    public $departureCity;
    public $destinationCity;
    public $departureTime;

    // Constructor
    public function __construct($flightNumber, $departureCity, $destinationCity, $departureTime) {
        $this->flightNumber = $flightNumber;
        $this->departureCity = $departureCity;
        $this->destinationCity = $destinationCity;
        $this->departureTime = $departureTime;
    }

    // Function to display flight details
    public function displayFlightDetails() {
        echo "Flight $this->flightNumber from $this->departureCity to $this->destinationCity\n";
        echo "Departure Time: $this->departureTime\n";
    }

    // Function to update departure time
    public function updateDepartureTime($newDepartureTime) {
        $this->departureTime = $newDepartureTime;
        echo "Departure time updated to: $this->departureTime\n";
    }
}

// Creating an instance (object) of the Flight class
$flight1 = new Flight('ABC123', 'CityA', 'CityB', '12:00 PM');

// Displaying initial flight details
echo "Initial Flight Details:\n";
$flight1->displayFlightDetails();

// Updating departure time
$flight1->updateDepartureTime('2:00 PM');

// Displaying updated flight details
echo "Updated Flight Details:\n";
$flight1->displayFlightDetails();

?>

<?php
class Movies
{
    private $baseTicketPrice = 50; // Base ticket price in Rands
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function calculateTicketPrice($age)
    {
        $this->age = $age;

        if ($this->age < 5) {
            return 0; // Free admission for children under 5
        } elseif ($this->age <= 12) {
            return $this->baseTicketPrice / 2; // Half price for children aged 5-12
        } elseif ($this->age >= 65) {
            return $this->baseTicketPrice * 0.8; // 20% discount for seniors aged 65 and above
        } else {
            return $this->baseTicketPrice; // Regular ticket price
        }
    }
}
?>
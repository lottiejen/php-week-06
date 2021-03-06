<?php

// Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times. Put the following in index.php and then check that you get back the right results:

namespace App\Stuff\Things; 

class Potato
{
    private $watered = 0; // create property 

    public function water() // leave blank as not passing it anything 
    {
         $this->watered += 1; // addition +1 everytime  // setter method
    }

    public function hasGrown()
    {
        return $this->watered >= 5; // getter method
    }

}




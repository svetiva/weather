<?php

require 'vendor/autoload.php';

/**
 * Description of Example
 *
 * @author Svetlana Ivanova <svetlana.ivanova@esteit.com>
 */
class Example
{

    /**
     * @return boolean
     */
    public function falseMethod()
    {
        return false;
    }

    /**
     * @return boolean
     */
    public function trueMethod()
    {
        return true;
    }

    /**
     * @assert ("Voronezh") == expectedResult
     * @assert ("Moscow") == expectedResult
     * @assert ("") == expectedResult
     * @assert (1) == expectedResult
     * @param type $city
     * @return type
     */
    public static function getWeather($city)
    {
        $browser = new Buzz\Browser();
        $response = $browser->get('http://api.openweathermap.org/data/2.5/weather?q=' . $city);
        return $response->getContent();
    }

}


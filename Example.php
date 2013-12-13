<?php
require 'vendor/autoload.php';

/**
 * Description of Example
 *
 * @author Svetlana Ivanova <svetlana.ivanova@esteit.com>
 */
class Example {

    /**
     * @return boolean
     */
    public function someMethod() {
        return false;
    }

    /**
     * @return boolean
     */
    public function otherMethod() {
        return true;
    }

    public static function getWeather($city) {
        try {
            $browser = new Buzz\Browser();
            $response = $browser->get('http://api.openweathermap.org/data/2.5/weather?q=' . $city);
            return $response;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}


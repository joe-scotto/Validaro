<?php

class Validaro {
    /**
     * Checks if the provided variables are not empty
     * @param  mixed $variables Variables to be checked if empty
     * @return bool True if all fields are not empty, false if not
     */
    public static function checkNotEmpty ($variables) {
        //Loop through values, return false if one is empty, true if not
        foreach ($variables as $variable) {
            if (empty($variable['field'])) {
               return false;
            } 
        }

        //Return true if no empty values
        return true;
    }

    /**
     * Checks if the provided variables match their respective max lengths
     * @param  mixed $variables Variables to be checked for max length
     * @return bool True if all fields match their max length, false if not
     */
    public static function checkMaxLength ($variables) {
        //Loop through values, return false if one is no equal to max length, true if not
        foreach ($variables as $variable) {
            if (strlen($variable['field']) >= $variable['maxLength']) {
                return false;
            } 
        }

        //Return true if all values match max length
        return true;
    }

    /**
     * Checks if the provided variables match their respective min lengths
     * @param  mixed $variables Variables to be checked for min length
     * @return bool True if all fields match their min length, false if not
     */
    public static function checkMinLength ($variables) {
        //Loop through values, return false if one is no equal to min length, true if not
        foreach ($variables as $variable) {
            if (strlen($variable['field']) < $variable['minLength']) {
                return false;
            } 
        }

        //Return true if all values match min length
        return true;
    }
}
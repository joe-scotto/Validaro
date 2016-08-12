<?php

class Validaro {
    /**
     * Checks if the provided variables are not empty
     * @param  mixed $variables Variables to be checked if empty
     * @return bool True if all fields are not empty, false if not
     */
    public static function checkNotEmpty ($variables) {
        //Variables
        $counter = 0;
        $validation = array();

        //Loop through values, return false if one is empty, true if not
        foreach ($variables as $variable[]) {
            //Trim Whitespace
            $variables = array_map('trim', $variable[$counter]);

            if (!empty($variable[$counter]['field'])) {
               array_push($validation, true);
            } else {
               array_push($validation, false);
            }
            $counter++;
        }

        //Check if any values were empty
        if (!in_array(false, $validation)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Checks if the provided variables match their respective max lengths
     * @param  mixed $variables Variables to be checked for max length
     * @return bool True if all fields match their max length, false if not
     */
    public static function checkMaxLength ($variables) {
        //Variables
        $counter = 0;
        $validation = array();

        //Loop through values, return false if one is no equal to max length, true if not
        foreach ($variables as $variable[]) {
            //Trim Whitespace
            $variables = array_map('trim', $variable[$counter]);

            if (strlen($variable[$counter]['field']) <= $variable[$counter]['maxLength']) {
                array_push($validation, true);
            } else {
                array_push($validation, false);
            }
            $counter++;
        }

        //Check if any values had correct max length
        if (!in_array(false, $validation)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Checks if the provided variables match their respective min lengths
     * @param  mixed $variables Variables to be checked for min length
     * @return bool True if all fields match their min length, false if not
     */
    public static function checkMinLength ($variables) {
        //Variables
        $counter = 0;
        $validation = array();

        //Loop through values, return false if one is no equal to min length, true if not
        foreach ($variables as $variable[]) {
            //Trim Whitespace
            $variables = array_map('trim', $variable[$counter]);

            if (strlen($variable[$counter]['field']) >= $variable[$counter]['minLength']) {
                array_push($validation, true);
            } else {
                array_push($validation, false);
            }
            $counter++;
        }

        //Check if any values had correct min length
        if (!in_array(false, $validation)) {
            return true;
        } else {
            return false;
        }
    }
}
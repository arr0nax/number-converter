<?php
    class Number {
        public $ones_dictionary = ["1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" => "six", "7" => "seven", "8" => "eight", "9" => "nine", "10" => "ten", "11" => "eleven", "12" => "twelve", '15' => 'fifteen', '0' => ''];

        public $tens_dictionary = ['1' => 'ten', '2' => 'twenty', '3' => 'thirty', '4' => 'forty', '5' => 'fifty', '6' => 'sixty', '7' => 'seventy', '8' => 'eighty', '9' => 'ninety', '0' => ''];

        public $converted_number = '';

        function convert($number)
        {
            if(strlen($number) % 3 == 0)
            {
                $this->converted_number .= $this->ones_dictionary[$number[0]]."hundred";
                $new_number = substr($number, 1);
                return $this->convert($new_number);
            }
            elseif(strlen($number) %3 == 2) {
                if(($number[0]) == "1") {
                    if($number[1] > 3 && $number[1] < 5 || $number[1] > 5) {
                        $this->converted_number .= $this->ones_dictionary[$number[1]]."teen";
                        return $this->converted_number;
                    }
                    else {
                        $this->converted_number .=  $this->ones_dictionary[$number];
                        return $this->converted_number;
                    }
                }
                else {
                    $this->converted_number .= $this->tens_dictionary[$number[0]];
                    $new_number = substr($number, 1);
                    return $this->convert($new_number);
                }
            }
            elseif(strlen($number) %3 == 1) {
                $this->converted_number .= $this->ones_dictionary[$number];
                return $this->converted_number;
            }
        }
    }


?>

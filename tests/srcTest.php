<?php
    require_once 'src/src.php';

    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_convert_one_number() {
            $input = '1';
            $test_source = new Number;

            $result = $test_source->convert($input);

            $this->assertEquals("one", $result);
        }

        function test_convert_teens() {
            $input = '17';
            $test_source = new Number;

            $result = $test_source->convert($input);

            $this->assertEquals("seventeen", $result);
        }

        function test_convert_tweens() {
            $input = '12';
            $test_source = new Number;

            $result = $test_source->convert($input);

            $this->assertEquals("twelve", $result);
        }

        function test_convert_double_digits() {
            $input = '23';
            $test_source = new Number;

            $result = $test_source->convert($input);

            $this->assertEquals("twentythree", $result);
        }

        function test_convert_triple_digits() {
            $input = '100';
            $test_source = new Number;

            $result = $test_source->convert($input);

            $this->assertEquals("onehundred", $result);
        }
    }



?>

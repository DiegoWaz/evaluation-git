<?php

namespace tests\lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{

    public function testConcatStringSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->concatString("paris", "iens");
        $this->assertEquals("parisiens", $result);
    }

    public function testtoCamelCase()
    {
        $myCamelCase = new StringFormatter();
        $result = $myCamelCase->concatString(strtolower("Sublim"), ucfirst("test"));
        $this->assertEquals("sublimTest", $result);
    }

    public function testPrefix() {

        $myString = new StringFormatter();
        $result = $myString->concatString("test", "unitaire", true);
        $this->assertEquals("testunitaire", $result);
    }

    public function testSuffix() {

        $myString = new StringFormatter();
        $result = $myString->concatString("test", "unitaire", true);
        $this->assertEquals("testunitaire", $result);
    }



    // /**
    //  * @param string $suffix
    //  * @param string $string
    //  * @param bool $camelCase
    //  * @return string
    //  */
    // public function suffix($suffix, $string, $camelCase = false)
    // {
    //     if($camelCase)
    //     {
    //         return $this->toCamelCase($string, $suffix);
    //     }
    //     return $this->concatString($string, $suffix);
    // }

    // /**
    //  * @param string $firstString
    //  * @param string $secondString
    //  * @return string
    //  */
    // public function toCamelCase($firstString, $secondString)
    // {
    //     return $this->concatString(strtolower($firstString), ucfirst($secondString));
    // }

    /**
     * @param string $firstString
     * @param string $secondString
     * @return string
     */

}
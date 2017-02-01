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

    public function testtotestCase()
    {
        $myCamelCase = new StringFormatter();
        $result = $myCamelCase->concatString(strtolower("Sublim"), ucfirst("test"));
        $this->assertEquals("sublimTest", $result);
    }

    public function testPrefixTrue(){

        $myString = new StringFormatter();
        $result = $myString->prefix("test", "unitaire", true);
        $this->assertEquals("testUnitaire", $result);
    }

    public function testPrefixFalse(){

        $myString = new StringFormatter();
        $result = $myString->prefix("test", "unitaire", false);
        $this->assertEquals("testunitaire", $result);
    }

    public function testSuffixFalse()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("test", "unitaire", false);
        $this->assertEquals("unitairetest", $result);
    }

    public function testSuffixTrue()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("test", "unitaire", true);
        $this->assertEquals("unitaireTest", $result);
    }  
}
<?php

require_once 'test2.php';

class EqualsTest extends PHPUnit_Framework_TestCase
{
    public function testDoubleInteger()
    {
        $this->assertEquals(4, doubleInteger(2));
        $this->assertEquals(8, doubleInteger(4));
        $this->assertEquals(-20, doubleInteger(-10));
        $this->assertEquals(0, doubleInteger(0));
        $this->assertEquals(200, doubleInteger(100));
    }

    public function testIsNumberEven()
    {
        $this->assertEquals(true, isNumberEven(2));
        $this->assertEquals(false, isNumberEven(3));
        $this->assertEquals(true, isNumberEven(0));
        $this->assertEquals(true, isNumberEven(-2));
        $this->assertEquals(true, isNumberEven(intval(rand()*1000000)*2));
    }

    public function testGetFileExtension()
    {
        $this->assertEquals('torrent', getFileExtension('perfectlylegal.torrent'));
        $this->assertEquals('txt', getFileExtension('spaces are fine in file names.txt'));
        $this->assertEquals(false, getFileExtension('this does not have one'));
        $this->assertEquals('htaccess', getFileExtension('.htaccess'));
        $this->assertEquals('exe', getFileExtension('some.file.with.dots.exe'));
    }

    public function testLongestString()
    {
        $this->assertEquals('abc', longestString(array('a', 'ab', 'abc')));
        $this->assertEquals('tiny', longestString(array('big',array(0,1,2,3,4),'tiny')));
        $this->assertEquals('lol', longestString(array(true, false, 'lol')));
        $this->assertEquals('x', longestString(array(new stdClass(), 'x')));
    }

    public function testArraySum()
    {
        $this->assertEquals(15, arraySum(array(array(1, 2, 3), 4, 5)));
        $this->assertEquals(15, arraySum(array(1, 2, 3, 4, 5)));
        $this->assertEquals(12, arraySum(array(1, 2, '3', 4, 5)));
        $this->assertEquals(12, arraySum(array(1, 2, 'lol', 4, 5)));
        $this->assertEquals(14, arraySum(array(new stdClass(), 2, 3, 4, 5)));
        $this->assertEquals(6, arraySum(array(1, array(array(array(array(array(array(array(array(array(array(array(array(array(array(array(array(5)))))))))))))))))));
    }
}
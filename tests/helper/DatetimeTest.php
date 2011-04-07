<?php
namespace aura\view\helper;

/**
 * Test class for Datetime.
 * Generated by PHPUnit on 2011-04-02 at 08:28:35.
 */
class DatetimeTest extends \PHPUnit_Framework_TestCase
{
    public function test__invoke()
    {
        $datetime = new Datetime(array('special' => 'Ymd'));
        $spec = 'March 21, 2004, 11:45pm';
        
        // default format
        $expect = '2004-03-21 23:45:00';
        $actual = $datetime($spec);
        $this->assertSame($expect, $actual);
        
        // preset format
        $expect = '23:45:00';
        $actual = $datetime($spec, 'time');
        $this->assertSame($expect, $actual);
        
        // constructor-provided format
        $expect = '20040321';
        $actual = $datetime($spec, 'special');
        $this->assertSame($expect, $actual);
        
        $actual = $datetime($spec, 'd');
        $expect = '21';
        $this->assertSame($expect, $actual);
    }
}

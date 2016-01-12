<?php
require 'date_formatter.php';

class DateFormatterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateFormatterData
     */
    public function test_date_formatter($input, $expected)
    {
        $this->assertSame($expected, date_formatter($input));
    }

    public function dateFormatterData()
    {
        return [
            ['2016-01-12', 'Tuesday, January 12th 2016'],
            ['2-2-2', 'Saturday, February 2nd 2002'],
            ['1776-7-3', 'Wednesday, July 3rd 1776'],
            ['2012-12-31', 'Monday, December 31st 2012'],
            ['2000-31-12', ''],
            ['2016-01', ''],
            ['1-3-2016', ''],
            ['2015-02-29', ''],
            ['', ''],
            ['ab-5-3', ''],
            ['2016a-3b-4c', ''],
            ['12-12-12', 'Wednesday, December 12th 2012']
        ];
    }
}

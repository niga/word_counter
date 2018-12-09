<?php

use PHPUnit\Framework\TestCase;

/**
 * User: Vyacheslav Rasskazov
 * Date: 2018-12-09
 * Time: 15:38
 */

class TextEnTest extends TestCase
{
    private $text;

    protected function setUp()
    {
        parent::setUp();

        $this->text = 'A year ago something terrible happened in London’s Oxford Circus.

It was just after peak hour on Friday, November 24, 2017, and hundreds of thousands of people were in the city center to take advantage of the Black Friday sales. The problem started underground, and news passed quickly through the masses, sweeping up through the subway tunnels and into the streets. Alarm turned into panic, and panic became fear and eventually outright terror, crackling like wildfire through the crowded streets.

Within minutes, thousands of shoppers were stampeding, dropping their bags, dialing loved ones, and ducking low behind hastily barricaded department stores. Emergency services leapt into action, throwing up fencing and evicting crowds from nearby streets. The London Fire Brigade was called, while social media filled with rumors of gunshots and videos of screaming crowds fleeing the station entrance.';
    }

    public function testExplodeText()
    {
        $array = explodeText($this->text);

        $this->assertTrue(is_array($array));
    }

    public function testCountValues()
    {
        $array = countValues(explodeText($this->text));

        $this->assertTrue(is_array($array));
    }

    public function testSortArray()
    {
        $array = sortArray(countValues(explodeText($this->text)));

        $this->assertTrue(is_array($array));
    }

    public function testSliceArray()
    {
        $array = sliceArray(sortArray(countValues(explodeText($this->text))));

        $expected = [
            'and' => 8,
            'the' => 7,
            'of' => 6,
            'into' => 3,
            'through' => 3,
        ];

        $this->assertEquals($expected, $array);
    }
}


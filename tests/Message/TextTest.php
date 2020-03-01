<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function test_return_an_array()
    {
        $actual = (new Text(1))->message('Hi');
        $expected = [
            'recipient' => [
                'id' => 1
            ],
            'message' => [
                'text' => 'Hi',
                'metadata' => 'DEVELOPER_DEFINED_METADA'
            ]
        ];

        $this->assertEquals($actual, $expected);
    }
}

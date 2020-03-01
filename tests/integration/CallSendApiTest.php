<?php

namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    public function test_make_request()
    {
        /**
         * @expectedExcpetion \GuzzleHttp\Exception\ClientException
         */
        $message = (new Text(1))->message('Hiii');
        (new allSendApiTest('46464'))->make($message);
    }

}

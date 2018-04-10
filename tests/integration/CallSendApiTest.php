<?php

namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('Oiii');
        (new CallSendApi('23hg4g'))->make($message);
    }
}
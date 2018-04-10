<?php

namespace CodeBot\Message;

class Video implements Message
{
    private $recipentId;

    public function __construct(string $recipientId)
    {
        $this->recipinetId = $recipientId;
    }

    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];

    }

}
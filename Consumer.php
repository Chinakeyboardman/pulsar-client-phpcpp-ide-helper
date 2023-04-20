<?php

namespace Pulsar;


class Consumer
{
    public const ConsumerExclusive = 0;
    public const ConsumerShared    = 1;
    public const ConsumerFailover  = 2;
    public const ConsumerKeyShared = 3;

    /**
     * @return Message
     */
    public function receive()
    {
    }

    /**
     * @param $message Message
     * @return bool
     */
    public function acknowledge(Message $message)
    {
    }
}
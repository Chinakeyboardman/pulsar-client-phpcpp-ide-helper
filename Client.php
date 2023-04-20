<?php

namespace Pulsar;

class Client
{
    public function __construct($serviceUrl, ?ClientConfiguration $configuration = null)
    {
    }

    /**
     * @param $topic
     * @return Producer
     */
    public function createProducer($topic)
    {
    }

    /**
     * @param $topic
     * @param $consumerName
     * @param ...$consumerConf
     * @return Consumer
     */
    public function subscribe($topic, $consumerName, ...$consumerConf)
    {
    }
}

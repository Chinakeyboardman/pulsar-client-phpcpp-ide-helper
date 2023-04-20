<?php

namespace Pulsar;


class MessageBuilder
{
    /**
     * @param $content string
     * @return  MessageBuilder
     */
    public function setContent(string $content)
    {
    }

    /**
     * @param $name  string
     * @param $value string
     * @return  MessageBuilder
     */
    public function setProperty(string $name, string $value)
    {
    }

    /**
     * @param $properties array
     * @return  MessageBuilder
     */
    public function setProperties(array $properties)
    {
    }

    /**
     * @param $partitionKey string
     * @return  MessageBuilder
     */
    public function setPartiionKey(string $partitionKey)
    {
    }

    /**
     * @param $orderingKey string
     * @return  MessageBuilder
     */
    public function setOrderingKey(string $orderingKey)
    {
    }

    /**
     * @param $delay int milliseconds
     * @return  MessageBuilder
     */
    public function setDeliverAfter(int $delay)
    {
    }

    /**
     * @param  $deliveryTimestamp int
     * @return  MessageBuilder
     */
    public function setDeliverAt(int $deliveryTimestamp)
    {
    }

    /**
     * @param  $eventTimestamp int
     * @return  MessageBuilder
     */
    public function setEventTimestamp(int $eventTimestamp)
    {
    }

    /**
     * @param  sequenceId int
     * @return  MessageBuilder
     */
    public function sequenceId(int $sequenceId)
    {
    }

    /**
     * @param $flag bool
     * @return  MessageBuilder
     */
    public function disableReplication(bool $flag)
    {
    }

    /**
     * @return  Message
     */
    public function build()
    {
    }
}
<?php

namespace Pulsar;


class ConsumerConfiguration
{
    /**
     * @param $consumerType int
     *
     *  ConsumerExclusive
     *
     *    同时只能有一个同主题同名消费者
     *
     *  ConsumerShared
     *
     *    多个消费者将能够使用相同的名称和消息。 将根据连接的消费者之间的循环轮换进行调度
     *
     *  ConsumerFailover
     *
     *    只有一个消费者在订阅中处于活动状态； 订阅可以连接 N 个消费者，如果当前主节点变为非活动状态，其中一个将被提升为主节点
     *
     *  ConsumerKeyShared
     *
     *    多个消费者将能够使用相同的订阅，并且所有具有相同密钥的消息将只发送给一个消费者
     *
     *
     * @return ConsumerConfiguration
     */
    public function setConsumerType(int $consumerType)
    {

    }
}
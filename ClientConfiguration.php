<?php

declare(strict_types=1);

namespace Pulsar;

class ClientConfiguration
{
    public const LOGGER_LEVEL_DEBUG = 0;
    public const LOGGER_LEVEL_INFO = 1;
    public const LOGGER_LEVEL_WARN = 2;
    public const LOGGER_LEVEL_ERROR = 3;

    /**
     * Configure whether to use the TLS encryption on the connections.
     *
     * The default value is false.
     *
     * @param bool $useTls
     */
    public function setUseTls(bool $flag): void
    {
    }

    /**
     * Set the path to the trusted TLS certificate file.
     *
     * @param string $tlsTrustCertsFilePath
     */
    public function setTlsTrustCertsFilePath(string $tlsTrustCertsFilePath): void
    {
    }

    /**
     * Configure whether the Pulsar client accepts untrusted TLS certificates from brokers.
     *
     * The default value is false.
     *
     * @param bool $allowInsecure
     */
    public function setTlsAllowInsecureConnection(bool $allowInsecure): void
    {
    }

    /**
     * Set the authentication method to be used with the broker
     * 
     * @param string $certFilePath
     * @param string $keyFilePath
     */
    public function setAuth(string $certFilePath, string $keyFilePath): void
    {
    }

    /**
     * Set the number of IO threads to be used by the Pulsar client. Default is 1
     * thread.
     *
     * @param int $threads number of threads
     */
    public function setIoThreads(int $threads): void
    {
    }

    /**
     * Set timeout on client operations (subscribe, create producer, close, unsubscribe)
     * Default is 30 seconds.
     *
     * @param int $timeout the timeout after which the operation will be considered as failed
     */
    public function setOperationTimeoutSeconds(int $timeout): void
    {
    }

    /**
     * Set the number of threads to be used by the Pulsar client when delivering messages
     * through message listener. Default is 1 thread per Pulsar client.
     *
     * If using more than 1 thread, messages for distinct MessageListener will be
     * delivered in different threads, however a single MessageListener will always
     * be assigned to the same thread.
     *
     * @param int $threads number of threads
     */
    public function setMessageListenerThreads(int $threads): void
    {
    }

    /**
     * Number of concurrent lookup-requests allowed on each broker-connection to prevent overload on broker.
     * <i>(default: 50000)</i> It should be configured with higher value only in case of it requires to
     * produce/subscribe on thousands of topic using created {@link PulsarClient}
     *
     * @param int $concurrentLookupRequest
     */
    public function setConcurrentLookupRequest(int $concurrentLookupRequest): void
    {
    }


    /**
     * Initialize stats interval in seconds. Stats are printed and reset after every `statsIntervalInSeconds`.
     *
     * Default: 600
     *
     * Set to 0 means disabling stats collection.
     */
    public function setStatsIntervalInSeconds(int $interval): void
    {
    }

    /**
     * Set partitions update interval in seconds.
     * If a partitioned topic is produced or subscribed and `intervalInSeconds` is not 0, every
     * `intervalInSeconds` seconds the partition number will be retrieved by sending lookup requests. If
     * partition number has been increased, more producer/consumer of increased partitions will be created.
     * Default is 60 seconds.
     *
     * @param int $interval the seconds between two lookup request for partitioned topic's metadata
     */
    public function setPartitionsUpdateInterval(int $interval): void
    {
    }

    /**
     * Set the duration of time to wait for a connection to a broker to be established. If the duration passes
     * without a response from the broker, the connection attempt is dropped.
     *
     * Default: 10000
     *
     * @param int $timeoutMs the duration in milliseconds
     */
    public function setConnectionTimeout(int $timeoutMs): void
    {
    }

    /**
     * A logger factory that is appending logs to a single file.
     *
     * The log format is "yyyy-MM-dd HH:mm:ss,SSS Z <level> <thread-id> <file>:<line> | <msg>", like
     * ```
     * 2021-03-24 17:35:46,571 +0800 INFO  [0x10a951e00] ConnectionPool:85 | Created connection for ...
     * ```
     *
     * @param string $filePath
     * @param int $level
     */
    public function setFileLogger(string $filePath, int $level = self::LOGGER_LEVEL_INFO): void
    {
    }
}
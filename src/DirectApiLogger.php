<?php

namespace directapi;

use directapi\components\interfaces\IQueryLogger;
use Psr\Log\LoggerInterface;

class DirectApiLogger
{
    /**
     * @var IQueryLogger|null
     */
    private $queryLogger;

    /**
     * @var null|LoggerInterface
     */
    private $logger;

    public function __construct(?IQueryLogger $queryLogger = null, ?LoggerInterface $logger = null)
    {
        $this->queryLogger = $queryLogger;
        $this->logger = $logger;
    }

    public function info(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->info($message, $context);
        }
    }

    public function error(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->error($message, $context);
        }
    }

    public function debug(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->debug($message, $context);
        }
    }

    public function warning(string $message, array $context = []): void
    {
        if ($this->logger) {
            $this->logger->warning($message, $context);
        }
    }

    public function logRequest(DirectApiRequest $request, DirectApiResponse $response): void
    {
        if ($this->queryLogger) {
            $this->queryLogger->logRequest($request, $response);
        }
    }
}

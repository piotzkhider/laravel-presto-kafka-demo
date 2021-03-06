<?php
declare(strict_types=1);

namespace App\DataAccess;

/**
 * Class AnalysisMapper
 */
class AnalysisMapper
{
    /** @var string */
    private $_key;

    /** @var string */
    private $_value;

    /** @var int */
    private $test_id;

    /** @var string */
    private $test_name;

    /** @var string */
    private $created_at;

    /** @var string */
    private $uri;

    /** @var string */
    private $uuid;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->_key;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->_value;
    }

    /**
     * @return int
     */
    public function getTestId(): int
    {
        return $this->test_id;
    }

    /**
     * @return string
     */
    public function getTestName(): string
    {
        return $this->test_name;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            '_key' => $this->_key,
            '_value' => $this->_value,
            'test_id' => $this->test_id,
            'test_name' => $this->test_name,
            'created_at' => $this->created_at,
            'uri' => $this->uri,
            'uuid' => $this->uuid,
        ];
    }
}

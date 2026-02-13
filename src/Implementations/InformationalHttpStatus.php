<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class InformationalHttpStatus extends AbstractHttpStatus
{

    const TYPE_INFORMATIONAL = '1XX';
    private function __construct(int $code, string $name, string $definition)
    {
        parent::__construct($code, self::TYPE_INFORMATIONAL, $name, $definition);
    }

    public static function Continue(): InformationalHttpStatus
    {
        return new self(100, __FUNCTION__, 'The server has received the request headers and the client should proceed to send the request body');
    }
    public static function SwitchingProtocols(): InformationalHttpStatus
    {
        return new self(101, __FUNCTION__, 'The requester has asked the server to switch protocols and the server has agreed to do so.');
    }
    public static function Processing(): InformationalHttpStatus
    {
        return new self(102, __FUNCTION__, 'A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the request.');
    }
    public static function EarlyHints(): InformationalHttpStatus
    {
        return new self(103, __FUNCTION__, 'Used to return some response headers before final HTTP message.');
    }
}
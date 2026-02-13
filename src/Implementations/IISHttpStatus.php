<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

/** Internet Information Services : IIS */
class IISHttpStatus extends AbstractHttpStatus
{
    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }
    public static function LoginTimeOut(): IISHttpStatus
    {
        return new self(440, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'The client\'s session has expired and must log in again.');
    }
    public static function RetryWith(): IISHttpStatus
    {
        return new self(449, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'The server cannot honour the request because the user has not provided the required information.');
    }
    public static function Redirect(): IISHttpStatus
    {
        return new self(451, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Used in Exchange ActiveSync when either a more efficient server is available or the server cannot access the users\' mailbox. The client is expected to re-run the HTTP AutoDiscover operation to find a more appropriate server.');
    }
}
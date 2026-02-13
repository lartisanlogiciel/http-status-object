<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class ServerErrorsHttpStatus extends AbstractHttpStatus
{

    const TYPE_SERVER_ERRORS = '5XX';
    private function __construct(int $code, string $name, string $definition)
    {
        parent::__construct($code, self::TYPE_SERVER_ERRORS, $name, $definition);
    }

    public static function InternalServerError(): ServerErrorsHttpStatus
    {
        return new self(500, __FUNCTION__, 'A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.');
    }
    public static function NotImplemented(): ServerErrorsHttpStatus
    {
        return new self(501, __FUNCTION__, 'The server either does not recognize the request method, or it lacks the ability to fulfil the request. Usually this implies future availability.');
    }
    public static function BadGateway(): ServerErrorsHttpStatus
    {
        return new self(502, __FUNCTION__, 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.');
    }
    public static function ServiceUnavailable(): ServerErrorsHttpStatus
    {
        return new self(503, __FUNCTION__, 'The server cannot handle the request (because it is overloaded or down for maintenance). Generally, this is a temporary state.');
    }
    public static function GatewayTimeout(): ServerErrorsHttpStatus
    {
        return new self(504, __FUNCTION__, 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.');
    }
    public static function HTTPVersionNotSupported(): ServerErrorsHttpStatus
    {
        return new self(505, __FUNCTION__, 'The server does not support the HTTP version used in the request.');
    }
    public static function VariantAlsoNegotiates(): ServerErrorsHttpStatus
    {
        return new self(506, __FUNCTION__, 'Transparent content negotiation for the request results in a circular reference.');
    }
    public static function InsufficientStorage(): ServerErrorsHttpStatus
    {
        return new self(507, __FUNCTION__, 'The server is unable to store the representation needed to complete the request.');
    }
    public static function LoopDetected(): ServerErrorsHttpStatus
    {
        return new self(508, __FUNCTION__, 'The server detected an infinite loop while processing the request.');
    }
    public static function NotExtended(): ServerErrorsHttpStatus
    {
        return new self(510, __FUNCTION__, 'Further extensions to the request are required for the server to fulfil it.');
    }
    public static function NetworkAuthenticationRequired(): ServerErrorsHttpStatus
    {
        return new self(511, __FUNCTION__, 'The client needs to authenticate to gain network access.');
    }
}
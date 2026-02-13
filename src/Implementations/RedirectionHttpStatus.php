<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class RedirectionHttpStatus extends AbstractHttpStatus
{

    const TYPE_REDIRECTION = '3XX';
    private function __construct(int $code, string $name, string $definition)
    {
        parent::__construct($code, self::TYPE_REDIRECTION, $name, $definition);
    }

    public static function MultipleChoices(): RedirectionHttpStatus
    {
        return new self(300, __FUNCTION__, 'Indicates multiple options for the resource from which the client may choose');
    }
    public static function MovedPermanently(): RedirectionHttpStatus
    {
        return new self(301, __FUNCTION__, 'This and all future requests should be directed to the given URI.');
    }
    public static function Found(): RedirectionHttpStatus
    {
        return new self(302, __FUNCTION__, '(Previously "Moved temporarily") Tells the client to look at (browse to) another URL');
    }
    public static function SeeOther(): RedirectionHttpStatus
    {
        return new self(303, __FUNCTION__, 'The response to the request can be found under another URI using the GET method.');
    }
    public static function NotModified(): RedirectionHttpStatus
    {
        return new self(304, __FUNCTION__, 'Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match.');
    }
    public static function UseProxy(): RedirectionHttpStatus
    {
        return new self(305, __FUNCTION__, 'The requested resource is available only through a proxy, the address for which is provided in the response.');
    }
    public static function SwitchProxy(): RedirectionHttpStatus
    {
        return new self(306, __FUNCTION__, 'No longer used. Originally meant "Subsequent requests should use the specified proxy."');
    }
    public static function TemporaryRedirect(): RedirectionHttpStatus
    {
        return new self(307, __FUNCTION__, 'In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For example, a POST request should be repeated using another POST request.');
    }
    public static function PermanentRedirect(): RedirectionHttpStatus
    {
        return new self(308, __FUNCTION__, 'This and all future requests should be directed to the given URI. 308 parallels the behavior of 301, but does not allow the HTTP method to change.');
    }
}
<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class ClientErrorsHttpStatus extends AbstractHttpStatus
{

    const TYPE_CLIENT_ERRORS = '4XX';
    private function __construct(int $code, string $name, string $definition)
    {
        parent::__construct($code, self::TYPE_CLIENT_ERRORS, $name, $definition);
    }

    public static function BadRequest(): ClientErrorsHttpStatus
    {
        return new self(400, __FUNCTION__, 'The server cannot or will not process the request due to an apparent client error.');
    }
    public static function Unauthorized(): ClientErrorsHttpStatus
    {
        return new self(401, __FUNCTION__, 'Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided.');
    }
    public static function PaymentRequired(): ClientErrorsHttpStatus
    {
        return new self(402, __FUNCTION__, 'Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme.');
    }
    public static function Forbidden(): ClientErrorsHttpStatus
    {
        return new self(403, __FUNCTION__, 'The request contained valid data and was understood by the server, but the server is refusing action.');
    }
    public static function NotFound(): ClientErrorsHttpStatus
    {
        return new self(404, __FUNCTION__, 'The requested resource could not be found but may be available in the future');
    }
    public static function MethodNotAllowed(): ClientErrorsHttpStatus
    {
        return new self(405, __FUNCTION__, 'A request method is not supported for the requested resource');
    }
    public static function NotAcceptable(): ClientErrorsHttpStatus
    {
        return new self(406, __FUNCTION__, 'The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request');
    }
    public static function ProxyAuthenticationRequired(): ClientErrorsHttpStatus
    {
        return new self(407, __FUNCTION__, 'The client must first authenticate itself with the proxy.');
    }
    public static function RequestTimeout(): ClientErrorsHttpStatus
    {
        return new self(408, __FUNCTION__, 'The server timed out waiting for the request');
    }
    public static function Conflict(): ClientErrorsHttpStatus
    {
        return new self(409, __FUNCTION__, 'Indicates that the request could not be processed because of conflict in the current state of the resource, such as an edit conflict between multiple simultaneous updates.');
    }
    public static function Gone(): ClientErrorsHttpStatus
    {
        return new self(410, __FUNCTION__, 'Indicates that the resource requested was previously in use but is no longer available and will not be available again.');
    }
    public static function LengthRequired(): ClientErrorsHttpStatus
    {
        return new self(411, __FUNCTION__, 'The request did not specify the length of its content, which is required by the requested resource.');
    }
    public static function PreconditionFailed(): ClientErrorsHttpStatus
    {
        return new self(412, __FUNCTION__, 'The server does not meet one of the preconditions that the requester put on the request header fields.');
    }
    public static function PayloadTooLarge(): ClientErrorsHttpStatus
    {
        return new self(413, __FUNCTION__, 'The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large"');
    }
    public static function RequestURITooLong(): ClientErrorsHttpStatus
    {
        return new self(414, __FUNCTION__, 'The URI provided was too long for the server to process');
    }
    public static function UnsupportedMediaType(): ClientErrorsHttpStatus
    {
        return new self(415, __FUNCTION__, 'The request entity has a media type which the server or resource does not support');
    }
    public static function RangeException(): ClientErrorsHttpStatus
    {
        return new self(416, __FUNCTION__, 'The client has asked for a portion of the file (byte serving), but the server cannot supply that portion');
    }
    public static function ExpectationFailed(): ClientErrorsHttpStatus
    {
        return new self(417, __FUNCTION__, 'The server cannot meet the requirements of the Expect request-header field.');
    }
    public static function ImaTeaPot(): ClientErrorsHttpStatus
    {
        return new self(418, __FUNCTION__, 'This code was defined in 1998 as one of the traditional IETF April Fools\' jokes. Sometimes, this status code is also used as a response to a blocked request, instead of the more appropriate 403 Forbidden.');
    }
    public static function MisdirectedRequest(): ClientErrorsHttpStatus
    {
        return new self(421, __FUNCTION__, 'The request was directed at a server that is not able to produce a response.');
    }
    public static function UnprocessableContent(): ClientErrorsHttpStatus
    {
        return new self(422, __FUNCTION__, 'The request was well-formed (i.e., syntactically correct) but could not be processed');
    }
    public static function Locked(): ClientErrorsHttpStatus
    {
        return new self(423, __FUNCTION__, 'The resource that is being accessed is locked');
    }
    public static function FailedDependency(): ClientErrorsHttpStatus
    {
        return new self(424, __FUNCTION__, 'The request failed because it depended on another request and that request failed');
    }
    public static function TooEarly(): ClientErrorsHttpStatus
    {
        return new self(425, __FUNCTION__, 'Indicates that the server is unwilling to risk processing a request that might be replayed');
    }
    public static function UpgradeRequired(): ClientErrorsHttpStatus
    {
        return new self(427, __FUNCTION__, 'The client should switch to a different protocol such as TLS/1.3');
    }
    public static function PreconditionRequired(): ClientErrorsHttpStatus
    {
        return new self(428, __FUNCTION__, 'The origin server requires the request to be conditional. Intended to prevent the \'lost update\' problem, where a client GETs a resource\'s state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict');
    }
    public static function TooManyRequests(): ClientErrorsHttpStatus
    {
        return new self(429, __FUNCTION__, 'The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes');
    }
    public static function RequestHeaderFieldsTooLarge(): ClientErrorsHttpStatus
    {
        return new self(431, __FUNCTION__, 'The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.');
    }
    public static function UnavailableForLegalReasons(): ClientErrorsHttpStatus
    {
        return new self(451, __FUNCTION__, 'A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource');
    }
}
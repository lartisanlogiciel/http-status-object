<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class NginxHttpStatus extends AbstractHttpStatus
{
    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }
    public static function NoResponse(): NginxHttpStatus
    {
        return new self(444, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Used internally to instruct the server to return no information to the client and close the connection immediately.');
    }
    public static function RequestHeaderTooLarge(): NginxHttpStatus
    {
        return new self(494, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Client sent too large request or too long header line.');
    }
    public static function SslCertificateError(): NginxHttpStatus
    {
        return new self(495, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'An expansion of the 400 Bad Request response code, used when the client has provided an invalid client certificate.');
    }
    public static function SslCertificateRequired(): NginxHttpStatus
    {
        return new self(496, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'An expansion of the 400 Bad Request response code, used when a client certificate is required but not provided.');
    }
    public static function HttpRequestSentToHttpsPort(): NginxHttpStatus
    {
        return new self(497, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'An expansion of the 400 Bad Request response code, used when the client has made a HTTP request to a port listening for HTTPS requests.');
    }
    public static function ClientClosedRequest(): NginxHttpStatus
    {
        return new self(499, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Used when the client has closed the request before the server could send a response.');
    }
}
<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

/** Internet Information Services : IIS */
class CloudflareHttpStatus extends AbstractHttpStatus
{
    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }
    public static function WebServerReturnedAnUnknownError(): CloudflareHttpStatus
    {
        return new self(520, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'The origin server returned an empty, unknown, or unexpected response to Cloudflare.');
    }
    public static function WebServerIsDown(): CloudflareHttpStatus
    {
        return new self(521, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'The origin server refused connections from Cloudflare. Security solutions at the origin may be blocking legitimate connections from certain Cloudflare IP addresses.');
    }
    public static function ConnectionTimedOut(): CloudflareHttpStatus
    {
        return new self(522, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Cloudflare timed out contacting the origin server.');
    }
    public static function OriginIsUnreachable(): CloudflareHttpStatus
    {
        return new self(523, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Cloudflare could not reach the origin server; for example, if the DNS records for the origin server are incorrect or missing.');
    }
    public static function TimeoutOccurred(): CloudflareHttpStatus
    {
        return new self(524, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Cloudflare was able to complete a TCP connection to the origin server, but did not receive a timely HTTP response.');
    }
    public static function SslHandshakeFailed(): CloudflareHttpStatus
    {
        return new self(525, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Cloudflare could not negotiate a SSL/TLS handshake with the origin server.');
    }
    public static function InvalidSslCertificate(): CloudflareHttpStatus
    {
        return new self(526, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Cloudflare could not validate the SSL certificate on the origin web server. Also used by Cloud Foundry\'s gorouter.');
    }
    public static function RailgunError(): CloudflareHttpStatus
    {
        return new self(527, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, '(obsolete) Indicated an interrupted connection between Cloudflare and the origin server\'s Railgun server. This error is obsolete as Cloudflare has deprecated Railgun');
    }
    public static function Error530(): CloudflareHttpStatus
    {
        return new self(530, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Returned along with a 1xxx error.');
    }
}
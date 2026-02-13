<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class UnofficialHttpStatus extends AbstractHttpStatus
{
    const TYPE_NONE = 'XXX';

    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }

    public static function ThisIsFine(): UnofficialHttpStatus
    {
        return new self(218, SuccessHttpStatus::TYPE_SUCCESS, __FUNCTION__, 'Used by Apache servers. A catch-all error condition allowing the passage of message bodies through the server when the ProxyErrorOverride setting is enabled. It is displayed in this situation instead of a 4xx or 5xx error message.');
    }
    public static function PageExpired(): UnofficialHttpStatus
    {
        return new self(419, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Used by the Laravel Framework when a CSRF Token is missing or expired.');
    }
    public static function MethodFailure(): UnofficialHttpStatus
    {
        return new self(420, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'A deprecated response status proposed during the development of WebDAV used by the Spring Framework when a method has failed.');
    }
    public static function EnhanceYourCalm(): UnofficialHttpStatus
    {
        return new self(420, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Returned by version 1 of the Twitter Search and Trends API when the client is being rate limited; versions 1.1 and later use the 429 Too Many Requests response code instead. The phrase "Enhance your calm" comes from the 1993 movie Demolition Man, and its association with this number is likely a reference to cannabis.');
    }
    public static function RequestHeaderFieldsTooLarge(): UnofficialHttpStatus
    {
        return new self(430, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'A deprecated response used by Shopify, instead of the 429 Too Many Requests response code, when too many URLs are requested within a certain time frame.');
    }
    public static function ShopifySecurityRejection(): UnofficialHttpStatus
    {
        return new self(430, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Used by Shopify to signal that the request was deemed malicious.');
    }
    public static function BlockedByWindowsParentalControls(): UnofficialHttpStatus
    {
        return new self(450, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'The Microsoft extension code indicated when Windows Parental Controls are turned on and are blocking access to the requested webpage.');
    }
    public static function InvalidToken(): UnofficialHttpStatus
    {
        return new self(498, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Returned by ArcGIS for Server. Code 498 indicates an expired or otherwise invalid token.');
    }
    public static function TokenRequired(): UnofficialHttpStatus
    {
        return new self(499, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Returned by ArcGIS for Server. Code 499 indicates that a token is required but was not submitted.');
    }
    public static function BandwidthLimitExceeded(): UnofficialHttpStatus
    {
        return new self(509, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, '(Apache Web Server/cPanel) The server has exceeded the bandwidth specified by the server administrator; this is often used by shared hosting providers to limit the bandwidth of customers.');
    }
    public static function SiteIsOverloaded(): UnofficialHttpStatus
    {
        return new self(529, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Used by Qualys in the SSLLabs server testing API to signal that the site can not process the request.');
    }
    public static function SiteIsFrozen(): UnofficialHttpStatus
    {
        return new self(530, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Used by the Pantheon Systems web platform to indicate a site that has been frozen due to inactivity.');
    }
    public static function OriginDnsError(): UnofficialHttpStatus
    {
        return new self(530, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Used by Shopify to indicate that Cloudflare can\'t resolve the requested DNS record.');
    }
    public static function TemporarilyDisabled(): UnofficialHttpStatus
    {
        return new self(540, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'Used by Shopify to indicate that the requested endpoint has been temporarily disabled.');
    }
    public static function NetworkReadTimeoutError(): UnofficialHttpStatus
    {
        return new self(598, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, '(Informal convention) Used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.');
    }
    public static function NetworkConnectTimeoutError(): UnofficialHttpStatus
    {
        return new self(599, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'An error used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy.');
    }
    public static function UnexpectedToken(): UnofficialHttpStatus
    {
        return new self(783, self::TYPE_NONE, __FUNCTION__, 'Used by Shopify to indicate that the request includes a JSON syntax error.');
    }
    public static function NonStandard(): UnofficialHttpStatus
    {
        return new self(999, self::TYPE_NONE, __FUNCTION__, 'Ued by LinkedIn and is related to being blocked/walled or unable to access their webpages without first signing in.');
    }
}
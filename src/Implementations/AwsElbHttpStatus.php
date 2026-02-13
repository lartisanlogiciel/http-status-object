<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

/** Amazon Web Services Elastic Load Balancing : Aws Elb */
class AwsElbHttpStatus extends AbstractHttpStatus
{
    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }
    public static function Error000(): AwsElbHttpStatus
    {
        return new self(000, UnofficialHttpStatus::TYPE_NONE, __FUNCTION__, 'Returned with an HTTP/2 GOAWAY frame if the compressed length of any of the headers exceeds 8K bytes or if more than 10K requests are served through one connection.');
    }
    public static function Error460(): AwsElbHttpStatus
    {
        return new self(460, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Client closed the connection with the load balancer before the idle timeout period elapsed. Typically, when client timeout is sooner than the Elastic Load Balancer\'s timeout.');
    }
    public static function Error463(): AwsElbHttpStatus
    {
        return new self(463, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'The load balancer received an X-Forwarded-For request header with more than 30 IP addresses.');
    }
    public static function Error464(): AwsElbHttpStatus
    {
        return new self(464, ClientErrorsHttpStatus::TYPE_CLIENT_ERRORS, __FUNCTION__, 'Incompatible protocol versions between Client and Origin server.');
    }
    public static function Unauthorized(): AwsElbHttpStatus
    {
        return new self(561, ServerErrorsHttpStatus::TYPE_SERVER_ERRORS, __FUNCTION__, 'An error around authentication returned by a server registered with a load balancer. A listener rule is configured to authenticate users, but the identity provider (IdP) returned an error code when authenticating the user.');
    }
}
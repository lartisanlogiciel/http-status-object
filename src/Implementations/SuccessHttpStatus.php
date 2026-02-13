<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class SuccessHttpStatus extends AbstractHttpStatus
{
    const TYPE_SUCCESS = '2XX';
    private function __construct(int $code, string $name, string $definition)
    {
        parent::__construct($code, self::TYPE_SUCCESS, $name, $definition);
    }

    public static function Ok(): SuccessHttpStatus
    {
        return new self(200, __FUNCTION__, 'Standard response for successful HTTP requests');
    }

    public static function Created(): SuccessHttpStatus
    {
        return new self(201, __FUNCTION__, 'The request has been fulfilled, resulting in the creation of a new resource');
    }
    public static function Accepted(): SuccessHttpStatus
    {
        return new self(202, __FUNCTION__, 'The request has been accepted for processing, but the processing has not been completed. The request might or might not be eventually acted upon, and may be disallowed when processing occurs.');
    }
    public static function NonAuthoritativeInformation(): SuccessHttpStatus
    {
        return new self(203, __FUNCTION__, 'The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin\'s response.');
    }
    public static function NoContent(): SuccessHttpStatus
    {
        return new self(204, __FUNCTION__, 'The server successfully processed the request, and is not returning any content.');
    }
    public static function ResetContent(): SuccessHttpStatus
    {
        return new self(205, __FUNCTION__, 'The server successfully processed the request, asks that the requester reset its document view, and is not returning any content.');
    }
    public static function PartialContent(): SuccessHttpStatus
    {
        return new self(206, __FUNCTION__, 'The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.');
    }
    public static function MultiStatus(): SuccessHttpStatus
    {
        return new self(207, __FUNCTION__, 'The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made');
    }
    public static function AlreadyReported(): SuccessHttpStatus
    {
        return new self(208, __FUNCTION__, 'The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again');
    }
    public static function IMUsed(): SuccessHttpStatus
    {
        return new self(226, __FUNCTION__, 'The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.');
    }
}
<?php

namespace HttpStatusObject\Implementations;

use HttpStatusObject\AbstractHttpStatus;

class CachingWarningHttpStatus extends AbstractHttpStatus
{
    protected function __construct(int $code, string $type, string $name, string $definition)
    {
        parent::__construct($code, $type, $name, $definition, false);
    }
    public static function ResponseIsStale(): CachingWarningHttpStatus
    {
        return new self(110, InformationalHttpStatus::TYPE_INFORMATIONAL, __FUNCTION__, 'The response provided by a cache is stale (the content\'s age exceeds a maximum age set by a Cache-Control header or heuristically chosen lifetime)');
    }
    public static function RevalidationFailed(): CachingWarningHttpStatus
    {
        return new self(111, InformationalHttpStatus::TYPE_INFORMATIONAL, __FUNCTION__, 'The response provided by a cache is stale (the content\'s age exceeds a maximum age set by a Cache-Control header or heuristically chosen lifetime)');
    }
    public static function DisconnectedOperation(): CachingWarningHttpStatus
    {
        return new self(112, InformationalHttpStatus::TYPE_INFORMATIONAL, __FUNCTION__, 'The cache is intentionally disconnected from the rest of the network.');
    }
    public static function HeuristicExpiration(): CachingWarningHttpStatus
    {
        return new self(113, InformationalHttpStatus::TYPE_INFORMATIONAL, __FUNCTION__, 'The cache heuristically chose a freshness lifetime greater than 24 hours and the response\'s age is greater than 24 hours.');
    }
    public static function MiscellaneousWarning(): CachingWarningHttpStatus
    {
        return new self(199, InformationalHttpStatus::TYPE_INFORMATIONAL, __FUNCTION__, 'Arbitrary, non-specific warning. The warning text may be logged or presented to the user.');
    }
    public static function TransformationApplied(): CachingWarningHttpStatus
    {
        return new self(214, SuccessHttpStatus::TYPE_SUCCESS, __FUNCTION__, 'Added by a proxy if it applies any transformation to the representation, such as changing the content encoding, media type or the like.');
    }
    public static function MiscellaneousPersistentWarning(): CachingWarningHttpStatus
    {
        return new self(299, SuccessHttpStatus::TYPE_SUCCESS, __FUNCTION__, 'Same as 199, but indicating a persistent warning.');
    }
}
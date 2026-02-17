<?php

namespace HttpStatusObject;

use HttpStatusObject\Implementations\AwsElbHttpStatus;
use HttpStatusObject\Implementations\CachingWarningHttpStatus;
use HttpStatusObject\Implementations\ClientErrorsHttpStatus;
use HttpStatusObject\Implementations\CloudflareHttpStatus;
use HttpStatusObject\Implementations\IISHttpStatus;
use HttpStatusObject\Implementations\InformationalHttpStatus;
use HttpStatusObject\Implementations\NginxHttpStatus;
use HttpStatusObject\Implementations\RedirectionHttpStatus;
use HttpStatusObject\Implementations\ServerErrorsHttpStatus;
use HttpStatusObject\Implementations\SuccessHttpStatus;
use HttpStatusObject\Implementations\UnofficialHttpStatus;

class HttpStatusCollection
{
    /**
     * @param int $code
     * @return AbstractHttpStatus[]
     */
    public static function GetByStatusCode(int $code): array
    {
        return array_values(
            array_filter(self::All(), function (AbstractHttpStatus $item) use ($code) {
                return $item->code === $code;
            })
        );
    }

    /**
     * @param int $code
     * @return AbstractHttpStatus|null
     */
    public static function GetFirstByStatusCode(int $code): ?AbstractHttpStatus
    {
        $statusCodeList = self::GetByStatusCode($code);
        return $statusCodeList[0] ?? null;
    }

    /**
     * @return AbstractHttpStatus[]
     */
    public static function All(): array
    {
        return [
            InformationalHttpStatus::Continue(),
            InformationalHttpStatus::SwitchingProtocols(),
            InformationalHttpStatus::Processing(),
            InformationalHttpStatus::EarlyHints(),
            SuccessHttpStatus::Ok(),
            SuccessHttpStatus::Created(),
            SuccessHttpStatus::Accepted(),
            SuccessHttpStatus::NonAuthoritativeInformation(),
            SuccessHttpStatus::NoContent(),
            SuccessHttpStatus::ResetContent(),
            SuccessHttpStatus::PartialContent(),
            SuccessHttpStatus::MultiStatus(),
            SuccessHttpStatus::AlreadyReported(),
            SuccessHttpStatus::IMUsed(),
            RedirectionHttpStatus::MultipleChoices(),
            RedirectionHttpStatus::MovedPermanently(),
            RedirectionHttpStatus::Found(),
            RedirectionHttpStatus::SeeOther(),
            RedirectionHttpStatus::NotModified(),
            RedirectionHttpStatus::UseProxy(),
            RedirectionHttpStatus::SwitchProxy(),
            RedirectionHttpStatus::TemporaryRedirect(),
            RedirectionHttpStatus::PermanentRedirect(),
            ClientErrorsHttpStatus::BadRequest(),
            ClientErrorsHttpStatus::Unauthorized(),
            ClientErrorsHttpStatus::PaymentRequired(),
            ClientErrorsHttpStatus::Forbidden(),
            ClientErrorsHttpStatus::NotFound(),
            ClientErrorsHttpStatus::MethodNotAllowed(),
            ClientErrorsHttpStatus::NotAcceptable(),
            ClientErrorsHttpStatus::ProxyAuthenticationRequired(),
            ClientErrorsHttpStatus::RequestTimeout(),
            ClientErrorsHttpStatus::Conflict(),
            ClientErrorsHttpStatus::Gone(),
            ClientErrorsHttpStatus::LengthRequired(),
            ClientErrorsHttpStatus::PreconditionFailed(),
            ClientErrorsHttpStatus::PayloadTooLarge(),
            ClientErrorsHttpStatus::RequestURITooLong(),
            ClientErrorsHttpStatus::UnsupportedMediaType(),
            ClientErrorsHttpStatus::RangeException(),
            ClientErrorsHttpStatus::ExpectationFailed(),
            ClientErrorsHttpStatus::ImaTeaPot(),
            ClientErrorsHttpStatus::MisdirectedRequest(),
            ClientErrorsHttpStatus::UnprocessableContent(),
            ClientErrorsHttpStatus::Locked(),
            ClientErrorsHttpStatus::FailedDependency(),
            ClientErrorsHttpStatus::TooEarly(),
            ClientErrorsHttpStatus::UpgradeRequired(),
            ClientErrorsHttpStatus::PreconditionRequired(),
            ClientErrorsHttpStatus::TooManyRequests(),
            ClientErrorsHttpStatus::RequestHeaderFieldsTooLarge(),
            ClientErrorsHttpStatus::UnavailableForLegalReasons(),
            ServerErrorsHttpStatus::InternalServerError(),
            ServerErrorsHttpStatus::NotImplemented(),
            ServerErrorsHttpStatus::BadGateway(),
            ServerErrorsHttpStatus::ServiceUnavailable(),
            ServerErrorsHttpStatus::GatewayTimeout(),
            ServerErrorsHttpStatus::HTTPVersionNotSupported(),
            ServerErrorsHttpStatus::VariantAlsoNegotiates(),
            ServerErrorsHttpStatus::InsufficientStorage(),
            ServerErrorsHttpStatus::LoopDetected(),
            ServerErrorsHttpStatus::NotExtended(),
            ServerErrorsHttpStatus::NetworkAuthenticationRequired(),
            UnofficialHttpStatus::ThisIsFine(),
            UnofficialHttpStatus::PageExpired(),
            UnofficialHttpStatus::MethodFailure(),
            UnofficialHttpStatus::EnhanceYourCalm(),
            UnofficialHttpStatus::RequestHeaderFieldsTooLarge(),
            UnofficialHttpStatus::ShopifySecurityRejection(),
            UnofficialHttpStatus::BlockedByWindowsParentalControls(),
            UnofficialHttpStatus::InvalidToken(),
            UnofficialHttpStatus::TokenRequired(),
            UnofficialHttpStatus::BandwidthLimitExceeded(),
            UnofficialHttpStatus::SiteIsOverloaded(),
            UnofficialHttpStatus::SiteIsFrozen(),
            UnofficialHttpStatus::OriginDnsError(),
            UnofficialHttpStatus::TemporarilyDisabled(),
            UnofficialHttpStatus::NetworkReadTimeoutError(),
            UnofficialHttpStatus::NetworkConnectTimeoutError(),
            UnofficialHttpStatus::UnexpectedToken(),
            UnofficialHttpStatus::NonStandard(),
            IISHttpStatus::LoginTimeOut(),
            IISHttpStatus::RetryWith(),
            IISHttpStatus::Redirect(),
            NginxHttpStatus::NoResponse(),
            NginxHttpStatus::RequestHeaderTooLarge(),
            NginxHttpStatus::SslCertificateError(),
            NginxHttpStatus::SslCertificateRequired(),
            NginxHttpStatus::HttpRequestSentToHttpsPort(),
            NginxHttpStatus::ClientClosedRequest(),
            CloudflareHttpStatus::WebServerReturnedAnUnknownError(),
            CloudflareHttpStatus::WebServerIsDown(),
            CloudflareHttpStatus::ConnectionTimedOut(),
            CloudflareHttpStatus::OriginIsUnreachable(),
            CloudflareHttpStatus::TimeoutOccurred(),
            CloudflareHttpStatus::SslHandshakeFailed(),
            CloudflareHttpStatus::InvalidSslCertificate(),
            CloudflareHttpStatus::RailgunError(),
            CloudflareHttpStatus::Error530(),
            AwsElbHttpStatus::Error000(),
            AwsElbHttpStatus::Error460(),
            AwsElbHttpStatus::Error463(),
            AwsElbHttpStatus::Error464(),
            AwsElbHttpStatus::Unauthorized(),
            CachingWarningHttpStatus::ResponseIsStale(),
            CachingWarningHttpStatus::RevalidationFailed(),
            CachingWarningHttpStatus::DisconnectedOperation(),
            CachingWarningHttpStatus::HeuristicExpiration(),
            CachingWarningHttpStatus::MiscellaneousWarning(),
            CachingWarningHttpStatus::TransformationApplied(),
            CachingWarningHttpStatus::MiscellaneousPersistentWarning(),
        ];
    }

}
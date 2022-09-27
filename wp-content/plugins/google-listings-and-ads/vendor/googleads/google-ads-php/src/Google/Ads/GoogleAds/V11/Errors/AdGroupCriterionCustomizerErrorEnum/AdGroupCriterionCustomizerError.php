<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/ad_group_criterion_customizer_error.proto

namespace Google\Ads\GoogleAds\V11\Errors\AdGroupCriterionCustomizerErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad group criterion customizer errors.
 *
 * Protobuf type <code>google.ads.googleads.v11.errors.AdGroupCriterionCustomizerErrorEnum.AdGroupCriterionCustomizerError</code>
 */
class AdGroupCriterionCustomizerError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Only keyword type criterion is allowed to link customizer attribute.
     *
     * Generated from protobuf enum <code>CRITERION_IS_NOT_KEYWORD = 2;</code>
     */
    const CRITERION_IS_NOT_KEYWORD = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CRITERION_IS_NOT_KEYWORD => 'CRITERION_IS_NOT_KEYWORD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdGroupCriterionCustomizerError::class, \Google\Ads\GoogleAds\V11\Errors\AdGroupCriterionCustomizerErrorEnum_AdGroupCriterionCustomizerError::class);


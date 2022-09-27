<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/asset_types.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configuration of how leads are delivered to the advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.LeadFormDeliveryMethod</code>
 */
class LeadFormDeliveryMethod extends \Google\Protobuf\Internal\Message
{
    protected $delivery_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V11\Common\WebhookDelivery $webhook
     *           Webhook method of delivery.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Webhook method of delivery.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.WebhookDelivery webhook = 1;</code>
     * @return \Google\Ads\GoogleAds\V11\Common\WebhookDelivery|null
     */
    public function getWebhook()
    {
        return $this->readOneof(1);
    }

    public function hasWebhook()
    {
        return $this->hasOneof(1);
    }

    /**
     * Webhook method of delivery.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.WebhookDelivery webhook = 1;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\WebhookDelivery $var
     * @return $this
     */
    public function setWebhook($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Common\WebhookDelivery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDetails()
    {
        return $this->whichOneof("delivery_details");
    }

}

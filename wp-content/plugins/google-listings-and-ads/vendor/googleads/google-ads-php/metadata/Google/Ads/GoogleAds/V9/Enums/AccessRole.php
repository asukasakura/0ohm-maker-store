<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/access_role.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class AccessRole
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v9/enums/access_role.protogoogle.ads.googleads.v9.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
!com.google.ads.googleads.v9.enumsBAccessRoleProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


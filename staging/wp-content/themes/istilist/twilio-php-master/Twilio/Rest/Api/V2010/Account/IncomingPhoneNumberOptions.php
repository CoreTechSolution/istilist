<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Options;
use Twilio\Values;

abstract class IncomingPhoneNumberOptions
{
    /**
     * @param string $accountSid The new owner of the phone number
     * @param string $apiVersion The Twilio REST API version to use
     * @param string $friendlyName A human readable description of this resource
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @param string $smsMethod HTTP method to use with sms url
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @param string $voiceMethod HTTP method used with the voice url
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @param string $emergencyStatus The emergency_status
     * @param string $emergencyAddressSid The emergency_address_sid
     * @param string $trunkSid Unique string to identify the trunk
     * @return UpdateIncomingPhoneNumberOptions Options builder
     */
    public static function update($accountSid = Values::NONE, $apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $emergencyStatus = Values::NONE, $emergencyAddressSid = Values::NONE, $trunkSid = Values::NONE)
    {
        return new UpdateIncomingPhoneNumberOptions($accountSid, $apiVersion, $friendlyName, $smsApplicationSid, $smsFallbackMethod, $smsFallbackUrl, $smsMethod, $smsUrl, $statusCallback, $statusCallbackMethod, $voiceApplicationSid, $voiceCallerIdLookup, $voiceFallbackMethod, $voiceFallbackUrl, $voiceMethod, $voiceUrl, $emergencyStatus, $emergencyAddressSid, $trunkSid);
    }

    /**
     * @param boolean $beta Include new phone numbers
     * @param string $friendlyName Filter by friendly name
     * @param string $phoneNumber Filter by incoming phone number
     * @return ReadIncomingPhoneNumberOptions Options builder
     */
    public static function read($beta = Values::NONE, $friendlyName = Values::NONE, $phoneNumber = Values::NONE)
    {
        return new ReadIncomingPhoneNumberOptions($beta, $friendlyName, $phoneNumber);
    }

    /**
     * @param string $phoneNumber The phone number
     * @param string $areaCode The desired area code for the new number
     * @param string $apiVersion The Twilio Rest API version to use
     * @param string $friendlyName A human readable description of this resource
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @param string $smsMethod HTTP method to use with sms url
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @param string $voiceMethod HTTP method used with the voice url
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @param string $emergencyStatus The emergency_status
     * @param string $emergencyAddressSid The emergency_address_sid
     * @param string $trunkSid Unique string to identify the trunk
     * @return CreateIncomingPhoneNumberOptions Options builder
     */
    public static function create($phoneNumber = Values::NONE, $areaCode = Values::NONE, $apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $emergencyStatus = Values::NONE, $emergencyAddressSid = Values::NONE, $trunkSid = Values::NONE)
    {
        return new CreateIncomingPhoneNumberOptions($phoneNumber, $areaCode, $apiVersion, $friendlyName, $smsApplicationSid, $smsFallbackMethod, $smsFallbackUrl, $smsMethod, $smsUrl, $statusCallback, $statusCallbackMethod, $voiceApplicationSid, $voiceCallerIdLookup, $voiceFallbackMethod, $voiceFallbackUrl, $voiceMethod, $voiceUrl, $emergencyStatus, $emergencyAddressSid, $trunkSid);
    }
}

class UpdateIncomingPhoneNumberOptions extends Options
{
    /**
     * @param string $accountSid The new owner of the phone number
     * @param string $apiVersion The Twilio REST API version to use
     * @param string $friendlyName A human readable description of this resource
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @param string $smsMethod HTTP method to use with sms url
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @param string $voiceMethod HTTP method used with the voice url
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @param string $emergencyStatus The emergency_status
     * @param string $emergencyAddressSid The emergency_address_sid
     * @param string $trunkSid Unique string to identify the trunk
     */
    public function __construct($accountSid = Values::NONE, $apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $emergencyStatus = Values::NONE, $emergencyAddressSid = Values::NONE, $trunkSid = Values::NONE)
    {
        $this->options['accountSid'] = $accountSid;
        $this->options['apiVersion'] = $apiVersion;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        $this->options['smsMethod'] = $smsMethod;
        $this->options['smsUrl'] = $smsUrl;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['emergencyStatus'] = $emergencyStatus;
        $this->options['emergencyAddressSid'] = $emergencyAddressSid;
        $this->options['trunkSid'] = $trunkSid;
    }

    /**
     * The unique id of the Account to which you wish to transfer this phnoe number
     *
     * @param string $accountSid The new owner of the phone number
     * @return $this Fluent Builder
     */
    public function setAccountSid($accountSid)
    {
        $this->options['accountSid'] = $accountSid;
        return $this;
    }

    /**
     * Calls to this phone number will start a new TwiML session with this API version.
     *
     * @param string $apiVersion The Twilio REST API version to use
     * @return $this Fluent Builder
     */
    public function setApiVersion($apiVersion)
    {
        $this->options['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
     * A human readable descriptive text for this resource, up to 64 characters long. By default, the `FriendlyName` is a nicely formatted version of the phone number.
     *
     * @param string $friendlyName A human readable description of this resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle SMSs sent to this number. If a `SmsApplicationSid` is present, Twilio will ignore all of the SMS urls above and use those set on the application.
     *
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @return $this Fluent Builder
     */
    public function setSmsApplicationSid($smsApplicationSid)
    {
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the above URL. Either `GET` or `POST`.
     *
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @return $this Fluent Builder
     */
    public function setSmsFallbackMethod($smsFallbackMethod)
    {
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        return $this;
    }

    /**
     * The URL that Twilio will request if an error occurs retrieving or executing the TwiML from `SmsUrl`.
     *
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @return $this Fluent Builder
     */
    public function setSmsFallbackUrl($smsFallbackUrl)
    {
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when making requests to the `SmsUrl`. Either `GET` or `POST`.
     *
     * @param string $smsMethod HTTP method to use with sms url
     * @return $this Fluent Builder
     */
    public function setSmsMethod($smsMethod)
    {
        $this->options['smsMethod'] = $smsMethod;
        return $this;
    }

    /**
     * The URL Twilio will request when receiving an incoming SMS message to this number.
     *
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @return $this Fluent Builder
     */
    public function setSmsUrl($smsUrl)
    {
        $this->options['smsUrl'] = $smsUrl;
        return $this;
    }

    /**
     * The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     *
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback)
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method Twilio will use to make requests to the `StatusCallback` URL. Either `GET` or `POST`.
     *
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod)
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle phone calls to this number. If a `VoiceApplicationSid` is present, Twilio will ignore all of the voice urls above and use those set on the application. Setting a `VoiceApplicationSid` will automatically delete your `TrunkSid` and vice versa.
     *
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @return $this Fluent Builder
     */
    public function setVoiceApplicationSid($voiceApplicationSid)
    {
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        return $this;
    }

    /**
     * Look up the caller's caller-ID name from the CNAM database ($0.01 per look up). Either `true` or `false`.
     *
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @return $this Fluent Builder
     */
    public function setVoiceCallerIdLookup($voiceCallerIdLookup)
    {
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the `VoiceFallbackUrl`. Either `GET` or `POST`.
     *
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackMethod($voiceFallbackMethod)
    {
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        return $this;
    }

    /**
     * The URL that Twilio will request if an error occurs retrieving or executing the TwiML requested by `Url`.
     *
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackUrl($voiceFallbackUrl)
    {
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the above `Url`. Either `GET` or `POST`.
     *
     * @param string $voiceMethod HTTP method used with the voice url
     * @return $this Fluent Builder
     */
    public function setVoiceMethod($voiceMethod)
    {
        $this->options['voiceMethod'] = $voiceMethod;
        return $this;
    }

    /**
     * The URL Twilio will request when this phone number receives a call. The VoiceURL will  no longer be used if a `VoiceApplicationSid` or a `TrunkSid` is set.
     *
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @return $this Fluent Builder
     */
    public function setVoiceUrl($voiceUrl)
    {
        $this->options['voiceUrl'] = $voiceUrl;
        return $this;
    }

    /**
     * The emergency_status
     *
     * @param string $emergencyStatus The emergency_status
     * @return $this Fluent Builder
     */
    public function setEmergencyStatus($emergencyStatus)
    {
        $this->options['emergencyStatus'] = $emergencyStatus;
        return $this;
    }

    /**
     * The emergency_address_sid
     *
     * @param string $emergencyAddressSid The emergency_address_sid
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressSid($emergencyAddressSid)
    {
        $this->options['emergencyAddressSid'] = $emergencyAddressSid;
        return $this;
    }

    /**
     * The 34 character sid of the Trunk Twilio should use to handle phone calls to this number. If a `TrunkSid` is present, Twilio will ignore all of the voice urls  and voice applications above and use those set on the Trunk. Setting a `TrunkSid` will automatically delete your `VoiceApplicationSid` and vice versa.
     *
     * @param string $trunkSid Unique string to identify the trunk
     * @return $this Fluent Builder
     */
    public function setTrunkSid($trunkSid)
    {
        $this->options['trunkSid'] = $trunkSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.UpdateIncomingPhoneNumberOptions ' . implode(' ', $options) . ']';
    }
}

class ReadIncomingPhoneNumberOptions extends Options
{
    /**
     * @param boolean $beta Include new phone numbers
     * @param string $friendlyName Filter by friendly name
     * @param string $phoneNumber Filter by incoming phone number
     */
    public function __construct($beta = Values::NONE, $friendlyName = Values::NONE, $phoneNumber = Values::NONE)
    {
        $this->options['beta'] = $beta;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['phoneNumber'] = $phoneNumber;
    }

    /**
     * Include phone numbers new to the Twilio platform
     *
     * @param boolean $beta Include new phone numbers
     * @return $this Fluent Builder
     */
    public function setBeta($beta)
    {
        $this->options['beta'] = $beta;
        return $this;
    }

    /**
     * Only show the incoming phone number resources with friendly names that exactly match this name
     *
     * @param string $friendlyName Filter by friendly name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Only show the incoming phone number resources that match this pattern
     *
     * @param string $phoneNumber Filter by incoming phone number
     * @return $this Fluent Builder
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadIncomingPhoneNumberOptions ' . implode(' ', $options) . ']';
    }
}

class CreateIncomingPhoneNumberOptions extends Options
{
    /**
     * @param string $phoneNumber The phone number
     * @param string $areaCode The desired area code for the new number
     * @param string $apiVersion The Twilio Rest API version to use
     * @param string $friendlyName A human readable description of this resource
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @param string $smsMethod HTTP method to use with sms url
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @param string $voiceMethod HTTP method used with the voice url
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @param string $emergencyStatus The emergency_status
     * @param string $emergencyAddressSid The emergency_address_sid
     * @param string $trunkSid Unique string to identify the trunk
     */
    public function __construct($phoneNumber = Values::NONE, $areaCode = Values::NONE, $apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $emergencyStatus = Values::NONE, $emergencyAddressSid = Values::NONE, $trunkSid = Values::NONE)
    {
        $this->options['phoneNumber'] = $phoneNumber;
        $this->options['areaCode'] = $areaCode;
        $this->options['apiVersion'] = $apiVersion;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        $this->options['smsMethod'] = $smsMethod;
        $this->options['smsUrl'] = $smsUrl;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['emergencyStatus'] = $emergencyStatus;
        $this->options['emergencyAddressSid'] = $emergencyAddressSid;
        $this->options['trunkSid'] = $trunkSid;
    }

    /**
     * The phone number to purchase. e.g., +16175551212 (E.164 format)
     *
     * @param string $phoneNumber The phone number
     * @return $this Fluent Builder
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * The desired area code for the new phone number. Any three digit US or Canada rea code is valid
     *
     * @param string $areaCode The desired area code for the new number
     * @return $this Fluent Builder
     */
    public function setAreaCode($areaCode)
    {
        $this->options['areaCode'] = $areaCode;
        return $this;
    }

    /**
     * Calls to this phone number will start a new TwiML session with this API version.
     *
     * @param string $apiVersion The Twilio Rest API version to use
     * @return $this Fluent Builder
     */
    public function setApiVersion($apiVersion)
    {
        $this->options['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
     * A human readable descriptive text for this resource, up to 64 characters long. By default, the `FriendlyName` is a nicely formatted version of the phone number.
     *
     * @param string $friendlyName A human readable description of this resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle SMSs sent to this number. If a `SmsApplicationSid` is present, Twilio will ignore all of the SMS urls above and use those set on the application.
     *
     * @param string $smsApplicationSid Unique string that identifies the
     *                                  application
     * @return $this Fluent Builder
     */
    public function setSmsApplicationSid($smsApplicationSid)
    {
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the above URL. Either `GET` or `POST`.
     *
     * @param string $smsFallbackMethod HTTP method used with sms fallback url
     * @return $this Fluent Builder
     */
    public function setSmsFallbackMethod($smsFallbackMethod)
    {
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        return $this;
    }

    /**
     * The URL that Twilio will request if an error occurs retrieving or executing the TwiML from `SmsUrl`.
     *
     * @param string $smsFallbackUrl URL Twilio will request if an error occurs in
     *                               executing TwiML
     * @return $this Fluent Builder
     */
    public function setSmsFallbackUrl($smsFallbackUrl)
    {
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when making requests to the `SmsUrl`. Either `GET` or `POST`.
     *
     * @param string $smsMethod HTTP method to use with sms url
     * @return $this Fluent Builder
     */
    public function setSmsMethod($smsMethod)
    {
        $this->options['smsMethod'] = $smsMethod;
        return $this;
    }

    /**
     * The URL Twilio will request when receiving an incoming SMS message to this number.
     *
     * @param string $smsUrl URL Twilio will request when receiving an SMS
     * @return $this Fluent Builder
     */
    public function setSmsUrl($smsUrl)
    {
        $this->options['smsUrl'] = $smsUrl;
        return $this;
    }

    /**
     * The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     *
     * @param string $statusCallback URL Twilio will use to pass status parameters
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback)
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method Twilio will use to make requests to the `StatusCallback` URL. Either `GET` or `POST`.
     *
     * @param string $statusCallbackMethod HTTP method twilio will use with status
     *                                     callback
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod)
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle phone calls to this number. If a `VoiceApplicationSid` is present, Twilio will ignore all of the voice urls above and use those set on the application. Setting a `VoiceApplicationSid` will automatically delete your `TrunkSid` and vice versa.
     *
     * @param string $voiceApplicationSid The unique sid of the application to
     *                                    handle this number
     * @return $this Fluent Builder
     */
    public function setVoiceApplicationSid($voiceApplicationSid)
    {
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        return $this;
    }

    /**
     * Look up the caller's caller-ID name from the CNAM database ($0.01 per look up). Either `true` or `false`.
     *
     * @param boolean $voiceCallerIdLookup Look up the caller's caller-ID
     * @return $this Fluent Builder
     */
    public function setVoiceCallerIdLookup($voiceCallerIdLookup)
    {
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the `VoiceFallbackUrl`. Either `GET` or `POST`.
     *
     * @param string $voiceFallbackMethod HTTP method used with fallback_url
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackMethod($voiceFallbackMethod)
    {
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        return $this;
    }

    /**
     * The URL that Twilio will request if an error occurs retrieving or executing the TwiML requested by `Url`.
     *
     * @param string $voiceFallbackUrl URL Twilio will request when an error occurs
     *                                 in TwiML
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackUrl($voiceFallbackUrl)
    {
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method Twilio will use when requesting the above `Url`. Either `GET` or `POST`.
     *
     * @param string $voiceMethod HTTP method used with the voice url
     * @return $this Fluent Builder
     */
    public function setVoiceMethod($voiceMethod)
    {
        $this->options['voiceMethod'] = $voiceMethod;
        return $this;
    }

    /**
     * The URL Twilio will request when this phone number receives a call. The VoiceURL will  no longer be used if a `VoiceApplicationSid` or a `TrunkSid` is set.
     *
     * @param string $voiceUrl URL Twilio will request when receiving a call
     * @return $this Fluent Builder
     */
    public function setVoiceUrl($voiceUrl)
    {
        $this->options['voiceUrl'] = $voiceUrl;
        return $this;
    }

    /**
     * The emergency_status
     *
     * @param string $emergencyStatus The emergency_status
     * @return $this Fluent Builder
     */
    public function setEmergencyStatus($emergencyStatus)
    {
        $this->options['emergencyStatus'] = $emergencyStatus;
        return $this;
    }

    /**
     * The emergency_address_sid
     *
     * @param string $emergencyAddressSid The emergency_address_sid
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressSid($emergencyAddressSid)
    {
        $this->options['emergencyAddressSid'] = $emergencyAddressSid;
        return $this;
    }

    /**
     * The 34 character sid of the Trunk Twilio should use to handle phone calls to this number. If a `TrunkSid` is present, Twilio will ignore all of the voice urls  and voice applications above and use those set on the Trunk. Setting a `TrunkSid` will automatically delete your `VoiceApplicationSid` and vice versa.
     *
     * @param string $trunkSid Unique string to identify the trunk
     * @return $this Fluent Builder
     */
    public function setTrunkSid($trunkSid)
    {
        $this->options['trunkSid'] = $trunkSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.CreateIncomingPhoneNumberOptions ' . implode(' ', $options) . ']';
    }
}

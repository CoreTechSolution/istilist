<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class IpAddressList extends ListResource
{
    /**
     * Construct the IpAddressList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $ipAccessControlListSid The ip_access_control_list_sid
     * @return \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressList
     */
    public function __construct(Version $version, $accountSid, $ipAccessControlListSid)
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'ipAccessControlListSid' => $ipAccessControlListSid,
        );

        $this->uri = '/Accounts/' . rawurlencode($accountSid) . '/SIP/IpAccessControlLists/' . rawurlencode($ipAccessControlListSid) . '/IpAddresses.json';
    }

    /**
     * Streams IpAddressInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return \Twilio\Stream stream of results
     */
    public function stream($limit = null, $pageSize = null)
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads IpAddressInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return IpAddressInstance[] Array of results
     */
    public function read($limit = null, $pageSize = null)
    {
        return iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of IpAddressInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return \Twilio\Page Page of IpAddressInstance
     */
    public function page($pageSize = Values::NONE, $pageToken = Values::NONE, $pageNumber = Values::NONE)
    {
        $params = Values::of(array(
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ));

        $response = $this->version->page(
            'GET',
            $this->uri,
            $params
        );

        return new IpAddressPage($this->version, $response, $this->solution);
    }

    /**
     * Create a new IpAddressInstance
     *
     * @param string $friendlyName The friendly_name
     * @param string $ipAddress The ip_address
     * @return IpAddressInstance Newly created IpAddressInstance
     */
    public function create($friendlyName, $ipAddress)
    {
        $data = Values::of(array(
            'FriendlyName' => $friendlyName,
            'IpAddress' => $ipAddress,
        ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new IpAddressInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['ipAccessControlListSid']
        );
    }

    /**
     * Constructs a IpAddressContext
     *
     * @param string $sid The sid
     * @return \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressContext
     */
    public function getContext($sid)
    {
        return new IpAddressContext(
            $this->version,
            $this->solution['accountSid'],
            $this->solution['ipAccessControlListSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        return '[Twilio.Api.V2010.IpAddressList]';
    }
}

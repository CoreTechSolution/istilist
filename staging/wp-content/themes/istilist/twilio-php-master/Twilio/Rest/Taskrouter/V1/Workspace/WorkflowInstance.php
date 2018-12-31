<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string assignmentCallbackUrl
 * @property string configuration
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string documentContentType
 * @property string fallbackAssignmentCallbackUrl
 * @property string friendlyName
 * @property string sid
 * @property integer taskReservationTimeout
 * @property string workspaceSid
 * @property string url
 * @property array links
 */
class WorkflowInstance extends InstanceResource
{
    protected $_statistics = null;

    /**
     * Initialize the WorkflowInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The workspace_sid
     * @param string $sid The sid
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\WorkflowInstance
     */
    public function __construct(Version $version, array $payload, $workspaceSid, $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'assignmentCallbackUrl' => Values::array_get($payload, 'assignment_callback_url'),
            'configuration' => Values::array_get($payload, 'configuration'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'documentContentType' => Values::array_get($payload, 'document_content_type'),
            'fallbackAssignmentCallbackUrl' => Values::array_get($payload, 'fallback_assignment_callback_url'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'sid' => Values::array_get($payload, 'sid'),
            'taskReservationTimeout' => Values::array_get($payload, 'task_reservation_timeout'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array(
            'workspaceSid' => $workspaceSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\WorkflowContext Context for
     *                                                              this
     *                                                              WorkflowInstance
     */
    protected function proxy()
    {
        if (!$this->context) {
            $this->context = new WorkflowContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a WorkflowInstance
     *
     * @return WorkflowInstance Fetched WorkflowInstance
     */
    public function fetch()
    {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WorkflowInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkflowInstance Updated WorkflowInstance
     */
    public function update($options = array())
    {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Deletes the WorkflowInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete()
    {
        return $this->proxy()->delete();
    }

    /**
     * Access the statistics
     *
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Workflow\WorkflowStatisticsList
     */
    protected function getStatistics()
    {
        return $this->proxy()->statistics;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkflowInstance ' . implode(' ', $context) . ']';
    }
}

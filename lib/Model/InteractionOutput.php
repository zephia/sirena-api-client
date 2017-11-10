<?php
/**
 * InteractionOutput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sirena API
 *
 * Sirena API for lead providers and prospect data manipulation
 *
 * OpenAPI spec version: 1.5.0
 * Contact: it@getsirena.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * InteractionOutput Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InteractionOutput implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InteractionOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'reminder' => '\DateTime',
        'message' => '\Swagger\Client\Model\MessageOutput',
        'rejection_reason' => 'string',
        'proposal' => '\Swagger\Client\Model\Proposal',
        'status' => 'string',
        'call_successful' => 'bool',
        'transfered_to' => '\Swagger\Client\Model\Agent',
        'response' => 'string',
        'conversations' => '\Swagger\Client\Model\InteractionOutputConversations[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null,
        'reminder' => 'date-time',
        'message' => null,
        'rejection_reason' => null,
        'proposal' => null,
        'status' => null,
        'call_successful' => null,
        'transfered_to' => null,
        'response' => null,
        'conversations' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'comment' => 'comment',
        'reminder' => 'reminder',
        'message' => 'message',
        'rejection_reason' => 'rejectionReason',
        'proposal' => 'proposal',
        'status' => 'status',
        'call_successful' => 'callSuccessful',
        'transfered_to' => 'transferedTo',
        'response' => 'response',
        'conversations' => 'conversations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'reminder' => 'setReminder',
        'message' => 'setMessage',
        'rejection_reason' => 'setRejectionReason',
        'proposal' => 'setProposal',
        'status' => 'setStatus',
        'call_successful' => 'setCallSuccessful',
        'transfered_to' => 'setTransferedTo',
        'response' => 'setResponse',
        'conversations' => 'setConversations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'reminder' => 'getReminder',
        'message' => 'getMessage',
        'rejection_reason' => 'getRejectionReason',
        'proposal' => 'getProposal',
        'status' => 'getStatus',
        'call_successful' => 'getCallSuccessful',
        'transfered_to' => 'getTransferedTo',
        'response' => 'getResponse',
        'conversations' => 'getConversations'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['reminder'] = isset($data['reminder']) ? $data['reminder'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
        $this->container['proposal'] = isset($data['proposal']) ? $data['proposal'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['call_successful'] = isset($data['call_successful']) ? $data['call_successful'] : null;
        $this->container['transfered_to'] = isset($data['transfered_to']) ? $data['transfered_to'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['conversations'] = isset($data['conversations']) ? $data['conversations'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets reminder
     * @return \DateTime
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     * @param \DateTime $reminder
     * @return $this
     */
    public function setReminder($reminder)
    {
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets message
     * @return \Swagger\Client\Model\MessageOutput
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param \Swagger\Client\Model\MessageOutput $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets rejection_reason
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     * @param string $rejection_reason
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets proposal
     * @return \Swagger\Client\Model\Proposal
     */
    public function getProposal()
    {
        return $this->container['proposal'];
    }

    /**
     * Sets proposal
     * @param \Swagger\Client\Model\Proposal $proposal
     * @return $this
     */
    public function setProposal($proposal)
    {
        $this->container['proposal'] = $proposal;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets call_successful
     * @return bool
     */
    public function getCallSuccessful()
    {
        return $this->container['call_successful'];
    }

    /**
     * Sets call_successful
     * @param bool $call_successful
     * @return $this
     */
    public function setCallSuccessful($call_successful)
    {
        $this->container['call_successful'] = $call_successful;

        return $this;
    }

    /**
     * Gets transfered_to
     * @return \Swagger\Client\Model\Agent
     */
    public function getTransferedTo()
    {
        return $this->container['transfered_to'];
    }

    /**
     * Sets transfered_to
     * @param \Swagger\Client\Model\Agent $transfered_to
     * @return $this
     */
    public function setTransferedTo($transfered_to)
    {
        $this->container['transfered_to'] = $transfered_to;

        return $this;
    }

    /**
     * Gets response
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     * @param string $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets conversations
     * @return \Swagger\Client\Model\InteractionOutputConversations[]
     */
    public function getConversations()
    {
        return $this->container['conversations'];
    }

    /**
     * Sets conversations
     * @param \Swagger\Client\Model\InteractionOutputConversations[] $conversations
     * @return $this
     */
    public function setConversations($conversations)
    {
        $this->container['conversations'] = $conversations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


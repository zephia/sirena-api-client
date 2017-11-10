<?php
/**
 * GeneralLead
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
 * GeneralLead Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeneralLead implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeneralLead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source' => 'string',
        'campaign' => 'string',
        'medium' => 'string',
        'provider' => 'string',
        'lead_id' => 'string',
        'provider_lead_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phones' => 'string[]',
        'emails' => 'string[]',
        'category' => 'string',
        'address' => 'string',
        'sub_locality' => 'string',
        'locality' => 'string',
        'region' => 'string',
        'country' => 'string',
        'zip_code' => 'string',
        'listing_url' => 'string',
        'comments' => 'string',
        'store' => 'string',
        'agent' => 'string',
        'product' => '\Swagger\Client\Model\Product'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source' => null,
        'campaign' => null,
        'medium' => null,
        'provider' => null,
        'lead_id' => null,
        'provider_lead_id' => null,
        'first_name' => null,
        'last_name' => null,
        'phones' => null,
        'emails' => 'email',
        'category' => null,
        'address' => null,
        'sub_locality' => null,
        'locality' => null,
        'region' => null,
        'country' => null,
        'zip_code' => null,
        'listing_url' => null,
        'comments' => null,
        'store' => null,
        'agent' => null,
        'product' => null
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
        'source' => 'source',
        'campaign' => 'campaign',
        'medium' => 'medium',
        'provider' => 'provider',
        'lead_id' => 'leadId',
        'provider_lead_id' => 'providerLeadId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'phones' => 'phones',
        'emails' => 'emails',
        'category' => 'category',
        'address' => 'address',
        'sub_locality' => 'subLocality',
        'locality' => 'locality',
        'region' => 'region',
        'country' => 'country',
        'zip_code' => 'zipCode',
        'listing_url' => 'listingUrl',
        'comments' => 'comments',
        'store' => 'store',
        'agent' => 'agent',
        'product' => 'product'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'campaign' => 'setCampaign',
        'medium' => 'setMedium',
        'provider' => 'setProvider',
        'lead_id' => 'setLeadId',
        'provider_lead_id' => 'setProviderLeadId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phones' => 'setPhones',
        'emails' => 'setEmails',
        'category' => 'setCategory',
        'address' => 'setAddress',
        'sub_locality' => 'setSubLocality',
        'locality' => 'setLocality',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'zip_code' => 'setZipCode',
        'listing_url' => 'setListingUrl',
        'comments' => 'setComments',
        'store' => 'setStore',
        'agent' => 'setAgent',
        'product' => 'setProduct'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'campaign' => 'getCampaign',
        'medium' => 'getMedium',
        'provider' => 'getProvider',
        'lead_id' => 'getLeadId',
        'provider_lead_id' => 'getProviderLeadId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phones' => 'getPhones',
        'emails' => 'getEmails',
        'category' => 'getCategory',
        'address' => 'getAddress',
        'sub_locality' => 'getSubLocality',
        'locality' => 'getLocality',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'zip_code' => 'getZipCode',
        'listing_url' => 'getListingUrl',
        'comments' => 'getComments',
        'store' => 'getStore',
        'agent' => 'getAgent',
        'product' => 'getProduct'
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

    const MEDIUM_WEB = 'web';
    const MEDIUM_CALL = 'call';
    const MEDIUM_CHAT = 'chat';
    const MEDIUM_STORE = 'store';
    const MEDIUM_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMediumAllowableValues()
    {
        return [
            self::MEDIUM_WEB,
            self::MEDIUM_CALL,
            self::MEDIUM_CHAT,
            self::MEDIUM_STORE,
            self::MEDIUM_OTHER,
        ];
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['provider_lead_id'] = isset($data['provider_lead_id']) ? $data['provider_lead_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['sub_locality'] = isset($data['sub_locality']) ? $data['sub_locality'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['listing_url'] = isset($data['listing_url']) ? $data['listing_url'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['source'] === null) {
            $invalid_properties[] = "'source' can't be null";
        }
        $allowed_values = $this->getMediumAllowableValues();
        if (!in_array($this->container['medium'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'medium', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
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

        if ($this->container['source'] === null) {
            return false;
        }
        $allowed_values = $this->getMediumAllowableValues();
        if (!in_array($this->container['medium'], $allowed_values)) {
            return false;
        }
        if ($this->container['first_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source The source of the lead. It may be the name of the place where the lead was generated, or the name of the provider.
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets campaign
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     * @param string $campaign The campaign of the lead.
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets medium
     * @return string
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     * @param string $medium The contact medium where the lead came from
     * @return $this
     */
    public function setMedium($medium)
    {
        $allowed_values = $this->getMediumAllowableValues();
        if (!is_null($medium) && !in_array($medium, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'medium', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider The name/key to identify the provider of the lead
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets lead_id
     * @return string
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     * @param string $lead_id The ID of the lead in the provider *(deprecated, use providerLrseadId)*
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets provider_lead_id
     * @return string
     */
    public function getProviderLeadId()
    {
        return $this->container['provider_lead_id'];
    }

    /**
     * Sets provider_lead_id
     * @param string $provider_lead_id The ID of the lead in the provider
     * @return $this
     */
    public function setProviderLeadId($provider_lead_id)
    {
        $this->container['provider_lead_id'] = $provider_lead_id;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phones
     * @return string[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     * @param string[] $phones
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets emails
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     * @param string[] $emails
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category The category of the lead. Use the Categories endpoint to see the available categories. If skipped, the default category is used.
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address Full street address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets sub_locality
     * @return string
     */
    public function getSubLocality()
    {
        return $this->container['sub_locality'];
    }

    /**
     * Sets sub_locality
     * @param string $sub_locality County / other sub-division of a locality, such as communes departments, etc
     * @return $this
     */
    public function setSubLocality($sub_locality)
    {
        $this->container['sub_locality'] = $sub_locality;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality City / Municipality
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region State / Province
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code Zip Code / Postal Code
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets listing_url
     * @return string
     */
    public function getListingUrl()
    {
        return $this->container['listing_url'];
    }

    /**
     * Sets listing_url
     * @param string $listing_url The URL of the listing page
     * @return $this
     */
    public function setListingUrl($listing_url)
    {
        $this->container['listing_url'] = $listing_url;

        return $this;
    }

    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     * @param string $comments Any comments worth making to the agent, from the lead or from the acquisition channel.
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets store
     * @return string
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     * @param string $store If the lead has an assigned store, indicate it's name or code
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets agent
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     * @param string $agent If the lead has an assigned agent, indicate it's name or code
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets product
     * @return \Swagger\Client\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     * @param \Swagger\Client\Model\Product $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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



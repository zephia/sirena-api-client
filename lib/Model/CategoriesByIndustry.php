<?php
/**
 * CategoriesByIndustry
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CategoriesByIndustry Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesByIndustry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoriesByIndustry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'insurance' => '\Swagger\Client\Model\Categories',
        'real_estate' => '\Swagger\Client\Model\Categories',
        'retail' => '\Swagger\Client\Model\Categories',
        'saving_plan' => '\Swagger\Client\Model\Categories',
        'vehicle' => '\Swagger\Client\Model\Categories'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'insurance' => null,
        'real_estate' => null,
        'retail' => null,
        'saving_plan' => null,
        'vehicle' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'insurance' => 'insurance',
        'real_estate' => 'realEstate',
        'retail' => 'retail',
        'saving_plan' => 'savingPlan',
        'vehicle' => 'vehicle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'insurance' => 'setInsurance',
        'real_estate' => 'setRealEstate',
        'retail' => 'setRetail',
        'saving_plan' => 'setSavingPlan',
        'vehicle' => 'setVehicle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'insurance' => 'getInsurance',
        'real_estate' => 'getRealEstate',
        'retail' => 'getRetail',
        'saving_plan' => 'getSavingPlan',
        'vehicle' => 'getVehicle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['real_estate'] = isset($data['real_estate']) ? $data['real_estate'] : null;
        $this->container['retail'] = isset($data['retail']) ? $data['retail'] : null;
        $this->container['saving_plan'] = isset($data['saving_plan']) ? $data['saving_plan'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets insurance
     *
     * @return \Swagger\Client\Model\Categories
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Swagger\Client\Model\Categories $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets real_estate
     *
     * @return \Swagger\Client\Model\Categories
     */
    public function getRealEstate()
    {
        return $this->container['real_estate'];
    }

    /**
     * Sets real_estate
     *
     * @param \Swagger\Client\Model\Categories $real_estate real_estate
     *
     * @return $this
     */
    public function setRealEstate($real_estate)
    {
        $this->container['real_estate'] = $real_estate;

        return $this;
    }

    /**
     * Gets retail
     *
     * @return \Swagger\Client\Model\Categories
     */
    public function getRetail()
    {
        return $this->container['retail'];
    }

    /**
     * Sets retail
     *
     * @param \Swagger\Client\Model\Categories $retail retail
     *
     * @return $this
     */
    public function setRetail($retail)
    {
        $this->container['retail'] = $retail;

        return $this;
    }

    /**
     * Gets saving_plan
     *
     * @return \Swagger\Client\Model\Categories
     */
    public function getSavingPlan()
    {
        return $this->container['saving_plan'];
    }

    /**
     * Sets saving_plan
     *
     * @param \Swagger\Client\Model\Categories $saving_plan saving_plan
     *
     * @return $this
     */
    public function setSavingPlan($saving_plan)
    {
        $this->container['saving_plan'] = $saving_plan;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \Swagger\Client\Model\Categories
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \Swagger\Client\Model\Categories $vehicle vehicle
     *
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



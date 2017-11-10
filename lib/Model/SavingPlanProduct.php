<?php
/**
 * SavingPlanProduct
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
 * SavingPlanProduct Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SavingPlanProduct implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SavingPlanProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'make' => 'string',
        'model' => 'string',
        'detail' => 'string',
        'sku' => 'string',
        'price' => '\Swagger\Client\Model\MoneyAmount',
        'good_type' => 'string',
        'good_sub_type' => 'string',
        'brand' => 'string',
        'description' => 'string',
        'plan_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'make' => null,
        'model' => null,
        'detail' => null,
        'sku' => null,
        'price' => null,
        'good_type' => null,
        'good_sub_type' => null,
        'brand' => null,
        'description' => null,
        'plan_type' => null
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
        'make' => 'make',
        'model' => 'model',
        'detail' => 'detail',
        'sku' => 'sku',
        'price' => 'price',
        'good_type' => 'goodType',
        'good_sub_type' => 'goodSubType',
        'brand' => 'brand',
        'description' => 'description',
        'plan_type' => 'planType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'make' => 'setMake',
        'model' => 'setModel',
        'detail' => 'setDetail',
        'sku' => 'setSku',
        'price' => 'setPrice',
        'good_type' => 'setGoodType',
        'good_sub_type' => 'setGoodSubType',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'plan_type' => 'setPlanType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'make' => 'getMake',
        'model' => 'getModel',
        'detail' => 'getDetail',
        'sku' => 'getSku',
        'price' => 'getPrice',
        'good_type' => 'getGoodType',
        'good_sub_type' => 'getGoodSubType',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'plan_type' => 'getPlanType'
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

    const GOOD_TYPE_VEHICLE = 'vehicle';
    const GOOD_TYPE_PROPERTY = 'property';
    const GOOD_TYPE_LOAN = 'loan';
    const GOOD_TYPE_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGoodTypeAllowableValues()
    {
        return [
            self::GOOD_TYPE_VEHICLE,
            self::GOOD_TYPE_PROPERTY,
            self::GOOD_TYPE_LOAN,
            self::GOOD_TYPE_OTHER,
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
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['good_type'] = isset($data['good_type']) ? $data['good_type'] : null;
        $this->container['good_sub_type'] = isset($data['good_sub_type']) ? $data['good_sub_type'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['plan_type'] = isset($data['plan_type']) ? $data['plan_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getGoodTypeAllowableValues();
        if (!in_array($this->container['good_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'good_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getGoodTypeAllowableValues();
        if (!in_array($this->container['good_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets make
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     * @param string $make A product make is either the name of its manufacturer or, if the manufacturer has more than one operating unit, the commercial name (brand) of that unit.
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model The model of the good, if applicable.
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets detail
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     * @param string $detail A product detail specific information for a product item
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku A stock keeping unit (SKU) is a product and service identification code for a store or product, often portrayed as a machine-readable bar code that helps track the item for inventory.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets price
     * @return \Swagger\Client\Model\MoneyAmount
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \Swagger\Client\Model\MoneyAmount $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets good_type
     * @return string
     */
    public function getGoodType()
    {
        return $this->container['good_type'];
    }

    /**
     * Sets good_type
     * @param string $good_type The type of good the saving plan is for.
     * @return $this
     */
    public function setGoodType($good_type)
    {
        $allowed_values = $this->getGoodTypeAllowableValues();
        if (!is_null($good_type) && !in_array($good_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'good_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['good_type'] = $good_type;

        return $this;
    }

    /**
     * Gets good_sub_type
     * @return string
     */
    public function getGoodSubType()
    {
        return $this->container['good_sub_type'];
    }

    /**
     * Sets good_sub_type
     * @param string $good_sub_type For example, in the case of a **vehicle**, a subtype may be `car`, `truck` or `motorcycle`. If the good type is **property**, the subtypes may be `house`, `apartment`, `land`, etc.
     * @return $this
     */
    public function setGoodSubType($good_sub_type)
    {
        $this->container['good_sub_type'] = $good_sub_type;

        return $this;
    }

    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param string $brand The brand of the good, if applicable.
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description A description of the good the saving plan is for.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets plan_type
     * @return string
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     * @param string $plan_type The type of saving plan.
     * @return $this
     */
    public function setPlanType($plan_type)
    {
        $this->container['plan_type'] = $plan_type;

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


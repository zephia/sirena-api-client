<?php
/**
 * VehicleProduct
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
 * VehicleProduct Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VehicleProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VehicleProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'make' => 'string',
        'model' => 'string',
        'detail' => 'string',
        'sku' => 'string',
        'price' => '\Swagger\Client\Model\MoneyAmount',
        'model_year' => 'string',
        'production_year' => 'string',
        'trim_level' => 'string',
        'style' => 'string',
        'fuel_type' => 'string',
        'vim' => 'string',
        'registration_plate' => 'string',
        'odometer' => '\Swagger\Client\Model\Odometer',
        'trade_in_vehicle' => 'string',
        'finance' => '\Swagger\Client\Model\Finance'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'make' => null,
        'model' => null,
        'detail' => null,
        'sku' => null,
        'price' => null,
        'model_year' => null,
        'production_year' => null,
        'trim_level' => null,
        'style' => null,
        'fuel_type' => null,
        'vim' => null,
        'registration_plate' => null,
        'odometer' => null,
        'trade_in_vehicle' => null,
        'finance' => null
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
        'make' => 'make',
        'model' => 'model',
        'detail' => 'detail',
        'sku' => 'sku',
        'price' => 'price',
        'model_year' => 'modelYear',
        'production_year' => 'productionYear',
        'trim_level' => 'trimLevel',
        'style' => 'style',
        'fuel_type' => 'fuelType',
        'vim' => 'vim',
        'registration_plate' => 'registrationPlate',
        'odometer' => 'odometer',
        'trade_in_vehicle' => 'tradeInVehicle',
        'finance' => 'finance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'make' => 'setMake',
        'model' => 'setModel',
        'detail' => 'setDetail',
        'sku' => 'setSku',
        'price' => 'setPrice',
        'model_year' => 'setModelYear',
        'production_year' => 'setProductionYear',
        'trim_level' => 'setTrimLevel',
        'style' => 'setStyle',
        'fuel_type' => 'setFuelType',
        'vim' => 'setVim',
        'registration_plate' => 'setRegistrationPlate',
        'odometer' => 'setOdometer',
        'trade_in_vehicle' => 'setTradeInVehicle',
        'finance' => 'setFinance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'make' => 'getMake',
        'model' => 'getModel',
        'detail' => 'getDetail',
        'sku' => 'getSku',
        'price' => 'getPrice',
        'model_year' => 'getModelYear',
        'production_year' => 'getProductionYear',
        'trim_level' => 'getTrimLevel',
        'style' => 'getStyle',
        'fuel_type' => 'getFuelType',
        'vim' => 'getVim',
        'registration_plate' => 'getRegistrationPlate',
        'odometer' => 'getOdometer',
        'trade_in_vehicle' => 'getTradeInVehicle',
        'finance' => 'getFinance'
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

    const FUEL_TYPE_GASOLINE = 'gasoline';
    const FUEL_TYPE_DIESEL = 'diesel';
    const FUEL_TYPE_FLEX = 'flex';
    const FUEL_TYPE_HYBRID = 'hybrid';
    const FUEL_TYPE_ELECTRIC = 'electric';
    const FUEL_TYPE_HYDROGEN = 'hydrogen';
    const FUEL_TYPE_NATURAL_GAS = 'naturalGas';
    const FUEL_TYPE_PROPANE = 'propane';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFuelTypeAllowableValues()
    {
        return [
            self::FUEL_TYPE_GASOLINE,
            self::FUEL_TYPE_DIESEL,
            self::FUEL_TYPE_FLEX,
            self::FUEL_TYPE_HYBRID,
            self::FUEL_TYPE_ELECTRIC,
            self::FUEL_TYPE_HYDROGEN,
            self::FUEL_TYPE_NATURAL_GAS,
            self::FUEL_TYPE_PROPANE,
        ];
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
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['model_year'] = isset($data['model_year']) ? $data['model_year'] : null;
        $this->container['production_year'] = isset($data['production_year']) ? $data['production_year'] : null;
        $this->container['trim_level'] = isset($data['trim_level']) ? $data['trim_level'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['fuel_type'] = isset($data['fuel_type']) ? $data['fuel_type'] : null;
        $this->container['vim'] = isset($data['vim']) ? $data['vim'] : null;
        $this->container['registration_plate'] = isset($data['registration_plate']) ? $data['registration_plate'] : null;
        $this->container['odometer'] = isset($data['odometer']) ? $data['odometer'] : null;
        $this->container['trade_in_vehicle'] = isset($data['trade_in_vehicle']) ? $data['trade_in_vehicle'] : null;
        $this->container['finance'] = isset($data['finance']) ? $data['finance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFuelTypeAllowableValues();
        if (!in_array($this->container['fuel_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fuel_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getFuelTypeAllowableValues();
        if (!in_array($this->container['fuel_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param string $make A product make is either the name of its manufacturer or, if the manufacturer has more than one operating unit, the commercial name (brand) of that unit.
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model A product model is the specific brand identified by a name or number.
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail A product detail specific information for a product item
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku A stock keeping unit (SKU) is a product and service identification code for a store or product, often portrayed as a machine-readable bar code that helps track the item for inventory.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Swagger\Client\Model\MoneyAmount
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Swagger\Client\Model\MoneyAmount $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets model_year
     *
     * @return string
     */
    public function getModelYear()
    {
        return $this->container['model_year'];
    }

    /**
     * Sets model_year
     *
     * @param string $model_year The vehicle production year is the calendar year of production of that specific vehicle.
     *
     * @return $this
     */
    public function setModelYear($model_year)
    {
        $this->container['model_year'] = $model_year;

        return $this;
    }

    /**
     * Gets production_year
     *
     * @return string
     */
    public function getProductionYear()
    {
        return $this->container['production_year'];
    }

    /**
     * Sets production_year
     *
     * @param string $production_year A vehicle production year for a vehicle model is the calendar year designation assigned by the manufacturer to the annual version of that model.
     *
     * @return $this
     */
    public function setProductionYear($production_year)
    {
        $this->container['production_year'] = $production_year;

        return $this;
    }

    /**
     * Gets trim_level
     *
     * @return string
     */
    public function getTrimLevel()
    {
        return $this->container['trim_level'];
    }

    /**
     * Sets trim_level
     *
     * @param string $trim_level A vehicle trim level further identifies a vehicle by a particular set of special features. Higher trim levels either will add to the features of the \"base\" (entry-level model), or replace them with something else. Trim levels are designated by terms such as EX, LTZ, Touring and Grand Touring, among countless others.
     *
     * @return $this
     */
    public function setTrimLevel($trim_level)
    {
        $this->container['trim_level'] = $trim_level;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style A vehicle style includes additional vehicle data like the engine, transmission, colors, options.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets fuel_type
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->container['fuel_type'];
    }

    /**
     * Sets fuel_type
     *
     * @param string $fuel_type The type of fuel the vehicle uses. - **Gasoline**, also known as **petrol**, is a petroleum-derived liquid fuel. - **Diesel** is a petroleum-derived liquid fuel with higher energy density than gasoline. Alternatively it can be blended with **biodiesel** manufactured from vegetable oils, animal fats, or recycled cooking grease. - **Flex** is gasoline blended with ethanol made from corn and other plant materials. - **Hybrid** vehicles use electricity in conjunction with other fuels to boost efficiency. - **Electric** plug-in vehicles use electricity without needing other fuels. - **Hydrogen** is a potentially emissions-free alternative fuel. - **Natural Gas** (CNG) is a gaseous fuel that consists mostly of methane. - **Propane**, also known as liquefied petroleum gas (LPG) or propane **autogas**, is a gaseous fuel produced as a by-product of natural gas processing and crude oil refining.
     *
     * @return $this
     */
    public function setFuelType($fuel_type)
    {
        $allowedValues = $this->getFuelTypeAllowableValues();
        if (!is_null($fuel_type) && !in_array($fuel_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fuel_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fuel_type'] = $fuel_type;

        return $this;
    }

    /**
     * Gets vim
     *
     * @return string
     */
    public function getVim()
    {
        return $this->container['vim'];
    }

    /**
     * Sets vim
     *
     * @param string $vim VIN number of the vehicle.
     *
     * @return $this
     */
    public function setVim($vim)
    {
        $this->container['vim'] = $vim;

        return $this;
    }

    /**
     * Gets registration_plate
     *
     * @return string
     */
    public function getRegistrationPlate()
    {
        return $this->container['registration_plate'];
    }

    /**
     * Sets registration_plate
     *
     * @param string $registration_plate The registration plate of the vehicle, also known as licence plate or number plate. For secondhand vehicles only.
     *
     * @return $this
     */
    public function setRegistrationPlate($registration_plate)
    {
        $this->container['registration_plate'] = $registration_plate;

        return $this;
    }

    /**
     * Gets odometer
     *
     * @return \Swagger\Client\Model\Odometer
     */
    public function getOdometer()
    {
        return $this->container['odometer'];
    }

    /**
     * Sets odometer
     *
     * @param \Swagger\Client\Model\Odometer $odometer odometer
     *
     * @return $this
     */
    public function setOdometer($odometer)
    {
        $this->container['odometer'] = $odometer;

        return $this;
    }

    /**
     * Gets trade_in_vehicle
     *
     * @return string
     */
    public function getTradeInVehicle()
    {
        return $this->container['trade_in_vehicle'];
    }

    /**
     * Sets trade_in_vehicle
     *
     * @param string $trade_in_vehicle A vehicle the buyer is trading in as part of the deal.
     *
     * @return $this
     */
    public function setTradeInVehicle($trade_in_vehicle)
    {
        $this->container['trade_in_vehicle'] = $trade_in_vehicle;

        return $this;
    }

    /**
     * Gets finance
     *
     * @return \Swagger\Client\Model\Finance
     */
    public function getFinance()
    {
        return $this->container['finance'];
    }

    /**
     * Sets finance
     *
     * @param \Swagger\Client\Model\Finance $finance finance
     *
     * @return $this
     */
    public function setFinance($finance)
    {
        $this->container['finance'] = $finance;

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



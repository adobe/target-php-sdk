<?php
/**
 * MobilePlatform
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Adobe Target Delivery API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adobe\Target\Delivery\v1\Model;

use \ArrayAccess;
use \Adobe\Target\Delivery\v1\ObjectSerializer;

/**
 * MobilePlatform Class Doc Comment
 *
 * @category Class
 * @description Mobile Platform should be specified when the channel is Mobile
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MobilePlatform implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MobilePlatform';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deviceName' => 'string',
        'deviceType' => '\Adobe\Target\Delivery\v1\Model\DeviceType',
        'platformType' => '\Adobe\Target\Delivery\v1\Model\MobilePlatformType',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'deviceName' => null,
        'deviceType' => null,
        'platformType' => null,
        'version' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'deviceName' => 'deviceName',
        'deviceType' => 'deviceType',
        'platformType' => 'platformType',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deviceName' => 'setDeviceName',
        'deviceType' => 'setDeviceType',
        'platformType' => 'setPlatformType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deviceName' => 'getDeviceName',
        'deviceType' => 'getDeviceType',
        'platformType' => 'getPlatformType',
        'version' => 'getVersion'
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
        return self::$openAPIModelName;
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
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['platformType'] = isset($data['platformType']) ? $data['platformType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['deviceType'] === null) {
            $invalidProperties[] = "'deviceType' can't be null";
        }
        if ($this->container['platformType'] === null) {
            $invalidProperties[] = "'platformType' can't be null";
        }
        if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets deviceName
     *
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
     * Sets deviceName
     *
     * @param string|null $deviceName Optional field, added to help with device detection using device atlas. This is equivalent of a.DeviceName field passed in from Mobile SDK
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;

        return $this;
    }

    /**
     * Gets deviceType
     *
     * @return \Adobe\Target\Delivery\v1\Model\DeviceType
     */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
     * Sets deviceType
     *
     * @param \Adobe\Target\Delivery\v1\Model\DeviceType $deviceType deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * Gets platformType
     *
     * @return \Adobe\Target\Delivery\v1\Model\MobilePlatformType
     */
    public function getPlatformType()
    {
        return $this->container['platformType'];
    }

    /**
     * Sets platformType
     *
     * @param \Adobe\Target\Delivery\v1\Model\MobilePlatformType $platformType platformType
     *
     * @return $this
     */
    public function setPlatformType($platformType)
    {
        $this->container['platformType'] = $platformType;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version If not specified - all activities with any platformVersion will be evaluated. If specified - only activities with the same platformVersion will be evaluated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if (!is_null($version) && (mb_strlen($version) > 128)) {
            throw new \InvalidArgumentException('invalid length for $version when calling MobilePlatform., must be smaller than or equal to 128.');
        }

        $this->container['version'] = $version;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

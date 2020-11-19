<?php
/**
 * QAModePreviewIndex
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
 * QAModePreviewIndex Class Doc Comment
 *
 * @category Class
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QAModePreviewIndex implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QAModePreviewIndex';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityIndex' => 'int',
        'experienceIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activityIndex' => null,
        'experienceIndex' => null
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
        'activityIndex' => 'activityIndex',
        'experienceIndex' => 'experienceIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityIndex' => 'setActivityIndex',
        'experienceIndex' => 'setExperienceIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityIndex' => 'getActivityIndex',
        'experienceIndex' => 'getExperienceIndex'
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
        $this->container['activityIndex'] = isset($data['activityIndex']) ? $data['activityIndex'] : null;
        $this->container['experienceIndex'] = isset($data['experienceIndex']) ? $data['experienceIndex'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['activityIndex']) && ($this->container['activityIndex'] < 1)) {
            $invalidProperties[] = "invalid value for 'activityIndex', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['experienceIndex']) && ($this->container['experienceIndex'] < 1)) {
            $invalidProperties[] = "invalid value for 'experienceIndex', must be bigger than or equal to 1.";
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
     * Gets activityIndex
     *
     * @return int|null
     */
    public function getActivityIndex()
    {
        return $this->container['activityIndex'];
    }

    /**
     * Sets activityIndex
     *
     * @param int|null $activityIndex Index references the activity in the activity list (from the encrypted token). Validation   * If the activity list index is out of boundaries of the activities list in the token or if it is null it will  be ignored.   * Activity list index starts with 1.   * Should be at least one activity index, and should reference an activity specified in the token.
     *
     * @return $this
     */
    public function setActivityIndex($activityIndex)
    {
        if (!is_null($activityIndex) && ($activityIndex < 1)) {
            throw new \InvalidArgumentException('invalid value for $activityIndex when calling QAModePreviewIndex., must be bigger than or equal to 1.');
        }

        $this->container['activityIndex'] = $activityIndex;

        return $this;
    }

    /**
     * Gets experienceIndex
     *
     * @return int|null
     */
    public function getExperienceIndex()
    {
        return $this->container['experienceIndex'];
    }

    /**
     * Sets experienceIndex
     *
     * @param int|null $experienceIndex When specified, the experience with this index in the activity definition will be selected. Validation   * Can be null (unspecified)   * If index is not specified or out of bounds, the experience will be selected via activity experience selector strategy.   * Experience index starts with 1.
     *
     * @return $this
     */
    public function setExperienceIndex($experienceIndex)
    {
        if (!is_null($experienceIndex) && ($experienceIndex < 1)) {
            throw new \InvalidArgumentException('invalid value for $experienceIndex when calling QAModePreviewIndex., must be bigger than or equal to 1.');
        }

        $this->container['experienceIndex'] = $experienceIndex;

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

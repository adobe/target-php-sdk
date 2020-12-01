<?php
/**
 * Copyright 2020 Adobe. All rights reserved.
 *  This file is licensed to you under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License. You may obtain a copy
 *  of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software distributed under
 *  the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR REPRESENTATIONS
 *  OF ANY KIND, either express or implied. See the License for the specific language
 *  governing permissions and limitations under the License.
 */

/**
 * AudienceManager
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
 * AudienceManager Class Doc Comment
 *
 * @category Class
 * @description Audience Manager Integration (AAM).
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AudienceManager implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AudienceManager';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locationHint' => 'int',
        'blob' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'locationHint' => null,
        'blob' => null
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
        'locationHint' => 'locationHint',
        'blob' => 'blob'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locationHint' => 'setLocationHint',
        'blob' => 'setBlob'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locationHint' => 'getLocationHint',
        'blob' => 'getBlob'
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
        $this->container['locationHint'] = isset($data['locationHint']) ? $data['locationHint'] : null;
        $this->container['blob'] = isset($data['blob']) ? $data['blob'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['locationHint']) && ($this->container['locationHint'] < 1)) {
            $invalidProperties[] = "invalid value for 'locationHint', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['blob']) && (mb_strlen($this->container['blob']) > 1024)) {
            $invalidProperties[] = "invalid value for 'blob', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['blob']) && (mb_strlen($this->container['blob']) < 1)) {
            $invalidProperties[] = "invalid value for 'blob', the character length must be bigger than or equal to 1.";
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
     * Gets locationHint
     *
     * @return int|null
     */
    public function getLocationHint()
    {
        return $this->container['locationHint'];
    }

    /**
     * Sets locationHint
     *
     * @param int|null $locationHint DCS location hint. Used to determine which AAM DCS Endpoint to hit in order to retrieve the profile.
     *
     * @return $this
     */
    public function setLocationHint($locationHint)
    {
        if (!is_null($locationHint) && ($locationHint < 1)) {
            throw new \InvalidArgumentException('invalid value for $locationHint when calling AudienceManager., must be bigger than or equal to 1.');
        }

        $this->container['locationHint'] = $locationHint;

        return $this;
    }

    /**
     * Gets blob
     *
     * @return string|null
     */
    public function getBlob()
    {
        return $this->container['blob'];
    }

    /**
     * Sets blob
     *
     * @param string|null $blob AAM Blob. Used to send additional data to AAM. Validation   * Cannot be blank.
     *
     * @return $this
     */
    public function setBlob($blob)
    {
        if (!is_null($blob) && (mb_strlen($blob) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $blob when calling AudienceManager., must be smaller than or equal to 1024.');
        }
        if (!is_null($blob) && (mb_strlen($blob) < 1)) {
            throw new \InvalidArgumentException('invalid length for $blob when calling AudienceManager., must be bigger than or equal to 1.');
        }

        $this->container['blob'] = $blob;

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

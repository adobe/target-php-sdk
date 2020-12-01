<?php
/**
 * Copyright 2020 Adobe. All rights reserved.
 * This file is licensed to you under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License. You may obtain a copy
 * of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR REPRESENTATIONS
 * OF ANY KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 */

/**
 * RequestDetails
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
 * RequestDetails Class Doc Comment
 *
 * @category Class
 * @description Object common for prefetch, execute and notifications in order to specify the request details.
 * @package  Adobe\Target\Delivery\v1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequestDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RequestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\Adobe\Target\Delivery\v1\Model\Address',
        'parameters' => 'map[string,string]',
        'profileParameters' => 'map[string,string]',
        'order' => '\Adobe\Target\Delivery\v1\Model\Order',
        'product' => '\Adobe\Target\Delivery\v1\Model\Product'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address' => null,
        'parameters' => null,
        'profileParameters' => null,
        'order' => null,
        'product' => null
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
        'address' => 'address',
        'parameters' => 'parameters',
        'profileParameters' => 'profileParameters',
        'order' => 'order',
        'product' => 'product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'parameters' => 'setParameters',
        'profileParameters' => 'setProfileParameters',
        'order' => 'setOrder',
        'product' => 'setProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'parameters' => 'getParameters',
        'profileParameters' => 'getProfileParameters',
        'order' => 'getOrder',
        'product' => 'getProduct'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['profileParameters'] = isset($data['profileParameters']) ? $data['profileParameters'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address
     *
     * @return \Adobe\Target\Delivery\v1\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Adobe\Target\Delivery\v1\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return map[string,string]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param map[string,string]|null $parameters Parameters map. Same object is reused for mbox or profile parameters with slight validation differences. Following names are not allowed for mbox parameters: 'orderId', 'orderTotal', productPurchasedIds' Validation (for both mbox and profile parameters):   * Max 50 parameters limit.   * Parameter name should not be blank.   * Parameter name max length 128.   * Parameter name should not start with 'profile.'   * Parameter value length max 5000.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets profileParameters
     *
     * @return map[string,string]|null
     */
    public function getProfileParameters()
    {
        return $this->container['profileParameters'];
    }

    /**
     * Sets profileParameters
     *
     * @param map[string,string]|null $profileParameters Parameters map. Same object is reused for mbox or profile parameters with slight validation differences. Following names are not allowed for mbox parameters: 'orderId', 'orderTotal', productPurchasedIds' Validation (for both mbox and profile parameters):   * Max 50 parameters limit.   * Parameter name should not be blank.   * Parameter name max length 128.   * Parameter name should not start with 'profile.'   * Parameter value length max 5000.
     *
     * @return $this
     */
    public function setProfileParameters($profileParameters)
    {
        $this->container['profileParameters'] = $profileParameters;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Adobe\Target\Delivery\v1\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Adobe\Target\Delivery\v1\Model\Order|null $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Adobe\Target\Delivery\v1\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Adobe\Target\Delivery\v1\Model\Product|null $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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

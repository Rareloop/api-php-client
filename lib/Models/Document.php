<?php
/**
 * Document
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Onfido\Models;

use \ArrayAccess;

/**
 * Document Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Onfido
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Document implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'file_name' => 'string',
        'file_size' => 'int',
        'file_type' => 'string',
        'type' => 'string',
        'side' => 'string',
        'href' => 'string',
        'download_href' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'file_name' => 'file_name',
        'file_size' => 'file_size',
        'file_type' => 'file_type',
        'type' => 'type',
        'side' => 'side',
        'href' => 'href',
        'download_href' => 'download_href'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'file_type' => 'setFileType',
        'type' => 'setType',
        'side' => 'setSide',
        'href' => 'setHref',
        'download_href' => 'setDownloadHref'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'file_type' => 'getFileType',
        'type' => 'getType',
        'side' => 'getSide',
        'href' => 'getHref',
        'download_href' => 'getDownloadHref'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['download_href'] = isset($data['download_href']) ? $data['download_href'] : null;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The unique identifier for the document
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at The date and time at which the document was uploaded
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name The name of the uploaded file
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param int $file_size The size of the file in bytes
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_type
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     * @param string $file_type The file type of the uploaded file
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of document
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets side
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     * @param string $side The side of the document, if applicable. The possible values are front and back
     * @return $this
     */
    public function setSide($side)
    {
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets href
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     * @param string $href The uri of this resource
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets download_href
     * @return string
     */
    public function getDownloadHref()
    {
        return $this->container['download_href'];
    }

    /**
     * Sets download_href
     * @param string $download_href The uri that can be used to download the document
     * @return $this
     */
    public function setDownloadHref($download_href)
    {
        $this->container['download_href'] = $download_href;

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
            return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this));
    }
}

<?php
/**
 * FfI20240320Dimensions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320;

use \ArrayAccess;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * FfI20240320Dimensions Class Doc Comment
 *
 * @category Class
 * @description Measurement of a package&#39;s dimensions.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FfI20240320Dimensions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dimensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'height' => 'float',
        'length' => 'float',
        'unit_of_measurement' => '\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UnitOfMeasurement',
        'width' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'height' => null,
        'length' => null,
        'unit_of_measurement' => null,
        'width' => null
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
        'height' => 'height',
        'length' => 'length',
        'unit_of_measurement' => 'unitOfMeasurement',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'length' => 'setLength',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'length' => 'getLength',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'width' => 'getWidth'
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
        $this->container['height'] = $data['height'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['unit_of_measurement'] = $data['unit_of_measurement'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if (($this->container['height'] > 1E+5)) {
            $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 1E+5.";
        }

        if (($this->container['height'] < 0)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
        }

        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if (($this->container['length'] > 1E+5)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 1E+5.";
        }

        if (($this->container['length'] < 0)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 0.";
        }

        if ($this->container['unit_of_measurement'] === null) {
            $invalidProperties[] = "'unit_of_measurement' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if (($this->container['width'] > 1E+5)) {
            $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 1E+5.";
        }

        if (($this->container['width'] < 0)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
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
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height The height of a package.
     *
     * @return self
     */
    public function setHeight($height)
    {

        if (($height > 1E+5)) {
            throw new \InvalidArgumentException('invalid value for $height when calling FfI20240320Dimensions., must be smaller than or equal to 1E+5.');
        }
        if (($height < 0)) {
            throw new \InvalidArgumentException('invalid value for $height when calling FfI20240320Dimensions., must be bigger than or equal to 0.');
        }

        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length The length of a package.
     *
     * @return self
     */
    public function setLength($length)
    {

        if (($length > 1E+5)) {
            throw new \InvalidArgumentException('invalid value for $length when calling FfI20240320Dimensions., must be smaller than or equal to 1E+5.');
        }
        if (($length < 0)) {
            throw new \InvalidArgumentException('invalid value for $length when calling FfI20240320Dimensions., must be bigger than or equal to 0.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets unit_of_measurement
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UnitOfMeasurement
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentInbound20240320\FfI20240320UnitOfMeasurement $unit_of_measurement unit_of_measurement
     *
     * @return self
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width The width of a package.
     *
     * @return self
     */
    public function setWidth($width)
    {

        if (($width > 1E+5)) {
            throw new \InvalidArgumentException('invalid value for $width when calling FfI20240320Dimensions., must be smaller than or equal to 1E+5.');
        }
        if (($width < 0)) {
            throw new \InvalidArgumentException('invalid value for $width when calling FfI20240320Dimensions., must be bigger than or equal to 0.');
        }

        $this->container['width'] = $width;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * MFfAdditionalSellerInputs
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment;

use \ArrayAccess;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * MFfAdditionalSellerInputs Class Doc Comment
 *
 * @category Class
 * @description An additional set of seller inputs required to purchase shipping.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MFfAdditionalSellerInputs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalSellerInputs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_input_field_name' => 'string',
        'additional_seller_input' => '\MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAdditionalSellerInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_input_field_name' => null,
        'additional_seller_input' => null
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
        'additional_input_field_name' => 'AdditionalInputFieldName',
        'additional_seller_input' => 'AdditionalSellerInput'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_input_field_name' => 'setAdditionalInputFieldName',
        'additional_seller_input' => 'setAdditionalSellerInput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_input_field_name' => 'getAdditionalInputFieldName',
        'additional_seller_input' => 'getAdditionalSellerInput'
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
        $this->container['additional_input_field_name'] = $data['additional_input_field_name'] ?? null;
        $this->container['additional_seller_input'] = $data['additional_seller_input'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['additional_input_field_name'] === null) {
            $invalidProperties[] = "'additional_input_field_name' can't be null";
        }
        if ($this->container['additional_seller_input'] === null) {
            $invalidProperties[] = "'additional_seller_input' can't be null";
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
     * Gets additional_input_field_name
     *
     * @return string
     */
    public function getAdditionalInputFieldName()
    {
        return $this->container['additional_input_field_name'];
    }

    /**
     * Sets additional_input_field_name
     *
     * @param string $additional_input_field_name The name of the additional input field.
     *
     * @return self
     */
    public function setAdditionalInputFieldName($additional_input_field_name)
    {
        $this->container['additional_input_field_name'] = $additional_input_field_name;

        return $this;
    }

    /**
     * Gets additional_seller_input
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAdditionalSellerInput
     */
    public function getAdditionalSellerInput()
    {
        return $this->container['additional_seller_input'];
    }

    /**
     * Sets additional_seller_input
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\MerchantFulfillment\MFfAdditionalSellerInput $additional_seller_input additional_seller_input
     *
     * @return self
     */
    public function setAdditionalSellerInput($additional_seller_input)
    {
        $this->container['additional_seller_input'] = $additional_seller_input;

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



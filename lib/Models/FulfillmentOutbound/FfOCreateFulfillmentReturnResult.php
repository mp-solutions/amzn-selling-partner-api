<?php
/**
 * FfOCreateFulfillmentReturnResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound;

use \ArrayAccess;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * FfOCreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FfOCreateFulfillmentReturnResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'return_items' => '\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnItem[]',
        'invalid_return_items' => '\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOInvalidReturnItem[]',
        'return_authorizations' => '\MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'return_items' => null,
        'invalid_return_items' => null,
        'return_authorizations' => null
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
        'return_items' => 'returnItems',
        'invalid_return_items' => 'invalidReturnItems',
        'return_authorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_items' => 'setReturnItems',
        'invalid_return_items' => 'setInvalidReturnItems',
        'return_authorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_items' => 'getReturnItems',
        'invalid_return_items' => 'getInvalidReturnItems',
        'return_authorizations' => 'getReturnAuthorizations'
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
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['invalid_return_items'] = $data['invalid_return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
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
     * Gets return_items
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnItem[]|null
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnItem[]|null $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return self
     */
    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets invalid_return_items
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOInvalidReturnItem[]|null
     */
    public function getInvalidReturnItems()
    {
        return $this->container['invalid_return_items'];
    }

    /**
     * Sets invalid_return_items
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOInvalidReturnItem[]|null $invalid_return_items An array of invalid return item information.
     *
     * @return self
     */
    public function setInvalidReturnItems($invalid_return_items)
    {
        $this->container['invalid_return_items'] = $invalid_return_items;

        return $this;
    }

    /**
     * Gets return_authorizations
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnAuthorization[]|null
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\FulfillmentOutbound\FfOReturnAuthorization[]|null $return_authorizations An array of return authorization information.
     *
     * @return self
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

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



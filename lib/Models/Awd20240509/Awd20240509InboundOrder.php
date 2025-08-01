<?php
/**
 * Awd20240509InboundOrder
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\Awd20240509;

use \ArrayAccess;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * Awd20240509InboundOrder Class Doc Comment
 *
 * @category Class
 * @description Represents an AWD inbound order.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Awd20240509InboundOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InboundOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'destination_details' => '\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DestinationDetails',
        'external_reference_id' => 'string',
        'order_id' => 'string',
        'order_status' => '\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundStatus',
        'origin_address' => '\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509Address',
        'packages_to_inbound' => '\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DistributionPackageQuantity[]',
        'preferences' => '\MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPreferences',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => 'date-time',
        'destination_details' => null,
        'external_reference_id' => null,
        'order_id' => null,
        'order_status' => null,
        'origin_address' => null,
        'packages_to_inbound' => null,
        'preferences' => null,
        'updated_at' => 'date-time'
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
        'created_at' => 'createdAt',
        'destination_details' => 'destinationDetails',
        'external_reference_id' => 'externalReferenceId',
        'order_id' => 'orderId',
        'order_status' => 'orderStatus',
        'origin_address' => 'originAddress',
        'packages_to_inbound' => 'packagesToInbound',
        'preferences' => 'preferences',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'destination_details' => 'setDestinationDetails',
        'external_reference_id' => 'setExternalReferenceId',
        'order_id' => 'setOrderId',
        'order_status' => 'setOrderStatus',
        'origin_address' => 'setOriginAddress',
        'packages_to_inbound' => 'setPackagesToInbound',
        'preferences' => 'setPreferences',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'destination_details' => 'getDestinationDetails',
        'external_reference_id' => 'getExternalReferenceId',
        'order_id' => 'getOrderId',
        'order_status' => 'getOrderStatus',
        'origin_address' => 'getOriginAddress',
        'packages_to_inbound' => 'getPackagesToInbound',
        'preferences' => 'getPreferences',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['destination_details'] = $data['destination_details'] ?? null;
        $this->container['external_reference_id'] = $data['external_reference_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['origin_address'] = $data['origin_address'] ?? null;
        $this->container['packages_to_inbound'] = $data['packages_to_inbound'] ?? null;
        $this->container['preferences'] = $data['preferences'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['origin_address'] === null) {
            $invalidProperties[] = "'origin_address' can't be null";
        }
        if ($this->container['packages_to_inbound'] === null) {
            $invalidProperties[] = "'packages_to_inbound' can't be null";
        }
        if ((count($this->container['packages_to_inbound']) < 1)) {
            $invalidProperties[] = "invalid value for 'packages_to_inbound', number of items must be greater than or equal to 1.";
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date when this order was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets destination_details
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DestinationDetails|null
     */
    public function getDestinationDetails()
    {
        return $this->container['destination_details'];
    }

    /**
     * Sets destination_details
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DestinationDetails|null $destination_details destination_details
     *
     * @return self
     */
    public function setDestinationDetails($destination_details)
    {
        $this->container['destination_details'] = $destination_details;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string|null
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string|null $external_reference_id Reference ID that can be used to correlate the order with partner resources.
     *
     * @return self
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Inbound order ID.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundStatus
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundStatus $order_status order_status
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets origin_address
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509Address
     */
    public function getOriginAddress()
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509Address $origin_address origin_address
     *
     * @return self
     */
    public function setOriginAddress($origin_address)
    {
        $this->container['origin_address'] = $origin_address;

        return $this;
    }

    /**
     * Gets packages_to_inbound
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DistributionPackageQuantity[]
     */
    public function getPackagesToInbound()
    {
        return $this->container['packages_to_inbound'];
    }

    /**
     * Sets packages_to_inbound
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509DistributionPackageQuantity[] $packages_to_inbound List of packages to be inbounded.
     *
     * @return self
     */
    public function setPackagesToInbound($packages_to_inbound)
    {


        if ((count($packages_to_inbound) < 1)) {
            throw new \InvalidArgumentException('invalid length for $packages_to_inbound when calling Awd20240509InboundOrder., number of items must be greater than or equal to 1.');
        }
        $this->container['packages_to_inbound'] = $packages_to_inbound;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPreferences|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\Awd20240509\Awd20240509InboundPreferences|null $preferences preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Date when this order was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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



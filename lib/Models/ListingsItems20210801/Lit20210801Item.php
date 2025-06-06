<?php
/**
 * Lit20210801Item
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801;

use \ArrayAccess;
use \MPSolutions\AmznSellingPartnerApi\Models\ModelInterface;
use \MPSolutions\AmznSellingPartnerApi\ObjectSerializer;

/**
 * Lit20210801Item Class Doc Comment
 *
 * @category Class
 * @description A listings item.
 * @package  MPSolutions\AmznSellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Lit20210801Item implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'summaries' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemSummaryByMarketplace[]',
        'attributes' => 'object',
        'issues' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801Issue[]',
        'offers' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemOfferByMarketplace[]',
        'fulfillment_availability' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801FulfillmentAvailability[]',
        'procurement' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProcurement[]',
        'relationships' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemRelationshipsByMarketplace[]',
        'product_types' => '\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProductTypeByMarketplace[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'summaries' => null,
        'attributes' => null,
        'issues' => null,
        'offers' => null,
        'fulfillment_availability' => null,
        'procurement' => null,
        'relationships' => null,
        'product_types' => null
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
        'sku' => 'sku',
        'summaries' => 'summaries',
        'attributes' => 'attributes',
        'issues' => 'issues',
        'offers' => 'offers',
        'fulfillment_availability' => 'fulfillmentAvailability',
        'procurement' => 'procurement',
        'relationships' => 'relationships',
        'product_types' => 'productTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'summaries' => 'setSummaries',
        'attributes' => 'setAttributes',
        'issues' => 'setIssues',
        'offers' => 'setOffers',
        'fulfillment_availability' => 'setFulfillmentAvailability',
        'procurement' => 'setProcurement',
        'relationships' => 'setRelationships',
        'product_types' => 'setProductTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'summaries' => 'getSummaries',
        'attributes' => 'getAttributes',
        'issues' => 'getIssues',
        'offers' => 'getOffers',
        'fulfillment_availability' => 'getFulfillmentAvailability',
        'procurement' => 'getProcurement',
        'relationships' => 'getRelationships',
        'product_types' => 'getProductTypes'
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
        $this->container['fulfillment_availability'] = $data['fulfillment_availability'] ?? null;
        $this->container['procurement'] = $data['procurement'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['product_types'] = $data['product_types'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * @param string $sku A selling partner provided identifier for an Amazon listing.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemSummaryByMarketplace[]|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemSummaryByMarketplace[]|null $summaries Summary details of a listings item.
     *
     * @return self
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes A JSON object containing structured listings item attribute data keyed by attribute name.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801Issue[]|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801Issue[]|null $issues The issues associated with the listings item.
     *
     * @return self
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemOfferByMarketplace[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemOfferByMarketplace[]|null $offers Offer details for the listings item.
     *
     * @return self
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets fulfillment_availability
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801FulfillmentAvailability[]|null
     */
    public function getFulfillmentAvailability()
    {
        return $this->container['fulfillment_availability'];
    }

    /**
     * Sets fulfillment_availability
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801FulfillmentAvailability[]|null $fulfillment_availability The fulfillment availability for the listings item.
     *
     * @return self
     */
    public function setFulfillmentAvailability($fulfillment_availability)
    {
        $this->container['fulfillment_availability'] = $fulfillment_availability;

        return $this;
    }

    /**
     * Gets procurement
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProcurement[]|null
     */
    public function getProcurement()
    {
        return $this->container['procurement'];
    }

    /**
     * Sets procurement
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProcurement[]|null $procurement The vendor procurement information for the listings item.
     *
     * @return self
     */
    public function setProcurement($procurement)
    {
        $this->container['procurement'] = $procurement;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemRelationshipsByMarketplace[]|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemRelationshipsByMarketplace[]|null $relationships Relationships for a listing item, by marketplace (for example, variations).
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets product_types
     *
     * @return \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProductTypeByMarketplace[]|null
     */
    public function getProductTypes()
    {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types
     *
     * @param \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemProductTypeByMarketplace[]|null $product_types Product types for a listing item, by marketplace.
     *
     * @return self
     */
    public function setProductTypes($product_types)
    {
        $this->container['product_types'] = $product_types;

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



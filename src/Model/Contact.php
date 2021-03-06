<?php
/**
 * Contact
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * Contact Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_id' => 'string',
        'contact_uri' => 'string',
        'emails' => 'string[]',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'name' => 'string',
        'organization' => 'string',
        'shared' => 'string',
        'signing_group' => 'string',
        'signing_group_name' => 'string'
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
        'contact_id' => 'contactId',
        'contact_uri' => 'contactUri',
        'emails' => 'emails',
        'error_details' => 'errorDetails',
        'name' => 'name',
        'organization' => 'organization',
        'shared' => 'shared',
        'signing_group' => 'signingGroup',
        'signing_group_name' => 'signingGroupName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'contact_uri' => 'setContactUri',
        'emails' => 'setEmails',
        'error_details' => 'setErrorDetails',
        'name' => 'setName',
        'organization' => 'setOrganization',
        'shared' => 'setShared',
        'signing_group' => 'setSigningGroup',
        'signing_group_name' => 'setSigningGroupName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'contact_uri' => 'getContactUri',
        'emails' => 'getEmails',
        'error_details' => 'getErrorDetails',
        'name' => 'getName',
        'organization' => 'getOrganization',
        'shared' => 'getShared',
        'signing_group' => 'getSigningGroup',
        'signing_group_name' => 'getSigningGroupName'
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['contact_uri'] = isset($data['contact_uri']) ? $data['contact_uri'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['signing_group'] = isset($data['signing_group']) ? $data['signing_group'] : null;
        $this->container['signing_group_name'] = isset($data['signing_group_name']) ? $data['signing_group_name'] : null;
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
     * Gets contact_id
     * @return string
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     * @param string $contact_id 
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets contact_uri
     * @return string
     */
    public function getContactUri()
    {
        return $this->container['contact_uri'];
    }

    /**
     * Sets contact_uri
     * @param string $contact_uri 
     * @return $this
     */
    public function setContactUri($contact_uri)
    {
        $this->container['contact_uri'] = $contact_uri;

        return $this;
    }

    /**
     * Gets emails
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     * @param string[] $emails 
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets error_details
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organization
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     * @param string $organization 
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets shared
     * @return string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     * @param string $shared When set to **true**, this custom tab is shared.
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets signing_group
     * @return string
     */
    public function getSigningGroup()
    {
        return $this->container['signing_group'];
    }

    /**
     * Sets signing_group
     * @param string $signing_group 
     * @return $this
     */
    public function setSigningGroup($signing_group)
    {
        $this->container['signing_group'] = $signing_group;

        return $this;
    }

    /**
     * Gets signing_group_name
     * @return string
     */
    public function getSigningGroupName()
    {
        return $this->container['signing_group_name'];
    }

    /**
     * Sets signing_group_name
     * @param string $signing_group_name The display name for the signing group.   Maximum Length: 100 characters.
     * @return $this
     */
    public function setSigningGroupName($signing_group_name)
    {
        $this->container['signing_group_name'] = $signing_group_name;

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
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}



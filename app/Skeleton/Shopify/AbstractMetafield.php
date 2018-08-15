<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 7:55 AM
 */

namespace App\Skeleton\Shopify;


class AbstractMetafield
{

    protected $created_at;
    protected $description;
    protected $id;
    protected $key;
    protected $namespace;
    protected $owner_id;
    protected $owner_resource;
    protected $value;
    protected $value_type;
    protected $updated_at;
    protected $admin_graphql_api_id;

    protected $shop;
    protected $access_token;

    const SINGULAR_NAME = 'metafield';
    const PLURAL_NAME = 'metafields';

    public function headers()
    {
        return [
            "Content-Type: application/json",
            "X-Shopify-Access-Token: " . $this->getAccessToken()
        ];
    }

    /**
     * @param int $limit
     * @param int $page
     * @param string $fields
     * @param string $query
     * @return array|AbstractMetafield[]
     */
    public function all( $limit = 250 , $page = 1 , $fields = '' ,  $query = '' )
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . self::PLURAL_NAME . '.json?page=' . $page .
                  '&limit=' . $limit . '&fields=' . $fields ;
        $client = new Client();
        $response = $client->request( $uri , '', 'GET' , $this->headers() ) ;

        if( property_exists( $response , self::PLURAL_NAME ) ){
            $metafields = $response->{ self::PLURAL_NAME };
            $returnData = [];
            if( ! empty( $metafields ) ){
                foreach( $metafields as $metafield ){
                    $returnData[] = $this->load( $metafield );
                }
            }
            return $returnData;
        }
        return [];
    }

    /**
     * @param string $id
     * @return array
     */
    public function get( $id )
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . self::PLURAL_NAME . DIRECTORY_SEPARATOR . $id . '.json';
        $client = new Client();
        $response = $client->request( $uri , '', 'GET' , $this->headers() ) ;
        $response = is_string( $response->response ) ? json_decode( $response->response ) : $response->response;

        if( property_exists( $response , self::PLURAL_NAME ) ){
            $metafields = $response->{ self::PLURAL_NAME };
            $returnData = [];
            if( ! empty( $metafields ) ){
                foreach( $metafields as $metafield ){
                    $returnData[] = $this->load( $metafield );
                }
            }
            return $returnData;
        }
        return [];
    }

    public function create()
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . self::PLURAL_NAME . '.json';
        // todo refactor - only send necessary properties
        unset(
            $this->created_at , $this->description , $this->id ,
            $this->owner_id, $this->owner_resource , $this->updated_at ,
            $this->admin_graphql_api_id
        );
        $client   = new Client();
        $response = $client->request( $uri , [ self::SINGULAR_NAME => $this ], 'POST' , $this->headers() ) ;
        if( $client->http_code === 201 ) return $response->{ self::SINGULAR_NAME };
        return false;
    }

    public function update()
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . self::PLURAL_NAME . '.json';
        // todo refactor - only send necessary properties
        unset(
            $this->created_at , $this->description , $this->id ,
            $this->owner_id, $this->owner_resource , $this->updated_at ,
            $this->admin_graphql_api_id
        );
        $client = new Client();
        $response = $client->request( $uri , [ self::SINGULAR_NAME => $this ], 'PUT' , $this->headers() ) ;
        if( $client->http_code === 200 ) return $response->{ self::SINGULAR_NAME };
        return false;
    }

    /**
     * @return array|int
     */
    public function count()
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . self::PLURAL_NAME . '/count.json';
        $client = new Client();
        $response = $client->request( $uri , '', 'GET' , $this->headers() ) ;
        $response = is_string( $response->response ) ? json_decode( $response->response ) : $response->response;
        if( property_exists( $response , 'count' ) ) return $response->count;

        return [];
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete( $id )
    {
        $uri    = 'https://' . $this->getShop() . '/admin/' . $id . '.json';
        $client = new Client();
        $client->request( $uri , '', 'DELETE' , $this->headers() ) ;

        if( $client->http_code === 200 ) return true;

        return false;
    }

    /**
     * @param $object
     * @return AbstractMetafield
     */
    public function load( $object )
    {
        $metafield = new self;
        return $metafield->setId( $this->loadProperty( $object , 'id' )  )
        ->setNamespace( $this->loadProperty( $object , 'namespace' )  )
        ->setKey( $this->loadProperty( $object , 'key' )  )
        ->setValue( $this->loadProperty( $object , 'value' )  )
        ->setValueType( $this->loadProperty( $object , 'value_type' )  )
        ->setDescription( $this->loadProperty( $object , 'description' )  )
        ->setOwnerId( $this->loadProperty( $object , 'owner_id' )  )
        ->setCreatedAt( $this->loadProperty( $object , 'created_at' )  )
        ->setUpdatedAt( $this->loadProperty( $object , 'updated_at' )  )
        ->setOwnerResource( $this->loadProperty( $object , 'owner_resource' )  )
        ->setAdminGraphqlApiId( $this->loadProperty( $object , 'admin_graphql_api_id' )  );
    }
    
    public function loadProperty( $object , $property ){
        if( ! is_object( $object ) ) return null; 
        return property_exists( $object , $property ) ? $object->{ $property } : null; 
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return AbstractMetafield
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return AbstractMetafield
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return AbstractMetafield
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     * @return AbstractMetafield
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param mixed $namespace
     * @return AbstractMetafield
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @param mixed $owner_id
     * @return AbstractMetafield
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerResource()
    {
        return $this->owner_resource;
    }

    /**
     * @param mixed $owner_resource
     * @return AbstractMetafield
     */
    public function setOwnerResource($owner_resource)
    {
        $this->owner_resource = $owner_resource;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AbstractMetafield
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * @param mixed $value_type
     * @return AbstractMetafield
     */
    public function setValueType($value_type)
    {
        $this->value_type = $value_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     * @return AbstractMetafield
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * @param mixed $shop
     * @return AbstractMetafield
     */
    public function setShop($shop)
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param mixed $access_token
     * @return AbstractMetafield
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdminGraphqlApiId()
    {
        return $this->admin_graphql_api_id;
    }

    /**
     * @param mixed $admin_graphql_api_id
     * @return AbstractMetafield
     */
    public function setAdminGraphqlApiId($admin_graphql_api_id)
    {
        $this->admin_graphql_api_id = $admin_graphql_api_id;
        return $this;
    }



}
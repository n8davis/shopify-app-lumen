<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:27 PM
 */

namespace App\Skeleton\Shopify;


use App\Skeleton\Shopify\Order\BillingAddress;
use App\Skeleton\Shopify\Order\Metafield;
use App\Skeleton\Shopify\Order\NoteAttribute;
use App\Skeleton\Shopify\Order\PaymentDetail;
use App\Skeleton\Shopify\Order\ShippingAddress;

class Order extends Shopify
{


    const NAME_SINGULAR = 'order';
    const NAME_PLURAL   = 'orders';
    const CANCEL_REASON_CUSTOMER = 'customer';
    const CANCEL_REASON_FRAUD = 'fraud';
    const CANCEL_REASON_INVENTORY = 'inventory';
    const CANCEL_REASON_DECLINED = 'declined';
    const CANCEL_REASON_OTHER = 'other';
    const FINANCIAL_STATUS_PENDING = 'pending';//: The payments are pending. Payment might fail in this state. Check again to confirm whether the payments have been paid successfully.
    const FINANCIAL_STATUS_AUTHORIZED = 'authorized';//: The payments have been authorized.
    const FINANCIAL_STATUS_PARTIALLY_PAID = 'partially_paid';//: The order have been partially paid.
    const FINANCIAL_STATUS_PAID = 'paid';//: The payments have been paid.
    const FINANCIAL_STATUS_PARTIALLY_REFUNDED = 'partially_refunded';//: The payments have been partially refunded.
    const FINANCIAL_STATUS_REFUNDED = 'refunded';//: The payments have been refunded.
    const FINANCIAL_STATUS_VOIDED = 'voided';//: The payments have been voided.
    const FULFILLMENT_STATUS_FULFILLED = 'fulfilled';// Every line item in the order has been fulfilled.
    const FULFILLMENT_STATUS_NULL = null;// None of the line items in the order have been fulfilled.
    const FULFILLMENT_STATUS_PARTIAL= 'partial';// At least one line item in the order has been fulfilled.
    const FULFILLMENT_STATUS_RESTOCKED = 'restocked';// Every line item in the order has been restocked and the order canceled.

    protected $app_id;
    protected $billing_address ;
    protected $browser_ip;
    protected $buyer_accepts_marketing;
    protected $cancel_reason;
    protected $cancelled_at;
    protected $cart_token;
    protected $client_details;
    protected $closed_at;
    protected $created_at;
    protected $currency;
    protected $customer ;
    protected $customer_locale;
    protected $discount_applications ;
    protected $discount_codes ;
    protected $email;
    protected $financial_status;
    protected $fulfillments ;
    protected $fulfillment_status;
    protected $id;
    protected $landing_site;
    protected $line_items ;
    protected $location_id;
    protected $metafield ;
    protected $name;
    protected $note;
    protected $note_attributes  ;
    protected $number;
    protected $order_number;
    protected $payment_details ;
    protected $payment_gateway_names ;
    protected $phone;
    protected $processed_at;
    protected $processing_method;
    protected $referring_site;
    protected $refunds ;
    protected $shipping_address ;
    protected $shipping_lines ;
    protected $source_name;
    protected $subtotal_price;
    protected $tags;
    protected $tax_lines ; 
    protected $taxes_included;
    protected $token;
    protected $total_discounts;
    protected $total_line_items_price;
    protected $total_price;
    protected $total_tax;
    protected $total_tip_received;
    protected $total_weight;
    protected $updated_at;
    protected $user_id;
    protected $order_status_url;

    public function getSingularName()
    {
        return self::NAME_SINGULAR;
    }

    public function getPluralName()
    {
        return self::NAME_PLURAL;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param mixed $app_id
     * @return Order
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param BillingAddress $billing_address
     * @return Order
     */
    public function setBillingAddress( BillingAddress $billing_address)
    {
        $this->billing_address = $billing_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserIp()
    {
        return $this->browser_ip;
    }

    /**
     * @param mixed $browser_ip
     * @return Order
     */
    public function setBrowserIp($browser_ip)
    {
        $this->browser_ip = $browser_ip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyerAcceptsMarketing()
    {
        return $this->buyer_accepts_marketing;
    }

    /**
     * @param mixed $buyer_accepts_marketing
     * @return Order
     */
    public function setBuyerAcceptsMarketing($buyer_accepts_marketing)
    {
        $this->buyer_accepts_marketing = $buyer_accepts_marketing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * @param mixed $cancel_reason
     * @return Order
     */
    public function setCancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelledAt()
    {
        return $this->cancelled_at;
    }

    /**
     * @param mixed $cancelled_at
     * @return Order
     */
    public function setCancelledAt($cancelled_at)
    {
        $this->cancelled_at = $cancelled_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCartToken()
    {
        return $this->cart_token;
    }

    /**
     * @param mixed $cart_token
     * @return Order
     */
    public function setCartToken($cart_token)
    {
        $this->cart_token = $cart_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientDetails()
    {
        return $this->client_details;
    }

    /**
     * @param mixed $client_details
     * @return Order
     */
    public function setClientDetails($client_details)
    {
        $this->client_details = $client_details;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }

    /**
     * @param mixed $closed_at
     * @return Order
     */
    public function setClosedAt($closed_at)
    {
        $this->closed_at = $closed_at;
        return $this;
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
     * @return Order
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \App\Skeleton\Shopify\Order\Customer $customer
     * @return Order
     */
    public function setCustomer( \App\Skeleton\Shopify\Order\Customer $customer )
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerLocale()
    {
        return $this->customer_locale;
    }

    /**
     * @param mixed $customer_locale
     * @return Order
     */
    public function setCustomerLocale($customer_locale)
    {
        $this->customer_locale = $customer_locale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountApplications()
    {
        return $this->discount_applications;
    }

    /**
     * @param mixed $discount_applications
     * @return Order
     */
    public function setDiscountApplications($discount_applications)
    {
        $this->discount_applications = $discount_applications;
        return $this;
    }

    public function addDiscountApplication( $discount_application ){
        $applications = $this->getDiscountApplications();
        $applications[] = $discount_application ;
        $this->setDiscountApplications( $applications ) ;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountCodes()
    {
        return $this->discount_codes;
    }

    /**
     * @param mixed $discount_codes
     * @return Order
     */
    public function setDiscountCodes($discount_codes)
    {
        $this->discount_codes = $discount_codes;
        return $this;
    }

    public function addDiscountCode( $discount_code )
    {
        $discount_codes = $this->getDiscountCodes();
        $discount_codes[] = $discount_code;
        $this->setDiscountCodes( $discount_codes );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinancialStatus()
    {
        return $this->financial_status;
    }

    /**
     * @param mixed $financial_status
     * @return Order
     */
    public function setFinancialStatus($financial_status)
    {
        $this->financial_status = $financial_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    /**
     * @param mixed $fulfillments
     * @return Order
     */
    public function setFulfillments($fulfillments)
    {
        $this->fulfillments = $fulfillments;
        return $this;
    }

    public function addFulfillment( $fulfillment )
    {
        $fulfillments = $this->getFulfillments();
        $fulfillments[] = $fulfillment;
        $this->setFulfillments( $fulfillments );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillment_status;
    }

    /**
     * @param mixed $fulfillment_status
     * @return Order
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $this->fulfillment_status = $fulfillment_status;
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
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLandingSite()
    {
        return $this->landing_site;
    }

    /**
     * @param mixed $landing_site
     * @return Order
     */
    public function setLandingSite($landing_site)
    {
        $this->landing_site = $landing_site;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineItems()
    {
        return $this->line_items;
    }

    /**
     * @param mixed $line_items
     * @return Order
     */
    public function setLineItems($line_items)
    {
        $this->line_items = $line_items;
        return $this;
    }

    public function addLineItem( $line_item )
    {
        $line_items = $this->getLineItems();
        $line_items[] = $line_item;
        $this->setLineItems( $line_items );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * @param mixed $location_id
     * @return Order
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Order
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return Order
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoteAttributes()
    {
        return $this->note_attributes;
    }

    /**
     * @param NoteAttribute $note_attributes
     * @return Order
     */
    public function setNoteAttributes( NoteAttribute $note_attributes)
    {
        $this->note_attributes = $note_attributes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Order
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param mixed $order_number
     * @return Order
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentDetails()
    {
        return $this->payment_details;
    }

    /**
     * @param PaymentDetail $payment_details
     * @return Order
     */
    public function setPaymentDetails( PaymentDetail $payment_details)
    {
        $this->payment_details = $payment_details;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentGatewayNames()
    {
        return $this->payment_gateway_names;
    }

    /**
     * @param mixed $payment_gateway_names
     * @return Order
     */
    public function setPaymentGatewayNames($payment_gateway_names)
    {
        $this->payment_gateway_names = $payment_gateway_names;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Order
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    /**
     * @param mixed $processed_at
     * @return Order
     */
    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProcessingMethod()
    {
        return $this->processing_method;
    }

    /**
     * @param mixed $processing_method
     * @return Order
     */
    public function setProcessingMethod($processing_method)
    {
        $this->processing_method = $processing_method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferringSite()
    {
        return $this->referring_site;
    }

    /**
     * @param mixed $referring_site
     * @return Order
     */
    public function setReferringSite($referring_site)
    {
        $this->referring_site = $referring_site;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param mixed $refunds
     * @return Order
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }

    public function addRefund( $refund )
    {
        $refunds = $this->getRefunds();
        $refunds[] = $refund ;
        $this->setRefunds( $refunds );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @param ShippingAddress $shipping_address
     * @return Order
     */
    public function setShippingAddress(ShippingAddress $shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingLines()
    {
        return $this->shipping_lines;
    }

    /**
     * @param mixed $shipping_lines
     * @return Order
     */
    public function setShippingLines($shipping_lines)
    {
        $this->shipping_lines = $shipping_lines;
        return $this;
    }

    public function addShippingLine( $shipping_line )
    {
        $shipping_lines = $this->getShippingLines();
        $shipping_lines[] = $shipping_line;
        $this->setShippingLines( $shipping_lines );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceName()
    {
        return $this->source_name;
    }

    /**
     * @param mixed $source_name
     * @return Order
     */
    public function setSourceName($source_name)
    {
        $this->source_name = $source_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtotalPrice()
    {
        return $this->subtotal_price;
    }

    /**
     * @param mixed $subtotal_price
     * @return Order
     */
    public function setSubtotalPrice($subtotal_price)
    {
        $this->subtotal_price = $subtotal_price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     * @return Order
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxLines()
    {
        return $this->tax_lines;
    }

    /**
     * @param mixed $tax_lines
     * @return Order
     */
    public function setTaxLines($tax_lines)
    {
        $this->tax_lines = $tax_lines;
        return $this;
    }

    public function addTaxLine( $tax_line )
    {
        $tax_lines = $this->getTaxLines();
        $tax_lines[] = $tax_line;
        $this->setTaxLines( $tax_lines );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxesIncluded()
    {
        return $this->taxes_included;
    }

    /**
     * @param mixed $taxes_included
     * @return Order
     */
    public function setTaxesIncluded($taxes_included)
    {
        $this->taxes_included = $taxes_included;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     * @return Order
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscounts()
    {
        return $this->total_discounts;
    }

    /**
     * @param mixed $total_discounts
     * @return Order
     */
    public function setTotalDiscounts($total_discounts)
    {
        $this->total_discounts = $total_discounts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalLineItemsPrice()
    {
        return $this->total_line_items_price;
    }

    /**
     * @param mixed $total_line_items_price
     * @return Order
     */
    public function setTotalLineItemsPrice($total_line_items_price)
    {
        $this->total_line_items_price = $total_line_items_price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param mixed $total_price
     * @return Order
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * @param mixed $total_tax
     * @return Order
     */
    public function setTotalTax($total_tax)
    {
        $this->total_tax = $total_tax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalTipReceived()
    {
        return $this->total_tip_received;
    }

    /**
     * @param mixed $total_tip_received
     * @return Order
     */
    public function setTotalTipReceived($total_tip_received)
    {
        $this->total_tip_received = $total_tip_received;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalWeight()
    {
        return $this->total_weight;
    }

    /**
     * @param mixed $total_weight
     * @return Order
     */
    public function setTotalWeight($total_weight)
    {
        $this->total_weight = $total_weight;
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
     * @return Order
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return Order
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusUrl()
    {
        return $this->order_status_url;
    }

    /**
     * @param mixed $order_status_url
     * @return Order
     */
    public function setOrderStatusUrl($order_status_url)
    {
        $this->order_status_url = $order_status_url;
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
     * @return Order
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
     * @return Order
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param mixed $errors
     * @return Order
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param mixed $results
     * @return Order
     */
    public function setResults($results)
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    /**
     * @param Metafield $metafield
     * @return Order
     */
    public function setMetafield( Metafield $metafield)
    {
        $this->metafield = $metafield;
        return $this;
    }



}
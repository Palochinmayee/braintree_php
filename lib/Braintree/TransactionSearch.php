<?php
class Braintree_TransactionSearch
{
	static function billingCompany()             { return new Braintree_TextNode('billing_company'); }
	static function billingCountryName()         { return new Braintree_TextNode('billing_country_name'); }
	static function billingExtendedAddress()     { return new Braintree_TextNode('billing_extended_address'); }
	static function billingFirstName()           { return new Braintree_TextNode('billing_first_name'); }
	static function billingLastName()            { return new Braintree_TextNode('billing_last_name'); }
	static function billingLocality()            { return new Braintree_TextNode('billing_locality'); }
	static function billingPostalCode()          { return new Braintree_TextNode('billing_postal_code'); }
	static function billingRegion()              { return new Braintree_TextNode('billing_region'); }
	static function billingStreetAddress()       { return new Braintree_TextNode('billing_street_address'); }
	static function creditCardCardholderName()   { return new Braintree_TextNode('credit_card_cardholderName'); }
	static function creditCardExpirationDate()   { return new Braintree_TextNode('credit_card_expiration_date'); }
	static function creditCardNumber()           { return new Braintree_TextNode('credit_card_number'); }
	static function customerCompany()            { return new Braintree_TextNode('customer_company'); }
	static function customerEmail()              { return new Braintree_TextNode('customer_email'); }
	static function customerFax()                { return new Braintree_TextNode('customer_fax'); }
	static function customerFirstName()          { return new Braintree_TextNode('customer_first_name'); }
	static function customerId()                 { return new Braintree_TextNode('customer_id'); }
	static function customerLastName()           { return new Braintree_TextNode('customer_last_name'); }
	static function customerPhone()              { return new Braintree_TextNode('customer_phone'); }
	static function customerWebsite()            { return new Braintree_TextNode('customer_website'); }
	static function id()                         { return new Braintree_TextNode('id'); }
	static function orderId()                    { return new Braintree_TextNode('order_id'); }
	static function paymentMethodToken()         { return new Braintree_TextNode('payment_method_token'); }
	static function processorAuthorizationCode() { return new Braintree_TextNode('processor_authorization_code'); }
	static function shippingCompany()            { return new Braintree_TextNode('shipping_company'); }
	static function shippingCountryName()        { return new Braintree_TextNode('shipping_country_name'); }
	static function shippingExtendedAddress()    { return new Braintree_TextNode('shipping_extended_address'); }
	static function shippingFirstName()          { return new Braintree_TextNode('shipping_first_name'); }
	static function shippingLastName()           { return new Braintree_TextNode('shipping_last_name'); }
	static function shippingLocality()           { return new Braintree_TextNode('shipping_locality'); }
	static function shippingPostalCode()         { return new Braintree_TextNode('shipping_postal_code'); }
	static function shippingRegion()             { return new Braintree_TextNode('shipping_region'); }
	static function shippingStreetAddress()      { return new Braintree_TextNode('shipping_street_address'); }

	static function createdUsing()               { return new Braintree_MultipleValueNode("created_using"); }
	static function creditCardCardType()         { return new Braintree_MultipleValueNode("credit_card_card_type"); }
	static function creditCardCustomerLocation() { return new Braintree_MultipleValueNode("credit_card_customer_location"); }
	static function merchantAccountId()          { return new Braintree_MultipleValueNode("merchant_account_id"); }
	static function source()                     { return new Braintree_MultipleValueNode("source"); }
	static function status()                     { return new Braintree_MultipleValueNode("status"); }
	static function type()                       { return new Braintree_MultipleValueNode("type"); }

	static function refund()                     { return new Braintree_KeyValueNode("refund"); }
}
?>
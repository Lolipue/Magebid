<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the source of the item's eligibility for the BuyerProtection Program. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AuthTokenTypeCodeType.html
 *
 * @property string ClientAlertsToken
 * @property string CustomCode
 */
class AuthTokenTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ClientAlertsToken = 'ClientAlertsToken';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AuthTokenTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AuthTokenTypeCodeType = new AuthTokenTypeCodeType();

?>

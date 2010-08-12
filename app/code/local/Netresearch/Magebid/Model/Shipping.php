<?php
/**
 * Netresearch_Magebid_Model_Shipping
 *
 * @category  Netresearch
 * @package   Netresearch_Magebid
 * @author    André Herrn <andre.herrn@netresearch.de>
 * @copyright 2010 André Herrn
 * @link      http://www.magebid.de/
*/
class Netresearch_Magebid_Model_Shipping extends Mage_Core_Model_Abstract
{
    /**
     * Construct
     *
     * @return void
     */	
	protected function _construct()
    {
        $this->_init('magebid/shipping');
    }
}
?>

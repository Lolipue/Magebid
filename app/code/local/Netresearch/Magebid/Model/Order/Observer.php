<?php
/**
 * Netresearch_Magebid_Model_Order_Observer
 *
 * @category  Netresearch
 * @package   Netresearch_Magebid
 * @author    André Herrn <andre.herrn@netresearch.de>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.de/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Netresearch_Magebid_Model_Order_Observer extends Mage_Core_Model_Abstract
{
    /**
     * Observer is executed when the Stage of a Magento Order was changed
     * 
     * If it is an order, created by Magebid, change the eBay Order Status
     * 
     * @param Mage_Observer $observer
     */
    public function change_order_state($observer)
    {	   
		//Get event
		$event = $observer->getEvent();

		//Get order
		$order = $event->getOrder();
		
		//Check if it is an eBay Order
		if (Mage::getModel('magebid/transaction')->load($order->getIncrementId(),'order_id')->getId())
		{		
			//Get status
			$old_status = $order->getStatus();
			$new_status = $event->getChangeState();
			
			//Set new Status on eBay
			Mage::getSingleton('magebid/order_status')->setEbayStatus($order,$new_status);			
		}
    }
}

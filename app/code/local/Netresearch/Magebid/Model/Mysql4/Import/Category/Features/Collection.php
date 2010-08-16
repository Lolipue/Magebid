<?php
/**
 * Netresearch_Magebid_Model_Mysql4_Import_Category_Features_Collection
 *
 * @category  Netresearch
 * @package   Netresearch_Magebid
 * @author    André Herrn <andre.herrn@netresearch.de>
 * @copyright 2010 André Herrn
 * @link      http://www.magebid.de/
*/
class Netresearch_Magebid_Model_Mysql4_Import_Category_Features_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    /**
     * Construct
     *
     * @return void
     */	
    protected function _construct()
    {
        parent::_construct();
        $this->_init('magebid/import_category_features');
	}	

    /**
     * Defining value and label for option-select-boxes
     *
     * @return array
     */	    	
	public function toOptionArray()
	{
		return parent::_toOptionArray('value_id','value_display_name');
	}	
}
?>
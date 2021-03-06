<?php
/**
 * Mbid_Magebid_Model_Log
 *
 * @category  Mbid
 * @package   Mbid_Magebid
 * @author    André Herrn <info@magebid.com>
 * @copyright 2010 André Herrn | Netresearch GmbH & Co.KG (http://www.netresearch.de)
 * @link      http://www.magebid.com/
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Mbid_Magebid_Model_Log extends Mage_Core_Model_Abstract
{
    /**
     * Construct
     *
     * @return void
     */	
	protected function _construct()
    {
        $this->_init('magebid/log');
    }
    
    /**
     * Saves a success message in the database if activated
     *
     * @return void
     */	   
    public function logSuccess($type,$title,$request,$response="",$additional="")
    {
    	if (Mage::getStoreConfig('magebid/magebid_log/success')) $this->logging($type,$title,$request,$response,$additional,"success");
    }

    /**
     * Saves a warning message in the database if activated
     *
     * @return void
     */	       
    public function logWarning($type,$title,$request,$response="",$additional="")
    {
    	if (Mage::getStoreConfig('magebid/magebid_log/warning')) $this->logging($type,$title,$request,$response,$additional,"warning");
    }

    /**
     * Saves a error message in the database if activated
     *
     * @return void
     */	     
    public function logError($type,$title,$request,$response="",$additional="")
    {
    	if (Mage::getStoreConfig('magebid/magebid_log/error')) $this->logging($type,$title,$request,$response,$additional,"error");
    }    
    
    /**
     * Main DB-Storage-Function for the logging-process
     *
     * @return void
     */	   
    protected function logging($type,$title,$request,$response,$additional,$result)
    { 
    	$log_data = array(
			'type' => $type,
			'title' => $title,
			'request' => $request,
     		'response' => $response,
     		'additional' => $additional,
			'result' => $result,
    		'date_created' => date('Y-m-d H:i:s')
		);		
    	
    	$this->addData($log_data);		
	    $this->save();  
    }
}
?>

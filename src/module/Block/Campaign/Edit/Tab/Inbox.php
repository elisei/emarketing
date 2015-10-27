<?php
/**
 * Mzax Emarketing (www.mzax.de)
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this Extension in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * 
 * @version     {{version}}
 * @category    Mzax
 * @package     Mzax_Emarketing
 * @author      Jacob Siefer (jacob@mzax.de)
 * @copyright   Copyright (c) 2015 Jacob Siefer
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


class Mzax_Emarketing_Block_Campaign_Edit_Tab_Inbox extends Mzax_Emarketing_Block_Inbox_Grid
{


    
    protected function _prepareCollection()
    {
        /* @var $campaign Mzax_Emarketing_Model_Campaign */
        $campaign = Mage::registry('current_campaign');
        
        $this->getCollection()->addFieldToFilter('campaign_id', $campaign->getId());
        parent::_prepareCollection();
    }
    
    
    
    
    protected function _prepareColumns()
    {
        parent::_prepareColumns();
        $this->removeColumn('campaign');
        
    }
    
    

    public function getGridUrl()
    {
        return $this->getUrl('*/*/bounces', array('_current'=> true));
    }
    
    public function getRowUrl($row)
    {
        return $this->getUrl('*/emarketing_inbox/email', array('id'=>$row->getId()));
    }
    
}

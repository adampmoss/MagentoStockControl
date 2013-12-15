<?php
 
class Creare_StockControl_Block_Adminhtml_Stock_Grid_Renderer_Instock extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
        {
		
            $instock = $row->getData($this->getColumn()->getIndex());

            if ($instock)
            {
                $type = 'notice';
                $text = Mage::helper('stockcontrol')->__('In Stock');
            } else {
                $type = 'critical';
                $text = Mage::helper('stockcontrol')->__('Out of Stock');
            }

            return '<span onclick="changeStatus('.$row->getId().', \''.$instock.'\')" class="grid-severity-'.$type.'"><span>'.$text.'</span></span>';
    }
}
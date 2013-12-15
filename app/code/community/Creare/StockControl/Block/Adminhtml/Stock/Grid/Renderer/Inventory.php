<?php
 
class Creare_StockControl_Block_Adminhtml_Stock_Grid_Renderer_Inventory extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row) {
		
        $qty = $row->getData($this->getColumn()->getIndex());
		
        return '<input onblur="updateStock(this, '. $row->getId() .'); return false" style="border:1px solid #ccc; line-height:16px; padding:0 3px;" type="text" name="qty" value="'.(float)$qty.'" />';
        
    }
}
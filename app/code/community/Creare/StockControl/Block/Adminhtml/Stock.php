<?php
 
class Creare_StockControl_Block_Adminhtml_Stock extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_blockGroup = 'stockcontrol';
        $this->_controller = 'adminhtml_stock';
        $this->_headerText = Mage::helper('stockcontrol')->__('Stock Control');
        $this->_removeButton('add');
    }
}
<?php

class Creare_StockControl_Adminhtml_StockController extends Mage_Adminhtml_Controller_Action
{
    
    public function indexAction()
    {
        $this->_title($this->__('Catalog'))->_title($this->__('Stock Control'));
        $this->loadLayout();
        $this->_setActiveMenu('catalog/stockcontrol');
        $this->renderLayout();
    }
    
    public function gridAction()
    {
	$this->loadLayout('adminhtml_stock_grid');
        $this->renderLayout();
    }
    
    public function updateStockAction()
    {
        $this->adminStock()->updateStock();
    }
    
    public function changeStatusAction()
    {
        $this->adminStock()->changeStatus();
    }
    
    public function adminStock()
    {
        return Mage::getModel('stockcontrol/adminhtml_stock');
    }
}
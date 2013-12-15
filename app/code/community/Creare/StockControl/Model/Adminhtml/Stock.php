<?php

class Creare_StockControl_Model_Adminhtml_Stock extends Mage_Core_Model_Abstract
{
    public function updateStock()
    {
        $product_id = (int) Mage::app()->getRequest()->getParam('id');
        $qty = Mage::app()->getRequest()->getParam('qty');
        
        if (is_numeric($qty))
        {
            $stock_item = Mage::getModel('cataloginventory/stock_item')->loadByProduct($product_id);
            $stock_item->setQty($qty);
            
            if ($qty > 0 && Mage::getStoreConfig('cataloginventory/stockcontrol/change_status'))
            {
                $stock_item->setIsInStock(1);
            } else {
                $stock_item->setIsInStock(0);
            }

            try {
                $stock_item->save();
            } catch (Exception $e) {
                Mage::log($e->getMessage(), null, 'exception.log');
            }
        }
    }
    
    public function changeStatus()
    {
        $product_id = (int) Mage::app()->getRequest()->getParam('id');
        $instock = Mage::app()->getRequest()->getParam('instock');
        
        $stock_item = Mage::getModel('cataloginventory/stock_item')->loadByProduct($product_id);
        
        if ($instock)
        {
            $stock_item->setIsInStock(0);
        } else {
            $stock_item->setIsInStock(1);
        }
        $stock_item->save();
    }
}

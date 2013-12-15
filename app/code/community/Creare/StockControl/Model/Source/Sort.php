<?php

class Creare_StockControl_Model_Source_Sort
{
    public function toOptionArray()
    {
      return array(
        array('value' => 'entity_id', 'label' => Mage::helper('stockcontrol')->__('Product ID')),
        array('value' => 'name', 'label' => Mage::helper('stockcontrol')->__('Product Name')),
        array('value' => 'qty', 'label' => Mage::helper('stockcontrol')->__('Product Qty')),
        array('value' => 'is_in_stock', 'label' => Mage::helper('stockcontrol')->__('Stock Status'))
      );
    }
}
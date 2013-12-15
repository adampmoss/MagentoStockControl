<?php

class Creare_StockControl_Model_Source_Order
{
    public function toOptionArray()
    {
      return array(
        array('value' => 'asc', 'label' => Mage::helper('stockcontrol')->__('Ascending')),
        array('value' => 'desc', 'label' => Mage::helper('stockcontrol')->__('Descending'))
      );
    }
}
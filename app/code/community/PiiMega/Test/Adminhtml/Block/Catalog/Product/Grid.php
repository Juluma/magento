<?php

// https://www.atwix.com/magento/thumbnail-images-admin-product-grid/
// Add an extra column for delivery time to admin product grid

class Piimega_Test_Adminhtml_Block_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    protected function _prepareColumns()
    {
        // Add column
        $this->addColumn('delivery_time', [
            'header' => Mage::helper('catalog')->__('Delivery Time'),
            'width' => '50px',
            'index' => 'delivery_time'
        ]);

        return parent::_prepareColumns();
    }
}

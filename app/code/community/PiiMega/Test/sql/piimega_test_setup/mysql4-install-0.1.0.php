<?php

$installer = $this;
$installer->startSetup();

// Create attribute
$attributeCode = 'delivery_time';
$attributeLabel = 'Delivery Time';
$attribute  = array(
    'group'                     => 'General',
    'input'                     => 'text',
    'type'                      => 'varchar',
    'label'                     => $attributeLabel,
    'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'                   => 1,
    'required'                  => false,
    'visible_on_front'          => 0,
    'is_html_allowed_on_front'  => 0,
    'is_configurable'           => 0,
    'searchable'                => 0,
    'filterable'                => 0,
    'comparable'                => 0,
    'unique'                    => false,
    'user_defined'              => true,
    'default'                   => '0',
    'is_user_defined'           => true,
    'used_in_product_listing'   => true
);
$installer->addAttribute('catalog_product', $attributeCode, $attribute);

// Assign the created attribute to each attribute set
$entityType = Mage::getModel('catalog/product')->getResource()->getEntityType();
$collection = Mage::getResourceModel('eav/entity_attribute_set_collection')->setEntityTypeFilter($entityType->getId());
foreach ($collection as $attributeSet)
{
    $attributeGroupId = $installer->getDefaultAttributeGroupId('catalog_product', $attributeSet->getId());
    $installer->addAttributeToSet('catalog_product', $attributeSet->getId(), $attributeGroupId, $attributeCode);
}

$installer->endSetup();

// Save random value between 3 - 14 to this attribute for each product
Mage::app()->getStore()->setId(Mage_Core_Model_App::ADMIN_STORE_ID);

$collection = Mage::getModel('catalog/product')->getCollection();
foreach ($collection as $_product)
{
    $product = Mage::getModel('catalog/product')->load($_product->getId());
    $deliveryTime = mt_rand(3, 14);
    $product->setDeliveryTime($deliveryTime);
    $product->save();
}
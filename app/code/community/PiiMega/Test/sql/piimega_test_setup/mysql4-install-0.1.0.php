<?php

$installer = $this;
$installer->startSetup();

$attributeCode = 'delivery_time';
$attributeLabel = 'Delivery Time';
$attribute  = array(
    'group'                     => 'General',
    'input'                     => 'varchar',
    'type'                      => 'text',
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
$installer->endSetup();


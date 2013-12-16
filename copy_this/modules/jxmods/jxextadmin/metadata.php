<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxextadmin',
    'title'        => 'jxExtAdmin - Extended Admin',
    'description'  => array(
                        'de' => 'Erweiterung des Admin',
                        'en' => 'Extension of Admin'
                        ),
    'thumbnail'    => 'jxextadmin.png',
    'version'      => '0.1',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxExtAdmin',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
            'jxextadmin_install'  => 'jxmods/jxextadmin/application/controllers/admin/jxextadmin_install.php',
                        ),
    'templates'    => array(
                        ),
    'blocks' => array(
                    array(
                        'template' => 'vendor_list.tpl', 
                        'block'    => 'admin_vendor_list_colgroup',                     
                        'file'     => '/out/blocks/admin_vendor_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'vendor_list.tpl', 
                        'block'    => 'admin_vendor_list_filter',                     
                        'file'     => '/out/blocks/admin_vendor_list_filter.tpl'
                            ),
                    array(
                        'template' => 'vendor_list.tpl', 
                        'block'    => 'admin_vendor_list_sorting',                     
                        'file'     => '/out/blocks/admin_vendor_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'vendor_list.tpl', 
                        'block'    => 'admin_vendor_list_item',                     
                        'file'     => '/out/blocks/admin_vendor_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'manufacturer_list.tpl', 
                        'block'    => 'admin_manufacturer_list_colgroup',                     
                        'file'     => '/out/blocks/admin_manufacturer_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'manufacturer_list.tpl', 
                        'block'    => 'admin_manufacturer_list_filter',                     
                        'file'     => '/out/blocks/admin_manufacturer_list_filter.tpl'
                            ),
                    array(
                        'template' => 'manufacturer_list.tpl', 
                        'block'    => 'admin_manufacturer_list_sorting',                     
                        'file'     => '/out/blocks/admin_manufacturer_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'manufacturer_list.tpl', 
                        'block'    => 'admin_manufacturer_list_item',                     
                        'file'     => '/out/blocks/admin_manufacturer_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'payment_list.tpl', 
                        'block'    => 'admin_payment_list_colgroup',                     
                        'file'     => '/out/blocks/admin_payment_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'payment_list.tpl', 
                        'block'    => 'admin_payment_list_filter',                     
                        'file'     => '/out/blocks/admin_payment_list_filter.tpl'
                            ),
                    array(
                        'template' => 'payment_list.tpl', 
                        'block'    => 'admin_payment_list_sorting',                     
                        'file'     => '/out/blocks/admin_payment_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'payment_list.tpl', 
                        'block'    => 'admin_payment_list_item',                     
                        'file'     => '/out/blocks/admin_payment_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'discount_list.tpl', 
                        'block'    => 'admin_discount_list_colgroup',                     
                        'file'     => '/out/blocks/admin_discount_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'discount_list.tpl', 
                        'block'    => 'admin_discount_list_filter',                     
                        'file'     => '/out/blocks/admin_discount_list_filter.tpl'
                            ),
                    array(
                        'template' => 'discount_list.tpl', 
                        'block'    => 'admin_discount_list_sorting',                     
                        'file'     => '/out/blocks/admin_discount_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'discount_list.tpl', 
                        'block'    => 'admin_discount_list_item',                     
                        'file'     => '/out/blocks/admin_discount_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'deliveryset_list.tpl', 
                        'block'    => 'admin_deliveryset_list_colgroup',                     
                        'file'     => '/out/blocks/admin_deliveryset_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'deliveryset_list.tpl', 
                        'block'    => 'admin_deliveryset_list_filter',                     
                        'file'     => '/out/blocks/admin_deliveryset_list_filter.tpl'
                            ),
                    array(
                        'template' => 'deliveryset_list.tpl', 
                        'block'    => 'admin_deliveryset_list_sorting',                     
                        'file'     => '/out/blocks/admin_deliveryset_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'deliveryset_list.tpl', 
                        'block'    => 'admin_deliveryset_list_item',                     
                        'file'     => '/out/blocks/admin_deliveryset_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'delivery_list.tpl', 
                        'block'    => 'admin_delivery_list_colgroup',                     
                        'file'     => '/out/blocks/admin_delivery_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'delivery_list.tpl', 
                        'block'    => 'admin_delivery_list_filter',                     
                        'file'     => '/out/blocks/admin_delivery_list_filter.tpl'
                            ),
                    array(
                        'template' => 'delivery_list.tpl', 
                        'block'    => 'admin_delivery_list_sorting',                     
                        'file'     => '/out/blocks/admin_delivery_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'delivery_list.tpl', 
                        'block'    => 'admin_delivery_list_item',                     
                        'file'     => '/out/blocks/admin_delivery_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'wrapping_list.tpl', 
                        'block'    => 'admin_wrapping_list_colgroup',                     
                        'file'     => '/out/blocks/admin_wrapping_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'wrapping_list.tpl', 
                        'block'    => 'admin_wrapping_list_filter',                     
                        'file'     => '/out/blocks/admin_wrapping_list_filter.tpl'
                            ),
                    array(
                        'template' => 'wrapping_list.tpl', 
                        'block'    => 'admin_wrapping_list_sorting',                     
                        'file'     => '/out/blocks/admin_wrapping_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'wrapping_list.tpl', 
                        'block'    => 'admin_wrapping_list_item',                     
                        'file'     => '/out/blocks/admin_wrapping_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'attribute_list.tpl', 
                        'block'    => 'admin_attribute_list_colgroup',                     
                        'file'     => '/out/blocks/admin_attribute_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'attribute_list.tpl', 
                        'block'    => 'admin_attribute_list_filter',                     
                        'file'     => '/out/blocks/admin_attribute_list_filter.tpl'
                            ),
                    array(
                        'template' => 'attribute_list.tpl', 
                        'block'    => 'admin_attribute_list_sorting',                     
                        'file'     => '/out/blocks/admin_attribute_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'attribute_list.tpl', 
                        'block'    => 'admin_attribute_list_item',                     
                        'file'     => '/out/blocks/admin_attribute_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'usergroup_list.tpl', 
                        'block'    => 'admin_usergroup_list_colgroup',                     
                        'file'     => '/out/blocks/admin_usergroup_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'usergroup_list.tpl', 
                        'block'    => 'admin_usergroup_list_filter',                     
                        'file'     => '/out/blocks/admin_usergroup_list_filter.tpl'
                            ),
                    array(
                        'template' => 'usergroup_list.tpl', 
                        'block'    => 'admin_usergroup_list_sorting',                     
                        'file'     => '/out/blocks/admin_usergroup_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'usergroup_list.tpl', 
                        'block'    => 'admin_usergroup_list_item',                     
                        'file'     => '/out/blocks/admin_usergroup_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'news_list.tpl', 
                        'block'    => 'admin_news_list_colgroup',                     
                        'file'     => '/out/blocks/admin_news_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'news_list.tpl', 
                        'block'    => 'admin_news_list_filter',                     
                        'file'     => '/out/blocks/admin_news_list_filter.tpl'
                            ),
                    array(
                        'template' => 'news_list.tpl', 
                        'block'    => 'admin_news_list_sorting',                     
                        'file'     => '/out/blocks/admin_news_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'news_list.tpl', 
                        'block'    => 'admin_news_list_item',                     
                        'file'     => '/out/blocks/admin_news_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'adminlinks_list.tpl', 
                        'block'    => 'admin_adminlinks_list_colgroup',                     
                        'file'     => '/out/blocks/admin_adminlinks_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'adminlinks_list.tpl', 
                        'block'    => 'admin_adminlinks_list_filter',                     
                        'file'     => '/out/blocks/admin_adminlinks_list_filter.tpl'
                            ),
                    array(
                        'template' => 'adminlinks_list.tpl', 
                        'block'    => 'admin_adminlinks_list_sorting',                     
                        'file'     => '/out/blocks/admin_adminlinks_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'adminlinks_list.tpl', 
                        'block'    => 'admin_adminlinks_list_item',                     
                        'file'     => '/out/blocks/admin_adminlinks_list_item.tpl'
                            ),
        
                    array(
                        'template' => 'content_list.tpl', 
                        'block'    => 'admin_content_list_colgroup',                     
                        'file'     => '/out/blocks/admin_content_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'content_list.tpl', 
                        'block'    => 'admin_content_list_filter',                     
                        'file'     => '/out/blocks/admin_content_list_filter.tpl'
                            ),
                    array(
                        'template' => 'content_list.tpl', 
                        'block'    => 'admin_content_list_sorting',                     
                        'file'     => '/out/blocks/admin_content_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'content_list.tpl', 
                        'block'    => 'admin_content_list_item',                     
                        'file'     => '/out/blocks/admin_content_list_item.tpl'
                            ),
                        ),
    'events'       => array(
        'onActivate'   => 'jxextadmin_install::onActivate', 
        'onDeactivate' => 'jxextadmin_install::onDeactivate'
                        ),
    'settings' => array(
                        )
    );

?>

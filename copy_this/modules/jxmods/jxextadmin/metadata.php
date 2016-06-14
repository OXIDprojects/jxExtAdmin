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
    'title'        => 'jxExtAdmin - Extends OXID Admin',
    'description'  => array(
                        'de' => 'Erweiterung des Admin (<a href="https://github.com/job963/jxExtAdmin/blob/master/README.md" target="_blank"><u>siehe README</u></a>)',
                        'en' => 'Extension of Admin (<a href="https://github.com/job963/jxExtAdmin/blob/master/README.md" target="_blank"><u>see README</u></a>)'
                        ),
    'thumbnail'    => 'jxextadmin.png',
    'version'      => '0.4.0',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxExtAdmin',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        'oxcategory' => 'jxmods/jxextadmin/application/models/jxextadmin_oxcategory',
                        'jxextadmin_category_assigned' => 'jxmods/jxextadmin/application/controllers/admin/jxextadmin_category_assigned',
                        ),
    'files'        => array(
                        'jxextadmin_install' => 'jxmods/jxextadmin/application/controllers/admin/jxextadmin_install.php',
                        'jxextadmin_category_assigned' => 'jxmods/jxextadmin/application/controllers/admin/jxextadmin_category_assigned.php',
                        ),
    'templates'    => array(
                        'jxextadmin_category_assigned.tpl' => 'jxmods/jxextadmin/application/views/admin/tpl/jxextadmin_category_assigned.tpl',
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
                        'template' => 'user_main.tpl', 
                        'block'    => 'admin_user_main_form',                     
                        'file'     => '/out/blocks/admin_user_main_form.tpl'
                        ),
                    array(
                        'template' => 'user_main.tpl', 
                        'block'    => 'admin_user_main_usergroups',                     
                        'file'     => '/out/blocks/admin_user_main_usergroups.tpl'
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
                        'template' => 'list_user.tpl', 
                        'block'    => 'admin_list_user_filter',                     
                        'file'     => '/out/blocks/admin_list_user_filter.tpl'
                        ),
                    array(
                        'template' => 'list_user.tpl', 
                        'block'    => 'admin_list_user_sorting',                     
                        'file'     => '/out/blocks/admin_list_user_sorting.tpl'
                        ),
                    array(
                        'template' => 'list_user.tpl', 
                        'block'    => 'admin_list_user_item',                     
                        'file'     => '/out/blocks/admin_list_user_item.tpl'
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

        
                    array(
                        'template' => 'article_main.tpl', 
                        'block'    => 'admin_article_main_form',                     
                        'file'     => '/out/blocks/admin_article_main_form.tpl'
                            ),
                    array(
                        'template' => 'article_main.tpl', 
                        'block'    => 'admin_article_main_editor',                     
                        'file'     => '/out/blocks/admin_article_main_editor.tpl'
                            ),
                    array(
                        'template' => 'article_extend.tpl', 
                        'block'    => 'admin_article_extend_categories',                     
                        'file'     => '/out/blocks/admin_article_extend_categories.tpl'
                            ),
                    array(
                        'template' => 'article_crossselling.tpl', 
                        'block'    => 'admin_article_crossselling_crossselling',                     
                        'file'     => '/out/blocks/admin_article_crossselling_crossselling.tpl'
                            ),
                    array(
                        'template' => 'article_crossselling.tpl', 
                        'block'    => 'admin_article_crossselling_accessoires',                     
                        'file'     => '/out/blocks/admin_article_crossselling_accessoires.tpl'
                            ),
                    array(
                        'template' => 'article_stock.tpl', 
                        'block'    => 'admin_article_stock_form',                     
                        'file'     => '/out/blocks/admin_article_stock_form.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_listheader',                     
                        'file'     => '/out/blocks/admin_article_variant_listheader.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_parent',                     
                        'file'     => '/out/blocks/admin_article_variant_parent.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_listitem',                     
                        'file'     => '/out/blocks/admin_article_variant_listitem.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_newitem',                     
                        'file'     => '/out/blocks/admin_article_variant_newitem.tpl'
                            ),
                    array(
                        'template' => 'article_pictures.tpl', 
                        'block'    => 'admin_article_pictures_main',                     
                        'file'     => '/out/blocks/admin_article_pictures_main.tpl'
                            ),
                    array(
                        'template' => 'article_pictures.tpl', 
                        'block'    => 'admin_article_pictures_custom',                     
                        'file'     => '/out/blocks/admin_article_pictures_custom.tpl'
                            ),
                    array(
                        'template' => 'headitem.tpl', 
                        'block'    => 'admin_headitem_js',                     
                        'file'     => '/out/blocks/jxextadmin_admin_headitem_js.tpl'
                            ),
                
        
                    array(
                        'template' => 'category_list.tpl', 
                        'block'    => 'admin_category_list_colgroup',                     
                        'file'     => '/out/blocks/admin_category_list_colgroup.tpl'
                            ),
                    array(
                        'template' => 'category_list.tpl', 
                        'block'    => 'admin_category_list_filter',                     
                        'file'     => '/out/blocks/admin_category_list_filter.tpl'
                            ),
                    array(
                        'template' => 'category_list.tpl', 
                        'block'    => 'admin_category_list_sorting',                     
                        'file'     => '/out/blocks/admin_category_list_sorting.tpl'
                            ),
                    array(
                        'template' => 'category_list.tpl', 
                        'block'    => 'admin_category_list_item',                     
                        'file'     => '/out/blocks/admin_category_list_item.tpl'
                            ),
                    array(
                        'template' => 'category_main.tpl', 
                        'block'    => 'admin_category_main_articles',                     
                        'file'     => '/out/blocks/admin_category_main_articles.tpl'
                            ),
                    array(
                        'template' => 'category_main.tpl', 
                        'block'    => 'admin_category_main_attributes',                     
                        'file'     => '/out/blocks/admin_category_main_attributes.tpl'
                            ),
        
                        ),
    'events'       => array(
                        'onActivate'   => 'jxextadmin_install::onActivate', 
                        'onDeactivate' => 'jxextadmin_install::onDeactivate'
                        ),
    'settings' => array(
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticleMain', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticleCategories', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticleCrosssell', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticleStock', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticleVariant', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowArticlePictures', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_BLOCKS', 
                            'name'  => 'sJxExtAdminShowUserGroups', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
        
        
                    array(
                            'group' => 'JXEXTADMIN_ART_FUNCTIONS', 
                            'name'  => 'sJxExtAdminCheckEAN', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_ART_FUNCTIONS', 
                            'name'  => 'sJxExtAdminCheckDate', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
    
    
                    array(
                            'group' => 'JXEXTADMIN_CAT_BLOCKS', 
                            'name'  => 'sJxExtAdminShowCategoryList', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
                    array(
                            'group' => 'JXEXTADMIN_CAT_BLOCKS', 
                            'name'  => 'sJxExtAdminShowCategoryMain', 
                            'type'  => 'bool', 
                            'value' => 'true'
                            ),
    
                        )
    );

?>

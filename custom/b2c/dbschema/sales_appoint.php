<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.com/license/gpl GPL License
 */
$db['sales_appoint'] = array(
    'columns' =>
    array (
        'appoint_id' =>
        array (
            'type' => 'int(8)',
            'required' => true,
            'pkey' => true,
            'label' => app::get('b2c')->_('主键id'),
            'editable' => false,
            'extra' => 'auto_increment',
            ),
        'member_id' =>
        array (
            'type' => 'int(8)',
            'required' => true,
            'default' => '0',
            'label' => app::get('b2c')->_('会员id'),
            'editable' => false,
            'in_list' => false,
            'default_in_list' => false,
            'filterdefault'=>false,
            'is_title' => false,
            ),
        'sales_id' =>
        array (
            'type' => 'int(8)',
            'required' => true,
            'default' => '0',
            'label' => app::get('b2c')->_('促销规则id'),
            'editable' => false,
            'in_list' => false,
            'default_in_list' => false,
            'filterdefault'=>false,
            'is_title' => false,
            ),
        'sales_type' =>
        array (
            'type' =>
                    array (
                        'orders' => app::get('b2c')->_('订单促销'),
                        'goods' => app::get('b2c')->_('商品促销'),
                        'promotion' => app::get('b2c')->_('组合促销'),
                    ),
            'sdfpath' => 'sales_type',
            'default' => 'orders',
            'required' => true,
            'label' => app::get('b2c')->_('促销类型'),
            'width' => 110,
            'editable' => false,
            'hidden' => true,
            'in_list' => false,

    ),
  )
);


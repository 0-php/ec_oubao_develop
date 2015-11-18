<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
/**
 * ps ：添加规则
 * Time :2015/08/25 12:03:44
 * @author 张艳
 * @param 参数类型
 * @return 返回值类型
*/
class b2c_mdl_sales_appoint extends dbeav_model
{
    //入库
    public function save_appoint($appointArr)
    {
        if($appointArr['member_id'])
        {
            $this->delete(array('sales_id'=>$appointArr['sales_id'],'sales_type'=>$appointArr['sales_type'],));
            #先dalete
            foreach($appointArr['member_id'] as $v)
            {
                $arr=array(
                    'sales_id'=>$appointArr['sales_id'],
                    'sales_type'=>$appointArr['sales_type'],
                    'member_id'=>$v
                );
                parent::save($arr);
            }
        }
    }

    
}// mdl_goods_rule class end

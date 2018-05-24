<?php
namespace app\api\controller\v1;

use think\Validate;
use app\api\validate\TestValidate;
use app\api\validate\IDMustBePostiveint;


class Banner{
    
    /**
     * getBanner
     * 获取指定ID的banner信息
     * @url /banner/:id 
     * @http GET
     * @id  banner的id号
     */
    public function getBanner($id){

        
        (new IDMustBePostiveint)->goCheck();
        
        
       


    }
    
}
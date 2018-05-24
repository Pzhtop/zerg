<?php
namespace app\api\validate;

use think\Validate;
use think\Exception;


class BaseValidate extends Validate{
    
    public function goCheck(){
        $params=input();
        $result=$this->check($params);

        if(!$result){
            $error=$this->error;
            throw new Exception($error);
        }else {
            return true;
        }

    }
}

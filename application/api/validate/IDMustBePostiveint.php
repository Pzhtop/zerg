<?php
namespace app\api\validate;

use think\Validate;
use app\api\validate\BaseValidate;


class IDMustBePostiveint extends BaseValidate{

    protected $rule=[
        'id'=>'require|isPostiveInteger'
    ];

    protected function isPostiveInteger($value,$rule='',
    $data='',$file=''){
        if(is_numeric($value)&&is_int($value+0)&&($value+0)>0){
            return true;
        }else{
            return $file.'必须是正整数';
        }
    }

}
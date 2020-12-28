<?php
namespace ErrorMsgHelper;

/**
 * Class ErrorMsgHelper
 * @author kassymbekoff
 * @package ErrorMsgHelper
 */
class ErrorMsgHelper
{
    /**
     * @param $model
     * @return string
     */
    public static function getMessage($model){
        $errors = $model->getFirstErrors();
        if($errors){
            return $errors[array_keys($errors)[0]];
        }
        return '';
    }
}
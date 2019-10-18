<?php

namespace api\common\controllers;

use yii\rest\ActiveController;
use yii\rest\Controller;

class AuthController extends ActiveController
{   
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        
        $behaviors['authenticator'] = [
            'class' => \sizeg\jwt\JwtHttpBearerAuth::class,
        ];

        return $behaviors;
    } 

}



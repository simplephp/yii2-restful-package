<?php
namespace api\controllers;

use Yii;
use yii\rest\ActiveController;

/**
 * Site controller
 */
class SiteController extends ActiveController
{
    // modelClass must be set.
    public $modelClass = 'api\models\User';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index'], $actions['view'], $actions['update'], $actions['delete'], $actions['create']);
        return $actions;
    }

    /*
     * 系统错误统一处理
     * @return array
     */
    public function actionError() {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->response($exception->getCode(), [],$exception->getMessage(), $exception->statusCode);
        } else {
            return $this->response(0, [],'ping was ok', 200);
        }
    }

}

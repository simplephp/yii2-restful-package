<?php
namespace api\modules\v1\controllers;

use common\models\User;
use Yii;
use yii\web\Response;

/**
 * Site controller
 */
class UserController extends \api\controllers\ApiBaseController
{
    public $modelClass = 'app\models\User';

    public function actionIndex() {
        return $this->response(0, User::find()->one());
    }
}

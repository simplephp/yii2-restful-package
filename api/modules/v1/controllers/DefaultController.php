<?php

namespace api\modules\v1\controllers;


class DefaultController extends \api\controllers\ApiBaseController
{

    public function actionIndex() {
        return ['default' => 'mmm'];
    }
}

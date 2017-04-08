<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace api\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminProfile extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];
    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
    public $depends = [
        'backend\assets\ProfileAssetBase',

    ];
}
/**
 * Ace admin template
 */
class ProfileAssetBase extends AssetBundle
{
    public $sourcePath = '@vendor/ace/dist';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-editable.min.css',
        'css/jquery.gritter.min.css',
    ];
    public $js = [
        'js/x-editable/bootstrap-editable.min.js',
        'js/x-editable/ace-editable.min.js',
        'js/jquery.gritter.min.js',
    ];
}
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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'backend\assets\AceAssetBase',
        'backend\assets\AceAssetCss',
        'backend\assets\AceAssetCssPart2',
        'backend\assets\AceAssetCssIE',
        'backend\assets\AceAssetJsExtra',
        'backend\assets\AceAssetJsIE',
        'backend\assets\CommonAssetJs',
    ];
}
/**
 * Ace admin template
 */
class AceAssetBase extends AssetBundle
{
    public $sourcePath = '@vendor/ace/dist';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/ace-fonts.min.css',
    ];
    public $js = [
        'js/ace-elements.min.js',
        'js/ace.min.js',
    ];
}
class AceAssetCss extends AceAssetBase
{
    public $css = [
        'css/ace.min.css',
    ];
    public $cssOptions = [
        'id'=>'main-ace-style',
        'class'=>'ace-main-stylesheet',
    ];
}
class AceAssetCssPart2 extends AceAssetBase
{
    public $css = [
        'css/ace-part2.min.css',
    ];
    public $cssOptions = [
        'class'=>'ace-main-stylesheet',
        'condition'=>'lte IE 9',
    ];
}
class AceAssetCssIE extends AceAssetBase
{
    public $css = [
        'css/ace-ie.min.css',
    ];
    public $cssOptions = [
        'condition'=>'lte IE 9',
    ];
}
class AceAssetJsExtra extends AceAssetBase
{
    public $js = [
        'js/ace-extra.min.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
}
class AceAssetJsIE extends AceAssetBase
{
    public $js = [
        'js/html5shiv.min.js',
        'js/respond.min.js',
    ];
    public $jsOptions = [
        'condition'=>'lte IE 8',
        'position' => \yii\web\View::POS_HEAD,
    ];
}

class AdminProfileJs extends AceAssetBase {
     public $js = [
        'js/x-editable/bootstrap-editable.js',
        'js/x-editable/ace-editable.js',
    ];
}
/*
 *  load common js
 */
class CommonAssetJs extends AssetBundle {

    public $sourcePath = '@common/static';
    public $baseUrl = '@web';
    public $js = [
        'js/layer.js',
        'js/common.js',
    ];
}

<?php
/**
 * @link http://www.studio255.de/
 * @copyright Copyright (c) 2026 studio255
 * @license http://www.yiiframework.com/license/
 */

namespace studio255\jstree;

use yii\web\AssetBundle;

class JsTreeBridgeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/studio255/yii2-jstree/assets';
    public $css = [
    ];
    public $js = [
        'js/easytree.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}

<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/uufront/blob/master/LICENSE
 * @link https://uufront.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/uufront
 */

namespace denisbespyatov\uufront\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
//        'denisbespyatov\uufront\assets\ThemeAsset',
    ];
}

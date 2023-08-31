<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/uufront/blob/master/LICENSE
 * @link https://uufront.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/uufront
 */

namespace denisbespyatov\uufront\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@denisbespyatov/uufront/assets/scr';

    public $css = [
        YII_ENV !== 'prod' ? 'bs5/css/bootstrap.css' : 'bs5/css/bootstrap.min.css',
        YII_ENV !== 'prod' ? 'bs5/css/bootstrap-utilities.css' : 'bs5/css/bootstrap-utilities.min.css',
        'fonts/inter/stylesheet.css',
        'fonts/bebas/stylesheet.css',
        'fonts/fa/stylesheet.css',
        'css/app.css',
    ];

    public $js = [
        'bs5/js/bootstrap.bundle.min.js',
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];


}

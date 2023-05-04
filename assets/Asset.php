<?php

/**
 * @copyright Copyright (c) 2023 denisbespyatov
 * @license https://github.com/denisbespyatov/uufront/blob/master/LICENSE
 * @link https://uufront.denisbespyatov.ru
 * @link https://github.com/denisbespyatov/uufront
 */

namespace denisbespyatov\uufront\assets;

use yii\web\AssetBundle;

class Asset extends \yii\web\AssetBundle
{

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'denisbespyatov\uufront\assets\ThemeAsset',
    ];

    public $sourcePath = '@denisbespyatov/uufront/assets/scr';

}

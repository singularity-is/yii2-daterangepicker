<?php
/**
 * @link https://github.com/singularity-is/yii2-daterangepicker
 * @copyright Copyright (c) 2019 Singularity Solution
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace singularity\daterangepicker;

use yii\web\AssetBundle;


class DaterangepickerAsset extends AssetBundle
{
    public $sourcePath = '@npm/daterangepicker';

    public $css = [
        'daterangepicker.css',
    ];

    public $js = [
        'daterangepicker.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapAsset',
        'singularity\daterangepicker\MomentAsset',
    ];
}

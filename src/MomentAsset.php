<?php
/**
 * @link https://github.com/singularity-is/yii2-daterangepicker
 * @copyright Copyright (c) 2019 Singularity Solution
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace singularity\daterangepicker;;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm/moment/min';

    public $js = [
        'moment.min.js'
    ];
}

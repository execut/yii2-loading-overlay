<?php
/**
 * Created by PhpStorm.
 * User: execut
 * Date: 22.09.14
 * Time: 10:04
 */

namespace execut\loadingOverlay;

use execut\yii\web\AssetBundle;
use yii\web\JqueryAsset;

class LoadingOverlayAsset extends AssetBundle {
    public $depends = [
        JqueryAsset::class,
        LoadingOverlayBowerAsset::class,
    ];
}
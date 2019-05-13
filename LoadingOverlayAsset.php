<?php
namespace execut\loadingOverlay;

use execut\yii\web\AssetBundle;
use yii\helpers\Inflector;
use yii\web\JqueryAsset;

class LoadingOverlayAsset extends AssetBundle {
    public $depends = [
        JqueryAsset::class,
        LoadingOverlayBowerAsset::class,
    ];
}
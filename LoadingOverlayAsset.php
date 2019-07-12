<?php
namespace execut\loadingOverlay;

use execut\yii\web\AssetBundle;
use yii\helpers\Inflector;
use yii\jui\JuiAsset;
use yii\web\JqueryAsset;

class LoadingOverlayAsset extends AssetBundle {
    public $depends = [
        JuiAsset::class,
    ];
}
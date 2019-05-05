<?php
/**
 * Created by PhpStorm.
 * User: execut
 * Date: 22.09.14
 * Time: 10:04
 */

namespace execut\loadingOverlay;


use execut\yii\jui\Widget;
use yii\web\JqueryAsset;

class LoadingOverlay extends Widget {
    public function run() {
//        $this->view->registerJsFile($url, ['depends' => [JqueryAsset::className()]]);

        $this->_registerBundle();
        $this->_renderContainer();
    }
}
<?php

namespace DHTMLX\Asset;

use yii\web\AssetBundle;

/**
 * Asset bundle for the DHTMLX library.
 */
class DHTMLXAsset extends AssetBundle
{
    public $sourcePath = '@bower/dhtmlx/codebase';
    public $css = [
        'dhtmlx.css'
    ];
    public $js = [
        'dhtmlx.js'
    ];
    public $jsOptions = ['position' => 1]; //Script should be in head
}

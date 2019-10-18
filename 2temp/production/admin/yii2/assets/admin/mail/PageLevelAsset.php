<?php

namespace app\assets\admin\mail;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class PageLevelAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
                    'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
                    'global/plugins/bower_components/animate.css/animate.min.css',
                    'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
                    'global/plugins/bower_components/bootstrap-fileupload/css/bootstrap-fileupload.min.css'
                ];
    public $js = [  
                    'global/plugins/bower_components/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
                    'global/plugins/bower_components/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
                    'global/plugins/bower_components/bootstrap-fileupload/js/bootstrap-fileupload.min.js'
                ];

}

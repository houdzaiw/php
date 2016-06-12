<?php

//define('fengjing','http://app.cnmo.com/wallpaper/wallpapertype/s151');
//define('meinv','http://app.cnmo.com/wallpaper/wallpapertype/s152');
//define('chuangyi','http://app.cnmo.com/wallpaper/wallpapertype/s153');
//define('nvmingxing','http://app.cnmo.com/wallpaper/wallpapertype/s154');
//define('yingshi','http://app.cnmo.com/wallpaper/wallpapertype/s155');
//define('shuaige','http://app.cnmo.com/wallpaper/wallpapertype/s156');
//define('katong','http://app.cnmo.com/wallpaper/wallpapertype/s157');
//define('qiche','http://app.cnmo.com/wallpaper/wallpapertype/s158');
//define('dongwu','http://app.cnmo.com/wallpaper/wallpapertype/s159');
//define('junshi','http://app.cnmo.com/wallpaper/wallpapertype/s161');
//define('pingguo','http://app.cnmo.com/wallpaper/wallpapertype/s162');
//define('qita','http://app.cnmo.com/wallpaper/wallpapertype/s164');
//define('zhiwu','http://app.cnmo.com/wallpaper/wallpapertype/s211');
//define('nanmingxing','http://app.cnmo.com/wallpaper/wallpapertype/s212');

define('fengjing','http://app.cnmo.com/wallpaper/wallpapertype/s151');
define('meinv','http://app.cnmo.com/wallpaper/wallpapertype/s152');
define('chuangyi','http://app.cnmo.com/wallpaper/wallpapertype/s153');
define('nvmingxing','http://app.cnmo.com/wallpaper/wallpapertype/s154');
define('yingshi','http://app.cnmo.com/wallpaper/wallpapertype/s155');
define('shuaige','http://app.cnmo.com/wallpaper/wallpapertype/s156');
define('katong','http://app.cnmo.com/wallpaper/wallpapertype/s157');
define('qiche','http://app.cnmo.com/wallpaper/wallpapertype/s158');
define('dongwu','http://app.cnmo.com/wallpaper/wallpapertype/s159');
define('junshi','http://app.cnmo.com/wallpaper/wallpapertype/s161');
define('pingguo','http://app.cnmo.com/wallpaper/wallpapertype/s162');
define('qita','http://app.cnmo.com/wallpaper/wallpapertype/s164');
define('zhiwu','http://app.cnmo.com/wallpaper/wallpapertype/s211');
define('nanmingxing','http://app.cnmo.com/wallpaper/wallpapertype/s212');

function getUrl($category,$currentPage){
    $url = fengjing;
    $add = "_f$currentPage.html";
    switch ($category)
    {
        case 'fengjing':
            $url = fengjing.$add;
            break;
        case 'meinv':
            $url = meinv.$add;
            break;
        case 'chuangyi':
            $url = chuangyi.$add;
            break;
        case 'nvmingxing':
            $url = nvmingxing.$add;
            break;
        case 'yingshi':
            $url = yingshi.$add;
            break;
        case 'shuaige':
            $url = shuaige.$add;
            break;
        case 'katong':
            $url = katong.$add;
            break;
        case 'qiche':
            $url = qiche.$add;
            break;
        case 'dongwu':
            $url = dongwu.$add;
            break;
        case 'junshi':
            $url = junshi.$add;
            break;
        case 'pingguo':
            $url = pingguo.$add;
            break;
        case 'qita':
            $url = qita.$add;
            break;
        case 'zhiwu':
            $url = zhiwu.$add;
            break;
        case 'nanmingxing':
            $url = nanmingxing.$add;
            break;
        default:
            echo "No number between 1 and 3";
    }
    return $url;
}
?>
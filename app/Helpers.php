<?php
/**
 * Created by PhpStorm.
 * User: tieungao
 * Date: 2020-07-31
 * Time: 11:32
 */

namespace App;


use App\Models\Post;
use Intervention\Image\Facades\Image;

class Helpers
{
    public static function getFeatureNews()
    {
        return Post::publish()->latest('updated_at')->limit(5)->get();
    }

    public static function getLatestIndex()
    {
        return Post::publish()->latest('updated_at')->limit(6)->get();
    }

    public static function getIndexSliders()
    {
        return Post::publish()
            ->where('index_slide', true)
            ->latest('updated_at')
            ->limit(8)
            ->get();
    }

    public static function imgCache($path, $w, $h)
    {
        return url('img/cache/'.$w.'x'.$h.'/'.str_replace("uploads/", "", $path));
    }

    public static function pActive($page, $content=null) {

        if ($content && $page == 'category-'.$content->id) {
            return 'active';
        }

        if ($content->subCategories->count() > 0) {
            foreach ($content->subCategories as $cate) {
                if ($page == 'category-'.$cate->id) {
                    return 'active';
                }
            }
        }
        return '';
    }
}
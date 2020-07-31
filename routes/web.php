<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index');

Route::get('lien-he', function() {

    return view('frontend.contact')->with([
        'meta_title' =>  'Liên hệ',
        'meta_desc' =>  'Liên hệ',
        'page' => 'lien-he'
    ]);
});


Route::get('{value}', function ($value)  {

    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {


        $post = Post::findBySlug($matches[1]);
        $post->update(['views' => (int) $post->views + 1]);

        $relatedPosts = Post::publish()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        $latestNews = Post::publish()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest('updated_at')
            ->limit(6)
            ->get();

        return view('frontend.post', compact('post', 'latestNews', 'relatedPosts'))
            ->with([
            'meta_title' => $post->title,
            'meta_desc' => $post->desc,
            'page' => 'category-'.$post->category->id
        ]);
    } else {
        $category = \App\Models\Category::findBySlug($value);

        if ($category) {
            if ( $category->subCategories->count() == 0) {
                //child categories
                $posts = Post::publish()
                    ->where('category_id', $category->id)
                    ->latest('updated_at')
                    ->paginate(10);

            } else {
                //parent categories
                $posts = Post::publish()
                    ->whereIn('category_id', $category->subCategories->pluck('id')->all())
                    ->latest('updated_at')
                    ->paginate(10);

            }
            $featurePost = $posts->shift();

            return view('frontend.category', compact(
                'category', 'posts', 'featurePost'
            ))->with([
                'meta_title' => $category->name,
                'meta_desc' => $category->desc,
                'meta_keywords' => $category->keywords,
                'page' => 'category-'.$category->id
            ]);
        }


    }
});

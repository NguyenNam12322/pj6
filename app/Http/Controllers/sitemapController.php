<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

use App\Models\product;

use App\Models\groupProduct;

class sitemapController extends Controller
{
   public function index()
   {
   }    
   public function sitemapChildProduct()
   {
        $product = product::take(160)->OrderBy('id', 'desc')->get();

        if($product->count()>0){
            return response()->view('sitemap.child', [
                'product' => $product,
            ])->header('Content-Type', 'text/xml');
        }

        
   }
   public function sitemapChildBlog()
   {
    $blog = post::take(160)->OrderBy('id', 'desc')->get();

    
    return response()->view('sitemap.childs_blog', [
            'blog' => $blog
    ])->header('Content-Type', 'text/xml');
    
   
   }

    public function sitemapCategory()
   {
    $categories = groupProduct::select('link')->where('parent_id', 0)->get();

    
    return response()->view('sitemap.childs_blog', [
            'blog' => $categories
    ])->header('Content-Type', 'text/xml');
    
   
   }
}


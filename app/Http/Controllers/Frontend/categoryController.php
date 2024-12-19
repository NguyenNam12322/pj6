<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\product;

use App\Models\image;

use App\Models\groupProduct;

use App\Models\filter;
use App\Models\post;

use App\Models\category;

use App\Models\metaSeo;

 use Illuminate\Support\Facades\Cache;


use Gloudemans\Shoppingcart\Facades\Cart;

use App\Http\Controllers\Frontend\filterController;

use App\Models\redirectLink;

use App\Models\banners;


use Session;



class categoryController extends Controller
{


    public function post_active()
    {
        $post_active = post::where('active', 0)->get();

        foreach ($post_active as $key => $value) {
            $post = post::find($value->id);

            $post->active = 1;

            $post->save();


        }
         echo "thanh cong";
    }

    public function categoryView($slug)
    {

        if(!empty($_GET['filter'])){

            $link     = !empty($_GET['link'])?strip_tags($_GET['link']):'';

            $group_id =  !empty($_GET['group_id'])?strip_tags($_GET['group_id']):'';

            $filter =   !empty($_GET['filter'])?explode(',', $_GET['filter']):'' ;

            $property = !empty($_GET['property'])?explode(',', $_GET['property']):'';

            $sort     = !empty($_GET['sort'])?$_GET['sort']:'';

            $new_filter = [];

            $new_property = [];

            if(!empty($filter)){
                foreach($filter as $value){
                    array_push($new_filter, strip_tags($value));
                }
            }

            if(!empty($property)){
                foreach($property as $values){
                    array_push($new_property, strip_tags($values));
                }
            }
             $findID = groupProduct::where('link', $link)->first();


            if(!empty($findID)){

                $id_cate = $findID->id;


                $groupProduct_level = $findID->level;
                $ar_list = $this->find_List_Id_Group($id_cate,$groupProduct_level);

                // check sản phẩm là nhóm gia dụng

                if($ar_list[0]['id']==8 && $groupProduct_level==2){
                    $ar_list[0]['id'] = $id_cate;
                }

                $parent_cate_id = $ar_list[0]['id'];

            

                // xóa phần tử rỗng trong mảng

                $filter = array_filter($filter, function ($value) {
                  return !empty($value);
                });

               


                $list_data_group = filter::where('group_product_id', $parent_cate_id)->whereIn('id', $filter)->select('value')->get()->toArray();



                if($parent_cate_id == 8){

                    $parent_cate_id = $id_cate;
                }

                $filter = filter::where('group_product_id', $parent_cate_id)->select('name', 'id')->get();



                $fill = [];

                $keys =  [];

                $result = [];

                $product = [];

                $product_search = [];


                $checkidgroup = groupProduct::find($group_id);



                if(!empty($checkidgroup) && !empty($checkidgroup->product_id)){

                    $checkidgroup_id = json_decode($checkidgroup->product_id);
            
                    if(!empty($list_data_group[0]['value'])){

                        foreach ($list_data_group as $key => $value) {
                            foreach($value as $values){

                                $arr = json_decode($values, true);


                                if(isset($arr)){

                                    array_push($fill, $arr);

                                    $keys[] = array_keys($arr);
                                }
                            }

                        }
                        
                        if(isset($keys)){
                            foreach($keys as $key1 => $vals){

                           
                                foreach($vals as $valu){

                                    if(in_array($valu, $property)){

                                        $result[] = $fill[$key1][$valu];
                                    }
                                
                                }

                            }
                            
                            if(isset($result)){

                                foreach ($result as  $res) {
                                    foreach($res as $res1){
                                        $product[] = $res1;
                                    }
                                }
                            }

                            $number_key = count($keys);

                            $number_product    = array_count_values($product);
                        
                            if(isset($number_product)){
                                $result_product = [];
                                foreach ($number_product as $key => $value) {
                                    if($value == $number_key){
                                        array_push($result_product, $key);
                                    }

                                }




                                if(!empty($sort)){

                                    $check_sort = ['asc', 'desc']; 

                                   
                                    if(in_array(trim($sort), $check_sort)  ){

                                        $product_search = product::whereIn('id', $result_product)->whereIn('id', $checkidgroup_id)->where('active', 1)->OrderBy('price', trim($sort))->get();
                                    }   
                                    else{
                                        abort('404');
                                    }

                                }
                                else{
                                    $product_search = product::whereIn('id', $result_product)->whereIn('id', $checkidgroup_id)->where('active', 1)->OrderBy('price', 'asc')->get();
                                }
                            }

                        }
                    }

                }

                else{
                     $product_search =[];
                    $id_cate ='';
                    $ar_list =[];
                    $groupProduct_level = 0;

                }

            }
            else{
                $product_search =[];
                $id_cate ='';
                $ar_list =[];
                $groupProduct_level = 0;

            }

            $meta = [];


            // tắt index page filter

            $actives_pages_blog = 0;

            // if(!empty($product_search) && count($product_search)===0){

            //     $actives_pages_blog = 0;

            // }
            
            

            if(!empty($findID->Meta_id) && Cache::has('meta_id_'.$findID->Meta_id) ){

                 $meta = Cache::get('meta_id_'.$findID->Meta_id);

            }


            return view('frontend.filter', compact('product_search', 'link', 'filter', 'id_cate', 'ar_list', 'groupProduct_level', 'meta','actives_pages_blog'));

        }
        else{
            $data = $this->getDataOfCate($slug);
            return view('frontend.category', with($data));
        }
       
    }

    public function hidePopup()
    {
        Session::put('show-pop-up', '0');
    }

    public function pageMobile(Request $request,$slug)
    {

        // redirect to https auto
        if (!$request->secure() && env('APP_NAME') != 'local') {
            return redirect()->secure($request->getRequestUri());
        }
        $slug = strip_tags(trim($slug));

        $link = strip_tags(trim($slug));

        // $link_redirect = redirectLink::where('request_path', '/'.$slug)->first();

        // if(!empty($link_redirect)){

    
        //     return redirect($link_redirect->target_path, 301);

        //     die();
        // }

        $cache = 'findID'.$link;

        $findID = Cache::rememberForever($cache, function() use ($link) {

            $findID = product::select('id')->where('Link', $link)->first()??'';
            return  $findID;
        });


        // $findID = product::where('Link', $link)->first();
        
        // chuyển sang category check

        if(empty($findID)){

            return($this->categoryView($slug));

        }
        else{
            if(!Session::has('show-pop-up')){

                Session::put('show-pop-up','1');

            }

            $pageCheck = "product";

            $images = Cache::get('image_product'.$findID->id);

            if(!Cache::has('image_product'.$findID->id)){
                
                $image_cache = image::where('product_id', $findID->id)->where('active', 1)->select('image')->get();

                Cache::forever('image_product'.$findID->id,$image_cache);
            }

            if(!empty($_GET['cache'])){

                $image_cache = image::where('product_id', $findID->id)->select('image')->get();

                Cache::forget('image_product'.$findID->id);

                Cache::forever('image_product'.$findID->id,$image_cache);
            }

            $data = Cache::rememberForever('data-detail'.$slug, function() use($slug) {

                return product::where('Link',$slug)->first();
            });

            // kiểm tra link cache có tồn tại hay k

            

            if(empty($data)|| $data->ProductSku ==='4T-C65EK2X'||$data->ProductSku ==='4T-C75EK2X'){
                return abort('404');
            }

            // end kiem tra check cẩn thận

            // dd($data->Meta_id);

            //end check cache


            if(!empty($data) && !empty($_GET['show'])&&($_GET['show']=='tra-gop')){
                
                $actives_pages_blog = 0;
                return view('frontend.installment', compact('data','actives_pages_blog'));
            }

            if(!empty($data->LinkRedirect)){

                return redirect($data->LinkRedirect, 301); 
            }

            $group_product = Cache::rememberForever('group_product_cache_'.$findID->id, function() use ($findID){

                $group_products = $this->get_Group_Product($findID->id)??0;

                return $group_products;
            });

           
            $data_cate = 1;

            if(!empty($group_product && $group_product[0])){

                $data_cate = $group_product[0];

            } 

            // $data_cate_child = $this->get_Group_Product_Child($findID->id);

    
            $data_group_product = Cache::rememberForever('data_group_product_'.$data_cate, function() use ($data_cate){ 

                $data_group_products = groupProduct::find($data_cate);

                return $data_group_products;
            });  

            $data_list_price =[500000,2500000,5000000];

            $data_selected_volume_price =  intval($data->Price)<10000000?0:(intval($data->Price)<20000000?1:2);



            $min_price = $data->Price- $data_list_price[$data_selected_volume_price];

            $max_price = $data->Price+$data_list_price[$data_selected_volume_price];

            $sampe_product_price = [];


            $other_product = [];
            // dd($sampe_product_price); 
            // if(!empty($data_group_product) && !empty($data_group_product->product_id)){

            //     $other_product = Cache::rememberForever('other_product_'.$data_group_product->product_id, function() use ($data_group_product){ 

            //         return product::whereIn('id',  json_decode($data_group_product->product_id))->take(10)->get();
            //     }); 
            // }    

            $other_product =product::whereIn('id',  json_decode($data_group_product->product_id))->take(10)->get();

            if(!empty($data_group_product) && !empty($data_group_product->product_id)){
                $sampe_product_price = product::whereIn('id',  json_decode($data_group_product->product_id))->where('Price', '>', $min_price)
                    ->where('Price', '<', $max_price)->take(5)->get();

            } 
            
            $meta = Cache::remember('metaseo-detail'.$data->Meta_id,100, function() use ($data){
                return metaSeo::find($data->Meta_id);
            }); 

            // nếu là bài viết trong nhóm sản phẩm khuyến mãi thì đổi view

            if($data_cate===333){

                return view('frontend.combo', compact('data', 'images', 'other_product', 'meta', 'pageCheck', 'data_cate'));
            }

            $price_installment = groupProduct::find($data_cate)->price_installation;

            if($price_installment==0){

                $data_cates = $this->get_Group_Product_Child($data->id);

                $price_installment = groupProduct::select('price_installation')->whereIn('id', $data_cates)->where('price_installation','>',0)->first();

                if(!empty($price_installment)){

                    $price_installment = $price_installment->price_installation;

                    
                }
                else{
                    $price_installment = 0;
                }

            }

            // nếu không có ảnh đại diện thì không cho index

            $actives_pages_blog = 0;

            if(empty($data->Image)){
                $actives_pages_blog = 0;
            }
        }    

        return view('frontend.details_mb', compact('data', 'images', 'other_product', 'meta', 'pageCheck', 'data_cate', 'actives_pages_blog', 'price_installment', 'sampe_product_price'));
        // return view('frontend.page_mobile.details');
    }



    public function getDataOfCate($slug)
    {

        $link = trim($slug);

        $findID = cache()->remember('findID_link_group'.$link, 100, function () use($link){

            $findID = groupProduct::where('link', $link)->first()??'';

            return $findID;
        });




        if(empty($findID)){
            return $this->blogDetailView($slug);
        }
        else{

            if(!empty($_GET['filter'])){
                $data = new filterController();


                $data = $data->filter();

            }
           
            $id_cate = $findID->id;

            $name_cate_show = $findID->name;

            $groupProduct_level = $findID->level;

            $ar_list = $this->find_List_Id_Group($id_cate,$groupProduct_level);

            $parent_cate_id = $ar_list[0]['id'];

            $parent_id_cate = $ar_list[0]['id'];


            $link   =  $findID->link;


            $Group_product = cache()->remember('groupProduct_cate_child__'.$id_cate, 1000, function () use($id_cate){
                $Group_product = groupProduct::find($id_cate)??'';

                return  $Group_product;

            });

            

            $slogan =  $Group_product->slogan;

            $meta = cache()->remember('meta_id_'.$Group_product->Meta_id, 1000, function () use($Group_product){

                $meta = metaSeo::find($Group_product->Meta_id)??'';

                return $meta;
            });

            

            $data =[];

            $numberdata = 0;

            if(!empty($Group_product) && !empty($Group_product->product_id)){

                $Group_product_active = $Group_product->active;


                if($Group_product_active==1){

                    $Group_product = json_decode($Group_product->product_id)??[];

                    $page = !empty($_GET['page'])?intval($_GET['page']):1;

                   
                    $limit = 16;

                   
                    // $data = cache()->remember('data_'.$id_cate.'_'.$page, 100, function () use($Group_product, $limit, $page){

                    //     $data = product::whereIn('id', $Group_product)->where('active', 1)->orderBy('updated_at', 'desc')->limit($limit)->offset(($page - 1) * $limit)->get();

                    //     return $data;

                    // });  

                    $data = product::whereIn('id', $Group_product)->where('active', 1)->orderBy('updated_at', 'desc')->limit($limit)->offset(($page - 1) * $limit)->get();
                        
                
                    // $numberdata = cache()->remember('numberdata'.$id_cate, 100, function () use($Group_product){

                    //     $numberdata = product::select('id')->whereIn('id', $Group_product)->where('active', 1)->orderBy('Quantily', 'desc')->get()->count()??0;

                    //     return $numberdata;

                    // });    
                    $numberdata = product::select('id')->whereIn('id', $Group_product)->where('active', 1)->orderBy('Quantily', 'desc')->get()->count()??0;


                
                }


            }



            if($parent_cate_id == 8){

                $parent_cate_id = $id_cate;

            }

           $filter =  cache()->remember('group_product_id__'.$parent_cate_id, 1000, function () use($parent_cate_id){

                $filter = filter::where('group_product_id', $parent_cate_id)->select('name', 'id')->get()??'';

                return $filter;
                
            });
            
            

            $data = [
                'data'=>$data,
                'filter'=>$filter,
                'id_cate'=>$id_cate,
                'link'=>$link,
                'ar_list'=>$ar_list,
                'slogan'=>$slogan,
                'meta'=> $meta,
                'numberdata'=>$numberdata,
                'groupProduct_level'=>$groupProduct_level,
                'parent_id_cate'=>$parent_id_cate,
                'page'=>$page??1,
                'name_cate_show'=>$name_cate_show,

            ];


            return $data;
        }    

    }    


    protected function find_List_Id_Group($id,  $groupProduct_level)
    {

        $list = cache()->remember('list_group_pr_'.$id, 1000, function () use($id){
             $list =  groupProduct::find($id)??'';
             return $list;
        });
       

        $ar_list = [];

        if(isset($list)){

            if((int)$groupProduct_level>0){

                for ($i=0; $i < $groupProduct_level; $i++) { 

                    $list_add = $list->parent_id;

                
                    $list = cache()->remember('list_cache_'.$id, 1000, function () use($list_add){

                        $list =  groupProduct::find($list_add)??'';

                        return $list;
                    });

                    array_push($ar_list, $list_add);
                   
                    
                }

            }
           
        }

        $ar_list[] = $id;

        $info_list_category = [];

        $groupProduct_info = cache()->remember('groupProduct_info_'.$id, 1000, function ()  use($ar_list){

             $groupProduct_info = groupProduct::select('name','link','id')->whereIn('id', $ar_list)->get()->toArray()??[];

            return $groupProduct_info;
        });

        

        return $groupProduct_info;
    }

   

    public function blogDetailView($slug)
    {
        $link = trim($slug);

        $data = post::where('link', $link)->first();

        if(empty($data)){
            return $this->categoriesBlog($slug);

            die();

            
        }

        $category = category::find($data->category);


        $related_news = post::where('category', $data->category)->select('title', 'link', 'id')->where('active',1)->orderBy('id', 'desc')->take(15)->get();

        $name_cate = $category->namecategory;

        $meta = metaSeo::find($data->Meta_id);

        $page = 'blogdetail';

        $actives_pages_blog = $data->active;

        // đếm số lượt view

        // $sessionKey = 'post_' . $data->id;

        // $sessionView = Session::get($sessionKey);

        // $post_view = DB::table('posts')->where('id', $data->id);

        // if (!$sessionView) { //nếu chưa có session

        //     Session::put($sessionKey, 1); //set giá trị cho session

        //     $post_view->increment('views', 1);

        // }


        echo view('frontend.blogdetail',compact( 'name_cate', 'related_news', 'meta', 'data', 'page', 'actives_pages_blog'));

        die();
    }

    public function categoriesBlog($slug)
    {
        $link = trim($slug);

        $datas = category::where('link', $link)->first();

     
        if(empty($datas)){
            abort('404');
        }
        $name_cates_cate = '';
        
        if($datas->id!=5){

             $name_cates_cate = $datas->namecategory;

        }

        $data = post::where('category', $datas->id)->orderBy('date_post','desc')->where('active', 1)->orderBy('date_post','desc')->paginate(10);

      
        echo view('frontend.blog', compact('data','name_cates_cate'));

        die();



    }


    public function pageView($slug)
    {
        $link = trim($slug);

        $data = post::where('link', $link)->where('category', 5)->first();

        if(empty($data)){
            abort('404');
        }

        $category = category::find(5);


        $related_news = post::where('category', 5)->select('title', 'link', 'id')->get();

        $name_cate = $category->namecategory;

        $meta = metaSeo::find($data->Meta_id);

        return view('frontend.blogdetail',compact('name_cate', 'related_news', 'meta', 'data'));

    }
    public function index($slug)
    {
        
       return redirect(route('details', $slug));
    }


    public function get_Group_Product($id){

        $data_groupProduct = groupProduct::where('level', 0)->get()->pluck('id');

        $infoProductOfGroup = groupProduct::select('product_id', 'id')->whereIn('id', $data_groupProduct)->get()->toArray();

        $result = [];
    

        if(isset($infoProductOfGroup)){

            foreach($infoProductOfGroup as $key => $val){


                if(!empty($val['product_id'])&& in_array($id, json_decode($val['product_id']))){

                    array_push($result, $val['id']);
                }
               
            }

        }

        return $result;
    }  


    public function get_Group_Product_Child($id){

        $data_groupProduct = groupProduct::where('level', 2)->get()->pluck('id');

        $infoProductOfGroup = groupProduct::select('product_id', 'id')->whereIn('id', $data_groupProduct)->get()->toArray();

        $result = [];
    

        if(isset($infoProductOfGroup)){

            foreach($infoProductOfGroup as $key => $val){

                $ar_list_pd = json_decode($val['product_id']);



                if(!empty($val['product_id'])&& !empty($ar_list_pd) && in_array($id, $ar_list_pd, FALSE) ){

                  
                    array_push($result, $val['id']);
                }
               
            }

        }

        return $result;
    }




    public function details(Request $request, $slug)
    {

        // redirect to https auto
        if (!$request->secure() && env('APP_NAME') != 'local') {
            return redirect()->secure($request->getRequestUri());
        }
        $slug = strip_tags(trim($slug));

        $link = strip_tags(trim($slug));

        // $link_redirect = redirectLink::where('request_path', '/'.$slug)->first();

        // if(!empty($link_redirect)){

    
        //     return redirect($link_redirect->target_path, 301);

        //     die();
        // }

        $cache = 'findID'.$link;

        $findID = Cache::rememberForever($cache, function() use ($link) {

            $findID = product::select('id')->where('Link', $link)->first()??'';
            return  $findID;
        });


        // $findID = product::where('Link', $link)->first();
        
        // chuyển sang category check

        if(empty($findID)){

            return($this->categoryView($slug));

        }
        else{
            if(!Session::has('show-pop-up')){

                Session::put('show-pop-up','1');

            }

            $pageCheck = "product";

            $images = Cache::get('image_product'.$findID->id);

            if(!Cache::has('image_product'.$findID->id)){
                
                $image_cache = image::where('product_id', $findID->id)->where('active', 1)->select('image')->get();

                Cache::forever('image_product'.$findID->id,$image_cache);
            }

            if(!empty($_GET['cache'])){

                $image_cache = image::where('product_id', $findID->id)->select('image')->get();

                Cache::forget('image_product'.$findID->id);

                Cache::forever('image_product'.$findID->id,$image_cache);
            }

            $data = Cache::rememberForever('data-detail'.$slug, function() use($slug) {

                return product::where('Link',$slug)->first();
            });

            // kiểm tra link cache có tồn tại hay k

            

            if(empty($data)|| $data->ProductSku ==='4T-C65EK2X'||$data->ProductSku ==='4T-C75EK2X'){
                return abort('404');
            }

            // end kiem tra check cẩn thận

            // dd($data->Meta_id);

            //end check cache


            if(!empty($data) && !empty($_GET['show'])&&($_GET['show']=='tra-gop')){
                
                $actives_pages_blog = 0;
                return view('frontend.installment', compact('data','actives_pages_blog'));
            }

            if(!empty($data->LinkRedirect)){

                return redirect($data->LinkRedirect, 301); 
            }

            $group_product = Cache::rememberForever('group_product_cache_'.$findID->id, function() use ($findID){

                $group_products = $this->get_Group_Product($findID->id)??0;

                return $group_products;
            });

           
            $data_cate = 1;

            if(!empty($group_product && $group_product[0])){

                $data_cate = $group_product[0];

            } 

            // $data_cate_child = $this->get_Group_Product_Child($findID->id);

    
            $data_group_product = Cache::rememberForever('data_group_product_'.$data_cate, function() use ($data_cate){ 

                $data_group_products = groupProduct::find($data_cate);

                return $data_group_products;
            });  

            $data_list_price =[500000,2500000,5000000];

            $data_selected_volume_price =  intval($data->Price)<10000000?0:(intval($data->Price)<20000000?1:2);



            $min_price = $data->Price- $data_list_price[$data_selected_volume_price];

            $max_price = $data->Price+$data_list_price[$data_selected_volume_price];

            $sampe_product_price = [];


            $other_product = [];
            // dd($sampe_product_price); 
            // if(!empty($data_group_product) && !empty($data_group_product->product_id)){

            //     $other_product = Cache::rememberForever('other_product_'.$data_group_product->product_id, function() use ($data_group_product){ 

            //         return product::whereIn('id',  json_decode($data_group_product->product_id))->take(10)->get();
            //     }); 
            // }    

            $other_product =product::whereIn('id',  json_decode($data_group_product->product_id))->take(10)->get();

            if(!empty($data_group_product) && !empty($data_group_product->product_id)){
                $sampe_product_price = product::whereIn('id',  json_decode($data_group_product->product_id))->where('Price', '>', $min_price)
                    ->where('Price', '<', $max_price)->take(5)->get();

            } 
            
            $meta = Cache::remember('metaseo-detail'.$data->Meta_id,100, function() use ($data){
                return metaSeo::find($data->Meta_id);
            }); 

            // nếu là bài viết trong nhóm sản phẩm khuyến mãi thì đổi view

            if($data_cate===333){

                return view('frontend.combo', compact('data', 'images', 'other_product', 'meta', 'pageCheck', 'data_cate'));
            }

            $price_installment = groupProduct::find($data_cate)->price_installation;

            if($price_installment==0){

                $data_cates = $this->get_Group_Product_Child($data->id);

                $price_installment = groupProduct::select('price_installation')->whereIn('id', $data_cates)->where('price_installation','>',0)->first();

                if(!empty($price_installment)){

                    $price_installment = $price_installment->price_installation;

                    
                }
                else{
                    $price_installment = 0;
                }

            }

            // nếu không có ảnh đại diện thì không cho index

            $actives_pages_blog = 1;

            if(empty($data->Image)){
                $actives_pages_blog = 0;
            }

            $smart_phone = false;

            if(!empty($useragent)){

                if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

                    $smart_phone = true;

                    
                    return view('frontend.details_mb', compact('data', 'images', 'other_product', 'meta', 'pageCheck', 'data_cate', 'actives_pages_blog', 'price_installment', 'sampe_product_price'));

                }

            }
            
            return view('frontend.details', compact('data', 'images', 'other_product', 'meta', 'pageCheck', 'data_cate', 'actives_pages_blog', 'price_installment', 'sampe_product_price'));
        
        }
    }

    public function addProductToCart()
    {

        Cart::add(['id' => '294ad', 'name' => 'Smart tivi Samsung UA50AU9000 50 inch 4K', 'qty' => 1, 'price' => '5000.000', 'weight' => '500', 'options' => ['size' => 'large']]);
        $cart =  Cart::content();

    }

}

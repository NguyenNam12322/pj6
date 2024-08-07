<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\product;

use Illuminate\Support\Facades\Cache;

use App\Models\deal;

use App\Models\banners;

use App\Models\post;

use  App\Models\image;

use App\Models\metaSeo;

use App\Models\groupProduct;

use App\Models\filter;
use DB;
use App\products1;

use \Carbon\Carbon;


class crawlController extends Controller
{

    public function crawlNagaKawa()
    {

        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $code = 'https://nagakawa.com.vn/may-hut-mui-nagakawa-nag1855-70cm
                https://nagakawa.com.vn/may-hut-mui-nagakawa-nag1853-70cm
                https://nagakawa.com.vn/may-hut-mui-nagakawa-nag1857-70cm
                https://nagakawa.com.vn/may-hut-mui-cao-cap-nagakawa-nkch02m70
                https://nagakawa.com.vn/may-hut-mui-cao-cap-nagakawa-nkch02m70
                https://nagakawa.com.vn/may-hut-mui-nagakawa-nkth02m70
                https://nagakawa.com.vn/may-hut-mui-cao-cap-nagakawa-nkth03m70
                https://nagakawa.com.vn/may-hut-mui-kinh-cong-nkch05m70
                https://nagakawa.com.vn/may-hut-mui-cao-cap-nagakawa-nkch08m70
                https://nagakawa.com.vn/may-hut-mui-cao-cap-nagakawa-nkch03m70-1
                https://nagakawa.com.vn/may-hut-mui-nagakawa-nkch06m70
                https://nagakawa.com.vn/copy-of-may-hut-mui-kinh-thang-nkth05m70
                https://nagakawa.com.vn/may-hut-mui-kinh-vat-nkvh02m70
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nag3601m15
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk8d01m
                https://nagakawa.com.vn/may-rua-bat-cao-cap-nagakawa-nk8d61m
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk10d01m
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk13d02m
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk15d05m
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk15d06m-1
                https://nagakawa.com.vn/may-rua-bat-nagakawa-nk15d03m';
        $codess = explode(PHP_EOL, $code);

        foreach ($codess as $key => $value) {

            $url                =  $value;

            $html               = file_get_html(trim($url), false, stream_context_create($arrContextOptions));

            $name               = trim(strip_tags($html->find('.title-product', 0)));

            $details            = html_entity_decode($html->find('.product-content-2',0));

            $Salient_Features   = html_entity_decode($html->find('.product-summary', 0));

            $Specifications     = html_entity_decode($html->find('#product-thongso .content', 0));

            $image              =  '';

            $product_sku        =  trim(strip_tags($html->find('.product-sku', 0)));

            $price              =  str_replace(['.', '₫'], '', strip_tags($html->find('.product-price', 0)));

            $manuPrice          = 0;

            $giftPrice          = 0;

            $limits             = 0;

            $inputPrice         = 0;

            $link               = convertSlug($url);

            $Qualtity           = 0;

            $Maker              = 10;

            $Meta_id            =  $this->addMeta();

            $view               = 0;

            $groupid            = 2;

            $orders_hot         = 0;

            $active             = 0;

            $sale_order         = 0;

            $promotion_box      = 0;

            $user_id            = 1;

            $insert             = ['Name'=>$name, 'Image'=>$image??'', 'ProductSku'=>$product_sku, 'Price'=>$price, 'manuPrice'=>$manuPrice, 'GiftPrice'=>$giftPrice, 'limits'=>$limits, 'InputPrice'=>$inputPrice, 'id_group_product'=>0, 'Link'=>$link, 'LinkRedirect'=>'', 'Detail'=>$details, 'Salient_Features'=>$Salient_Features, 'Specifications'=>$Specifications, 'Quantily'=>$Qualtity, 'promotion'=>'', 'Maker'=>$Maker, 'Meta_id'=>$Meta_id??'', 'views'=>$view, 'Group_id'=>$groupid, 'orders_hot'=>$orders_hot, 'active'=>$active, 'sale_order'=>$sale_order, 'promotion_box'=>$promotion_box, 'user_id'=>$user_id, 'updated_at'=>Carbon::now(), 'created_at'=>Carbon::now()];

            DB::table('products')->insert($insert);
        }
        echo "thành công";
    }

    function getLinkCrawlDMGK()
    {
        $now = Carbon::now();

        $check = [];

        for ($i=0; $i<8; $i++) {

        if($i!=0){
            $url = 'https://dienmaygiakhang.vn/product-category/dien-lanh/may-lanh/may-lanh-gia-dinh/page/'.$i.'/';

        }  
        else{
            $url = 'https://dienmaygiakhang.vn/product-category/dien-lanh/may-lanh/may-lanh-gia-dinh/';
        }  

        
        $html = file_get_html(trim($url));

            $link = $html->find('.title-wrapper .woocommerce-LoopProduct-link');

            foreach ($link as $key => $value) {

                DB::table('crawl_link')->insert(['link'=>trim($value->href), 'cate'=>4, 'updated_at'=>$now, 'created_at'=>$now]);
            }
            
        }

        echo 'thành công';

    }

    public function addMeta()
    {
        $products = DB::table('products')->select('Name','id')->get();

        foreach ($products as $key => $value) {
            $name = trim($value->Name);
          
            $update = ['Name'=>$name];

            DB::table('products')->where('id',$value->id)->update($update);

            echo "updated product_id ".$value->id;

        }
        
        
       
    }

    public function showDataCrawl()
    {
        $products = DB::table('products')->select('Name','id')->where('id','>', 1301)->get();

        foreach ($products as $key => $value) {

            echo $value->Name.'<br>';
        }
    }

    public function uploadImg($images)
    {   
        $images = 'http://'.$images;
        $images = str_replace('//b', 'b', $images);
        $img  = '/uploads/product/crawl/'.str_replace(strstr(basename($images), '?'), '', basename($images)) ;
        file_put_contents(public_path().$img, file_get_contents($images));
        return $img;
    }


    public function updateMitsuBishi()
    {
        $data = groupProduct::find(287);
        $id   = json_decode($data->product_id);

        $update = DB::table('products')->whereIn('id', $id)->update(['Quantily'=>-1]);

        echo "thanh cong";
    }

    public function getDataPD()
    {
        $data = DB::table('products')->select('Name')->where('id','>','470')->get();

        foreach ($data as $key => $value) {
            echo $value->Name.'<br>';
        }
    }


    public function addNames()
    {
        $product = product::where('id_group_product', NULL)->get()->pluck('id')->toArray();

        foreach ($product as $key => $value) {

            $products = product::find($value);

            if(!empty($products)){

                $name =  $products->Name;
                

                if(!empty($products->ProductSku)){
                    $cut    =  strstr($name, $products->ProductSku);
                    $names = str_replace($cut, '', $name);

                    if(!empty($names)){

                        $products->Names = $names;
                        $products->save();

                    }
                }
            }
        }
        echo "thanh cong";

    }
    public function sosanh()
    {

        $ids = [13,16,12,14,15,41,36,40,287,37,38,39,57,58,59,60,61,77,82,80,79,84,78,83,81,117,116,324,130];
        
        foreach ($ids as  $id) {
            
            $groupProduct =  groupProduct::find($id);

            $product = json_decode($groupProduct->product_id);

            
            foreach ($product as $value) {

                if( intval($value)>425){
                    $products = product::find($value);

                    if(!empty($products)){
                        $products->id_group_product = $id;
                        $products->save();

                    }
                   
                }
            
            }
        }
       
        echo "thanh cong";
    }

    public function strip_tags_content($string) { 
        // ----- remove HTML TAGs ----- 
        $string = preg_replace ('/<[^>]*>/', ' ', $string); 
        // ----- remove control characters ----- 
        $string = str_replace("\r", '', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace("\t", ' ', $string);
        // ----- remove multiple spaces ----- 
        $string = trim(preg_replace('/ {2,}/', ' ', $string));
        return $string; 

    }

   
    public function checkProductSku()
    {
        $data  = product::find(2226);

        $data_id = 4;

        $html = $data->Specifications;

        $dom = new \DOMDocument();

        $html = mb_convert_encoding($html , 'HTML-ENTITIES', 'UTF-8'); //convert sang tiếng việt cho dom

        $dom->loadHTML($html);

        $ar_gr[1] = ['Kích cỡ màn hình', 'Độ phân giải', 'Nơi sản xuất', 'Cổng HDMI', 'Công nghệ xử lý hình ảnh', 'Kích thước có chân, đặt bàn', 'Kích thước không chân, treo tường'];
        $ar_gr[2] = ['Khối lượng giặt', 'Khối lượng sấy', 'Tốc độ quay vắt', 'Kiểu động cơ', 'Lồng giặt', 'Công nghệ giặt', 'Kích thước - Khối lượng', 'Nơi sản xuất'];
        $ar_gr[3] = ['Dung tích sử dụng', 'Dung tích ngăn đá', 'Dung tích ngăn lạnh', 'Công nghệ Inverter', 'Kiểu tủ', 'Kích thước - Khối lượng', 'Nơi sản xuất'];
        $ar_gr[4] = ['Loại máy', 'Công suất làm lạnh', 'Công suất sưởi ấm', 'Phạm vi làm lạnh hiệu quả', 'Chế độ tiết kiệm điện', 'Loại Gas sử dụng', 'Nơi sản xuất', 'Năm ra mắt'];

        $ar = $ar_gr[$data_id];



        foreach($dom->getElementsByTagName('td') as $td) {

            foreach ($ar as $key => $value) {

                if(strpos($td->nodeValue, $value)>-1){
                    print_r($td->nodeValue . '<br/>');
                }
            }
           
        }


        // $dom = new \DOMDocument();
        // $dom->loadHtml($html);
        // $x = new \DOMXpath($dom);
        // foreach($x->query('//td') as $td){
        //     echo strip_tags($td->textContent).'<br>';
        //     //if just need the text use:
        //     //echo $td->textContent;
        // }

    }

    public function editKeywordsProduct()
    {
        $Group_products = groupProduct::find(1);

        $id_product =  json_decode($Group_products->product_id);


        foreach ($id_product as $key => $value) {

            $product = product::find($value);

            // tìm chuỗi từ vị trí inch để xóa 

            if(!empty($product->Name)){

                $name = preg_replace('/[0-9]{1,4} inch /', 'remove ', $product->Name);

                $name = str_replace(strstr($name, 'remove'), '', $name);
              
                DB::table('checkname')->insert(['name'=> $product->Name, 'model'=>$product->ProductSku, 'name1'=>$name, 'id_product'=>$value]);

            }
            
        }

      
        echo 'thanh cong';
      
    }
    public function editMetaSeoDB()
    {
        $product = product::select('Meta_id', 'Name', 'Price', 'id')->get();

        // foreach ($product as $key => $value) {

        //     $metaseo =  metaSeo::find($value->Meta_id);

        //     $metaseo->title = $value->Name.
           
        // }

        foreach ($product as $key => $value) {

            $product = product::find($value->id);

            $metaseo =  metaSeo::find($product->Meta_id);

            if(!isset($product->Price)){
                dd($value->id);
                
            }

            $Price = $product->Price;



            //check id trong gia dụng 

            $groupProduct = groupProduct::find(8);

            $giadung = json_decode($groupProduct->product_id);

            $tragop = '';

            if($Price>=3000000 && !in_array($product->id, $giadung)){

                $tragop = ', Trả góp 0%';

            }

            $metaseo->meta_title = $product->Name.' giá rẻ'.$tragop;

            $metaseo->save();

            echo "<pre>";

            echo $value->id;

            echo "</pre>";

        }

        echo'thành công';

    }
    public function deleteCache()
    {
        Cache::flush();
        echo "thanh cong";
    }
    
    public function echo1(){
         $value = Cache::get('cron');

         print_r($value);
       
    }

    public function test11()
    {
        // 1286->
        $check = [];

        // $all_model = product::select('ProductSku')->get()->pluck('ProductSku')->toArray();

        $url = 'https://muasamtaikho.vn/crawl-blade';

        $html = file_get_html(trim($url));

        $link = $html->find('.product_block_img a');
      
        foreach ($link as $key => $value) {

            array_push($check, $value->href);

            
        }


        foreach ($check as $key => $value) {

            $this->crawlDmcl($value);
           
        }     
        echo "thành công";

        // dd($details);
    }


    public function updateProduct()
    {
        $product = DB::table('products')->select('id','Detail')->orderBy('id', 'asc')->where('id','>',1301)->get();

        foreach ($product as $key => $value) {

            $this->convertImageToDetails($value->Detail, $value->id);

            echo "update đến product: ".$value->id;

            
        }
        echo "thành công";
    }

    public function updateProducts()
    {
         $product = DB::table('products')->select('id','crawl_link')->where('id', '>', 1301)->get();

        foreach ($product as $key => $value) {

            $this->updateCrawlDMCL($value->crawl_link, $value->id);

            echo "update đến product: ".$value->id;
        }
    }

    public function test_getContent()
    {
        file_get_contents('https://cdn11.dienmaycholon.vn/filewebdmclnew/public/userupload/files/news/may-giat/MAY-GI~1(25).JPG');
    }

    public function updateCrawlDMCL($url, $id)
    {
       
        $now = Carbon::now();

        $html = file_get_html(trim($url));

        $details = $html->find('.des_pro', 0);

        $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

        $replacement = '$1';

        $details = preg_replace($pattern, $replacement, html_entity_decode($details));

        $data = ['Detail'=>$details, 'updated_at'=>$now];

        DB::table('products')->where('id', $id)->update($data);


    }

    public function createMetaSeo()
    {
        $data = DB::table('products')->select('Name', 'id')->where('id','>', 1301)->get();

        foreach ($data as $key => $value) {

            $metas = new metaSeo();
            $metas->meta_title = $value->Name; 
            $metas->meta_content =$value->Name; 
            $metas->meta_key_words = $value->Name; 
            $metas->meta_og_title =$value->Name; 
            $metas->meta_og_content =$value->Name; 

            $metas->save();

            $data = ['Meta_id'=>$metas->id];

            DB::table('products')->where('id', $value->id)->update($data);

            echo "update thành công sản phẩm có id ". $value->id."\n";


        }    
    }

    public function editMetaSeo()
    {
        $data = DB::table('products')->select('Name', 'id', 'Meta_id')->where('id','>', 1301)->get();

        foreach ($data as $key => $value) {

            $metas = metaSeo::find($value->Meta_id);

            $metas->meta_title = trim($metas->meta_title); 
            $metas->meta_content =trim($metas->meta_content); 
            $metas->meta_key_words = trim($metas->meta_key_words); 
            $metas->meta_og_title =trim($metas->meta_og_title); 
            $metas->meta_og_content =trim($metas->meta_og_content); 

            $metas->save();
        }    
    }    

    public function removeLinkinDetails()
    {

        $data = DB::table('products')->select('Detail', 'id')->where('id','>', 471)->get();

        foreach ($data as $key => $value) {
            
            $now = Carbon::now();

            $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

            $replacement = '$1';

            $details = preg_replace($pattern, $replacement, $value->Detail);

            $data = ['Detail'=>$details, 'updated_at'=>$now];

            DB::table('products')->where('id', $value->id)->update($data);

            echo "update thành công sản phẩm có id ". $value->id."\n";
        }
        
    }


    public function createFolderIdPd()
    {

        for ($i=472; $i < 917; $i++) { 

            $directory = public_path().'/uploads/product/'.$i;

            // echo 'https:'.$value.'<br>';

            if (!is_dir($directory)) {
                // Tạo thư mục và các thư mục con nếu không tồn tại

                if(mkdir($directory, 0775, true)){

                    echo "tạo thư mục thành công";

                } 
                else{
                    echo "tạo thư mục thất bại";
                }   
                    
            }
            
        }
        

    }


    public function rewriteUrl()
    {
        $data = DB::table('products')->select('Detail','id')->orderBy('id','asc')->where('id','>',471)->get();

        foreach ($data as $key => $values) {

            $id = $values->id;

            $details = $values->Detail;

            $new_details = str_replace('/www/wwwroot/dienmayhg.vn/public', '', $details);

         

            $product = product::find($id);

    
            $product->Detail = $new_details;

            $product->save();

            echo "update thành công product_id ".$id."\n";
            

            
        }    
    }

    public function editContentFalse()
    {
        
        $data = DB::table('products')->select('Detail','id', 'crawl_link')->orderBy('id','asc')->where('id','>',1357)->get();

        foreach ($data as $key => $value) {

            $id = $value->id;
            
            $url = $value->crawl_link;

             $html = file_get_html(trim($url));

            $details = $html->find('.des_pro', 0);

            $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

             $replacement = '$1';

            $details = preg_replace($pattern, $replacement, html_entity_decode($details));

            $update = ['Detail'=>$details];

            DB::table('products')->where('id', $id)->update($update);

            echo "update thành công product_id ". $id;


        }

        sleep(2);
    }

    function replaceImageDMGK()
    {

        $data = DB::table('products')->select('Detail','id')->orderBy('id','asc')->where('id','>',1301)->get();

        foreach ($data as $key => $values) {

            $details = $values->Detail;

             $id = $values->id;

            // Sử dụng regex để tìm các giá trị src trong thẻ <img>
            $patterns = '/<img[^>]+src="([^"]+)"/i';

            $now = Carbon::now();

            // Tạo một mảng để chứa các kết quả
            $matches = array();

            // Thực hiện tìm kiếm

            preg_match_all($patterns, $details, $matches);

            // $matches[1] sẽ chứa các giá trị src

            $srcs = $matches[1];

            $replace = [];

            if(!empty($srcs) && count($srcs)>0){

                $directory = public_path().'/uploads/product/'.$id;

                // echo 'https:'.$value.'<br>';

                if (!is_dir($directory)) {
                    // Tạo thư mục và các thư mục con nếu không tồn tại
                    mkdir($directory, 0777, true);
                }


                foreach ($srcs as $vls) {

                    $replace_img = public_path().'/uploads/product/'.$id.'/'.basename($vls);

                    $replace_imgs = '/uploads/product/'.$id.'/'.basename($vls);

                    array_push($replace, $replace_imgs);

                   
                    $file_headers = @get_headers(trim($vls));

                    if(!empty($file_headers) && strpos($file_headers[0],"200"))
                    {
                        file_put_contents($replace_img, file_get_contents($vls));
                    }
                    else
                    {
                        echo $vls,"\n";
                    }

                   
                }
            }

            $new_details = str_replace($srcs, $replace, $details);

            $update = ['Detail'=>$new_details];

            DB::table('products')->where('id', $id)->update($update);

            echo "update thành công product_id ". $id;

           
        }
         

    }

    public function updateProductName()
    {
        $data = DB::table('products')->select('Name','id')->orderBy('id','asc') ->where('id', '>', 1301)->get();

        foreach ($data as $key => $values) {

            $id = $values->id;

            $product = product::find($id);

            $product->Name = trim($product->Name);

            $product->save();

            echo "update thành công product_id ". $id;
        }
    }


    function replaceImageDMCL()
    {

        $data = DB::table('products')->select('Detail','id')->orderBy('id','asc') ->where('id', '>', 1301)->where('id','<',1489)->get();

        foreach ($data as $key => $values) {

            $details = $values->Detail;

             $id = $values->id;

            // Sử dụng regex để tìm các giá trị src trong thẻ <img>
            $patterns = '/<img[^>]+src="([^"]+)"/i';

            $now = Carbon::now();

            // Tạo một mảng để chứa các kết quả
            $matches = array();

            // Thực hiện tìm kiếm

            preg_match_all($patterns, $details, $matches);

            // $matches[1] sẽ chứa các giá trị src

            $srcs = $matches[1];

            $replace = [];

            if(!empty($srcs) && count($srcs)>0){

                $directory = public_path().'/uploads/product/'.$id;

                // echo 'https:'.$value.'<br>';

                if (!is_dir($directory)) {
                    // Tạo thư mục và các thư mục con nếu không tồn tại
                    mkdir($directory, 0777, true);
                }


                foreach ($srcs as $vls) {

                    $vls = 'https:'.$vls;

                    $replace_img = public_path().'/uploads/product/'.$id.'/'.basename($vls);

                    $replace_imgs = '/uploads/product/'.$id.'/'.basename($vls);

                    array_push($replace, $replace_imgs);

                   
                    $file_headers = @get_headers(trim($vls));

                    if(!empty($file_headers) && $file_headers[0] != 'HTTP/1.1 404 Not Found')
                    {
                        file_put_contents($replace_img, file_get_contents(trim($vls)));

                       
                    }
                    else
                    {
                        echo $vls."\n";
                    }

                   
                }
            }

            $new_details = str_replace($srcs, $replace, $details);

            $product = product::find($id);

            $product->Detail = $new_details;

            $product->save();

            echo "update thành công product_id ". $id;

           
        }
         

    }

    public function convertLinkImageDmclToLinkImageUse($details,$id)
    {
         // Sử dụng regex để tìm các giá trị src trong thẻ <img>
        $patterns = '/<img[^>]+src="([^"]+)"/i';

        $now = Carbon::now();

        // Tạo một mảng để chứa các kết quả
        $matches = array();

        // Thực hiện tìm kiếm

        preg_match_all($patterns, $details, $matches);

        // $matches[1] sẽ chứa các giá trị src

        $srcs = $matches[1];

        $replace = [];

        if(!empty($srcs) && count($srcs)>0){

            foreach ($srcs as $value) {

                $replace_img = '/uploads/product/'.$id.'/'.basename($value);

                array_push($replace, $replace_img);

            }
        }     

        $new_details = str_replace($srcs, $replace, $details);

        $update = ['Detail'=>$new_details];

        DB::table('products')->where('id', $id)->update($update);
    }

    public function convertImageToDetails($details,$id)
    {
         // Sử dụng regex để tìm các giá trị src trong thẻ <img>
        $patterns = '/<img[^>]+src="([^"]+)"/i';

        $now = Carbon::now();

        // Tạo một mảng để chứa các kết quả
        $matches = array();

        // Thực hiện tìm kiếm
        preg_match_all($patterns, $details, $matches);

        // $matches[1] sẽ chứa các giá trị src
        $srcs = $matches[1];

      
        if(!empty($srcs) && count($srcs)>0){

            foreach ($srcs as $value) {

                $directory = public_path().'/uploads/product/'.$id;

                // echo 'https:'.$value.'<br>';

                if (!is_dir($directory)) {
                    // Tạo thư mục và các thư mục con nếu không tồn tại
                    mkdir($directory, 0777, true);
                }

                $link_crawl = 'http:'.str_replace('https:', '', trim($value));


                $img = $directory.'/'.basename($value);
                
                file_put_contents($img, file_get_contents($link_crawl));

                // $replace_img = '/uploads/product/'.$id.'/'.basename($value);

                // $new_details = str_replace(trim($value), $replace_img, $details);

                // echo $new_details;

                // die;

                // $update = ['Detail'=>$new_details, 'updated_at'=>$now];

                // DB::table('products')->where('id',$id)->update($update);

                    
               
            }
            

        }
    
    }


    public function test12($value='')
    {
        $html = '<p>Đây là một ảnh: <em><img src="https://example.com/image1.jpg" alt="Ảnh 1"></em></p>
         <p>Đây là một ảnh khác: <em><img src="https://example.com/image2.jpg" alt="Ảnh 2"></em></p>';

        // Sử dụng regex để tìm các giá trị src trong thẻ <img>
        $pattern = '/<img[^>]+src="([^"]+)"/i';

        // Tạo một mảng để chứa các kết quả
        $matches = array();

        // Thực hiện tìm kiếm
        preg_match_all($pattern, $html, $matches);

        // $matches[1] sẽ chứa các giá trị src
        $srcs = $matches[1];

        // Hiển thị kết quả
        print_r($srcs);
    }


    public function crawlDmcl($value)
    {
        $url = 'https://dienmaycholon.vn'.trim($value);

        $now = Carbon::now();

        $html = file_get_html(trim($url));

        $details = $html->find('.des_pro', 0);

        $specifications = html_entity_decode($html->find('.list_specifications', 0));

        $title =  strip_tags($html->find('.name_pro_detail h1', 0));  

        // tính năng nổi bật

        $feature_item = html_entity_decode($html->find('.feature_item',0));

        $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

        // Replacement string (empty)
        $replacement = '$1';

        // Perform the replacement
        $details = preg_replace($pattern, $replacement, html_entity_decode($details));

        $price = 0;

        // echo(html_entity_decode($feature_item));
        
        $data['Name']   = $title;
        $data['Price']  = $price;
        $data['Detail'] = $details;
        $data['Link'] = convertSlug($title);
        $data['Group_id']= 2;
        $data['Specifications'] = $specifications;
        $data['user_id'] = 4;
        $data['created_at'] = $now;
        $data['updated_at'] = $now;
        $data['Salient_Features'] = $feature_item;
        $data['crawl_link'] = $url;

        
        DB::table('products')->insert($data);
    }

    public function crawl_link_AO()
    {

        $check = [];

        $url = 'https://www.aosmith.com.vn/collections/may-loc-nuoc-ro-side-stream?page=2';

        $html = file_get_html(trim($url));

        $link = $html->find('.pro-name a');

        foreach ($link as $key => $value) {

            array_push($check, $value->href);
            
        }

        foreach ($check as $key => $value) {

            $link = 'https://aosmith.com.vn'.$value;
            $this->crawlAO($link);
        }

      
    }


     public function crawlAO($url)
    {
        
        $now = Carbon::now();

        $html = file_get_html(trim($url));

        $details = $html->find('#tab1',0);

        $specifications = html_entity_decode($html->find('#tab2', 0));

        $title =  strip_tags($html->find('.product-title h1', 0));  

        // tính năng nổi bật

        $feature_item = html_entity_decode($html->find('#tab0 .product_function',0));

        

        $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

        // Replacement string (empty)
        $replacement = '';

        // Perform the replacement
        $details = preg_replace($pattern, $replacement, html_entity_decode($details));

        $price = 0;

        // echo(html_entity_decode($feature_item));
        
        $data['Name']   = $title;
        $data['Price']  = $price;
        $data['Detail'] = $details;
        $data['Link'] = convertSlug($title);
        $data['Group_id']= 4;
        $data['Specifications'] = $specifications;
        $data['user_id'] = 4;
        $data['created_at'] = $now;
        $data['updated_at'] = $now;
        $data['Salient_Features'] = strip_tags($feature_item,'<p>');
        $data['crawl_link'] = $url;
        
        DB::table('products')->insert($data);
    }

    public function crawlImageAo()
    {

        $now = Carbon::now();

        $data = DB::table('products')->select('crawl_link','id')->where('id','>',440)->get();

        foreach ($data as $key => $values) {

            $link = $values->crawl_link;

            $html = file_get_html(trim($link));

            $src = $html->find('#sliderproduct .product-thumb img');

            foreach ($src as $key => $value) {

                $images = 'http:'.$value->getAttribute('data-image');


                $nameImages = basename($images);

                $image_name = '/uploads/product/'.$nameImages;

                $img = public_path().'/uploads/product/'.$nameImages;

                file_put_contents($img, file_get_contents(trim($images)));

                $datas['image'] = $image_name;
                $datas['link'] = $image_name;
                $datas['product_id'] = $values->id;
                $datas['order'] = 0;
                $datas['active'] = 1;
                $datas['created_at'] = $now;
                $datas['updated_at'] = $now;

                DB::table('images')->insert($datas);

                echo "update thành công ảnh cho sản phẩm có id = ".$values->id;
                 
            }


        }    

    }


     public function crawlImageDMGK()
    {
        $now = Carbon::now();

        $data = DB::table('products')->select('crawl_link','id')->orderBy('id','asc')->where('id','>',916)->get();


        foreach ($data as $key => $values) {

            $link = $values->crawl_link;

            // dd($link);

            $html = file_get_html(trim($link));

            $src = $html->find('.product-images .woocommerce-product-gallery__image');

            foreach ($src as $key => $value) {
                
                $images = $value->getAttribute('data-thumb');

                $nameImages = basename($images);

                $image_name = '/uploads/product/'.$nameImages;

                $img = public_path().'/uploads/product/'.$nameImages;

                $file_headers = @get_headers(trim($images));

                if(!empty($file_headers) && $file_headers[0] != 'HTTP/1.1 404 Not Found'){

                    file_put_contents($img, file_get_contents(trim($images)));

                    $datas['image'] = $image_name;
                    $datas['link'] = $image_name;
                    $datas['product_id'] = $values->id;
                    $datas['order'] = 0;
                    $datas['active'] = 1;
                    $datas['created_at'] = $now;
                    $datas['updated_at'] = $now;

                    DB::table('images')->insert($datas);

                    
                }    
            }

            sleep(2);

        }    
    }

    public function crawldatavtc()
    {
        $now = Carbon::now();

    
        for ($i=1; $i < 31; $i++) { 

            if($i===1){

                $link = 'https://vtcnews.vn/gia-dinh-78.html';
            }
            else{
                 $link = 'https://vtcnews.vn/gia-dinh-78/trang-'.$i.'.html';
            }

            $html = file_get_html(trim($link));

            $link = $html->find('.title-1 a', 0);

            $link_href = [];

            foreach ($link as $key => $value) {

                DB::table('crawl_link')->insert(['link'=>'https://vtcnews.vn'.trim($value->href), 'cate'=>4, 'updated_at'=>$now, 'created_at'=>$now]);
                
            }

            echo "crawl link trang $i thành công \n";
        }

    }

    public function createContentPostVtc()
    {

        // $now = Carbon::now();

        $link = DB::table('crawl_link')->select('link','id')->where('active',0)->get();

        foreach ($link as $key => $value) {

            $links = $value->link;

            $html = file_get_html(trim($links));

            $title = $html->find('h1', 0);

            $content = $html->find('.edittor-content', 0);

            $shortContent = $html->find('.content-wrapper h2', 0);

            $check_image = !empty($html->find('.expNoEdit img', 0))?$html->find('.expNoEdit img', 0)->getAttribute('data-src'):'';

            $image =  $check_image;

            $data = ['image'=>$image, 'title'=>$title, 'content'=>$content, 'shortcontent'=>$shortContent, 'id_user'=>1, 'link'=>$links,'active'=>0];

            $insert = DB::table('post1')->insert($data);

            $update = DB::table('crawl_link')->where('id', $value->id)->update(['active' => 1]);

            echo "update thành công post có id crawl là $value->id \n";

            // xóa bộ nhớ tạm thời

            unset($data);

            unset($links);

            unset($title);

            unset($insert);

            unset($update);

            unset($content);

            unset($shortContent);

            unset($html);

            unset($image);

            unset($check_image);

            sleep(2);
        }
    }



    public function crawlImageDMCL()
    {
        $now = Carbon::now();

        $data = DB::table('products')->select('crawl_link','id')->orderBy('id','asc')->where('id','>',1301)->get();

        foreach ($data as $key => $values) {

            $link = $values->crawl_link;

            $html = file_get_html(trim($link));

            $src = $html->find('.box_pro-images-big img');


            foreach ($src as $key => $value) {

                $images = 'https:'.$value->getAttribute('data-src');

                $nameImages = basename($images);

                $image_name = '/uploads/product/'.$nameImages;

                $img = public_path().'/uploads/product/'.$nameImages;

                $file_headers = @get_headers(trim($images));

                if(!empty($file_headers) && $file_headers[0] != 'HTTP/1.1 404 Not Found'){

                    file_put_contents($img, file_get_contents(trim($images)));

                    $datas['image'] = $image_name;
                    $datas['link'] = $image_name;
                    $datas['product_id'] = $values->id;
                    $datas['order'] = 0;
                    $datas['active'] = 1;
                    $datas['created_at'] = $now;
                    $datas['updated_at'] = $now;

                    DB::table('images')->insert($datas);

                    
                }    
            }



        }
    }
    




    public function echo(){
         $banners = banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

        $deal = deal::OrderBy('order', 'desc')->get();

        $product_sale = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->get();

        $groups = groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();

        $deal_start = $deal->first()->start;

        cache::put('deal_start', $deal_start,10000);

    
        Cache::put('groups', $groups,10000);

        Cache::put('product_sale', $product_sale,10000);
        
        Cache::put('baners',$banners,10000);

        Cache::put('deals',$deal,10000);

       
    }
    public function updateProductQua()
    {
      $code = 'NF-N15SRA
        NF-N30ASRA
        NF-N50ASRA
        SD-P104WRA
        MK-5076MWRA
        MK-K51PKRA
        MX-AC400WRA
        MJ-DJ31SRA
        MJ-M176PWRA
        MJ-L500SRA
        MJ-DJ01SRA
        MJ-SJ01WRA
        MJ-H100WRA
        MJ-68MWRA
        MX-SS1BRA
        MX-GS1WRA
        MX-V310KRA
        MX-V300KRA
        MX-900MWRA
        MX-GX1561WRA
        MX-GX1511WRA
        MX-EX1511WRA
        MX-EX1561WRA
        MX-MG5351WRA 
        MX-MP5151WRA 
        MX-MG53C1CRA 
        MX-M300SRA
        MX-M210SRA
        MX-M200WRA
        MX-M200GRA
        MX-M100WRA
        MX-M100GRA
        NC-HU301PZSY
        NC-BG3000CSY
        NC-EG4000CSY
        NC-EG3000CSY
        NC-EG2200CSY
        NC-HKD121WRA
        NC-SK1BRA
        NC-GK1WRA
        MK-GB3WRA
        MK-GH3WRA
        NB-H3801KRA
        NB-H3203KRA
        NT-H900KRA
        SR-PX184KRA
        SR-HB184KRA
        SR-AFM181WRA
        SR-AFY181WRA
        SR-CX188SRA
        SR-CP188NRA
        SR-CP108NRA
        SR-CL188WRA
        SR-CL108WRA
        SR-MVN187HRA
        SR-MVN187LRA
        SR-MVN107HRA
        SR-MVN107LRA
        SR-MVP187HRA
        SR-MVP187NRA
        SR-MVQ187SRA
        SR-MVQ187VRA
        NU-SC100WYUE
        NU-SC180BYUE
        NN-DS596BYUE
        NN-CT655MYUE
        NN-CT36HBYUE
        NN-GT65JBYUE
        NN-GD37HBYUE
        NN-GF574MYUE
        NN-GT35HMYUE
        NN-GM34JMYUE
        NN-GM24JBYUE
        NN-ST65JBYUE
        NN-ST34HMYUE
        NN-SM33HMYUE
        NN-ST25JWYUE
        MC-CG370GN46
        MC-CG371AN46
        MC-CG373RN46
        MC-CG525RN49
        MC-CJ911RN49
        MC-CL305BN46
        MC-CL431AN46
        MC-CL561AN46
        MC-CL563RN46
        MC-CL565KN46
        MC-CL777HN49
        MC-CL779RN49
        MC-SB30JW049
        MC-CL789RN49
        MC-CL787TN49
        MC-CL575KN49
        MC-CL573AN49
        MC-CL571GN49
        MC-YL631RN46
        MC-YL669GN49
        MC-YL635TN46
        MC-YL637SN49
        AMC-CT1
        NI-GSE050ARA
        NI-GWE080WRA
        NI-GSD071PRA
        NI-GSD051GRA
        NI-WT980RRA
        NI-L700SSGRA
        NI-WL30VRA
        NI-U600CARA
        NI-U400CPRA
        NI-W650CSLRA
        NI-W410TSRRA
        NI-E510TDRA
        NI-E410TMRA
        NI-M300TARA
        NI-M300TVRA
        NI-M250TPRA
        NI-317TVRA
        NI-317TXRA
        EH-NA98RP645
        EH-NA98-K645
        EH-NA65-K645
        EH-NA45RP645
        EH-NA27PN645
        EH-NE81-K645
        EH-NE71-P645
        EH-NE65-K645
        EH-NE20-K645
        EH-ND57-P645
        EH-ND57-H645
        EH-ND64-P645
        EH-NE11-V645
        EH-ND30-K645
        EH-ND30-P645
        EH-ND21-P645
        EH-ND13-V645
        EH-ND12-P645
        EH-ND11-W645
        EH-ND11-A645
        EH-HE10VP421';

        $model = explode(PHP_EOL, $code);
        $now   = Carbon::now();
       
        foreach ($model as $key => $value) {
             $product = DB::table('products')->where('ProductSku', trim($value));

             if(!empty($product)){
                $product->update(['active'=>1, 'updated_at'=>$now]);

             }
             else{
                print_r($value);
             }
        }
        echo "thanh cong";

    }

    public function updateQuatityByTable()
    {
        $data = DB::table('qualtity1')->get();
        foreach ($data as $key => $value) {

            $product = product::find($value->product_id);

            $product->Quantily = $value->qty;

            $product->save();
           

        }
        echo "thanh cong";
    }


    public function hideProductFuniki()
    {
        $product = groupProduct::find(82)->product_id;

        $update  = product::whereIn('id', json_decode($product))->get();

        foreach ($update as $key => $value) {
           
           $updates = product::find($value->id);

           $updates->active = 0;

           $updates->user_id = 1;
           
           $updates->save();

        }

        echo "thanh cong";
    }

    public function updateQuatity()
    {
        $data = DB::table('qualtity')->get();
        foreach ($data as $key => $value) {

           $product = product::where('ProductSku', trim($value->name))->first();

            if(!empty($product)){
                $updateProduct = product::find($product->id);
                $updateProduct->Quantily = $value->qty;
                $updateProduct->save();
                DB::table('qualtity1')->insert(['name'=>$value->name, 'qty'=>$value->qty, 'product_id'=>$product->id]);

            }

        }
        echo "thanh cong";
    }
    public function getMetaNUll()
    {
        $meta = metaSeo::where('meta_title', 'like', '%Nội dung không tồn tại%')->get();
        foreach ( $meta as $key => $value) {
             $post = post::where('Meta_id', $value->id)->first();
             if(!empty($post)&&!empty($post->link)){
                $pp = post::find($post->id);
                $ppl=$pp->link;
                $urls = 'https://dienmaynguoiviet.vn/'.$ppl;
                $file_headers = @get_headers($urls);
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                    echo '<pre>';
                    print_r($urls);
                }
                else{

                    $html = file_get_html(trim($urls));


                    $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                    $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                    $title   = $html-> find("title",0)-> plaintext;
                
                    $metas   =  metaSeo::find($value['id']);

                    
                    $metas->meta_title =$title; 
                    $metas->meta_content =$content; 
                    $metas->meta_key_words = strip_tags($keyword); 
                    $metas->meta_og_title =$title; 
                    $metas->meta_og_content =$content; 

                    $metas->save();


                }
             }
        }
        echo "thanh cong";
       

    }
    public function CrawlNameMeta()
    {
        $post = post::select('id', 'Meta_id', 'link')->get();

        foreach ($post as $key => $value) {
            $urls = 'http://dienmaynguoiviet.com/'.$value->link.'/';
            $file_headers =@get_headers($urls);

            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                echo '<pre>';
                print_r($urls);
            }
            else{
                $html = file_get_html(trim($urls));
                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   =  metaSeo::find($value->Meta_id);

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();
            }
        
            
        }

       
    }
    public function allproduct(){
        $link = $_GET['link'];

        $sp  = groupProduct::where('link', trim($link))->first();
        if(!empty($sp)){
            $sps = groupProduct::find($sp->id);

            $product = json_decode($sps->product_id);


            $link = [];

            if(!empty($product)){
                foreach ($product as $key => $value) {
                    $products = product::find($value);

                    $links = $products->Link??'';
                    if($links !=''){
                         array_push($link, 'https://dienmaynguoiviet.vn/'.$links);
                    }
                   
                }
            }

            foreach ($link as  $values) {
                echo $values.'<br>';
            }
        }
        else{
            echo "không tìm thấy nhóm sản phẩm này";
        }
    }

    public function crawlDetailsDMGK()
    {

        $now = Carbon::now();

        $price = 0;

        $link = DB::table('crawl_link')->get();

        foreach ($link as $key => $url) {

            $file_headers = @get_headers($url->link);

            $html = file_get_html($url->link);

            $details = $html->find('.tab-panels',0);

            $details = str_replace('src','srcs',$details);

            $details =  preg_replace('/data-srcs=/', 'src=', $details);

            $title =  strip_tags($html->find('.product-title-container h1',0));

            $tskt  =  html_entity_decode($html->find('.thongso-container',0));

            $model = strstr(strip_tags($title), "lít");

            $model = str_replace('lít', '', $model);

            $data['Name']   = trim($title);
            $data['Price']  = $price;
            $data['Detail'] = $details;

            $data['ProductSku'] = $model;

            $data['Link'] = convertSlug($title);
            $data['Group_id']= 4;
            $data['Specifications'] = $tskt;
            $data['user_id'] = 4;
            $data['created_at'] = $now;
            $data['updated_at'] = $now;
            $data['Salient_Features'] = '';
            $data['crawl_link'] = $url->link;
            DB::table('products')->insert($data);
            
            sleep(2);
        }

       
    }

    public function updateImageProductDetails()
    {
        $content = 

        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);




    }

    public function checkempty()
    {
        $code = product::select('ProductSku', 'Detail')->get();

        foreach ($code as $key => $value) {
            
            if(empty($value->Detail)){
                echo "<pre>";
                print_r($value->ProductSku);
            }
        }
    }
    public function changeQualtity()
    {
        $data = DB::table('qualtity')->select('name', 'qty')->get();

        foreach ($data as $key => $value) {
          
            $product = product::where('ProductSku', trim($value->name))->select('id')->first();

            if(!empty($product)){
                $productId = product::find($product->id);
                $productId->Quantily = $value->qty;
                $productId->save();
                DB::table('product_update1')->insert(['product_id'=>$product->id, 'qty'=>$value->qty]);
            }  

        }
        echo "thanh cong";
    }
   public function emptyContent()
   {
        $products = product::select('id', 'Link')->OrderBy('id', 'asc')->where('Detail', '')->get();

        foreach ($products as $key => $value) {
             print_r($value->Link.'     ');
        }

   }

   public function randomOrderDeal()
   {
        $deal = deal::get();

        if($deal->count()>0){
            foreach ($deal as $key => $value) {
          
                $deals = deal::find($value->id);

                $deals->order = mt_rand(1, 10000);

                $deals->save();

           }
        }

       
       echo "thanh cong";
   }
    public function findimage()
    {
        $image = DB::table('imagecrawl')->select('image', 'id', 'active')->where('image', 'like', '%/media/%')->get();

        foreach ($image as $key => $value) {

            print_r($value);

            // if(strpos($value->image,'https://dienmaynguoiviet.vn/')===false){


            //     $images  = 'https://dienmaynguoiviet.vn'.$value->image;
            //     $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);
            //     DB::table('imagecrawl')->where('id', $value->id)->update(['active' => 1]);

            //     file_put_contents(public_path().$img, file_get_contents(trim($images)));
            // }
            
        }

    }
    public function runCrawl()
    {
        $image = DB::table('imagecrawl')->select('image', 'id', 'active')->where('active', 0)->get();

        foreach ($image as $key => $value) {
            $pos = strpos($value->image, "/media/product/");

            if($pos != false){

               
                $file_headers = @get_headers($value->image);
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                   
                    print_r($value->image.' ');
                }
                else{
                         
                     DB::table('imagecrawl')->where('id', $value->id)->update(['active' => 1]);

                    DB::table('imagerun')->insert(['image'=>$value->image]);

                    $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $value->image);

                    file_put_contents(public_path().$img, file_get_contents(trim($value->image)));

                    
                }

                
            }    

        }
        echo "thanh cong";

    }
    public function getAllimageContent()
    {

    
        $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {

            $product = product::find($value->id);
            if($product->id<4176){

                if(!empty($product->Detail)){

                    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $product->Detail, $matches);
                
                    if(isset($matches[1])){
                        foreach ($matches[1] as $key => $images) {

                            DB::table('imagecrawl')->insert(['image'=>$images]);
        
                            // $pos = strpos($images, "/media/lib/");

                            // if($pos != false){
                               
                            //     $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);
                            //     file_put_contents(public_path().$img, file_get_contents(trim($images)));

                            //     DB::table('imagerun')->insert(['image'=>$images]);
                            // }

                            // $file_headers = @get_headers($images);

                            // if(is_array($file_headers)){

                            //     if(array_key_exists(0, $file_headers) && $file_headers[0] == 'HTTP/1.1 200 OK'){
                            //         $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);

                            //         file_put_contents(public_path().$img, file_get_contents($images));
                            //     }
                               

                            // }

                           
                        }

                    }    

                }
            }

            
        } 

        echo "thanh cong";   

    }
    public function checkContennull($value='')
    {
         $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {
            $product = product::find($value->id);

            if(empty($product->Detail)){

                $url = 'https://dienmaynguoiviet.vn/'.trim($product->Link).'/';

                $html = file_get_html(trim($url));
                $content  = html_entity_decode($html->find('.emty-content',0));

                if(!empty($content)){
                    $product->Detail = $content;

                    $product->save();
                }
                else{
                    print_r($url.'<br>');
                }
                
            }
            
        }  
        echo "thanh cong";  
    }
    public function removedot()
    {
        
        $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {
            $product = product::find($value->id);
            $product->Detail = str_replace('..https://dienmaynguoiviet.vn/media/', 'https://dienmaynguoiviet.vn/media/', $product->Detail);
            $product->save();
        }    
        echo "thanh cong";

    }
    public function crawlProductEdit()
    {

        $products = product::select('id')->OrderBy('id', 'asc')->get();
        foreach ($products as $key => $value) {

            $product = product::find($value->id);

            if(!empty($product->Link)){
                 $url = 'https://dienmaynguoiviet.vn/'.$product->Link.'/';

                $html = file_get_html(trim($url));
               
                $content  = html_entity_decode($html->find('.emty-content .Description',0));

                $contents = str_replace('https://dienmaynguoiviet.vn/media', '/media', $content);

                $contents = str_replace('/media', 'https://dienmaynguoiviet.vn/media', $content);

                $product->Detail = $contents;

                $product->save();

            }
            else{
                print_r($value->id.' ');
            }

            if($value->id>4175){
                break;
            }    
             
        } 
   
        echo "thanh cong";
           
    }
    public function removeSpaceProductsku()
    {
        $product = product::select('ProductSku', 'id')->get();
        foreach ($product as $key => $value) {
            $products = product::find($value->id);
            $products->ProductSku =  trim($products->ProductSku);

            $products->save();
            
        }
        echo "thanh cong";

    }
      

    public function checkbtu()
    {
        $name = "Điều hòa Mitsubishi MSZ-HL25VA 2 chiều 9000BTU Inverter Gas R410A";

        $strpos = strpos($name, 'BTU');

        print_r($name[$strpos]);
    }


    public function checkss()
    {
            $name = "Điều hòa Mitsubishi MSZ-HL25VA 2 chiều 9000BTU Inverter Gas R410A";

            $strpos = strpos($name, 'BTU');

            print_r($name[$strpos]);


    }

    public function checkPD()
    {
       
        $product = groupProduct::find(4)->product_id;

        $product = json_decode($product);

        $arFalse = [];

        foreach ($product as $key => $value) {

            $name_product = product::find($value)->Name;

            $pos = strpos(strtolower($name_product), 'inverter');

            if ($pos == true) {

                if(strpos(strtolower($name_product), 'invert')==true) {

                    array_push($arFalse, $value);

                }
                
            }
           
        }

        $group = groupProduct::find(88);

        $group->product_id = json_encode($arFalse);

        $group->save();

        echo "thanh cong";

    }
    public function getFileAr()
    {
        $ar_image = $this->getImageFalse();
        $ar_false = [];
        foreach ($ar_image as $key => $value) {

            $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);
            $file_headers = @get_headers($images);

            if($file_headers[0] == 'HTTP/1.1 200 OK'){
                $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);
            }  
            else{

                $images = 'https://dienmaynguoiviet.vn/media/lib/'.basename($value);
                $file_headers = @get_headers($images);
                if($file_headers[0]== 'HTTP/1.1 200 OK'){
                    $images = $images;
                }
                else{
                    $images = 'https://dienmaynguoiviet.vn/media/product/'.basename($value);
                    $file_headers = @get_headers($images);
                    if($file_headers[0]== 'HTTP/1.1 200 OK'){
                        $images = $images;
                    }
                    else{
                        $images = '';
                        array_push($ar_false, $value);
                    }
                }
                
            } 
            if(!empty($images)) {
                $img  = '/images/posts/crawl/'.basename($images);
                file_put_contents(public_path().$img, file_get_contents($images));    
            }
            

           
        }
        print_r($ar_false);
        echo "thanh cong";
    
    }
    public function getImageFalse()
    {
        $post = post::select('content', 'id', 'category')->get();
        $ar_image_false = [];

        foreach($post as $val){
            if($val->category!=5){
                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $val->content, $matches);
                if(isset($matches[1])){
                    foreach($matches[1] as $value){
                        if($value!=null){
                           
                                $value = 'http://localhost/pj5/'.$value;

                                $file_headers = @get_headers($value);

                                try {

                                   if(is_array($file_headers) && $file_headers[0] != 'HTTP/1.1 200 OK'){

                                        $images = 'https://dienmaynguoiviet.vn/media/product/'.basename($value);

                                        array_push($ar_image_false, $value);
                                        
                                   } 
                                    
                                } catch (Exception $e) {
                                    echo "Message: " . $e->getMessage();
                                }
                           
                           
                        }        
                    } 
                        
                }    
            }    

        }
        return(array_unique($ar_image_false));
        
    }

     public function getImageAll()
    {
       
        $post = post::select('content', 'id', 'category')->get();

        foreach($post as $val){

            if($val->category!=5){
                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $val->content, $matches);
            
                if(isset($matches[1])){

                    foreach($matches[1] as $value){

                        if($value !=null){

                            $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);

                            $file_headers = @get_headers($images);

                            if($file_headers[0] == 'HTTP/1.1 200 OK'){

                                $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);

                            }  
                            else{
                                $images = 'https://dienmaynguoiviet.vn/media/lib/'.basename($value);
                            } 
                            $img  = '/images/posts/crawl/'.basename($images);

                            file_put_contents(public_path().$img, file_get_contents($images));  

                           
                        }    
                    }
                }
            }

        
        }
        echo "thanh cong";
       
    }
    public function crawlImageAgain()
    {
        $post = post::select('link', 'id')->orderBy('date_post','desc')->take(120)->get();
        $i =0;
        foreach($post as $val){
            $i++;
            if($i>81 && $i<91){
                $links = 'https://dienmaynguoiviet.vn/'.$val->link.'/';
                $html = file_get_html(trim($links));
                $imagess = strip_tags($html->find('#image-page', 0));
                $images = 'https://dienmaynguoiviet.vn'.$imagess;

                $img  = '/uploads/posts/crawl/'.basename($images);
                file_put_contents(public_path().$img, file_get_contents($images));
                $linkss = post::find($val->id);
                $linkss->image = $img;

                $linkss->save();
            }

        }
        echo "thanh cong";

    }
    public function getDatePost()
    {
        $post_link = post::select('link', 'category', 'id')->get();
        foreach($post_link as $value){
            if($value->category!=5){
                $link = 'https://dienmaynguoiviet.vn/'.$value->link.'/';

                $html = file_get_html(trim($link));
                $time = strip_tags($html->find('.detail-head time', 0));
                $post = post::find($value->id);
                $post->date_post = Carbon::parse($time);
                $post->save();

            }
            

        }
        echo "thanh cong";

    }


    public function filterTech()
    {
        $maygiat = groupProduct::find(2)->product_id;
        $info = product::select('Specifications', 'id')->whereIn('id', json_decode($maygiat))->get();
       
        $longdung = [];
        foreach($info as $val){
            $pos = strpos(strtolower($val->Specifications), 'lồng đứng');
            if($pos === false){
                array_push($longdung, $val->id);
            }

        }

        $filter = filter::find(17);

         if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[30] =  $longdung;

        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";



    }

    public function filterPrice()
    {
        $maygiat = groupProduct::find(2)->product_id;

        // $price   = product::select('id')->whereIn('id', json_decode($maygiat))->whereBetween('Price', [12000000, 15000000])->get()->pluck('id')->toArray();
        $price   = product::select('id')->whereIn('id', json_decode($maygiat))->where('Price', '>', 15000000)->get()->pluck('id')->toArray();

        $filter = filter::find(16);

        if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[27] =  $price;

        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";




    }
    public function addFilterProduct(Request $request)
    {

        $link =  $request->link;
        $property   = $request->property;

        $ar   = $request->ar;


         
        $search = $link;

        $query  = product::where('Link', 'like','%'.$search.'%')->get();

        $ar_kq = [];

        foreach ($query as $key => $value) {
          
            array_push($ar_kq, $value->id);
        }

        $filter = filter::find($property);

         
        if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[$ar] = $ar_kq;


        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";

    }

    public function getMetaToFails()
    {
        $link = metaSeo::where('meta_content', 'Đường link cần xem không có trên website hoặc đã bị xóa')->get();

        foreach ($link as $key => $value) {


            $product = product::where('Meta_id', $value->id)->first();


            if(!empty($product)){


                $url = $product->Link;

                $urls = 'https://dienmaynguoiviet.vn/'.$url.'/';

        
                $html = file_get_html(trim($urls));

                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   =  metaSeo::find($value->id);

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();

            }


        }   
        echo "thanh cong";

       
    }


    public function addMEtaserForG(){
        for($i= 1; $i<2; $i++){

            $meta = new metaSeo();

            $meta->meta_content = '';

            $meta->meta_title = '';
            $meta->meta_key_words = '';
            $meta->meta_og_title = '';
            $meta->meta_og_content = '';

            $meta->save();

        }
        echo "thanh cong";

    }

    public function checklinkss()
    {
      
        $post = image::select('image','product_id')->get();

        foreach ($post as $key => $images) {
            $file_headers = @get_headers('http://localhost/'.$images->images);

            if($file_headers[0] != 'HTTP/1.1 200 OK'){

                $product = product::find($images->product_id);

                $products = $product->Link;

                print_r($products);

            }
        }   

    }

    public function addMetaSeoForGroup()
    {
        $groupProduct = groupProduct::select('id')->get();

        $i = 5688;

        foreach ($groupProduct as $key => $value) {

           
            $group = groupProduct::find($value->id);
            $group->Meta_id = $i;
            $group->save();
            $i++;


        }

        echo "thanh cong";
    }

    public function fill_name(){

        $ar_info[1] ='tivi';
        $ar_info[2] ='may-giat';
        $ar_info[3] ='tu-lanh';
        $ar_info[4] ='dieu-hoa';
        $ar_info[6] ='tu-dong';
        $ar_info[7] ='tu-mat';
       
        $ar_info[9] ='may-loc-nuoc';

        $ar_info[71] ='may-say';

    
        foreach ($ar_info as $key => $value) {


            $productname = product::select('id')->whereBetween('id', [3995, 4171])->where('Link', 'like', '%'.$value.'%')->get()->pluck('id')->toArray();

            $groupProduct = groupProduct::find($key);

            $groupProduct->product_id = json_encode($productname);

            $groupProduct->save();

        }
      

        echo "thanh cong";


       
       
    
        foreach ($ar_info as $key => $value) {


            $productname = product::select('id')->where('Link', 'like', '%'.$value.'%')->get()->pluck('id')->toArray();

            $groupProduct = groupProduct::find($key);

            $groupProduct->product_id = json_encode($productname);

            $groupProduct->save();

        }
      

        echo "thanh cong";
        
    }


   


    public function crawl()
    {
        $dif = $this->cralwss();

        if(isset($dif)){
            foreach ($dif as $url) {
                
                    $html = file_get_html(trim($url));
                    $title = strip_tags($html->find('.emty-title h1', 0));
                    
                    $specialDetail = html_entity_decode($html->find('.special-detail', 0));
                    $content  = html_entity_decode($html->find('.emty-content .Description',0));

                   

                    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);

                    $arr_change = [];

                    $time = time();

                    $regexp = '/^[a-zA-Z0-9][a-zA-Z0-9\-\_]+[a-zA-Z0-9]$/';

                    if(isset($matches[1])){
                        foreach($matches[1] as $value){
                           
                            $value = 'http://dienmaynguoiviet.com/'.str_replace('..', '', $value);

                            $arr_image = explode('/', $value);

                            if($arr_image[0] != env('APP_URL')){

                                $file_headers = @get_headers($value);


                                if($file_headers[0] == 'HTTP/1.1 200 OK') 
                                {

                                    $infoFile = pathinfo($value, PATHINFO_EXTENSION);

                                   if(!empty($infoFile)){

                                        if($infoFile=='png'||$infoFile=='jpg'||$infoFile=='web'){

                                            $img = '/images/product/crawl/'.basename($value);

                                            file_put_contents(public_path().$img, file_get_contents($value));

                                         
                                            array_push($arr_change, 'images/product/crawl/'.basename($value));
                                        }   
                                    }

                                    
                                }
                               
                            }
                            
                        }
                    }



                    $content = str_replace($matches[1], $arr_change, $content);

                    $price = strip_tags($html->find(".p-price", 0));

                    $info  = html_entity_decode($html->find('.emty-info table', 0));
                    // $arElements = $html->find( "meta[name=keywords]" );
                    $price = trim(str_replace('Liên hệ', '0', $price));
                    $price =  trim(str_replace(["Giá:","VNĐ",".", "Giá khuyến mại:"],"",$price));
                    $images =  html_entity_decode($html->find('#owl1 img',0));
                    
                    if(!empty($images) ){
                        $image = $html->find('#owl1 img',0)->src;
                        if(!empty($image)){

                            $urlImage = 'http://dienmaynguoiviet.com/'.$image;

                            $contents = file_get_contents($urlImage);
                            $name = basename($urlImage);
                            
                            $name = '/uploads/product/crawl/'.time().'_'.$name;

                            Storage::disk('public')->put($name, $contents);

                            $image = $name;

                        }
                        else{
                            $image = '/images/product/noimage.png';
                        }

                        $model = strip_tags($html->find('#model', 0));

                        $qualtily = -1;

                        $maker = 12;

                        $meta_id = 0;

                        $group_id = 2;

                        $active = 0;

                        $link =  str_replace('/', '', trim(str_replace('http://dienmaynguoiviet.com/', '', $url)));

                        $inputs = ["Link"=>$link, "Price"=>$price, "Name"=>$title, "ProductSku"=>$model, "Image"=>$image, "Quantily"=>$qualtily, "Maker"=>$maker, "Meta_id"=>$meta_id,"Group_id"=>$group_id, "active"=>0, "Specifications"=>$info, "Salient_Features"=>$specialDetail, "Detail"=>$content];

                        product::Create($inputs);
                        DB::table('product_crawl')->insert(['link'=>$url]);
                    }
                    else{
                        print_r($url);
                    } 
               
               
            }    
        }

        echo "thanh cong";

    } 

    public function crawl1()
    {
        $post = Post::orderBy('updated_at', 'desc')->take(40)->get();

        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }


    public function getLink()
    {

        $codes =  $this->crawls();

        $strings = explode('https', $codes);

        $blog = [];

        foreach ($strings as $key => $value) {

            $link = 'https'.$value;
            
            if($key !=0){

                $html = file_get_html(trim($link));

                if(strip_tags($html->find('#page-view', 0))=='blog'){

                    array_push($blog, $link);

                }
                
            }
        }

        return($blog);

    }

    public function getLinks()
    {
        

        for($i=10; $i<1525; $i++){
            $product = post::find($i);

            $post->link = convertSlug($product->title);

            $post->save();

          
        }

        echo "thanh cong";

    }


    

    public function getMetaProducts()
    {
        for($i=4204; $i<4573; $i++){

            $link = product::find($i);


            if(isset($link)){


                $url = $link->Link;

                $urls = 'http://dienmaynguoiviet.com/'.$url.'/';

        
                $html = file_get_html(trim($urls));

                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   = new metaSeo();

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();

                $link->Meta_id = $meta['id'];

                $link->save();


            }


        }   
        echo "thanh cong";

    }

   

     public function post()
     {

        for ($i = 3; $i<1514; $i++) {

            $link = post::find($i);

            $links = $link->link;

           

            $html = file_get_html('https://dienmaynguoiviet.vn/'.trim($links).'/');
           
            $content =  str_replace(html_entity_decode($html->find('.emtry_content h2', 0)), '', html_entity_decode($html->find('.emtry_content', 0))) ; 

            // lay anh trong bai viet

             preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);

            $arr_change = [];

            $time = time();

            $regexp = '/^[a-zA-Z0-9][a-zA-Z0-9\-\_]+[a-zA-Z0-9]$/';

            if(isset($matches[1])){
                foreach($matches[1] as $value){
                   
                    $value = 'https://dienmaynguoiviet.vn/'.str_replace('../','', $value);

                    $arr_image = explode('/', $value);

                    if($arr_image[0] != env('APP_URL')){

                        $file_headers = @get_headers($value);

                        if($file_headers[0] == 'HTTP/1.1 200 OK') 
                        {

                            $infoFile = pathinfo($value);

                           if(!empty($infoFile['extension'])){

                                if($infoFile['extension']=='png'||$infoFile['extension']=='jpg'||$infoFile['extension']=='web'){

                                    $img = '/images/posts/crawl/'.basename($value);

                                    file_put_contents(public_path().$img, file_get_contents($value));

                                 
                                    array_push($arr_change, 'images/posts/crawl/'.basename($value));
                                }   
                            }

                            
                        }
                       
                    }
                    
                }
            }


           
        }    
     

        echo "thanh cong";   
    }

    
    function filter(){

        for ($i=243; $i < 2845; $i++) { 

            $product = product::find($i);

            if(!empty($product->Link) && strpos(trim($product->Link), 'tivi')){


                $groupProduct = groupProduct::find(1);

                if($groupProduct->product_id==''){

                    $datas_ar = [];

                    $groupProduct->product_id=json_encode($datas_ar);
                }
                else{
                    $groupProduct->product_id = $groupProduct->product_id;
                }

                $data_product = json_decode($groupProduct->product_id);



                array_push($data_product, $i);

                array_unique($data_product);

                $data_product = json_encode($data_product);

                $groupProduct->product_id = $data_product;


                $groupProduct->save();

            }
           

            
        }
        echo "thanh cong";
    }

    
    public function getImagePost()
    {

        for($i=4172; $i<4174; $i++){

            $posts = product::find($i);

            if(isset($posts)){

                $link = 'https://dienmaynguoiviet.vn/'.$posts->Link;

                

                $html = file_get_html(trim($link));

                $image = $html->find('.img-detail img');


                

                for($ids = 0; $ids<count($image); $ids++){

                    $images = $html->find('.img-detail img', $ids)->src;

                   
                    $images = 'https://dienmaynguoiviet.vn/'. $images;

                   

                    $file_headers = @get_headers('https://dienmaynguoiviet.vn/'.$images);



                    if($file_headers[0] == 'HTTP/1.1 200 OK'){

                        $img  = '/uploads/product/crawl/child/'.basename($images);


                        file_put_contents(public_path().$img, file_get_contents($images));




                        $input['image'] = $img;

                        $input['link'] = $img;

                        $input['product_id'] = $i;

                        $input['order'] = 0;


                        $images_model = new image();

                        $images_model = $images_model->create($input);

                      

                    }
                }
            }
            else{
                print_r($posts);
            }
        }
        echo "thanh cong";

    }

    public function selectedCode()
    {


       
            $pass =14;

       

            $code = filter::select('value')->where('id', $pass)->get();


            $codes = json_decode($code[0]->value);

            $data = [];


            
            foreach ( $codes  as $key => $values) {

                $numbers = array_filter($values, function($var){
                    return $var>243;
                    
                });

                $ProductSku = array_map(function($n){

                    return(products1::find($n)->ProductSku);

                }, $numbers);

                if(!empty($ProductSku)){
                    $data[$key] =$ProductSku;

                }
            
            }

            dd($data);

            $datasss = [];

            foreach($data as $key => $datas){

              

                $ProductSku = array_map(function($n){

                    $datass = product::where('ProductSku', $n)->first();

                    return($datass->id);

                }, $datas);


                $datasss[$key] = array_values($ProductSku);

             }

             $finter = filter::find($pass);

             $result = json_encode($datasss);

             $finter->value =  $result;

             $finter->save();
          
        echo "thanh cong";


    
    }

   



    public function removelink()
    {
       
            // $arr= product::select('id', 'ProductSku')->get()->pluck('ProductSku')->toArray();

            // $unique = array_unique($arr); 
            // $dupes = array_diff_key( $arr, $unique ); 

            // print_r($dupes);

            
        // echo "thành công";

        $arr = product::select('id', 'ProductSku')->get()->pluck('ProductSku')->toArray();

        $unique = array_unique($arr); 
        $dupes = array_diff_key($arr, $unique); 

        $dupess= array_unique($dupes);

        
     

        foreach($dupess as  $dupesss){

          
            $dataId = product::Where('ProductSku', $dupesss)->first();

            $product = $dataId::find($dataId->id)->delete();

        }

        echo "thanh cong";

    }


    public function crawlImageDienmayxanh()
    {
        
        $images = DB::table('imagecrawl')->get();

        foreach ($images as $key => $value) {

            $img = '/images/crawl_img/'.basename($value->image);

            file_put_contents(public_path().$img, file_get_contents($value->image));
            
        }
        echo "thanh cong";

    }



    public function updateModels()
    {
        $model ='QA43LS05B
                QA50LS01BA
                QA55LS01BA
                QA65LS01B
                QA32LS03B
                QA50LS03B
                QA55LS03B
                QA65LS03B
                QA75LS03B
                QA55S95B
                QA65S95B
                QA50Q80C
                QA55Q80C
                QA65Q80C
                QA75Q80C
                QA85Q80C
                QA55S95CA
                QA65S90CA
                QA65S95CA
                QA77S95CA
                GR-Q257MC
                GR-B53MB
                GR-B53PS
                RB30N4190BY/SV
                R-FVY510PGV0(GMG)
                R-FW650PGV8(GBK)
                R-WB640PGV1(GMG)
                R-SX800GPGV0(GBK)
                R-ZX740KV(X)
                R-FW690PGV7(GBW)
                R-HW540RV(X)
                S5GOC
                S5BOC
                WT1410NHB
                F2721HVRB
                FV1414S3BA
                FV1414S3P
                FV1413S4W
                FV1412S3BA
                FV1412S3PA
                FV1411S4WA
                WA23A8377GV/SV
                WA22R8870GV/SV
                WA12T5360BY/SV
                WA14CG5886BVSV
                WA14CG5745BVSV
                WA12CG5886BVSV
                WA12CG5745BVSV
                NI-S630VRA
                NI-S530ARA
                NI-S430GRA
                NN-GT35NBYUE
                NN-ST34NBYUE
                MC-CL609HN49
                MC-CL607RN49
                SR-GA721WRA
                EH-NA98RP645
                EH-NA98-K645
                EH-NE27-K645
                EH-ND57-P645
                EH-ND57-H645
                EH-ND37-K645
                EH-ND37-P645
                R-205VN-S
                R-G272VN-S
                R-G302VN-S
                R-G371VN-W
                R-C825VN (ST)
                R-C932VN (ST)
                R-G728XVN-BST
                R-C932XVN-BST
                R-32A2VN-S
                R-370VN-S
                R-289VN(W)
                KS-IH191V-BK
                KS-IH191V-GL
                KS-IH191V-RD
                KS-COM08V-SL
                KS-COM110DV-WH
                KSH-218SNV-SF
                KSH-228SNV-SF
                KN-TC50VN-SL
                KN-TC50VN-WH
                KSH-D55V
                KSH-D77V
                KSH-D1010V
                KS-N191ETV-CU
                KS-COM18V
                KP-30STV
                KP-20BTV
                KP-31BTV-CU
                KP-Y32PV-CU
                KP-Y40PV-CU
                KP-40EBV-BK
                KP-40EBV-WH
                KP-40EBV-ST
                KF-AF70EV-ST
                EM-S154PV-WH
                EM-S155PV-WH
                EKJ-10DVPS-RD
                EKJ-17EVPS-BK
                EKJ-17EVSD-WD
                EKJ-15EVS-ST
                EO-A323RCSV-ST
                EO-A384RCSV-ST
                EO-B46RCSV-BK
                EJ-J256-WH
                EJ-J415-WH
                EJ-J407-BK
                EJ-J407-WH
                EJ-J130-ST
                PJ-S40RV-LG
                FP-J80EV-H
                FP-JM40V-B
                FP-GM50E-B
                DW-D12A-W
                DW-D12A-W
                DW-D20A-W
                3LWED4815FW
                FFTCM118XBEE
                AWD712S2
                WFE2B19
                WFC3C26P
                WIO3T133P';


        $k =-1;     

        $models  = explode(PHP_EOL, $model); 

        for ($i=5121; $i < 5245; $i++) { 
            $k++;
            
            $data = product::find($i);

            $data->ProductSku =  trim($models[$k]);

            $data->save();


            $meta_title =  trim($models[$k]).', giá rẻ, Trả góp 0%';

            $meta_content = 'Mua '.trim($models[$k]).' giá rẻ. Miễn phí giao hàng & Lắp đặt. Đổi lỗi trong 7 ngày đầu. Liên hệ  hotline để mua hàng'; 

            $meta_model = metaSeo::find($data->Meta_id);

            $meta_model->meta_title =$meta_title;

            $meta_model->meta_content =$meta_content;

            $meta_model->meta_og_content =$meta_content;

            $meta_model->meta_og_title =$meta_title;

            $meta_model->meta_key_words =$meta_title;

            $meta_model->save();

        }         

    }

    public function getContentDienmayxanh()
    {
        $model ='QA43LS05B
                QA50LS01BA
                QA55LS01BA
                QA65LS01B
                QA32LS03B
                QA50LS03B
                QA55LS03B
                QA65LS03B
                QA75LS03B
                QA55S95B
                QA65S95B
                QA50Q80C
                QA55Q80C
                QA65Q80C
                QA75Q80C
                QA85Q80C
                QA55S95CA
                QA65S90CA
                QA65S95CA
                QA77S95CA
                GR-Q257MC
                GR-B53MB
                GR-B53PS
                RB30N4190BY/SV
                R-FVY510PGV0(GMG)
                R-FW650PGV8(GBK)
                R-WB640PGV1(GMG)
                R-SX800GPGV0(GBK)
                R-ZX740KV(X)
                R-FW690PGV7(GBW)
                R-HW540RV(X)
                S5GOC
                S5BOC
                WT1410NHB
                F2721HVRB
                FV1414S3BA
                FV1414S3P
                FV1413S4W
                FV1412S3BA
                FV1412S3PA
                FV1411S4WA
                WA23A8377GV/SV
                WA22R8870GV/SV
                WA12T5360BY/SV
                WA14CG5886BVSV
                WA14CG5745BVSV
                WA12CG5886BVSV
                WA12CG5745BVSV
                NI-S630VRA
                NI-S530ARA
                NI-S430GRA
                NN-GT35NBYUE
                NN-ST34NBYUE
                MC-CL609HN49
                MC-CL607RN49
                SR-GA721WRA
                EH-NA98RP645
                EH-NA98-K645
                EH-NE27-K645
                EH-ND57-P645
                EH-ND57-H645
                EH-ND37-K645
                EH-ND37-P645
                R-205VN-S
                R-G272VN-S
                R-G302VN-S
                R-G371VN-W
                R-C825VN (ST)
                R-C932VN (ST)
                R-G728XVN-BST
                R-C932XVN-BST
                R-32A2VN-S
                R-370VN-S
                R-289VN(W)
                KS-IH191V-BK
                KS-IH191V-GL
                KS-IH191V-RD
                KS-COM08V-SL
                KS-COM110DV-WH
                KSH-218SNV-SF
                KSH-228SNV-SF
                KN-TC50VN-SL
                KN-TC50VN-WH
                KSH-D55V
                KSH-D77V
                KSH-D1010V
                KS-N191ETV-CU
                KS-COM18V
                KP-30STV
                KP-20BTV
                KP-31BTV-CU
                KP-Y32PV-CU
                KP-Y40PV-CU
                KP-40EBV-BK
                KP-40EBV-WH
                KP-40EBV-ST
                KF-AF70EV-ST
                EM-S154PV-WH
                EM-S155PV-WH
                EKJ-10DVPS-RD
                EKJ-17EVPS-BK
                EKJ-17EVSD-WD
                EKJ-15EVS-ST
                EO-A323RCSV-ST
                EO-A384RCSV-ST
                EO-B46RCSV-BK
                EJ-J256-WH
                EJ-J415-WH
                EJ-J407-BK
                EJ-J407-WH
                EJ-J130-ST
                PJ-S40RV-LG
                FP-J80EV-H
                FP-JM40V-B
                FP-GM50E-B
                DW-D12A-W
                DW-D12A-W
                DW-D20A-W
                3LWED4815FW
                FFTCM118XBEE
                AWD712S2
                WFE2B19
                WFC3C26P
                WIO3T133P';

        $link = 'https://www.dienmayxanh.com/tivi/smart-man-hinh-xoay-the-sero-qled-samsung-4k-43-inch-qa43ls05b
https://www.dienmayxanh.com/tivi/smart-kieu-chu-i-co-chan-the-serif-qled-samsung-4k-50-inch-qa50ls01ba
https://www.dienmayxanh.com/tivi/smart-tivi-kieu-chu-i-co-chan-the-serif-qled-samsung-4k-55-inch-qa55ls01ba
https://www.dienmayxanh.com/tivi/smart-kieu-chu-i-co-chan-the-serif-qled-samsung-4k-65-inch-qa65ls01b
https://www.dienmayxanh.com/tivi/smart-tivi-khung-tranh-the-frame-qled-samsung-full-hd-32-inch-qa32ls03b
https://www.dienmayxanh.com/tivi/smart-khung-tranh-the-frame-qled-samsung-4k-50-inch-qa50ls03b
https://www.dienmayxanh.com/tivi/smart-khung-tranh-the-frame-qled-samsung-4k-55-inch-qa55ls03b
https://www.dienmayxanh.com/tivi/smart-khung-tranh-the-frame-qled-samsung-4k-65-inch-qa65ls03b
https://www.dienmayxanh.com/tivi/smart-khung-tranh-the-frame-qled-samsung-4k-75-inch-qa75ls03b
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-55-inch-qa55s95b
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-65-inch-qa65s95b
https://www.dienmayxanh.com/tivi/smart-tivi-qled-4k-50-inch-samsung-qa50q80c
https://www.dienmayxanh.com/tivi/smart-tivi-qled-4k-55-inch-samsung-qa55q80c
https://www.dienmayxanh.com/tivi/smart-tivi-qled-4k-65-inch-samsung-qa65q80c
https://www.dienmayxanh.com/tivi/smart-tivi-qled-4k-75-inch-samsung-qa75q80c
https://www.dienmayxanh.com/tivi/smart-tivi-qled-4k-85-inch-samsung-qa85q80c
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-55-inch-qa55s95ca
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-65-inch-qa65s90ca
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-65-inch-qa65s95ca
https://www.dienmayxanh.com/tivi/smart-tivi-oled-samsung-4k-77-inch-qa77s95ca
https://www.dienmayxanh.com/tu-lanh/tu-lanh-lg-inverter-655-lit-gr-q257mc
https://www.dienmayxanh.com/tu-lanh/tu-lanh-lg-gr-b53mb
https://www.dienmayxanh.com/tu-lanh/tu-lanh-lg-inverter-530-lit-gr-b53ps
https://www.dienmayxanh.com/tu-lanh/samsung-inverter-307-lit-rb30n4190by-sv
https://www.dienmayxanh.com/tu-lanh/tu-lanh-hitachi-390-lit-r-fvy510pgv0-gmg
https://www.dienmayxanh.com/tu-lanh/hitachi-inverter-509-lit-r-fw650pgv8
https://www.dienmayxanh.com/tu-lanh/hitachi-inverter-569-lit-r-wb640pgv1
https://www.dienmayxanh.com/tu-lanh/hitachi-inverter-573-lit-r-sx800gpgv0
https://www.dienmayxanh.com/tu-lanh/tu-lanh-hitachi-r-zx740kv-x
https://www.dienmayxanh.com/tu-lanh/hitachi-r-fw690pgv7-gbw
https://www.dienmayxanh.com/tu-lanh/tu-lanh-hitachi-inverter-540-lit-r-hw540rv-x
https://www.dienmayxanh.com/may-giat/tu-cham-soc-quan-ao-thong-minh-lg-s5goc
https://www.dienmayxanh.com/may-giat/tu-cham-soc-quan-ao-thong-minh-lg-s5boc
https://www.dienmayxanh.com/may-giat/may-giat-say-lg-inverter-14-kg-wt1410nhb
https://www.dienmayxanh.com/may-giat/may-giat-say-lg-inverter-21-kg-f2721hvrb
https://www.dienmayxanh.com/may-giat/may-giat-lg-fv1414s3ba
https://www.dienmayxanh.com/may-giat/may-giat-lg-inverter-14-kg-fv1414s3p
https://www.dienmayxanh.com/may-giat/may-giat-lg-fv1413s4w
https://www.dienmayxanh.com/may-giat/may-giat-lg-fv1412s3ba
https://www.dienmayxanh.com/may-giat/may-giat-lg-fv1412s3pa
https://www.dienmayxanh.com/may-giat/may-giat-lg-fv1411s4wa
https://www.dienmayxanh.com/may-giat/samsung-inverter-23-kg-wa23a8377gv-sv
https://www.dienmayxanh.com/may-giat/samsung-wa22r8870gv-sv
https://www.dienmayxanh.com/may-giat/samsung-wa12t5360by-sv
https://www.dienmayxanh.com/may-giat/may-giat-samsung-14kg-wa14cg5886bvsv
https://www.dienmayxanh.com/may-giat/may-giat-samsung-14kg-wa14cg5745bvsv
https://www.dienmayxanh.com/may-giat/may-giat-samsung-12kg-wa12cg5886bvsv
https://www.dienmayxanh.com/may-giat/may-giat-samsung-12kg-wa12cg5745bvsv
https://www.dienmayxanh.com/ban-ui/hoi-nuoc-panasonic-ni-s630vra
https://www.dienmayxanh.com/ban-ui/hoi-nuoc-panasonic-ni-s530ara
https://www.dienmayxanh.com/ban-ui/hoi-nuoc-panasonic-ni-s430gra
https://www.dienmayxanh.com/lo-vi-song/lo-vi-song-panasonic-nn-gt35nbyue-24-lit
https://www.dienmayxanh.com/lo-vi-song/lo-vi-song-panasonic-nn-st34nbyue-25-lit
https://www.dienmayxanh.com/may-hut-bui/may-hut-bui-dang-hop-panasonic-mc-cl609hn49
https://www.dienmayxanh.com/may-hut-bui/may-hut-bui-dang-hop-panasonic-mc-cl607rn49
https://www.dienmayxanh.com/noi-com-dien/noi-com-nap-roi-panasonic-72-lit-sr-ga721wra
https://www.dienmayxanh.com/may-say-toc/panasonic-eh-na98rp645
https://www.dienmayxanh.com/may-say-toc/panasonic-eh-na98-k645
https://www.dienmayxanh.com/may-say-toc/may-say-toc-1800w-panasonic-eh-ne27-k645
https://www.dienmayxanh.com/may-say-toc/panasonic-eh-nd57-h645
https://www.dienmayxanh.com/may-say-toc/panasonic-eh-nd57-h645
https://www.dienmayxanh.com/may-say-toc/1800w-panasonic-eh-nd37-k645
https://www.dienmayxanh.com/may-say-toc/may-say-toc-1800w-panasonic-eh-nd37-p645
https://www.dienmayxanh.com/lo-vi-song/sharp-r-205vn-s-20-lit#2-gia
https://www.dienmayxanh.com/lo-vi-song/sharp-r-g272vn-s-20-lit
https://www.dienmayxanh.com/lo-vi-song/sharp-r-g302vn-s#2-gia
https://www.dienmayxanh.com/lo-vi-song/sharp-r-g371vn-w#2-gia
https://www.dienmayxanh.com/lo-vi-song/sharp-r-c825vn-st
https://www.dienmayxanh.com/lo-vi-song/sharp-r-c932vn-st
https://www.dienmayxanh.com/lo-vi-song/lo-vi-song-sharp-r-g728xvn-bst
https://www.dienmayxanh.com/lo-vi-song/lo-vi-song-sharp-r-c932xvn-bst
https://www.dienmayxanh.com/lo-vi-song/r-32a2vn-s-23-lit
https://www.dienmayxanh.com/lo-vi-song/r-370vn-s-23-lit
https://www.dienmayxanh.com/lo-vi-song/sharp-r-289vn-w
https://www.dienmayxanh.com/noi-com-dien/sharp-18-lit-ks-ih191v-bk
https://www.dienmayxanh.com/noi-com-dien/sharp-18-lit-ks-ih191v-gl
https://www.dienmayxanh.com/noi-com-dien/sharp-ks-ih191v-rd-18-lit
https://www.dienmayxanh.com/noi-com-dien/sharp-ks-com08v-sl-072-lit
https://www.dienmayxanh.com/noi-com-dien/noi-com-dien-tu-sharp-11-lit-ks-com110dv-wh
https://www.dienmayxanh.com/noi-com-dien/sharp-ksh-218snv-sf-18-lit
https://www.dienmayxanh.com/noi-com-dien/sharp-ksh-228snv-sf-22-lit
https://www.dienmayxanh.com/noi-com-dien/sharp-18l-kn-tc50vn-sl-bac
https://www.dienmayxanh.com/noi-com-dien/sharp-18l-kn-tc50vn-wh
https://www.dienmayxanh.com/noi-com-dien/sharp-5-lit-ksh-d55v
https://www.dienmayxanh.com/noi-com-dien/sharp-7-lit-ksh-d77v
https://www.dienmayxanh.com/noi-com-dien/sharp-10-lit-ksh-d1010v
https://www.dienmayxanh.com/noi-com-dien/sharp-ks-n191etv
https://www.dienmayxanh.com/noi-com-dien/dien-tu-sharp-ks-com18v
https://www.dienmayxanh.com/binh-thuy-dien/binh-thuy-dien-sharp-kp-30stv
https://www.dienmayxanh.com/binh-thuy-dien/dien-sharp-kp-20btv
https://www.dienmayxanh.com/binh-thuy-dien/sharp-kp-31btv-cu
https://www.dienmayxanh.com/binh-thuy-dien/sharp-kp-y32pv-cu
https://www.dienmayxanh.com/binh-thuy-dien/sharp-kp-y40pv-cu
https://www.dienmayxanh.com/binh-thuy-dien/binh-thuy-dien-sharp-kp-40ebv-bk-4-lit
https://www.dienmayxanh.com/binh-thuy-dien/binh-thuy-dien-sharp-kp-40ebv-wh-4-lit
https://www.dienmayxanh.com/binh-thuy-dien/binh-thuy-dien-sharp-kp-40ebv-st-4-lit
https://www.dienmayxanh.com/noi-chien-khong-dau/sharp-kf-af70ev-st
https://www.dienmayxanh.com/may-xay-sinh-to/sharp-em-s154pv-wh
https://www.dienmayxanh.com/may-xay-sinh-to/sharp-em-s155pv-wh
https://www.dienmayxanh.com/binh-dun-sieu-toc/sharp-ekj-10dvps-rd
https://www.dienmayxanh.com/binh-dun-sieu-toc/binh-dun-sieu-toc-sharp-ekj-17evps-bk
https://www.dienmayxanh.com/binh-dun-sieu-toc/binh-dun-sieu-toc-sharp-ekj-17evsd-wd
https://www.dienmayxanh.com/binh-dun-sieu-toc/binh-dun-sieu-toc-sharp-ekj-15evs-st
https://www.dienmayxanh.com/lo-nuong/sharp-eo-a323rcsv-st
https://www.dienmayxanh.com/lo-nuong/sharp-eo-a384rcsv-st
https://www.dienmayxanh.com/lo-nuong/lo-nuong-sharp-eo-b46rcsv-bk
https://www.dienmayxanh.com/may-vat-cam/may-vat-cam-sharp-ej-j256-wh
https://www.dienmayxanh.com/may-vat-cam/may-vat-cam-sharp-ej-j415-wh
https://www.dienmayxanh.com/may-vat-cam/may-vat-cam-sharp-ej-j407-bk
https://www.dienmayxanh.com/may-vat-cam/may-vat-cam-sharp-ej-j407-wh
https://www.dienmayxanh.com/may-vat-cam/may-vat-cam-sharp-ej-j130-st
https://www.dienmayxanh.com/quat/dung-sharp-pj-s40rv-lg
https://www.dienmayxanh.com/may-loc-khong-khi/may-loc-khong-khi-sharp-fp-j80ev-h
https://www.dienmayxanh.com/may-loc-khong-khi/may-loc-khong-khi-sharp-fp-jm40v-b
https://www.dienmayxanh.com/may-loc-khong-khi/sharp-fp-gm50e-b
https://www.dienmayxanh.com/may-hut-am/may-hut-am-sharp-dw-d12a-w
https://www.dienmayxanh.com/may-hut-am/may-hut-am-sharp-dw-d12a-w
https://www.dienmayxanh.com/may-hut-am/may-hut-am-sharp-dw-d20a-w
https://www.dienmayxanh.com/may-say-quan-ao/may-say-thong-hoi-whirlpool-15-kg-3lwed4815fw
https://www.dienmayxanh.com/may-say-quan-ao/may-say-ngung-tu-whirlpool-8-kg-fftcm118xb-ee
https://www.dienmayxanh.com/may-say-quan-ao/may-say-thong-hoi-whirlpool-7-kg-awd712s2
https://www.dienmayxanh.com/may-rua-chen/whirlpool-wfe-2b19
https://www.dienmayxanh.com/may-rua-chen/whirlpool-wfc-3c26p
https://www.dienmayxanh.com/may-rua-chen/whirlpool-wio-3t133p
';

        $codess = explode(PHP_EOL, $link);

        $models  = explode(PHP_EOL, $model);

        foreach ($codess as $key => $val) {

            $file_headers = @get_headers(trim($val));

            if($file_headers[0] == 'HTTP/1.1 200 OK') 
            {
            
                $html = file_get_html(trim($val));

                $content  = html_entity_decode($html->find('.article ',0));

                $tskt  = html_entity_decode($html->find('.parameter',0));

                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i',$content, $matches);

                $content =strip_tags($content, '<p><strong><img><h3>');

                foreach ($matches[1] as $key => $value) {

                    // $inputs = [];

                    // $inputs['link'] = $val;

                    // $inputs['image'] = $value;

                    // DB::table('imagecrawl')->insert($inputs);

                    $img = '/images/crawl_img/'.basename($value);

                    // $file_headers = @get_headers(trim($value));

                    // viết lại ảnh đã lưu

                    $content = str_replace($value, $img, $content);

                    $content = str_replace('data-src', 'src', $content);
                   
                }

                $input = [];

                $input['Specifications'] = $tskt;

                $input['Detail'] = $content;

               
                $date = Carbon::now();

                $input['created_at'] = $date;

                $input['updated_at'] = $date;

                $input['ProductSku'] = trim($models[$key]);

                $meta_title = $input['ProductSku'].', giá rẻ, Trả góp 0%';

                $meta_content = 'Mua '.$input['ProductSku'].' giá rẻ. Miễn phí giao hàng & Lắp đặt. Đổi lỗi trong 7 ngày đầu. Liên hệ  hotline để mua hàng'; 

                $meta_model = new metaSeo();

                $meta_model->meta_title =$meta_title;

                $meta_model->meta_content =$meta_content;

                $meta_model->meta_og_content =$meta_content;

                $meta_model->meta_og_title =$meta_title;

                $meta_model->meta_key_words =$meta_title;

                $meta_model->save();

                $input['Meta_id'] = $meta_model['id'];

                $input['user_id'] =  1;


                DB::table('products')->insert($input);
            }  

            else{
                echo $val;
            }   

        }

        echo "thành công";
    }
   
}

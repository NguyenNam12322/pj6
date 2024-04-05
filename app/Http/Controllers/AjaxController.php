<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotProduct;

use App\Models\hotsProduct;

use App\Models\saleProduct;

use App\Models\groupProduct;

use App\Models\product;

use App\Models\Order;

use App\Models\filter;

use App\Models\deal;

use App\Models\promotion;

use App\Models\popup;

use Validator;

use App\Models\banner;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

use DB;

use App\Models\newProduct;

use Illuminate\Support\Facades\Cache;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\rate;
use App\Models\flashdeal;

class AjaxController extends Controller
{
    public function loginClientsFe(Request $request)
    {
        $email =  strip_tags(trim($request->email), '@') ;

       

        $password = $request->password;

        $check  =   DB::table('loginclient')->where('email', $email)->first();

        if(!empty($check)){
            if( Hash::check($request->password, $check->password) == true){

                $ar_info = ['status'=>'Đăng nhập thành công', 'number'=>$check->phone, 'name'=>$check->fullname];

                Session::put('status-login', $ar_info);

                return redirect()->route('homeFe');

            }

        }

        Session::put('status-login', 'Mật khẩu hoặc email không đúng');
        
        return redirect()->route('homeFe');
        
    }

    public function logout()
    {
        Session::forget('status-login');
        return redirect()->back();

    }

    public function banner_update_stt(Request $request)
    {
        $val = $request->val;
        if($val != null){
           
            $id  = $request->id;
            $banner = banner::find($id);

            $banner->stt = $val;
            $banner->save();
        }    
    }

    public function giftGroupAdd(Request $request)
    {
        $group_product = $request->group_product;
        $group_gift    = $request->group_gift;
        $addGroup      = DB::table('gift_group')->where('group_product', $group_product);
        $addGroup->update(['group_gift'=>$group_gift]);
        return response('thanh cong');


    }
  
    public function addHotProduct(Request $request)
    {

        if($request->ajax())
        {

            $addProduct = new hotProduct();

            $addProduct->product_id = $request->product_id;

            $addProduct->group_id = $request->group_id;

            $addProduct->save();

            return "thêm thành công sản phẩm có product_id ".$request->product_id;

        }
    }


     public function addHotsProduct(Request $request)
    {

        if($request->ajax())
        {

            $addProduct = new hotsProduct();

            $addProduct->product_id = $request->product_id;

            $addProduct->group_id = $request->group_id;

            $addProduct->save();

            return "thêm thành công sản phẩm có product_id ".$request->product_id;

        }
    }

     public function removeHotsProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = hotsProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }


    }

    public function registerClient(Request $request)
    {
        if($request->ajax())
        {
            $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:loginclient',
           'fullname' => 'required|string|max:150',
           'password' => 'required',
           
           ]);
            
           if ($validator->fails()) {

                return response($validator->messages()->first());
                
           }
           else{
                $input['password'] = bcrypt($request->password);
                $input['email'] = strip_tags($request->email);
                $input['fullname'] = strip_tags($request->fullname);
                $input['phone'] = strip_tags($request->phone);
                $result = DB::table('loginclient')->insert($input);
                return response('Đăng ký thành công');

           }
        }    
 
    }

    public function getEmail(Request $request)
    {
        if($request->ajax())
        {
            $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:user_email',
           
           ]);
            
           if ($validator->fails()) {

                return response($validator->messages()->first());
                
           }
           else{
                $input['email'] = $request->email;
                
                $result = DB::table('user_email')->insert($input);
                return response('Đăng ký thành công');

           }
        }    

        
    }

    public function removeHotProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = hotProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }


    }

    public function getProductActive(Request $request)
    {
        $search = $request->product;

        $search = strip_tags($search);

        if(!empty($search)){

            $search = str_replace('dieu hoa', 'Điều hòa', $search);

            $search = str_replace('tu dong', 'Tủ đông', $search);

            if($search === 'oled'){
                
                $search = 'tivi oled';
            }

            $search = ucfirst($search);

            if(!Cache::has('product_search')){

                $productss = product::select('Link', 'Name', 'Image', 'Price', 'id', 'ProductSku', 'promotion',  'Sailent_Features')->where('active', 1)->get();

                Cache::forever('product_search',$productss);

            }

            $data =  Cache::get('product_search');

            
            $product = collect($data)->filter(function ($item) use ($search) {
                return false !== strpos($item->ProductSku, $search);
            });

            if($product->count()==0){

                $product = collect($data)->filter(function ($item) use ($search) {
                    return false !== strpos($item->Name, $search);
                });

                // search khi tên có viết hoa

                if($product->count()==0){

                    $product = collect($data)->filter(function ($item) use ($search) {
                        return false !== stristr($item->Name, $search);
                    });


                    if($product->count()==0){

                        // nếu không có thì search bằng thư viện FullTextSearch

                        if($product->count()==0){
                            // search bằng thư viện FullTextSearch
                            $product = product::FullTextSearch('Name', $search)->select('id', 'Name', 'Price', 'Link', 'Image')->where('active',1)->get();
                            
                            if($product->count()==0){
                                $product = product::where('Name', 'like', '%'.$search.'%')->where('active',1)->get();
                            }
                        } 
                       
                    }
                }

                
            }

            $product = $product->take(6)->sortByDesc('id');

            $sugests =[];

            $now  = Carbon::now();

            $date_string_flash_deal = DB::table('date_flash_deal')->where('id', 1)->first()->date;

            $date_flashdeal = \Carbon\Carbon::create($date_string_flash_deal);

            $add_date = $date_string_flash_deal;
            $time1_start = \Carbon\Carbon::createFromDate($add_date.', 9:00');
            $time1 = \Carbon\Carbon::createFromDate($add_date.', 12:00');
            $time2_start = \Carbon\Carbon::createFromDate($add_date.', 12:00');
            $time2 = \Carbon\Carbon::createFromDate($add_date.', 14:00');
            $time3_start = \Carbon\Carbon::createFromDate($add_date.', 14:00');
            $time3 = \Carbon\Carbon::createFromDate($add_date.', 17:00');
            $time4_start = \Carbon\Carbon::createFromDate($add_date.', 17:00');
            $time4 = \Carbon\Carbon::createFromDate($add_date.', 22:00');
            $define = [['start'=>'9h', 'endTime'=>$time1, 'startTime'=>$time1_start], ['start'=>'12h', 'endTime'=>$time2, 'startTime'=>$time2_start], ['start'=>'14h', 'endTime'=>$time3, 'startTime'=>$time3_start], ['start'=>'17h', 'endTime'=>$time4, 'startTime'=>$time4_start]];


            foreach($product as $products){

                $check_deal =  deal::where('product_id',  $products->id)->where('active', 1)->first();

                $deal_check_add = false;
                
                if(!empty($check_deal) && !empty(!empty($check_deal->deal_price))){
                    
                    $timeDeal_star = $check_deal->start;
                    $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);
                    $timeDeal_end = $check_deal->end;
                    $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);

                    if($now->between($check_deal->start, $check_deal->end)){
                        $deal_check_add = true;
                        $products->Price = $check_deal->deal_price;
                    }
                
                }

                else{
                    // check flash deal
                
                    if($date_flashdeal->isToday()){

                         $check_Pd_Flash_deal = flashdeal::select('flash_deal_time_id')->where('product_id', $products->id)->first();

                        if(!empty($check_Pd_Flash_deal)){

                            foreach($define as $key => $value){

                                if($now->between($value['startTime'], $value['endTime'])){
                                    
                                    $groups_deal = $key;

                                    $groups_deal = $groups_deal+1;

                                    $flashDeal = flashdeal::where('product_id', $products->id)->where('flash_deal_time_id', $groups_deal)->where('active',1)->get()->last();

                                    if(!empty($flashDeal)){

                                       
                                            $deal_check_add = true;
                                          
                                            $products->Price =  $flashDeal->deal_price;
                                           
                                        

                                    }

                                }
                            } 
                        }        
                    }


                }

                if($products->Price==0){
                    $priceInt = 'Liên hệ';
                }
                else{
                    $priceInt = number_format($products->Price).'đ';
                }

                $sugest = '<a href="'.route("details", $products->Link).'"><img src="'.asset($products->Image).'" width="50" style="margin-right:10px;"></a><a class="suggest_link" href="'.route('details', $products->Link).'">'.$products->Name.'</a><br> <p style="color:red; font-weight:bold">Giá: '. str_replace(',', '.',$priceInt) .'</p><br>';

                array_push($sugests, $sugest);
            }

            return response(json_encode($sugests));

        }
        
    }

    public function addSaleProduct(Request $request)
    {

        if($request->ajax())
        {


            $addProduct = new saleProduct();

            $addProduct->product_id = $request->product_id;

            $addProduct->group_id = $request->group_id;

            $addProduct->save();

            return "thêm thành công sản phẩm có product_id ".$request->product_id;

        }
    }

    public function showGroupData(Request $request)
    {
        $id = $request->id;

        $hot = DB::table('hot')->select('product_id')->where('group_id', $id)->orderBy('orders', 'asc')->get()->pluck('product_id');

        $data = product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();

        return view('frontend.ajax.showgroupdata', compact('data'));
    }

    public function getProductSeachValueInput(Request $request)
    {

        $clearData = trim($request->search);

        $clearData = strip_tags($clearData);

        $search = $clearData;

        $products = product::where('Name', 'like', '%'.$search.'%')->where('active', 1)->Orwhere('ProductSku', $search)->where('active', 1)->first();


        $sugests = [];

        if(!empty($products)){
            $sugest = '<a href="javascript:void(0)" onclick=\'add_Pd_search("'.$products->Name.'")\'><img src="'.asset($products->Image).'" width="50" style="margin-right:10px;"></a><a class="suggest_link" href="javascript:void(0)" onclick=\'add_Pd_search("'.$products->Name.'")\'>'.$products->Name.'</a>';

            array_push($sugests, $sugest);
        }

        

        return response(json_encode($sugests));
    }

    public function addNewProduct(Request $request)
    {
        $addProduct = new newProduct();

        $addProduct->product_id = $request->product_id;

        $addProduct->group_id = $request->group_id;

        $addProduct->save();

        return "thêm thành công sản phẩm có product_id ".$request->product_id;

    }

    public function rateForm(Request $request)
    {
        if($request->ajax()){
            $rate =  new rate();
            $input['star'] = $request->star;
            $input['email'] = $request->email;
            $input['name'] = $request->name;
            $input['content'] = $request->content;
            $input['product_id'] = $request->product_id;
            $input['active'] = 0;
            $rate::create($input);

            return response('Đánh giá sản phẩm thành công! đánh giá của bạn đang chờ được kiểm duyệt xin cảm ơn');
           
        }
        
    }

    public function rateFormByAdmin(Request $request)
    {
    
        $name  = Auth::user()->name;
        $email = Auth::user()->email;
        $rate =  new rate();
        $input['star'] = 5;
        $input['email'] = $email;
        $input['name'] = $name.' (quản trị viên)';
        $input['content'] = $request->content;
        $input['product_id'] = $request->product_id_feedback;
        $input['id_feed_back'] = $request->id_feedback;
        $input['active'] = 1;
        $rate::create($input);
        return redirect()->back();
           
    }



    public function removeRate(Request $request)
    {
        $id = $request->id;

        $data = rate::find($id);

        if($data->active === 0){

            $data->delete();

            return response('xóa thành công');

        }
        else{
            return response('Vui lòng chuyển lại trạng thái, sau đó xóa');

        }


    }

    public function removeSaleProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = saleProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }


    }

    public function removeNewProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = newProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }

    }

    public function removeLimitProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = product::find($product_id);

        $product->limits = 0;

        $product->save();
       
    }

    public function addLimitProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = product::find($product_id);

        $product->limits = 1;

        $product->save();
       
    }


    public function changeMoneyPromotionProduct(Request $request)
    {
        
        $product_id = trim($request->product_id);

        $action     = $request->action;


        if($action==1){


            DB::table('money_promotion')->insert(['product_id'=>$product_id]);


        }
        else{

            DB::table('money_promotion')->where('product_id', $product_id)->delete();
        }

        $money_promotion = DB::table('money_promotion')->select('product_id')->get();

        $ar_list = [];

        if(!empty($money_promotion) && $money_promotion->count()>0 ){

            foreach ($money_promotion as  $value) {

                array_push($ar_list, $value->product_id);
               
            }

        }


        if(Cache::has('money_promotion')){

            Cache::forget('money_promotion');

        }
       
        Cache::forever('money_promotion', $ar_list);
    }

    protected function checkActive(Request $request)
    {
        $id = $request->product_id;

        $active = $request->active;

        $product = product::find($id);

        $product->active = $active;

        $product->save();

        echo "thanh cong";

    }


    public function findChild(Request $request)
    {
        $id = $request->id;


        $id = str_replace('sub', '', $id);

        $product_id = $request->product_id;


    
        $data = groupProduct::where('parent_id', $id)->get();
        


        return view('frontend.ajax.child_click', compact('data', 'id', 'product_id'));

    }

    public function showViewerProduct(Request $request)
    {
        if($request->ajax()){
            $clear_data = (array)json_decode($request->product_id);

               // kiểm tra dữ liệu đầu vào
            $data_product_id = [];

            if(isset($clear_data)){
                $dem = 0;
                foreach ($clear_data as $value) {
                    $dem++;

                    if($dem<13){
                        $value = strip_tags($value);

                        array_push($data_product_id, $value);

                    }
                   
                }
            }

            $data_product_id = array_reverse($data_product_id);

            $product_viewer = Cache::get('product_search')->whereIn('id', $data_product_id)->take(12);
            
            return view('frontend.ajax.viewer-product', compact('product_viewer'));      
        }    
    }

    

    public function addProductToCart(Request $request)
    {
        $id = $request->product_id;

        $gift = $request->gift_check;

        
        $data_Product = product::find($id);

        $deal   = deal::where('product_id', $id)->where('active', 1)->get()->first();

        if(empty($deal)){

            $now = \Carbon\Carbon::now();

            $date_string_flash_deal = DB::table('date_flash_deal')->where('id', 1)->first()->date;
            $date_flashdeal = \Carbon\Carbon::create($date_string_flash_deal);

            if($date_flashdeal->isToday()){
                $add_date = $date_string_flash_deal;
                $time1_start = \Carbon\Carbon::createFromDate($add_date.', 9:00');
                $time1 = \Carbon\Carbon::createFromDate($add_date.', 12:00');
                $time2_start = \Carbon\Carbon::createFromDate($add_date.', 12:00');
                $time2 = \Carbon\Carbon::createFromDate($add_date.', 14:00');
                $time3_start = \Carbon\Carbon::createFromDate($add_date.', 14:00');
                $time3 = \Carbon\Carbon::createFromDate($add_date.', 17:00');
                $time4_start = \Carbon\Carbon::createFromDate($add_date.', 17:00');
                $time4 = \Carbon\Carbon::createFromDate($add_date.', 22:00');
           
           
                $define = [['start'=>'9h', 'endTime'=>$time1, 'startTime'=>$time1_start], ['start'=>'12h', 'endTime'=>$time2, 'startTime'=>$time2_start], ['start'=>'14h', 'endTime'=>$time3, 'startTime'=>$time3_start], ['start'=>'17h', 'endTime'=>$time4, 'startTime'=>$time4_start]];

                foreach($define as $key => $value){
                    if($now->between($value['startTime'], $value['endTime'])){
                        
                        $groups_deal = $key;

                        $groups_deal = $groups_deal+1;

                        $deal = flashdeal::where('product_id',  $id)->where('flash_deal_time_id', $groups_deal)->where('active',1)->first();

                        
                    }    

                }    
            }   
        }


        if(!empty($deal)){

            $price =  trim(str_replace('.', '',$deal->deal_price)) ;

          

        }
        else{
            $price = trim($data_Product->Price);
        }
             
        Cart::add(['id' => $id, 'name' => $data_Product->Name,  'qty' => 1, 'price' => $price, 'weight' => '500',  'options' => ['link' => $data_Product->Link, 'gift'=>$gift??'', 'transportation_cost'=>0]]);



        $data_cart = Cart::content();

        dd($data_cart);


        return view('frontend.ajax.cart', compact('data_cart'));
       
    }

    public function addCartFast(Request $request)
    {
         $id = $request->product_id;

        
        $data_Product = product::find($id);

        $deal   = deal::where('product_id', $id)->where('active', 1)->get()->first();

        if(empty($deal)){
            $now = \Carbon\Carbon::createFromDate('29-8-2022, 11:00');

            $time1_start = \Carbon\Carbon::createFromDate('29-8-2022, 9:00');
            $time1 = \Carbon\Carbon::createFromDate('29-8-2022, 12:00');
            $time2_start = \Carbon\Carbon::createFromDate('29-8-2022, 12:00');
            $time2 = \Carbon\Carbon::createFromDate('29-8-2022, 14:00');
            $time3_start = \Carbon\Carbon::createFromDate('29-8-2022, 14:00');
            $time3 = \Carbon\Carbon::createFromDate('29-8-2022, 17:00');
            $time4_start = \Carbon\Carbon::createFromDate('29-8-2022, 17:00');
            $time4 = \Carbon\Carbon::createFromDate('29-8-2022, 22:00');
            $define = [['start'=>'9h', 'endTime'=>$time1, 'startTime'=>$time1_start], ['start'=>'12h', 'endTime'=>$time2, 'startTime'=>$time2_start], ['start'=>'14h', 'endTime'=>$time3, 'startTime'=>$time3_start], ['start'=>'17h', 'endTime'=>$time4, 'startTime'=>$time4_start]];

            foreach($define as $key => $value){
                if($now->between($value['startTime'], $value['endTime'])){
                    $groups_deal = $key+1;

                    $deal = flashdeal::where('product_id',  $id)->where('flash_deal_time_id', $groups_deal)->where('active',1)->first();

                    
                }    

            }    
               
        }

        if(!empty($deal)){

            $price = trim($deal->deal_price);

        }
        else{
            $price = trim($data_Product->Price);
        }

        Cart::add(['id' => $id, 'name' => $data_Product->Name,  'qty' => 1, 'price' => $price, 'weight' => '500',  'options' => ['link' => $data_Product->Link, 'transportation_cost'=>0]]);
             
        // Cart::add(['id' => $id, 'name' => $data_Product->Name,  'qty' => 1, 'price' => $price, 'weight' => '500', 'options' => ['link' => $data_Product->Link]]);

        $data_cart = Cart::content();

        return response(count($data_cart));
    }

    public function removeProductCart(Request $request)
    {

        $id = $request->product_id;
       
        Cart::remove($id);

        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
    }

    public function showProductCart(Request $request)
    {
        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
    }

    public function addProductToCartByNumber(Request $request)
    {
        $rowId = $request->rowId;

        $qualtity = $request->number;

        Cart::update($rowId, $qualtity);

        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
       
    }

    public function addConfirm(Request $request)
    {
        $id = $request->id;

        $value = $request->value;


        $orders = Order::find($id);

        $product = json_decode($orders->product);

        $order = new Frontend\orderController();

        $product = $order->apiInsertGent($id);


        // define ten nguoi duyet tu gen

        $user_convert = [4=>'247', 6=>'250', 8=>'245'];

        $userss = $user_convert[Auth::user()->id]??'1';


        if($value==1){
             // Create the context for the request

            $postData = [
               "api_id" => "qr4SP88JRWzDzd/u4AyG8djhaaj5eJHfFiudnB2klPQ=", 
               "vcustomers_insert_individual" => [
                     "di_dong" => $orders->phone_number, 
                     "ten_khach_hang" => $orders->name,
                     "nguoi_quan_ly" =>$userss,
                  ], 
               "hop_dong" => [
                  [
                     "col162" => "12 tháng", 
                     "col112" => "Đ/H website do ".auth()->user()->name." ".$orders->updated_at->format('d/m/Y'), 
                     "col142" => \Carbon\Carbon::parse(\Carbon\Carbon::now())->timestamp, 
                     "col121" => "Đ/H website do ".auth()->user()->name." ".$orders->updated_at->format('d/m/Y'), 
                     "col132" => "573", 
                     "col421" => $userss,
                     "chi_tiet" =>$product,
                  ] 
               ] 
            ]; 

            $context = stream_context_create(array(
                'http' => array(
                    
                    'method' => 'POST',

                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                                "Authorization: Basic Z2VuY3JtX2drczpnZW5jcm1fZ2tzQDIwMTYj",
                    'content' => json_encode($postData)
                )
            ));

            // Send the request
            $response = file_get_contents('https://dienmaynguoiviet.gencrm.com/modules/api/insert', FALSE, $context);

            // Check for errors
            if($response === FALSE){
                die('Error');
            }

            // Decode the response
            $responseData = json_decode($response, TRUE);


        }

        $order = Order::find($id);

        $order->active = $value;

        $order->user_active = Auth::user()->id;

        $order->save();

        return Response('thanh cong');

    }

    public function addValueSelectFilter(Request $request)
    {

        $product_id = $request->product_id;

        $filterId = $request->filter_id;

        $propertyId = $request->property_id;

        $checked  = $request->check;

        $filter   = filter::find($filterId);

        $value   =  $filter->value;

        $arr     = [];


        if(!empty($value)){

            if($checked ==1){

                $arr  = json_decode($value, true);

                if(isset($arr[$propertyId])){

                    $arr[$propertyId][] =   $product_id;
                }
                else{
                    $arr[$propertyId]  = array($product_id);
                }

                
                json_encode($arr);

                $filter->value = $arr;

                $filter->save();


            }

            // trường hợp xóa 

            else{

                $arr  = json_decode($value, true);
               
                if(isset($arr[$propertyId])){

                    $index_value = array_search($product_id, $arr[$propertyId]);

                    if((int)$index_value>-1){

                        unset($arr[$propertyId][$index_value]);

                        $filter->value = json_encode($arr);

                        $filter->save();

                       

                    }
                   

                }

            

            }
            
        }
        // trường hợp chưa có dữ liệu
        else{
            
            
            $arr[$propertyId] = array($product_id);

            $filter->value = json_encode($arr);

            $filter->save();

            

        }
        $product_tick = product::find($product_id);
        $product_tick->updated_at = Carbon::now();
        $product_tick->user_id = Auth::user()->id;
        $product_tick->save();
        return response('thành công');


    }

     protected function filterByValue(Request $request)
    {
        $list_id = json_decode($request->json_id_product);
        $action  = $request->action;
        $idcate = $request->idcate;
        $check_parent = groupProduct::where('id',  $idcate)->first();

        if(!empty($check_parent)){
            $list_id = json_decode($check_parent->product_id);
        }

       
        if($action =='id'){
            $product_search   = product::whereIn('id', $list_id)->where('active', 1)->where('Price', '>', 0)->orderBy('id', 'asc')->take(50)->get();
        }
        else{

           $product_search   = product::whereIn('id', $list_id)->orderBy('Price', $action)->where('Price', '>', 0)->where('active', 1)->take(50)->get();
           
        }
        return view('frontend.ajax.product', compact('product_search', 'action', 'check_parent','idcate'));
        
    }

    protected function filterByPageFilter(Request $request)
    {

        $list_id = json_decode($request->json_id_product);
        $action  = $request->action;
        $idcate = $request->idcate;

        if($action =='id'){
            $product_search   = product::whereIn('id', $list_id)->where('active', 1)->where('Price', '>', 0)->orderBy('id', 'asc')->take(50)->get();
        }
        else{

           $product_search   = product::whereIn('id', $list_id)->orderBy('Price', $action)->where('Price', '>', 0)->where('active', 1)->take(50)->get();
           
        }
        return view('frontend.ajax.product', compact('product_search', 'action','idcate'));


    }



    public function accept_rate(Request $request)
    {
        if($request->ajax()){

            $id = $request->id;
            $active =  $request->active;
            $rate =  rate::find($id);
            $rate->active = ($active==1)?0:1;
            $rate->save();

            return response([$id,  $rate->active]);
           
        }
    }

    public function add_group_promotion(Request $request)
    {
        if($request->ajax()){

            $input['end']       = $request->end;

            $input['start']       = $request->start;

            $input['group_name'] = $request->name_promotion;

            $input['gift1'] =$request->gift1;

            $input['gift2'] =$request->gift2;

            if(!empty($request->type)){

                 $input['type'] = 1;
            }
            else{
                $input['type'] = 0;
            }

          
            $result = DB::table('group_gift')->insert($input);
        
            return response('tạo nhóm gift thành công');
        
        }    
    }

    public function add_gift(Request $request)
    {

        if($request->ajax()){

            $input['id_product']       = $request->product_id;

            $input['id_group_gift'] = $request->id_group_gift;


             Cache::forget('id_checks'.$request->product_id);

            Cache::forget('promotion'.$request->product_id);

            $group_gift = DB::table('group_gift')->where('id', $input['id_group_gift'])->get()->first();

            if(!empty($group_gift)){
                $input['start'] =  $group_gift->start;

                $input['end'] =  $group_gift->end;


                $result = DB::table('promotion')->insert($input);
                
                return response('thanh cong');

            }
            else{

                $input['start'] =  '25-05-2022,08:00';

                $input['end'] =  '26-05-2022,08:00';

                $result = DB::table('promotion')->insert($input);

                return response('đã xóa khuyến mãi của sản phẩm');
            }
        }    
    }

    public function muchSearch(Request $request)
    {
        if($request->ajax()){

            $input['link']       = $request->link;

            $input['title'] = $request->title;

           

            $result = DB::table('muchsearch')->insert($input);
            
            return response('<a href="'.$request->link.'">'.$request->title.'</a><br>');

        }    
    }

    public function getCompareProduct(Request $request)
    {
        $product = json_decode($request->ar_product_id);

        if(isset($product)){

            if(count($product)<5){


                if(!Cache::has('product_search')){

                    $productss = product::select('Link', 'Name', 'Image', 'Price', 'id', 'ProductSku', 'promotion_box', 'Sailent_Features')->where('active', 1)->get();

                    Cache::forever('product_search',$productss);

                }

                $data  = Cache::get('product_search')->whereIn('id', $product);

                return view('frontend.ajax.compare', compact('data'));
            }
            
        }

    }

  
}



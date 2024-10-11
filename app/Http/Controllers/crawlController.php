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
    public function crawl_insert()
    {
        $now = Carbon::now();
        $code = 'https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-10-kg-aqw-dr100jtbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aqw-dr120htbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-14-kg-aqw-dr140uhtps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-15-kg-aqw-dr150ugtps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-16-kg-aqw-dr160uhtps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-18-kg-aqw-dr180uhtps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-11-kg-aqw-fr110jtbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aqw-fr120ht-bk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-13-kg-aqw-fr130uhtss/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-14-kg-aqw-fr140uhtss/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-8-2-kg-aqw-s82jtbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-9-kg-aqw-s90cts/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-10-kg-aqw-u100ftbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-10-kg-wt-10nb3/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-7-5-kg-wt-75ng1/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-8-5-kg-wt-85ng1/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-8-kg-wt-8ng2/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-9-kg-wt-9nb3/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-10-5-kg-hwm-t6105abg/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-8-5-kg-hwm-t685abg/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-9-5-kg-hwm-t695abg/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-inverter-14-kg-sf-140tcvsl/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-17-kg-sf-170zcvss/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-20-kg-sf-200zhvgg/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-25-kg-sf-250zfvadss/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-9-kg-t2109nt1g/
        https://dienmaygiakhang.vn/san-pham/https-dienmaygiakhang-vn-san-pham-may-giat-lg-inverter-12-kg-t2512vbtb/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-inverter-14-kg-t2514vbtb/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-15-kg-tv2515dv5j/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-17-kg-tv2517sv7j/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-19-kg-tv2519sv7j/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-25-kg-tv2725sv9j/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-10-kg-na-f100a9brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-10-kg-na-f100a9drv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-10-kg-na-f10s10brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-8-2-kg-na-f82y01drv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-8-5-kg-na-f85a9brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-9-kg-na-f90a9brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-9-kg-na-f90a9drv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-9-kg-na-f90s10brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-10-5-kg-na-fd105w3bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-10-5-kg-na-fd10ar1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-10-5-kg-na-fd10vr1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-11-5-kg-na-fd115w3bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-11-5-kg-na-fd11ar1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-11-5-kg-na-fd11vr1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-11-5-kg-na-fd11xr1lv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-12-5-kg-na-fd125v1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-13-5-kg-na-fd135x3bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-14-kg-na-fd14v1brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-16-kg-na-fd16v1brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-18-kg-na-fd180w3bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-14-5-kg-na-fd290cebv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-9-5-kg-na-fd95v1brv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-9-5-kg-na-fd95x1lrv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-ecobubble-inverter-10-5-kg-wa10cg5745bd-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-12-kg-wa12cg5745bvsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-12-kg-wa12cg5886bvsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-12-kg-wa12t5360bv-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-14-kg-wa14cg5886bvsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-17-kg-wa17cg6442bdsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-23-kg-wa23a8377gv-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-9-5-kg-wa95cg4545bdsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-10-kg-es-w10sv-gy/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-12-kg-es-w12sv-gy/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-10-kg-es-y100hv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-7-5-kg-es-y75hv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-8-5-kg-es-y85hv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-9-kg-es-y90hv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-9-kg-aw-dk1000fvkk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-10-kg-aw-dm1100jvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-12-kg-aw-duk1300kvsg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-13-kg-aw-dum1400lvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-15-kg-aw-dum1600lvsg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-9-kg-aw-m1000fvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-10-kg-aw-m1100jvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-10-kg-aw-m1100pvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-8-kg-aw-m905bvmk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-15-kg-aw-duhn1600lvmg/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-10-5-kg-aqd-a1051g-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-10-5-kg-aqd-a1052j-bk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aqd-a1200hps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-15-kg-aqd-a1500hps/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-9-5-kg-aqd-a951gs/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-9-5-kg-aqd-a952jbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-10-kg-aqd-ddw1000jbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-11-kg-aqd-ddw1100jbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-10-kg-aqd-dw1000jbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-11-kg-aqd-dw1100jbk/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-10-kg-aw10-b4959u1kb/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aw12-b4959u1kb/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aw12-b4959u1kw/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aw12-bp4959u1kb/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-12-kg-aw12-bp4959u1kw/
        https://dienmaygiakhang.vn/san-pham/may-giat-aqua-inverter-13-kg-aw13-bp4959ks8/
        https://dienmaygiakhang.vn/san-pham/may-giat-beko-9-kg-wcv9648xsts/
        https://dienmaygiakhang.vn/san-pham/may-giat-beko-9-kg-wcv9648xstw/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-inverter-10-5-kg-wf-105vg5/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-inverter-8-kg-wf-8vg1/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-inverter-9-5-kg-wf-95vg5/
        https://dienmaygiakhang.vn/san-pham/may-giat-casper-inverter-9-kg-wf-9vg/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-ultimatecare-300-inverter-10-kg-ewf1024d3wb/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-ultimatecare-300-inverter-10-kg-ewf1024m3sb/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-inverter-11-kg-ewf1141r9sb/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-inverter-11-kg-ewf1142q7wb/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-ultimatecare-700-inverter-11-kg-ewf1142r7sb/
        https://dienmaygiakhang.vn/san-pham/may-giat-electrolux-inverter-8-kg-ewf8024p5sb/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-10-5-kg-hwm-f8105adg/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-12-5-kg-hwm-f8125adg/
        https://dienmaygiakhang.vn/san-pham/may-giat-funiki-9-5-kg-hwm-f895adg/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-inverter-10-kg-bd-100gvwh/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-inverter-10-kg-bd-100xgvmag/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-inverter-10-5-kg-bd-1054hvos/
        https://dienmaygiakhang.vn/san-pham/may-giat-hitachi-inverter-9-5-kg-bd-954hvos/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-15-kg-f2515stgw/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-inverter-9-kg-fb1209s6w/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-inverter-9-kg-fb1209s6w1/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-inverter-9-kg-fm1209n6w/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-9-kg-fv1409s4m/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-10-kg-fv1410s4b/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-10-kg-fv1410s4p/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-10-kg-fv1410s4w1/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-11-kg-fv1411s4wa/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-12-kg-fv1412s3b/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-12-kg-fv1412s3ba/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-12-kg-fv1412s3pa/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-13-kg-fv1413s4w/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-14-kg-fv1414s3ba/
        https://dienmaygiakhang.vn/san-pham/may-giat-lg-ai-dd-inverter-14-kg-fv1414s3p/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-10-5-2-kg-na-v105fr1bv/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-10-kg-na-v10fa1lvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-say-panasonic-10-2-kg-na-v10fc1lvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-9-kg-na-v90fa1lvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-panasonic-inverter-9-kg-na-v90fa1lvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-say-panasonic-9-2-kg-na-v90fc1lvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-say-panasonic-9-2-kg-na-v90fc1wvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-say-panasonic-9-5-2-kg-na-v95fr1bvt/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-ai-inverter-10kg-ww10t634dlx-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-10-kg-ww10ta046ae-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-10-kg-ww10tp44dsb-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-10kg-ww10tp44dsh-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-ai-ecobubble-inverter-11-kg-ww11cgp44dshsv/
        https://dienmaygiakhang.vn/san-pham/ay-giat-samsung-inverter-12-kg-ww12cb944dgbsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-12-kg-ww12cgc04dabsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-12-kg-ww12cgp44dshsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-13-kg-ww13t504daw-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-14-kg-ww14bb944dgbsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-bespoke-ai-inverter-14-kg-ww14bb944dghsv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-9-kg-ww90t3040ww-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-9-kg-ww90t634dle-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-9-kg-ww90t634dln-sv-2/
        https://dienmaygiakhang.vn/san-pham/may-giat-samsung-inverter-9-5-kg-ww95ta046ax-sv/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-inverter-10-5-kg-es-fk1054pv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-inverter-12-5-kg-es-fk1252pv-s/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-inverter-8-5-kg-es-fk852ev-w/
        https://dienmaygiakhang.vn/san-pham/may-giat-sharp-inverter-9-5-kg-es-fk954sv-g/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-9-5-kg-tw-bk105s3vsk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-9-5-kg-tw-bk105s3vsk/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-9-5-kg-tw-t21bu105uwvmg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-10-kg-tw-t21bu110uwvmg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-10-5-kg-tw-t21bu115uwvmg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-10-5-kg-tw-t25bu115mwvmg/
        https://dienmaygiakhang.vn/san-pham/may-giat-toshiba-inverter-10-5-kg-tw-t25bzu115mwvmg/';



         $codess = explode(PHP_EOL, $code);

        foreach ($codess as $key => $value) {


            DB::table('crawl_link')->insert(['link'=>trim($value), 'cate'=>2, 'updated_at'=>$now, 'created_at'=>$now]);

        
        }    
        echo "thành công";
    }

    public function crawl_data_dmnv()
    {

        $now = Carbon::now();
        $data = file_get_contents('https://dienmaynguoiviet.vn/show-data-tcl');


        $data = json_decode($data);

        // $details = $data[0]->details;

        // $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

        // $replacement = '$1';

        

        // $details = preg_replace($pattern, $replacement, html_entity_decode($details));

        // echo($details);


        // die;

        foreach ($data as $key => $value) {

            $title = $value->Name;

            $price = 0;

            $details = $value->details;

            if(!empty($details)){

                $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

                $replacement = '$1';

                $details = preg_replace($pattern, $replacement, $details);
            }    



            $Salient_Features = $value->Salient_Features;

            $Specifications = $value->Specifications;

            $crawl_link = $value->crawl_link;


            $data['Name']   = $title;
            $data['Price']  = $price;
            $data['Detail'] = $details;
            $data['Link'] = convertSlug($title);
            $data['Group_id']= 1;
            $data['Specifications'] = $Specifications;
            $data['user_id'] = 4;
            $data['created_at'] = '';
            $data['updated_at'] = '';
            $data['Salient_Features'] = $Salient_Features;
            $data['crawl_link'] = $crawl_link;
            
            $insert = DB::table('products')->insert(['Name'=>$title, 'Price'=>$price, 'Detail'=>$details, 'Link'=>convertSlug($title), 'Specifications'=>$Specifications, 'user_id'=>4,'created_at'=>$now,'updated_at'=>$now, 'Salient_Features'=>$Salient_Features, 'crawl_link'=>$crawl_link]);

         
            echo "<pre>";

            echo "crawl thành công $key";

            echo "</pre>";

        }

      
    }

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


    public function showPdTV()
    {

        $tv = $_GET['id'];
        
        $pdtv = groupProduct::find($tv);

        if(!empty(json_decode($pdtv->product_id))){

            $arPD = json_decode($pdtv->product_id);

            $pd = product::select('Name','id')->whereIn('id', $arPD)->OrderBy('Name','desc')->get();

            
            foreach ($pd as $key => $value) {
                echo $value->Name.' id là '.$value->id.'<br>';
            }

        }
        else{
            echo "không tồn tại sản phẩm";
        }

        
    }



    function getLinkCrawlDMGK()
    {
        $now = Carbon::now();

        $check = [];

        $url ='https://dienmaygiakhang.vn/product-category/dien-tu/tivi/tivi-coocaa/';
        
        $html = file_get_html(trim($url));

            $link = $html->find('.title-wrapper .woocommerce-LoopProduct-link');

            foreach ($link as $key => $value) {

                DB::table('crawl_link')->insert(['link'=>trim($value->href), 'cate'=>1, 'updated_at'=>$now, 'created_at'=>$now]);
            }
            
       

        echo'thành công';

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

    public function findDuplicates($array) {
        $counts = array_count_values($array);
        $duplicates = [];
        foreach ($counts as $value => $count) {
            if ($count > 1) {
                $duplicates[] = $value;
            }
        }
        return $duplicates;
    }

    public function showDataCrawl()
    {

        $products = DB::table('products')->select('crawl_link', 'id')->orderBy('crawl_link', 'desc')->get();

        // foreach ($products as $key => $value) {

        //     echo $value->Name.'<br>';
        // }    
        // die;



        $sku = [];

        foreach ($products as $key => $value) {

            if(!empty($value->crawl_link)){

                array_push($sku, trim($value->crawl_link));
            }

            
        }

        $duplicates = $this->findDuplicates($sku);

        echo "<pre>";print_r($duplicates); echo"</pre>";


        // $products = DB::table('products')->select('Name','id','crawl_link')->get();

        // foreach ($products as $key => $value) {

        //     echo $value->Name.'-     '.$value->crawl_link.'<br>';
        // }
    }

    public function uploadImg($images)
    {   
        $images = 'http://'.$images;
        $images = str_replace('//b', 'b', $images);
        $img  = '/uploads/product/crawl/'.str_replace(strstr(basename($images), '?'), '', basename($images)) ;
        file_put_contents(public_path().$img, file_get_contents($images));
        return $img;
    }

    public function checkDataCrawl()
    {
        // code...
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

    function getAll_link()
    {
        $pd = DB::table('products')->select('Link')->where('active',1)->get();

        $dem =0;

        foreach ($pd as $key => $value) {
            $dem++;

            echo'<pre>'; echo $value->Link;echo'</pre>';
           
        }

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

        $data = DB::table('products')->select('Detail', 'id')->where('id','>', 1520)->get();

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

        $data = DB::table('products')->select('Detail','id')->orderBy('id','asc')->where('id','>',1520)->get();

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


    function crawlCellphones()
    {
        $url = 'https://cellphones.com.vn/smart-tivi-coocaa-hd-32-inch-32s3u-plus.html';
        
        $this->crawlCellPhone($url);
    }

    function crawlCellPhone($url)
    {
        $now = Carbon::now();

        $html = file_get_html(trim($url));

        $details = $html->find('#cpsContent',0);

        $specifications = html_entity_decode($html->find('.technical-content-modal', 0));

        $title =  strip_tags($html->find('.box-product-name h1', 0));  

        // tính năng nổi bật

        $feature_item = html_entity_decode($html->find('.ksp-content',0));

        

        $pattern = '/<a\s+[^>]*>(.*?)<\/a>/i';

        // Replacement string (empty)
        $replacement = '';

        // Perform the replacement
        $details = preg_replace($pattern, $replacement, html_entity_decode($details));

        $details = str_replace($feature_item, '',  $details);

        echo $details;

        die;

        $price = 0;
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

        $data = DB::table('products')->select('crawl_link','id')->orderBy('id','asc')->where('id','>',1520)->get();


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
        SD-P104WRA';

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

        $link = DB::table('crawl_link')->where('active',0)->get();

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
            $data['Group_id']= $url->cate;
            $data['Specifications'] = $tskt;
            $data['user_id'] = 4;
            $data['created_at'] = $now;
            $data['updated_at'] = $now;
            $data['Salient_Features'] = '';
            $data['crawl_link'] = $url->link;
            DB::table('products')->insert($data);

            DB::table('crawl_link')->where('id', $url->id)->update(['active' => 1]);
            
            sleep(2);

            echo "update thành công link có id là $url->id";
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
        for($i=1750; $i<1813; $i++){

            $link = product::find($i);


            if(isset($link)){

                $title = $link->Name;

                $meta   = new metaSeo();

                $meta->meta_title =$title; 
                $meta->meta_content =$title; 
                $meta->meta_key_words = $title; 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$title; 

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

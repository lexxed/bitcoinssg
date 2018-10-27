<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class AffiliateController extends Controller
{
    public function go($slug) 
    {

        $affiliate = Affiliate::where('name', $slug)->firstOrFail();
        //$agodahotel = Agodahotel::where('tel_id', $hotel->agodaid)->firstOrFail();

        //$link = "https://www.agoda.com/partners/partnersearch.aspx?cid=".config('constants.agodasiteid')."&pcs=1&hl=en&hid=".$hotel->agodaid;

        $link = $affiliate->affurl;

		//if (count($hotel)) {
		  //header("HTTP/1.1 301 Moved Permanently");
		  header('refresh: 2; url='.$link);
		  //header("Location: " . $link);
		  return view('pause-screen', ['affiliate' => $affiliate]);
		  exit();
		  //header("Location: ".$link);
		  //header("Connection: close");}
		//} else {
		//  header('HTTP/1.0 404 Not Found');
		//  echo "page not found";
		  //include("/var/www/vhosts/kgun.com/httpdocs/errors/404.html");
		//}
		//exit();        
	}	  



 

 
}




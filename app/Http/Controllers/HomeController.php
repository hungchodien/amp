<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        isset($hung)&& $hung =1;
	}
	public function re(Request $request){
	    if($request->input('color'))
	        return Response::view('welcome')->header('AMP-Access-Control-Allow-Source-Origin', 'http://localhost');
	    else
	        return Response::view('home')->header('AMP-Access-Control-Allow-Source-Origin', 'http://localhost');
    }
    public function ajaxShirtsAddToCart(Request $request){
        $value = [ "color" => '1001' , "size" => 'S', "quantity" => $request->input('quantity')];
        return response()->json($value)->header('AMP-Access-Control-Allow-Source-Origin', 'http://localhost');
    }
    public function ajaxShirtsSizesAndPrices(Request $res ){
        $id = $res->all()['option_color'];
        switch ($id) {
            case "1001":
                return response()->json([
                    "1001" => [
                        "sizes" => [
                            "XS" => 8.99,
                            "S" => 9.99,
                        ]
                    ]
                ]);break;
            case "1002":
                return response()->json([
                    "1002" => [
                        "sizes" => [
                            "S" => 10.99,
                            "M" => 12.99,
                            "L" => 14.99,
                        ]
                    ]
                ]);break;
            case "1010":
                return response()->json([
                    "1010" => [
                        "sizes" => [
                            "L" => 11.99,
                            "XL" => 13.99,
                        ]
                    ]
                ]);break;
            case "1014":
                return response()->json([
                    "1014" => [
                        "sizes" => [
                            "M" => 7.99,
                            "L" => 9.99,
                            "XL" => 11.99,
                        ]
                    ]
                ]);break;
            case "1015":
                return response()->json([
                    "1015" => [
                        "sizes" => [
                            "XS" => 8.99,
                            "S" => 10.99,
                            "L" => 15.99,
                        ]
                    ]
                ]);break;
            case "1016":
                return response()->json([
                    "1016" => [
                        "sizes" => [
                            "S" => 8.99,
                            "L" => 14.99,
                            "XL" => 11.99,
                        ]
                    ]
                ]);break;
            case "1021":
                return response()->json([
                    "1021" => [
                        "sizes" => [
                            "XS" => 8.99,
                            "S" => 9.99,
                            "M" => 12.99,
                        ]
                    ]
                ]);break;
            case "1030":
                return response()->json([
                    "1030" => [
                        "sizes" => [
                            "M" => 10.99,
                            "L" => 11.99,
                        ]
                    ]
                ]);break;
            default:
                return response()->json([
                    "1001" => [
                        "sizes" => [
                            "XS" => 8.99,
                            "S" => 9.99,
                        ]
                    ]
                ]);break;
        }
        return $id;
    }
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('PC.home');
	}
    public function indexAmp(){
        return view('Mobile.homeAmp');
    }
    /**
     * menu amp
     */
    public  function menuAmp(){
        return view('Mobile.Menu');
    }
}

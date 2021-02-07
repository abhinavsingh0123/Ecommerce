<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Anam\Phpcart\Cart;
use Illuminate\Http\Request;

class FrontPanel extends Controller
{
    function index()
	{
		$cdata = DB::table('categories')->get();
		$ndata = DB::table('news')->orderBy('created_at','desc')->paginate(2);
		return view("frontpages/index")->with('catdata',$cdata)->with('newsdata',$ndata);
	}
	
	function category($cn)
	{
		$cdata = DB::table('categories')->get();
		$cnews = DB::table('news')->where('category',$cn)->get();
		return view("frontpages/category")->with('catdata',$cdata)->with('catnews',$cnews)->with('catname',$cn);
	}
	
	function news($nid)
	{
		$cdata = DB::table('categories')->get();
		$ndata = DB::table('news')->where('id',$nid)->get();
		return view("frontpages/newsdetails")->with('catdata',$cdata)->with('newsdata',$ndata);
	}
	
	function books()
	{
		
				
		$cdata = DB::table('categories')->get();
		$bdata = DB::table('books')->get();
		return view("frontpages/books")->with('catdata',$cdata)->with('bookdata',$bdata);
	}
	
	
	
	function addcart()
	{
		extract($_GET);
		
		$data = [
			'id' => $bookid,
			'name' => $bookname,
			'price' => $bookprice,
			'image' => $bookimage,
			'quantity' => $bookquan
		];
		
		//print_r($data);
		
		$cart = new Cart();

		if($cart->add($data))
		{
			echo "Cart Added Successfully";
		}
	}
	
	
	
	function getinfo()
	{
		extract($_GET);
		
		$cart = new Cart();
		
		$ti = $cart->count();	
		$tp = $cart->getTotal();
		
		echo $ti." Items | Price Rs ",$tp;
		
	}
	
	
	
	
	function cartdetails()
	{
		$cart = new Cart();
		$totalitems = $cart->getItems();
		$grandtotal = $cart->getTotal();
		
		$cdata = DB::table('categories')->get();
		return view("frontpages.cartdetails")->with('catdata',$cdata)->with('myitems',$totalitems)->with('gt',$grandtotal);
	}
	
	
	function deletecart($cartid)
	{
		
		$cart = new Cart();
		if($cart->remove($cartid))
		{
			return redirect('/cartdetails');
		}
	}
	
	
}

<?php

namespace App\Http\Controllers;
use App\Admin;
use App\category;
use App\news;
use App\Http\Requests\addcat; 
use Session;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    function login()
	{
		return view("adminpages.login");
	}
	
	
	function postlogin(Request $req)
	{
		$em = $req->em;
		$pa = md5($req->pass);
		
		$data = Admin::where(['email'=>$em,'password'=>$pa])->get();
		if(count($data)>0)
		{				
			Session::put('adminem',$em);
			return redirect('/admin/dashboard');
			//return view("adminpages.dashboard");
		}
		else
		{
			Session::flash('status',"Invalid Login");
			return redirect('/login');
		}
		
		
	}
	
	function dash()
	{
		$data = "Ducat";
		return view("adminpages.dashboard")->with('msg',$data);
	}
	
	function category()
	{
		$data = category::get();
		return view("adminpages.category")->with('catdata',$data);
	}
	
	
	function postaddcategory(addcat $res)
	{
		//$data = $res->all();
		//echo "<pre>";
		//print_r($data);
		//echo "</pre>";
		
		
		
		
		$cn = $res->category;
		$file = $res->file('att');

		
		$ext = $file->getClientOriginalExtension();
		$fnn = rand().'.'.$ext;
		
		$destinationpath = public_path('/attach');
		if($file->move($destinationpath,$fnn))
		{
			
			$cat = new category();
			$cat->category = $cn;
			$cat->image = $fnn;
			
			if($cat->save())
			{
				Session::flash('status',"Category Added Successfully");
				return redirect('/admin/category');
			}
			
		}
		
		
		
		
	}
	
	function addcategory()
	{
		return view("adminpages.addcategory");
	}
	
	
	
	function deletecategory($did,$dimg)
	{
		
		
		$cat = category::find($did);
		if($cat->delete())
		{
			$file = public_path().'/attach/'.$dimg;
			unlink($file);
			Session::flash('status',"Category Delete Successfully");
			return redirect('/admin/category');
		}
	}
	
	
	
	
	function editcategory($eid)
	{
		$cdata=category::where('id',$eid)->first();
		
		return view("adminpages.editcategory")->with('catdata',$cdata);
	}
	
	
	function posteditcategory(Request $res)
	{
		$cn = $res->category;
		$file = $res->file('att');
		$hid = $res->hid;
		$himg = $res->himage;
		
		if(empty($file))
		{
			// only data
			$cat = category::find($hid);
			$cat->category = $cn;
		
			
			if($cat->save())
			{
				Session::flash('status',"Category Update Successfully");
				return redirect('/admin/category');
			}
		}
		else
		{
			// data and image
			$ext = $file->getClientOriginalExtension();
			$fnn = rand().'.'.$ext;
			
			$destinationpath = public_path('/attach');
			if($file->move($destinationpath,$fnn))
			{
				
				$cat = category::find($hid);
				$cat->category = $cn;
				$cat->image = $fnn;
				
				if($cat->save())
				{
					$oldfile = public_path().'/attach/'.$himg;					
					unlink($oldfile);
					Session::flash('status',"Category Update Successfully");
					return redirect('/admin/category');
				}
				
			}
		}
	}
	
	
	function news()
	{
		return view("adminpages.news");
	}
	
	
	function addnews()
	{
		$cdata = category::get();
		
		return view("adminpages.addnews")->with('catdata',$cdata);
	}
	
	function postaddnews(Request $request)
	{
		
		
		 $request->validate([
		'category' => 'required',
        'title' => 'required|unique:news',
        'desc' => 'required',
		'att' => 'required',
		]);
		
		
		
		
		
		$cn = $res->category;
		$title = $res->title;
		$desc = $res->desc;
		$file = $res->file('att');
		
		
		$ext = $file->getClientOriginalExtension();
		$fnn = rand().'.'.$ext;
		
		$destinationpath = public_path('/attach');
		if($file->move($destinationpath,$fnn))
		{
			
			$newstable = new news();
			$newstable->category = $cn;
			$newstable->title = $title;
			$newstable->description = $desc;
			$newstable->image = $fnn;
			
			if($newstable->save())
			{
				Session::flash('status',"News Added Successfully");
				return redirect('/admin/news');
			}
			
		}
		
	}
	
	
	function logout()
	{
		Session::flush();
		return redirect('/login');
	}
	
	
}

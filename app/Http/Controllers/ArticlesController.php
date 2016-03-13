<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;



class ArticlesController extends Controller
{
    //

function isMobile(){
	if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"Firefox/3"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"Firefox/2"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"Chrome"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"Safari"))
		return false;
	else if(strpos($_SERVER["HTTP_USER_AGENT"],"Opera"))
		return false;
	else return true;
}


    public function index(){
		//where子句还可以使用scopePublish()方法代替

		$articles=Article::latest()->get() ;
		if($this->isMobile()){
			return $articles;
		}else{
			return view('articles.index',compact('articles'));
		}
//		return view('articles.create');
//    	return view('articles.index',compact('articles'));
//    	return view('articles.index',compact('articles'));

    }

    public function show($id){
    	$articles=Article::findorFail($id);
		if($this->isMobile()){
			return $articles;
		}else {

			return view('articles.show',compact('articles'));
		}
    }

    public function create(){
    	return view('articles.create');
    }
    public function edit($id){
    	$articles=Article::find($id);
    	return view('articles.edit',compact('articles'));
    }
    public function store(Request $request){
		//第一种是写一个CreateARequest
		//第二种表单验证的方法 requests+ rules数组
    		$this->validate($request,['title'=>'required']);
			//接受post过来的数据
    		$input=$request->all();
    		$input['published_at']=Carbon::now();
		//存入数据库
    		Article::create($input);
		//重定向
    		return redirect('/articles');
    }
	public function destroy(Request $request){


		return redirect('/articles');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class blogController extends Controller
{
    public function blogList(){

        $blogList = DB::table('bloglist')->get();
      
        
        return view('blog',['blogList'=>$blogList]);
    }

    public function blogsingle(Request $request){
      
        $id = $request->id;

        $data = DB::table('bloglist')->find($id);


        return view('single',['data'=>$data]);
    }
}

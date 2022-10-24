<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\QueryBP;
class QueryBPController extends Controller
{
    public function index()
    {
        return view('add');
    }


    public function show()
    {
        $show=DB::table('query_b_p_s')->get();
        return view('show',['data'=>$show]);
    }


    public function addP(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "price"=>"required",
            "category"=>"required",

        ]);
        $insert=DB::table('query_b_p_s')->insert([
            "name"=>$request->get('name'),
            "price"=>$request->get('price'),
            "category"=>$request->get('category'),
        ]);

        if($insert){
            return redirect()->back()->with('success','Product Has been added successfully');
        }else{
            return redirect()->back()->with('fail','Something Went Wrong');
        }
    }

    public function del(Request $request, $id)
    {
        $del=DB::table('query_b_p_s')->where('id',$id)->delete();
        if($del){
            return redirect('show');
        }
    }

    public function edit($id)
    {
        $data=DB::table('query_b_p_s')->find($id);
        return view('edit',['data'=>$data]);
    }



    public function update(Request $request, $id)
    {
        $data=DB::table('query_b_p_s')->where('id',$id)->update([
            "name"=>$request->get('name'),
            "price"=>$request->get('price'),
            "category"=>$request->get('category'),
        ]);
        if($data){
            return redirect('show')->with('success','Product Has been updated successfully');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function neworder(){
        return view('font.neworder');
    }


    public function allorder(){

       $all=DB::table('orders')->get();
       return view('font.allorder')->with('data' , $all);
    }



    public function anycomp(){
        return view('font.anycomp');
    }



    public function insert(Request $request){

        $data=array();
        $data['your_name']=$request->your_name;
        $data['your_number']=$request->your_number;
        $data['weight']=$request->weight;
        $data['your_addres']=$request->your_addres;
        $data['coll_name']=$request->coll_name;
        $data['coll_number']=$request->coll_number;
        $data['coll_addres']=$request->coll_addres;
        $data['create_by']=Auth::id();
        $ins=DB::table('orders')->insert($data);

                $notification=array(
                'messege'=>'Successfully Order Done',
                'alert-type'=>'success'
                 );
             return Redirect()->route('allorder')->with($notification);
       
    }


    public function delete($id){
        $del=DB::table('orders')->where('id' , $id)->delete();

        $notification=array(
            'messege'=>'Successfully Contact Added',
            'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function view($id){
        $view=DB::table('orders')->where('id' , $id)->first();
        return view('font.view', compact('view'));
    }


    public function edit($id){
        
        $eid=DB::table('orders')->where('id', $id)->first();
        return view('font.edit', compact('eid'));
    }


    public function update(Request $request ,$id){

        $data=array();
        $data['your_name']=$request->your_name;
        $data['your_number']=$request->your_number;
        $data['weight']=$request->weight;
        $data['your_addres']=$request->your_addres;
        $data['coll_name']=$request->coll_name;
        $data['coll_number']=$request->coll_number;
        $data['coll_addres']=$request->coll_addres;

        $up=DB::table('orders')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Successfully Data Update',
            'alert-type'=>'success'
            );
        return Redirect()->route('allorder')->with($notification);
        
        
    }



}

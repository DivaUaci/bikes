<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BikeController extends Controller
{
    public function index()
    {
       
    }
    
    public function create()
    {
        
    }
    
     public function store(StoreTaskRequest $request)
    {
        
    }
    
    public function show($id)
    {
       
    }
    
     public function edit($id)
    {
        
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
        
    }
    
    function getData(){
        $data['data'] = DB::table('bikes')->get();
        
        if(count($data)>0){
            return view('Bike',$data);
        }
        else
            return view('Bike');
    }
}

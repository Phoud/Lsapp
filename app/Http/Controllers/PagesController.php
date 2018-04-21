<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
   	return view('pages.index');
   }
   public function about(){
   	return view('pages.about');
   }
   public function services(){
   	$data = array(
   		'title'=>'Service',
   		'service'=>['Web design','App development','Graphic design']
   	);
   	return view('pages.services')->with($data);
   }
}

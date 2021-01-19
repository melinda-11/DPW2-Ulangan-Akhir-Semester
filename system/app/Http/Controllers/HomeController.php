<?php 
namespace App\Http\Controllers;

class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showCard(){
		return view('card');
}
}
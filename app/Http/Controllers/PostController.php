<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class PostController
{

 public function show(){
 	$data = DB::select("select * from abc");
 	return view('post');
 }

}

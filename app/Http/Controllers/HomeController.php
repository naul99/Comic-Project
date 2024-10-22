<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index");
    }
    public function api_index(){
        $data = Http::get("https://otruyenapi.com/v1/api/home");
        if($data['status'] != 'success'){
            return response()->json(['status'=> 'error','message'=> 'Error from server otruyen.com']);
        }
        else{
            foreach($data['data']['items'] as $comic){
               if($comic['status'] == 'ongoing'){
                $comic_ongoing[] = $comic; 
               }
               elseif($comic['status'] == 'coming_soon'){
                $comic_coming_soon[] = $comic; 
               }
            }
            return response()->json([
                'code'=>200,
                'ongoing'=>$comic_ongoing,
                'coming_soon'=>$comic_coming_soon,
            ]);
        }
        
    }
}

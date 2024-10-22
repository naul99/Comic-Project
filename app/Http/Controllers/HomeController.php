<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Http::get("https://otruyenapi.com/v1/api/home");
        if($data['status'] != 'success'){
            return response()->json(['status'=> 'error','message'=> 'Error from server otruyen.com']);
        }
        else{
            foreach($data['data']['items'] as $comic){
               if($comic['status'] == 'ongoing'){
                $comic_ongoing[] = $comic; 
               }
            }
            foreach($data['data']['items'] as $comic_coming){
                if($comic_coming['status'] == 'coming_soon'){
                 $comic_coming_soon[] = $comic_coming; 
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

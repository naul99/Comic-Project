<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Http::get("https://otruyenapi.com/v1/api/the-loai/adult");
        
            foreach ($data['data']['items'] as $comic) {
                if($comic['chaptersLatest'] != null){
                    $list_comic[]= $comic;
                }
            }
        $data_new = Http::get('https://otruyenapi.com/v1/api/danh-sach/truyen-moi');
        $count = 0;
        foreach ($data_new['data']['items'] as $comic) {
            if($comic['chaptersLatest'] != null){
                $list_comic_new[]= $comic;
                $count++;
        
                if ($count >= 5) {
                    break;
                }
            }
        }
        $data_anime = Http::get('https://otruyenapi.com/v1/api/the-loai/anime');
       
        foreach ($data_anime['data']['items'] as $comic) {
            if($comic['chaptersLatest'] != null){
                $list_comic_anime[]= $comic;
            }
        }
        
        return view("index",compact("list_comic","list_comic_new",'list_comic_anime'));
    }
   
}

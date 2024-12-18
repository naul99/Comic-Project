<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
class ApiController extends Controller
{
    public function api_index(){
        $data = Http::get("https://otruyenapi.com/v1/api/danh-sach/hoan-thanh");
        if($data['status'] != 'success'){
            return response()->json(['status'=> 'error','message'=> 'Error from server otruyen.cc']);
        }
        else{
            foreach($data['data']['items'] as $comic){
                if($comic['chaptersLatest'] != null){
                    $comic_ongoing[] = $comic; 
                }
            }
            return response()->json([
                'code'=>200,
                'ongoing'=>$comic_ongoing,
            ]);
        }
        
    }
    public function api_index_paginate (){
        $data = Http::get("https://otruyenapi.com/v1/api/danh-sach/hoan-thanh?page=".$_GET['page']);
        if($data['status'] != 'success'){
            return response()->json(['status'=> 'error','message'=> 'Error from server otruyen.com']);
        }
        else{
            foreach($data['data']['items'] as $comic){
               if($comic['chaptersLatest'] != null){
                $comic_ongoing[] = $comic; 
               }
            }
            return response()->json([
                'code'=>200,
                'page'=> $data['data']['breadCrumb'][1]['name'],
                'ongoing'=>$comic_ongoing,
            ]);
        }
        
    }
    public function genre(){
        $data = Http::get("https://otruyenapi.com/v1/api/the-loai");
        if($data['status'] != 'success'){
            return response()->json(['status'=> 'error','message'=> 'Error from server otruyen.com']);
        }
        else{
            return response()->json([
                'code'=>200,
                'genre'=>$data['data']['items'],
            ]);
        }
    }
    public function read($slug,$chapter){
        $data = Http::get("https://otruyenapi.com/v1/api/truyen-tranh/".$slug);

        if ($data->successful() && isset($data['data']['item']['chapters'][0]['server_data'])) {
            $chapters = $data['data']['item']['chapters'][0]['server_data'];
            $filteredChapters = array_filter($chapters, function($chap) use ($chapter) {
                return $chap['chapter_name'] === $chapter;
            });

            if (!empty($filteredChapters)) {
                $currentChapter = reset($filteredChapters);
                $currentIndex = array_search($currentChapter, $chapters);

                $previousChapter = $currentIndex > 0 ? $chapters[$currentIndex - 1] : $currentChapter;
                $nextChapter = $currentIndex < count($chapters) - 1 ? $chapters[$currentIndex + 1] : $currentChapter;
 
                $url = $currentChapter['chapter_api_data'];
                $data_chapter = Http::get($url);
                
                if ($data_chapter->successful()) {
                    return response()->json([
                        "code" => 200,
                        'chapter' => $data_chapter['data'],
                        'chapter_next' => $nextChapter['chapter_name'],
                        'chapter_prev' => $previousChapter['chapter_name'],
                    ]);
                }
            }
        }
        return response()->json([
            "code" => 404,
            'message' => 'Chapter not found or failed to retrieve chapter data.'
        ]);

    }

   
}

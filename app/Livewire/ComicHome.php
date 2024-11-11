<?php

namespace App\Livewire;
use Http;
use Livewire\Component;

class ComicHome extends Component
{
    public function render()
    {
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
        
                if ($count >= 10) {
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
        $data_comic_color = Http::get('https://otruyenapi.com/v1/api/the-loai/truyen-mau');
    
        foreach ($data_comic_color['data']['items'] as $comic) {
            if($comic['chaptersLatest'] != null){
                $list_comic_color[]= $comic;
            }
        }

        return view('livewire.comic-home',[
            'list_comic'=>$list_comic,
            'list_comic_new'=>$list_comic_new,
            'list_comic_anime'=>$list_comic_anime,
            'list_comic_color'=>$list_comic_color,
        ]);
    }
}

<?php

namespace App\Livewire;

use Http;
use Livewire\Component;

class ComicGenre extends Component
{
    public $page;
    public $slug;
    public function mount($slug,$page){
        $this->slug = $slug;
        $this->page = $page;
    } 
    public function render()
    {
        $data = Http::get('https://otruyenapi.com/v1/api/the-loai/'. $this->slug.'?page='.$this->page);
        $urlImage= $data['data']['APP_DOMAIN_CDN_IMAGE'].'/uploads/comics/';
        $genre = $data['data']['items'];
        $currentPage =intval($data['data']['params']['pagination']['currentPage']);
        $pagePrev = $currentPage > 1 ? $currentPage -1 : 1;
        return view('livewire.comic-genre',[
            'nameGenre' => $data['data']['titlePage'],
            'genres'=> $genre,
            'imgComic'=> $urlImage,
            'totalComic'=>$data['data']['params']['pagination']['totalItems'],
            'pageNext'=>$currentPage + 1,
            'pagePrev'=>$pagePrev,

        ])->title('Trang '.$currentPage.'- Thể loại '.$data['data']['titlePage']. '- NestTuyen');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Http;
class ComicDetail extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $data = Http::get("https://otruyenapi.com/v1/api/truyen-tranh/".$this->slug);
        $count_last = count($data['data']['item']['chapters']['0']['server_data']) -1;
        $last = $data['data']['item']['chapters']['0']['server_data'][$count_last]['chapter_name'];
        $first = $data['data']['item']['chapters']['0']['server_data'][0]['chapter_name'];
        $title = $data['data']['item']['name'];
        return view('livewire.comic-detail',[
            'detail'=>$data['data'],
            'chapter_last' => $last,
            'chapter_first'=>$first,
        ])->title($title.' - NestTruyen');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Http;
class ComicChapter extends Component
{
    public $slug;
    public $chapter;
    public function mount($slug,$chapter)
    {
        $this->slug = $slug;
        $this->chapter = $chapter;
    }
    public function render()
    {
        $chapter = $this->chapter;
        $data = Http::get("https://otruyenapi.com/v1/api/truyen-tranh/".$this->slug);
        $img_comic = $data['data']['seoOnPage']['seoSchema']['image'];
        $nameTitle = $data['data']['item']['name'];

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
                  
                    return view('livewire.comic-chapter',[
                        'chap' => $data_chapter['data']['item'],
                        'list_chapter' => $data['data']['item']['chapters'][0]['server_data'],
                        'chapter_next' => $nextChapter['chapter_name'],
                        'chapter_prev' => $previousChapter['chapter_name'],
                        'comic_img'=>$img_comic,
                        'chap_img'=> $data_chapter['data']['item']['chapter_image'],
                    ])->title('Chương '.$currentChapter['chapter_name'].' - Truyện '.$nameTitle);
                }
            }
        }
        return response()->json([
            "code" => 404,
            'message' => 'Chapter not found or failed to retrieve chapter data.'
        ]);
       
    }
}

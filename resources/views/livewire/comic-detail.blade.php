<div class="post-249 wp-manga type-wp-manga status-publish has-post-thumbnail hentry wp-manga-tag-tag-1 wp-manga-tag-tag-2 wp-manga-tag-tag-3 wp-manga-release-4 wp-manga-author-the-author wp-manga-artist-artist wp-manga-genre-action wp-manga-genre-adventure wp-manga-genre-boys wp-manga-genre-chinese wp-manga-genre-drama wp-manga-genre-ecchi wp-manga-genre-fighting wp-manga-genre-fun wp-manga-genre-girl wp-manga-genre-horrow wp-manga-genre-manhwa chapter-listing-1">
    <style>
        .profile-manga{
            margin-top: 35px;
            margin-bottom: 50px;
        }
        .action-buttons{
            align-items: center;
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            margin-bottom: 60px;
        }
        .no-volumn{
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
    <div class="profile-manga">
        <div class="container">
            <div class="row">
                <div class="left col-12 col-sm-12 col-md-4">
                    <div class="manga-thumb">
                        <div class="summary_image">
                            <a href="#">
                                <img width="450" height="450"
                                    data-src="{{$detail['seoOnPage']['seoSchema']['image']}}"
                                    data-srcset="{{$detail['seoOnPage']['seoSchema']['image']}} 450w, {{$detail['seoOnPage']['seoSchema']['image']}} 150w"
                                    data-sizes="(max-width: 450px) 100vw, 450px"
                                    class="img-responsive lazyload effect-fade"
                                    style="padding-top:100%;" alt="249" /> </a>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <div class="left">

                            <div id="init-links" class="nav-links">
                                <a href="{{route('chapter',[$detail['item']['slug'],$chapter_first])}}" wire:navigate id="btn-read-last" class="c-btn c-btn_style-1">
                                    Đọc từ đầu</a>
                                <a href="{{route('chapter',[$detail['item']['slug'],$chapter_last])}}" wire:navigate id="btn-read-first" class="c-btn c-btn_style-1">Đọc cuối</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="right col-12 col-sm-12 col-md-8">
                    <div class="post-title">
                        <h1>{{ $detail['item']['name'] }}</h1>
                    </div>
                    <div class="post-content">

                        <div style="margin: 10px" class="post-content_item">
                            <div class="summary-content">
                                <div class="genres-content">
                                    @foreach ($detail['item']['category'] as $genre)
                                    <a style="margin: 2px" href="#" rel="tag">{{$genre['name']}}</a>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>

                        <div style="margin: 10px" class="description-summary">

                            <div class="summary__content">
                               {!!$detail['item']['content']!!}
                            </div>

                        </div>

                        <div style="margin: 10px" class="author-row">

                            <div class="post-content_item">
                                <div class="summary-heading">
                                    <h5>Tác Giả: </h5> 
                                </div>
                                <div class="summary-content">
                                    <div class="author-content">
                                        @foreach ($detail['item']['author'] as $author)
                                            <a style="margin: 5px;" href="#" rel="tag">{{ $author }}</a>
                                        @endforeach
                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div style="margin: 10px" class="release-time author-row">
                            Chương được cập nhật hàng ngày </div>
                    </div>
                    <div id="manga-chapters-holder" data-id="249">
                        <div class="c-blog__heading font-heading">
                            <h2 class="h4">
                                Danh Sách Chương: </h2>
                        </div>
                        <div class="page-content-listing single-page">
                            <div class="listing-chapters_wrap cols-1 show-more">
                                <ul class="main version-chap no-volumn">
                                    @foreach (array_reverse($detail['item']['chapters'][0]['server_data']) as $chapters)
                                    <li class="wp-manga-chapter has-thumb free-chap">
                                        <a style="font-size: 20px;" href= "{{route('chapter',[$detail['item']['slug'],$chapters['chapter_name']])}}" wire:navigate>Chương - {{ $chapters['chapter_name'] }} </a>
                                        {{-- <span class="chapter-release-date"><a href="#" class="c-new-tag"><!-- --></a></span> --}}
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
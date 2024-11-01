<!--<header class="site-header">-->
<div class="c-search-header__wrapper">
    <div class="container">
        {{-- <div class="search-content">
            <form role="search" method="get" class="search-form manga-search-form ajax"
                action="https://live.mangabooth.com/x/">
                <span class="screen-reader-text">Search for:</span>
                <input type="text" class="search-field manga-search-field" placeholder="Search..." value="" name="s">
                <input type="submit" class="search-submit" value="Search">
                <div class="loader-inner line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <input type="hidden" name="post_type" value="wp-manga">
                <script>
                    jQuery(document).ready(function ($) {
                        $('form.search-form input.search-field[name="s"]').keyup(function () {
                            var s = $('form.search-form input.search-field[name="s"]').val();
                            
                            $('form.search-advanced-form input[name="s"]').val(s);
                        });

                        $('.search-form').on('submit', function (e) {
                            console.log('click')
                            e.preventDefault();
                            $('.search-advanced-form').submit();
                        });

                    });
                </script>
            </form>
        </div> --}}
        
    </div>
    <!--</header>-->
    <div class="c-page-content">
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="main-col col-md-12 sidebar-hidden">
                        <!-- container & no-sidebar-->
                        <div class="main-col-inner">
                            <div class="search-wrap">
                                <h3 class="h4">
                                    <i class="icon ion-ios-star"></i> Thể loại - {{$nameGenre}}
                                </h3>
                                <div class="search-lists">
                                    @foreach ($genres as $genre)
                                    <div class="manga__item ">
                                        <div class="manga__thumb">
                                            <div class="manga__thumb_item">
                                                <a href="#">
                                                    <img width="110" height="150"
                                                        src="{{$imgComic}}{{$genre['thumb_url']}}"
                                                        class="attachment-manga-thumb-1 size-manga-thumb-1 wp-post-image"
                                                        alt="" decoding="async"
                                                        srcset="{{$imgComic}}{{$genre['thumb_url']}}"
                                                        sizes="(max-width: 110px) 100vw, 110px" /> </a>
                                            </div>
                                        </div>
                                        <div class="manga__content">
                                            <div class="manga__content_item">
                                                <div class="post-title font-title">
                                                    <h2>
                                                        <a wire:navigate href="{{route('comic',$genre['slug'])}}">
                                                            {{$genre['name']}} </a>
                                                    </h2>
                                                    
                                                    <span class="manga-genres">
                                                        @foreach (collect($genre['category'])->take(3) as $gen)
                                                        <span class="genre-item"><i class="fas fa-circle"></i><a wire:navigate
                                                            href="{{route('genre',[$gen['slug'],1])}}"
                                                            rel="tag">{{$gen['name']}}</a>
                                                        </span>
                                                        @endforeach
                                                       
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <nav class="navigation paging-navigation">
                                    <div class="col-12 col-md-12">

                                        <div class="nav-links">
                                            <!--Previous-->
                                            <div class="nav-previous float-right">
                                                <a wire:navigate
                                                    href="{{route('genre',[$slug,$pageNext])}}">&nbsp;&nbsp; Sau &nbsp;<i class="fa fa-chevron-right"
                                                    aria-hidden="true"></i></a>
                                            </div>
                                            
                                            <!--Next-->
                                            <div class="nav-previous float-right">
                                                <a wire:navigate
                                                    href="{{route('genre',[$slug,$pagePrev])}}"><span
                                                        class="icon ion-md-arrow-back meta-nav"></span>&nbsp; Trước</a>
                                            </div>

                                        </div>
                                        <!-- .nav-links -->
                                    </div>
                                </nav>
                                <!-- .navigation -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

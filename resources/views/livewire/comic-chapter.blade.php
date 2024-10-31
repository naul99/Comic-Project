<div class="c-page-content style-1 reading-content-wrap chapter-type-manga"
    data-site-url="https://live.mangabooth.com/x/">
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="main-col col-sm-12 sidebar-hidden">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="prev-chap-item">
                            <a style="font-size:22px" href="{{route('comic',$slug)}}" wire:navigate
                                class="back-to-manga-detail"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <div class="chap-item">
                                <a href="#" title="{{$chap['comic_name']}}">
                                    <img width="75" height="106"
                                        data-src="{{$comic_img}}"
                                        class="img-responsive lazyload effect-fade"
                                        style="padding-top:106px;" alt="249" /> </a>
                                <h3><a href="#" title="{{$chap['comic_name']}}">{{$chap['comic_name']}}</a></h3>
                            </div>
                        </div>
                      
                    </div>
                    <h1 id="chapter-heading">
                        Chương {{$chap['chapter_name']}} </h1>
                    <!-- container & no-sidebar-->
                    <div class="main-col-inner">
                        <div class="c-blog-post">
                            <div class="entry-header header" id="manga-reading-nav-head"
                                data-position="header" data-chapter="chapter-4" data-id="249">
                                <div class="wp-manga-nav">
                                    <div class="entry-header_wrap">
                                        <div class="c-breadcrumb-wrapper">
                                            <div class="action-icon">
                                                <ul class="action_list_icon list-inline">
                                                    <li><a href="#" class="wp-manga-action-button"
                                                            data-action="toggle-contrast"
                                                            title="Toggle Dark/Light Mode"><i
                                                                class="icon ion-md-contrast"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="entry-content" class="entry-content">
                                <div class="entry-content_wrap">
                                    <div class="read-container">
                                        <div class="reading-content">
                                            <input type="hidden" id="wp-manga-current-chap" data-id="233"
                                                value="chapter-4" />
                                            <input type="hidden" id="chapter_lightbox" value="1" />
                                            <div class="chapter-images">
                                                @foreach ($chap_img as $img)
                                                <div class="page-break ">
                                                    <img id="image-0"
                                                        src="https://sv1.otruyencdn.com/{{$chap['chapter_path']}}/{{$img['image_file']}}"
                                                        class="wp-manga-chapter-img img-responsive lazyload-ordered effect-fade" loading = "lazy">

                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-reading-footer">
            <div class="container d-flex justify-content-between">
                <div class="left-footer">
                    <button class="hamburger open-chaps-list-canvas" type="button" data-toggle="modal"
                        data-target="#chaptersModal"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <h5 id="chap-name" class="chap-name">Chương {{$chap['chapter_name']}}</h5>
                </div>
                <div class="right-footer">
                    <div class="chap-nav">
                        <button href="{{route('chapter',[$slug,$chapter_prev])}}" wire:navigate class="prev-chap"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                            Prev</button>
                        <button href="{{route('chapter',[$slug,$chapter_next])}}" wire:navigate class="next-chap">Next <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal offcanvas-menu shadow pr-0" id="chaptersModal" tabindex="-1"
            aria-labelledby="chaptersModalLabel" aria-hidden="true" data-backdrop="">
            <div class="m-0 h-100">
                <div class="modal-content border-0 rounded-0">
                    <div class="manga">

                        <h3>{{$chap['comic_name']}}</h3>
                    </div>
                    <div class="chapters">
                        <div class="c-blog__heading font-heading">
                            <h2 class="h4">
                                {{count($list_chapter)}} Chương </h2>
                            <a href="#" title="Change Order" class="btn-reverse-order"><i
                                    class="fas fa-sort-amount-up"></i></a>
                        </div>
                        <div class="page-content-listing single-page">
                            <div class="listing-chapters_wrap cols-1 show-more">
                                <ul class="main version-chap no-volumn">
                                    @foreach ($list_chapter as $chapters)
                                    <li class="wp-manga-chapter has-thumb free-chap  ">
                                        <span class="coin free">Free</span>
                                        <div class="chapter-thumbnail">
                                            <img class="thumb"
                                                src="{{$comic_img}}" loading="lazy"/>
                                        </div>
                                        <div class="chapter-name">
                                            <a href="{{route('chapter',[$slug,$chapters['chapter_name']])}}" wire:navigate>
                                                Chương - {{$chapters['chapter_name']}} </a>
                                        </div>
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
<script>
    const contentChapter = document.body;
    contentChapter.className = "";
    contentChapter.classList.add("wp-manga-template-default", "single", "single-wp-manga", "postid-249", "wp-embed-responsive", "wp-manga-page", "reading-manga", "click-to-scroll", "keyboard-navigate", "page", "header-style-1", "sticky-enabled", "sticky-style-1", "text-ui-light", "manga-reading-list-style", "minimal-reading-layout");
</script>
<div class="c-page-content style-1 reading-content-wrap chapter-type-manga">
    <div class="content-area">
        <style>
            @media only screen and (max-width: 600px) {
                        .container{
                            padding-right: 0px;
                            padding-left:  0px;
                        }
                    }
        </style>
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
                                            <input type="hidden" id="chapter_lightbox" value="1"/>
                                            <div id="loading" class="page-break">
                                                <img
                                                    src="/img/loading/loading1.gif"
                                                    class="wp-manga-chapter-img img-responsive lazyload-ordered effect-fade" loading = "lazy">
                                            </div>
                                            <div id="chapter-images" class="chapter-images">
                                               
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
                        
                            <button id="prev-chap" class="prev-chap button" value="{{$chapter_prev}}" ><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                Prev</button>
                      
                        <button id="next-chap" class="next-chap button" value="{{$chapter_next}}">Next <i class="fa fa-chevron-right"
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


<script>
 $("#loading").hide();
 $(".button").click(function(e) {
    e.preventDefault();
    $("#loading").show();
    window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
    const img_chap = document.getElementById('chapter-images');
   
    img_chap.innerHTML ="";

    $.ajax({
        type: "GET",
        url: "/api/read/{{$slug}}/"+$(this).val(),
        success: function(result) {
            
           

            const path = result['chapter']['item']['chapter_path'];
            const n = result['chapter']['item']['chapter_name'];
          
            // console.log(result['chapter']['item']);
           
            result['chapter']['item']['chapter_image'].forEach(chap => {
                const div = document.createElement("div");
                div.classList.add("page-break");
                div.innerHTML=`
                <img src="https://sv1.otruyencdn.com/${path}/${chap['image_file']}" class="wp-manga-chapter-img img-responsive lazyload-ordered effect-fade" loading = "lazy">
                `;
                img_chap.appendChild(div);
            });
            const e = document.getElementById('next-chap');
            const i = document.getElementById('prev-chap');
            const h = document.getElementById('chap-name')
            const b = document.getElementById('chapter-heading');
            b.textContent =`Chương ${n}`;
            h.textContent=`Chương ${n}`;
            e.value = result['chapter_next'];
            i.value = result['chapter_prev'];
            var newUrl = '/comic/{{$slug}}/'+n;
            document.title =`Chương ${n} - Truyện ${result['chapter']['item']['comic_name']}`;
            history.pushState({}, null, newUrl);
            history.replaceState({}, null, newUrl);
            $("#loading").hide();
        },
        error: function(result) {
            alert('error');
        }
    });
});   
</script>
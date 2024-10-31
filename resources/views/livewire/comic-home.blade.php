<div class="c-page-content style-2">
    <div class="content-area ">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-sm-12">
                    <div class="main-col-inner">
                        <div id="post-189"
                            class="c-blog-post post-189 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="entry-content_wrap">

                                    <div id="c-post-slider-495" class="manga-slider style-2"
                                        data-style="style-2" data-count="3">

                                        <div class="slider__container" role="toolbar">
                                            @foreach($list_comic_new as $key=>$comic)
                                            <div class="slider__item ">
                                                <div class="slider__thumb">
                                                    <div class="slider__thumb_item">
                                                        <a href="#">
                                                            <img fetchpriority="high" decoding="async"
                                                                style="height: 500px;"
                                                                src="https://img.otruyenapi.com/uploads/comics/{{ $comic['thumb_url'] }}"
                                                                class="attachment-madara_x_slider_2 size-madara_x_slider_2 wp-post-image"
                                                                alt=""
                                                                srcset="https://img.otruyenapi.com/uploads/comics/{{ $comic['thumb_url'] }} 450w, https://img.otruyenapi.com/uploads/comics/{{ $comic['thumb_url'] }} 150w"
                                                                sizes="(max-width: 450px) 100vw, 450px" />
                                                            <div class="slider-overlay"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="slider__content">
                                                    <div class="slider__content_item">
                                                        <div class="post-title font-title">
                                                            <h4>
                                                            @if($key %3 == 1)
                                                            <span class="manga-title-badges custom trending">thịnh hành</span>
                                                            @else
                                                            <span class="manga-title-badges custom hot">HOT</span>
                                                            @endif
                                                                <a wire:navigate
                                                                    href="{{route('comic',$comic['slug'])}}">
                                                                    {{ $comic['name'] }} </a>
                                                                <span class="manga-genres">
                                                                    @foreach(collect($comic['category'])->take(3)
                                                                    as $genre)
                                                                    <span class="genre-item">

                                                                        <i class="fas fa-circle"></i><a
                                                                            href="#" rel="tag">{{
                                                                            $genre['name'] }}</a>
                                                                    </span>
                                                                    @endforeach
                                                                </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer">
                                    </div>


                                    <div class="x-heading">
                                        <h2>Adult</h2>
                                        <div class="sub-links"><a href="/manga/">See All</a><a href="">
                                                | </a></div>
                                    </div>
                                    <div style="height:18px" aria-hidden="true" class="wp-block-spacer">
                                    </div>

                                    <div id="c-post-slider-100" class="manga-slider style-1 no-padding"
                                        data-style="style-1" data-count="5">

                                        <div class="slider__container_custom" role="toolbar">
                                            @foreach($list_comic as $key=>$comic)
                                            <div class="slider__item ">
                                                <div class="slider__thumb">
                                                    @if($key % 3 !=1)                            
                                                     <span class="manga-title-badges custom trending">thịnh hành</span>
                                                     @else
                                                     <span class="manga-title-badges new">new</span>
                                                     @endif
                                                    <div class="slider__thumb_item">
                                                        <a href="#">
                                                            <img loading="lazy" decoding="async"
                                                                src="https://img.otruyenapi.com/uploads/comics/{{ $comic['thumb_url'] }}"
                                                                class="attachment-madara_x_slider_1 size-madara_x_slider_1 wp-post-image rp-mobile"
                                                                alt="" />
                                                            <div class="slider-overlay"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="slider__content">
                                                    <div class="slider__content_item">
                                                        <div class="post-title font-title">
                                                            <h4>
                                                                <a wire:navigate href="{{route('comic',$comic['slug'])}}">
                                                                    {{$comic['name']}} </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>


                                    </div>

                                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer">
                                    </div>

                                    <div class="x-heading">
                                        <h2>Anime</h2>
                                        <div class="sub-links"><a href="/manga/">See All</a><a href="">
                                                | </a></div>
                                    </div>
                                    <div style="height:18px" aria-hidden="true" class="wp-block-spacer">
                                    </div>

                                    <div id="c-post-slider-100" class="manga-slider style-1 no-padding"
                                        data-style="style-1" data-count="5">

                                        <div class="slider__container_custom" role="toolbar">
                                            @foreach($list_comic_anime as $key=>$comic)
                                            <div class="slider__item ">
                                                <div class="slider__thumb">
                                                    @if($key % 5 == 1)
                                                    <span class="manga-title-badges hot">hot</span>
                                                    @endif
                                                    <div class="slider__thumb_item">
                                                        <a href="#">
                                                            <img loading="lazy" decoding="async"
                                                                src="https://img.otruyenapi.com/uploads/comics/{{ $comic['thumb_url'] }}"
                                                                class="attachment-madara_x_slider_1 size-madara_x_slider_1 wp-post-image rp-mobile"
                                                                alt="" />
                                                            <div class="slider-overlay"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="slider__content">
                                                    <div class="slider__content_item">
                                                        <div class="post-title font-title">
                                                            <h4>
                                                                <a wire:navigate href="{{route('comic',$comic['slug'])}}">
                                                                    {{$comic['name']}} </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>


                                    </div>

                                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer">
                                    </div>



                                    <div class="x-heading">
                                        <h2>Đã Hoàn Thành</h2>
                                        <div class="sub-links"><a href="">See All</a><a href="#"> | </a>
                                        </div>
                                    </div>
                                    <div style="height:0px" aria-hidden="true" class="wp-block-spacer">
                                    </div>
                                    <div class="c-page">
                                        <div class="c-page__content">
                                            <!-- Tab panes -->
                                            <div class="tab-content-wrap">
                                                <div role="tabpanel" class="c-tabs-item">
                                                    <div
                                                        class="page-content-listing item-chapters slick-initialized slick-slider slick-dotted">
                                                        <a href="#" class="btn-left" data-page="0"><i
                                                                class="fas fa-chevron-left slick-arrow"></i></a>
                                                        <table
                                                            class="manga-shortcodes manga-chapters-listing">
                                                            <tbody id="row_recent">

                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="btn-right" data-page="2"><i
                                                                class="fas fa-chevron-right slick-arrow"></i></a>
                                                        <div id="numberPage"></div>
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
            </div>
        </div>
    </div>
</div>
<script>
    function timeAgo(timestamp) {
        const now = new Date();
        const past = new Date(timestamp);
        const secondsAgo = Math.floor((now - past) / 1000);

        if (secondsAgo < 60) return `${secondsAgo} giây trước`;
        const minutesAgo = Math.floor(secondsAgo / 60);
        if (minutesAgo < 60) return `${minutesAgo} phút trước`;
        const hoursAgo = Math.floor(minutesAgo / 60);
        if (hoursAgo < 24) return `${hoursAgo} giờ trước`;
        const daysAgo = Math.floor(hoursAgo / 24);
        if (daysAgo < 30) return `${daysAgo} ngày trước`;
        const monthsAgo = Math.floor(daysAgo / 30);
        if (monthsAgo < 12) return `${monthsAgo} tháng trước`;
        const yearsAgo = Math.floor(daysAgo / 365);
        return `${yearsAgo} năm trước`;
    }
    async function fetchAndRenderData() {
        
        try {
            const response = await fetch("/api/home");
            const responseArray = await response.json();

            const fragment = document.createDocumentFragment();
        
            responseArray['ongoing'].forEach(item => {
                if (item.chaptersLatest != null) {
                const imageUrl = 'https://img.otruyenapi.com/uploads/comics/' + item.thumb_url;
                const row = document.createElement("tr");
                const subTd = document.createElement("td");
                subTd.classList.add("thumb");
                row.appendChild(subTd);
                const subA = document.createElement("a");
                
                subA.innerHTML =`
                <img loading="lazy" decoding="async" width="75" height="106" src="${imageUrl}" 
                   class="attachment-manga_wg_post_1 size-manga_wg_post_1 wp-post-image" alt="" />
                `;
               
                subTd.appendChild(subA);

                const subTd_1 = document.createElement("td");
                subTd_1.classList.add("title");
                row.appendChild(subTd_1);

                const subA_1 = document.createElement("a");
                const baseComicUrl = `{{ route('comic', ':slug') }}`;
                const url = baseComicUrl.replace(':slug', item.slug);
                subA_1.setAttribute('href', url);
                subA_1.setAttribute('wire:navigate', '');
                subA_1.textContent = `${item.name}`;
                subTd_1.appendChild(subA_1);

                const subTd_2 = document.createElement("td");
                subTd_2.classList.add("release", "has-thumb", "free-chap");
                row.appendChild(subTd_2);

                const subA_2 = document.createElement("a");
                subA_2.textContent = `Chương ${item.chaptersLatest[0].chapter_name}`;
                subTd_2.appendChild(subA_2);

                const subTd_3 = document.createElement("td");
                subTd_3.classList.add("time");
                subTd_3.innerHTML = `
                <span style="font-weight: 900;">•</span>
                <span class="post-on font-meta type">Truyện</span>
                <span class="post-on font-meta">${timeAgo(item.updatedAt)}</span>
                `;
                row.appendChild(subTd_3);
               
                fragment.appendChild(row);
                }
            });
            
            document.getElementById("row_recent").appendChild(fragment);
            
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }   

    fetchAndRenderData();
        async function loadContent(page) {
            try {
        
            const response = await fetch(`/api/paginate?page=${page}`);
            const data = await response.json();

        
            // console.log(data['page']);
            
            // Clear current content
        
            const contentPage = document.getElementById('numberPage');
            contentPage.innerHTML = '';
            const fragment = document.createDocumentFragment();
            const numberPage = document.createElement('ul');

            numberPage.classList.add('slick-dots');
            numberPage.innerHTML=`
                <li class="slick-active" style="width: auto">${data['page']}</li>
            `;
            fragment.appendChild(numberPage);
            document.getElementById("numberPage").appendChild(fragment);
            data['ongoing'].forEach(item => {
            
                
                const imageUrl = 'https://img.otruyenapi.com/uploads/comics/' + item.thumb_url;
                const row = document.createElement("tr");

                const subTd = document.createElement("td");
                subTd.classList.add("thumb");
                row.appendChild(subTd);
                const subA = document.createElement("a");
                const baseComicUrls = `{{ route('comic', ':slug') }}`;
                const urls = baseComicUrls.replace(':slug', item.slug);
                subA.setAttribute('href', urls);
                subA.setAttribute('wire:navigate', '');
                subA.innerHTML =`
                <img loading="lazy" decoding="async" width="75" height="106" src="${imageUrl}" 
                class="attachment-manga_wg_post_1 size-manga_wg_post_1 wp-post-image" alt="" />
                `;
                subA.addEventListener('click', function(event) {
                    event.preventDefault();
                    const slug = this.getAttribute('data-slug');
                    comic_detail(slug);
                    
                });
                subTd.appendChild(subA);
                const subTd_1 = document.createElement("td");
                subTd_1.classList.add("title");
                row.appendChild(subTd_1);
                const subA_1 = document.createElement("a");
                const baseComicUrlsss = `{{ route('comic', ':slug') }}`;
                const urlsss = baseComicUrlsss.replace(':slug', item.slug);
                subA_1.setAttribute('href', urlsss);
                subA_1.setAttribute('wire:navigate', '');
                subA_1.textContent = `${item.name}`;
               
                subTd_1.appendChild(subA_1);
                const subTd_2 = document.createElement("td");
                subTd_2.classList.add("release", "has-thumb", "free-chap");
                row.appendChild(subTd_2);
                const subA_2 = document.createElement("a");
                const baseComicUrlss = `{{ route('comic', ':slug') }}`;
                const urlss = baseComicUrlss.replace(':slug', item.slug);
                subA_2.setAttribute('href', urlss);
                subA_2.setAttribute('wire:navigate', '');
                subA_2.textContent = `Chương ${item.chaptersLatest[0].chapter_name}`;
                
                subTd_2.appendChild(subA_2);
                const subTd_3 = document.createElement("td");
                subTd_3.classList.add("time");
                subTd_3.innerHTML = `
                <span style="font-weight: 900;">•</span>
                <span class="post-on font-meta type">Truyện</span>
                <span class="post-on font-meta">${timeAgo(item.updatedAt)}</span>
                `;
                row.appendChild(subTd_3);
                fragment.appendChild(row);
                
            });
            
            document.getElementById("row_recent").appendChild(fragment);
            } catch (error) {
            console.error('Error loading content:', error);
            }
        }

        // Handle click events on links
        document.querySelectorAll('.btn-right').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent full page reload
                const contentDiv = document.getElementById('row_recent');
                contentDiv.innerHTML = '';
                
                const page = this.getAttribute('data-page');
                const btnLeft = document.querySelector('.btn-left');

                // Lấy giá trị của 'data-page' và chuyển thành số nguyên
                const pages = parseInt(btnLeft.setAttribute('data-page',page - 1));

                let position = parseInt(this.getAttribute('data-page'));
                position += 1;
                this.setAttribute('data-page', position);
                
                loadContent(page);
                
            });
        });
        document.querySelectorAll('.btn-left').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent full page reload
                const page = this.getAttribute('data-page');
                if (page == 0) {
                    return false;
                }
                const btnRight = document.querySelector('.btn-right');
            
                const pages = parseInt(btnRight.getAttribute('data-page'));
                btnRight.setAttribute('data-page', pages - 1);

                let position = parseInt(this.getAttribute('data-page'));

                position -= 1;
                this.setAttribute('data-page', position);
                const contentDiv = document.getElementById('row_recent');
                contentDiv.innerHTML = '';
                
                loadContent(page); // Load content via AJAX
                
            });
        });
</script>

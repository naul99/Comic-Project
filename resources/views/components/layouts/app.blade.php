<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'NEST TRUYEN FREE FREE' }}</title>
        <meta name='robots' content='max-image-preview:large' />
        <meta property="og:image" content="/img/icon/angry.png" />
        <meta property="og:site_name" content="NEST TRUYEN FREE" />
        <meta property="fb:app_id" content="" />
        <meta property="og:title" content="NEST TRUYEN FREE" />
        <meta property="og:description" content="Build manga and novel reading site in minutes" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@NEST TRUYEN FREE" />
        <meta name="twitter:title" content="NEST TRUYEN FREE" />
        <meta name="twitter:description" content="Build manga and novel reading site in minutes" />
        <meta name="twitter:image" content="/wp-content/themes/madara/images/logo.png" />
        <meta name="description" content="Build manga and novel reading site in minutes" />
        <meta name="generator" content="Powered by Madara - A powerful manga, novel theme from Mangabooth.com" />
    
        <link rel="shortcut icon" href="/img/icon/angry.png">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700;800&display=swap" rel="stylesheet">
        <link rel='stylesheet' id='wp-block-library-css' href='/wp-includes/css/dist/block-library/style.min.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='ct-shortcode-css'
            href='/wp-content/plugins/madara-shortcodes/shortcodes/css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='chapter-coin-css-css'
            href='/wp-content/plugins/wp-manga-chapter-coin/assets/css/chapter-coin.css' type='text/css' media='all' /> 
    
        <link rel='stylesheet' id='wp-manga-chapter-thumbnail-css'
            href='/wp-content/plugins/wp-manga-chapter-thumbnail/assets/css/chapter_thumbnail.css' type='text/css'
            media='all' /> 
        <link rel='stylesheet' id='bootstrap-css' href='/wp-content/themes/madara/css/bootstrap.min.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='slick-css' href='/wp-content/themes/madara/js/slick/slick.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='slick-theme-css' href='/wp-content/themes/madara/js/slick/slick-theme.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='madara-css-child-css' href='/wp-content/themes/madara/style.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='lightbox-css' href='/wp-content/themes/madara/css/lightbox.min.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='fontawesome-css'
            href='/wp-content/themes/madara/app/lib/fontawesome/web-fonts-with-css/css/all.min.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='ionicons-css' href='/wp-content/themes/madara/css/fonts/ionicons/css/ionicons.min.css'
            type='text/css' media='all' />
    
        <link rel='stylesheet' id='madara-icons-css'
            href='/wp-content/themes/madara/css/fonts/ct-icon/ct-icon.css?ver=6.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='loaders-css' href='/wp-content/themes/madara/css/loaders.min.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='madara-css-css' href='/wp-content/themes/madara-child-x/style.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='mycred-front-css' href='/wp-content/plugins/mycred/assets/css/mycred-front.css'
            type='text/css' media='all' /> 
    
        <!--End CSS-->
        <!--Start JS-->
        <script src="/wp-includes/js/wp-emoji-release.min.js"></script>
        <script type="text/javascript" src="/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
        <script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="/wp-includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js"></script>
        <script type="text/javascript" src="/wp-includes/js/jquery/ui/menu.min.js" id="jquery-ui-menu-js"></script>
        <script type="text/javascript" src="/wp-includes/js/dist/dom-ready.min.js" id="wp-dom-ready-js"></script>
       
        <script type="text/javascript" src="/wp-includes/js/jquery/ui/autocomplete.min.js" id="jquery-ui-autocomplete-js">
        </script>
    
        <script type="text/javascript" src="/wp-content/plugins/madara-core/assets/js/script.js" id="wp-manga-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/wp-manga-chapter-coin/assets/js/frontend.js"
            id="chapter-coin-js-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/bootstrap.min.js" id="bootstrap-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/shuffle.min.js" id="shuffle-js"></script>
    
        <script type="text/javascript" src="/wp-content/themes/madara/js/template.js" id="madara-js-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara-child-x/assets/js/child.js" id="madara-child-js-js">
        </script>
        <!--End JS-->
        <style>
            .item-image{
                padding-right: 15px;
                height: 60px;
                width: 50px;
            },
        </style>
    </head>
    <body class="home page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-189 wp-embed-responsive header-style-1 sticky-enabled sticky-style-1 text-ui-light minimal-reading-layout">
       
        <div class="wrap">
            <div class="body-wrap">
                <header class="site-header">
                    <div class="c-header__top">
                        <ul class="search-main-menu">
                            <li>
                                <form id="blog-post-search" class="ajax" action="#" method="get">
                                    <input type="text" placeholder="Search..." name="s" value="">
                                    <input type="submit" value="Search">
                                    <div class="loader-inner line-scale">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <div class="main-navigation style-1 ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-navigation_wrap">
                                            <div class="menu-left">
                                                <a class="logo" href="/" title="">
                                                    <img class="img-responsive"
                                                        src="/wp-content/themes/madara/images/logo.png"
                                                        alt="NEST TRUYEN FREE" />
                                                </a>
                                                <div class="main-menu">
                                                <div class="section_adult on">
                                                    <a href="/" target="_self" title="Family Safe">
                                                        <span class="dot"><!-- --></span><span>Hơn 20.000 Truyện Free</span>
                                                    </a>
                                                </div>
                                                    <ul class="nav navbar-nav main-navbar">
                                                        <li id="menu-item-197"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-189 current_page_item menu-item-197">
                                                            <a href="/" aria-current="page">Trang Chính</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
    
                                            <div class="menu-right">
    
                                                <div id="search-sidebar">
    
                                                    <form class="manga-search-form search-form ajax" id="blog-post-search"
                                                        action="#" method="get">
                                                        <input class="manga-search-field" type="text" placeholder="Search"
                                                            name="s" value="">
                                                        <button type="submit" class="btn-search"><i
                                                                class="fas fa-search-minus"></i></button>
                                                        <div class="loader-inner line-scale">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <input type="hidden" name="post_type" value="wp-manga">
                                                    </form>
                                                </div>
    
                                                <div class="c-togle__menu">
                                                    <button type="button" class="menu_icon__open">
                                                        <span></span> <span></span> <span></span>
                                                    </button>
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="mobile-menu menu-collapse off-canvas">
                        <div class="close-nav">
                            <button class="menu_icon__close">
                                <span></span> <span></span>
                            </button>
                        </div>
    
                        <div id="search-sidebar">
                            <form class="manga-search-form search-form ajax" id="blog-post-search" action="#" method="get">
                                <input class="manga-search-field" type="text" placeholder="Search" name="s" value="">
                                <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                                <div class="loader-inner line-scale">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <input type="hidden" name="post_type" value="wp-manga">
                            </form>
                        </div>
    
                        <nav class="off-menu">
                            <ul id="menu-primary-menu-594" class="nav navbar-nav main-navbar">
                                <li id="nav-menu-item-197"
                                    class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-189 current_page_item">
                                    <a href="/" class="menu-link  main-menu-link">Trang Chính </a>
                                </li>
                               
                            </ul>
                        </nav>
    
                        <div class="center">
                            <div class="section_adult on">
                                <a href="/" target="_self" title="Family Safe">
                                    <span class="dot">
                                        <!-- -->
                                    </span><span>Hơn 20.000 Truyện Free</span>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </header>
                <style>
                    .rp-mobile{
                        height:300px
                    }
                    @media only screen and (max-width: 600px) {
                        .rp-mobile{
                            height:250px;
                        }
                    }
                </style>
                <!--Start Content-->
                <div id="site-content" class="site-content">
                    {{ $slot }}
                </div>
                <!--End Content-->
                <!-- <div class="site-content"> -->
                <footer id="site-footer" class="site-footer">
                    <div class="c-footer-sidebar">
                        <div class="container">
                            <div class="row c-row">
                                <div id="manga-genres-id-3"
                                    class="widget col-12 col-md-12   default no-icon  manga-genres-class-name">
                                    <div class="widget__inner manga-genres-class-name__inner c-widget-wrap">
                                        <div class="genres_wrap">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="widget-heading font-nav">
                                                        <h5 class="heading">Tất cả Thể Loại</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="genres__collapse" style="display:block;">
                                                            <div class="row genres">
                                                                <ul id="genre" class="list-unstyled">
    
                                                                </ul>
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
    
                    <div class="bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
    
                                    <div class="copyright">
                                        <h3>NEST TRUYệN</h3>
                                        <p>DEVELOPER by Nesttruyen.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </footer>
    
    
            </div>
            <!-- class="wrap" -->
        </div>
        <script type="text/javascript" src="/wp-content/plugins/wp-manga-chapter-thumbnail/assets/js/frontend.js"
        id="wp-manga-chapter-thumbnail-frontend-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/lightbox.min.js" id="lightbox-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/core.js" id="madara-core-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/smoothscroll.js" id="smoothscroll-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/lazysizes/lazysizes.min.js" id="lazysizes-js">
        </script>
        <script type="text/javascript" src="/wp-includes/js/imagesloaded.min.js" id="imagesloaded-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/aos.js" id="aos-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/madara-core/assets/slick/slick.min.js"
            id="wp-manga-slick-js-js"></script>
        <script type="text/javascript" src="/wp-content/themes/madara/js/slick/slick.min.js" id="slick-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/madara-shortcodes/shortcodes/js/ct-shortcodes.js"
            id="ct-shortcode-js-js"></script>
        <script>
            async function genre() {
                try {
                    const response = await fetch("/api/genre");
                    const responseArray = await response.json();
                    
                    const fragment = document.createDocumentFragment();
                
                    responseArray['genre'].forEach(item => {
                        const row = document.createElement("li");
                        row.classList.add("col-xs-6", "col-sm-4", "col-md-3", "col-lg-2", "col-6");
                        row.innerHTML = `
                                <a wire:navigate href="/genre/${item.slug}/1">
                                    ${item.name}
                                </a>
                        `;
                        fragment.appendChild(row);
                    });
                    
                    document.getElementById("genre").appendChild(fragment);

                } catch (error) {
                    console.error("Error fetching data:", error);
                }
            }   

            genre();
        </script>
    </body>
</html>

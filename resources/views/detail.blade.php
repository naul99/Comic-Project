<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://live.mangabooth.com/x/xmlrpc.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700;800&display=swap" rel="stylesheet">



    <title>Manga 17 &#8211; Madara Child X Theme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Madara Child X Theme &raquo; Feed" href="https://live.mangabooth.com/x/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Madara Child X Theme &raquo; Comments Feed" href="https://live.mangabooth.com/x/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Madara Child X Theme &raquo; Manga 17 Comments Feed" href="https://live.mangabooth.com/x/manga/manga-17-2/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/live.mangabooth.com\/x\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='https://live.mangabooth.com/x/wp-includes/css/dist/block-library/style.min.css?ver=6.6.2' type='text/css' media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-audio {
            margin: 0 0 1em
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-embed {
            margin: 0 0 1em
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: #ffffffa6
        }

        :root :where(.wp-block-image figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme :root :where(.wp-block-image figcaption) {
            color: #ffffffa6
        }

        .wp-block-image {
            margin: 0 0 1em
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            text-transform: uppercase
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            position: relative
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table {
            margin: 0 0 1em
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal
        }

        .wp-block-table :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-video :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-video {
            margin: 0 0 1em
        }

        :root :where(.wp-block-template-part.has-background) {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='ct-shortcode-css' href='https://live.mangabooth.com/x/wp-content/plugins/madara-shortcodes/shortcodes/css/shortcodes.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='chapter-coin-css-css' href='https://live.mangabooth.com/x/wp-content/plugins/wp-manga-chapter-coin/assets/css/chapter-coin.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-manga-chapter-thumbnail-css' href='https://live.mangabooth.com/x/wp-content/plugins/wp-manga-chapter-thumbnail/assets/css/chapter_thumbnail.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/css/bootstrap.min.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/js/slick/slick.css?ver=1.9.0' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/js/slick/slick-theme.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='madara-css-child-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/style.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='lightbox-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/css/lightbox.min.css?ver=2.11.2' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/app/lib/fontawesome/web-fonts-with-css/css/all.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='ionicons-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/css/fonts/ionicons/css/ionicons.min.css?ver=4.5.10' type='text/css' media='all' />
    <link rel='stylesheet' id='madara-icons-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/css/fonts/ct-icon/ct-icon.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='loaders-css' href='https://live.mangabooth.com/x/wp-content/themes/madara/css/loaders.min.css?ver=6.6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='madara-css-css' href='https://live.mangabooth.com/x/wp-content/themes/madara-child-x/style.css?ver=1.7.4.1' type='text/css' media='all' />
    <style id='madara-css-inline-css' type='text/css'>
        :root {
            --madara-main-color: #eb3349;
        }

        #pageloader.spinners {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background: #222
        }

        p.madara-unyson {
            color: #FF0000;
        }

        .table.table-hover.list-bookmark tr:last-child td {
            text-align: center;
        }

        #adminmenu .wp-submenu li.current {
            display: none !important;
        }

        .show_tgmpa_version {
            float: right;
            padding: 0em 1.5em 0.5em 0;
        }

        .tgmpa>h2 {
            font-size: 23px;
            font-weight: 400;
            line-height: 29px;
            margin: 0;
            padding: 9px 15px 4px 0;
        }

        .update-php {
            width: 100%;
            height: 98%;
            min-height: 850px;
            padding-top: 1px;
        }

        .c-blog-post .entry-content .entry-content_wrap .read-container img.alignleft {
            margin: 10px 30px 10px 0 !important;
        }

        .c-blog-post .entry-content .entry-content_wrap .read-container img.alignright {
            margin: 10px 0px 10px 30px !important;
        }

        .read-container i.fas.fa-spinner.fa-spin {
            font-size: 31px;
            color: #888;
        }

        .c-blog-post .entry-content .entry-content_wrap .read-container img {
            cursor: pointer;
        }

        .choose-avatar .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.72);
            z-index: 1;
            display: none;
        }

        .choose-avatar .loading-overlay i.fas.fa-spinner {
            font-size: 40px;
            color: #ec3348;
        }

        .choose-avatar .loading-overlay .loading-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .choose-avatar.uploading .loading-overlay {
            display: block;
        }

        .site-header .c-sub-header-nav .entry-header {
            display: none;
            margin-bottom: 15px;
        }

        .site-header .c-sub-header-nav.sticky .entry-header {
            display: block;
        }

        .site-header .c-sub-header-nav.hide-sticky-menu.sticky .c-sub-nav_wrap {
            display: none;
        }

        .site-header .c-sub-header-nav.hide-sticky-menu .entry-header {
            margin-top: 15px;
        }

        @media (max-width: 480px) {
            .c-blog-post .entry-content .entry-content_wrap .reading-content {
                margin-left: -15px;
                margin-right: -15px
            }
        }

        .settings-page table.list-bookmark>tbody tr td>div.mange-name:before {
            content: "Manga Name";
        }

        .settings-page table.list-bookmark>tbody tr td>div.action:before {
            content: "Edit";
        }

        .settings-page table.list-bookmark>tbody tr td>div.post-on:before {
            content: "Updated Time";
        }

        @media (min-width:768px) {
            .calendar-manga {
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            }
        }
    </style>
    <link rel='stylesheet' id='mycred-front-css' href='https://live.mangabooth.com/x/wp-content/plugins/mycred/assets/css/mycred-front.css?ver=2.7.4' type='text/css' media='all' />
    <link rel='stylesheet' id='mycred-social-share-icons-css' href='https://live.mangabooth.com/x/wp-content/plugins/mycred/assets/css/mycred-social-icons.css?ver=2.7.4' type='text/css' media='all' />
    <link rel='stylesheet' id='mycred-social-share-style-css' href='https://live.mangabooth.com/x/wp-content/plugins/mycred/assets/css/mycred-social-share.css?ver=2.7.4' type='text/css' media='all' />
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.3" id="jquery-ui-menu-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/dist/dom-ready.min.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/dist/a11y.min.js?ver=d90eebea464f6c09bfd5" id="wp-a11y-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.13.3" id="jquery-ui-autocomplete-js"></script>
    <script type="text/javascript" id="wp-manga-js-extra">
        /* <![CDATA[ */
        var manga = {
            "ajax_url": "https:\/\/live.mangabooth.com\/x\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/live.mangabooth.com\/x",
            "base_url": "https:\/\/live.mangabooth.com\/x\/manga\/manga-17-2\/",
            "manga_paged_var": "manga-paged",
            "enable_manga_view": "1",
            "manga_id": "249"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/madara-core/assets/js/script.js?ver=1.7.1" id="wp-manga-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/wp-manga-chapter-coin/assets/js/frontend.js?ver=1.0" id="chapter-coin-js-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/bootstrap.min.js?ver=4.6.0" id="bootstrap-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/shuffle.min.js?ver=5.3.0" id="shuffle-js"></script>
    <script type="text/javascript" id="madara-js-js-extra">
        /* <![CDATA[ */
        var madara = {
            "ajaxurl": "https:\/\/live.mangabooth.com\/x\/wp-admin\/admin-ajax.php",
            "query_vars": {
                "page": 0,
                "manga-core": "manga-17-2",
                "post_type": "wp-manga",
                "name": "manga-17-2",
                "error": "",
                "m": "",
                "p": 0,
                "post_parent": "",
                "subpost": "",
                "subpost_id": "",
                "attachment": "",
                "attachment_id": 0,
                "pagename": "",
                "page_id": 0,
                "second": "",
                "minute": "",
                "hour": "",
                "day": 0,
                "monthnum": 0,
                "year": 0,
                "w": 0,
                "category_name": "",
                "tag": "",
                "cat": "",
                "tag_id": "",
                "author": "",
                "author_name": "",
                "feed": "",
                "tb": "",
                "paged": 0,
                "meta_key": "",
                "meta_value": "",
                "preview": "",
                "s": "",
                "sentence": "",
                "title": "",
                "fields": "",
                "menu_order": "",
                "embed": "",
                "category__in": [],
                "category__not_in": [],
                "category__and": [],
                "post__in": [],
                "post__not_in": [],
                "post_name__in": [],
                "tag__in": [],
                "tag__not_in": [],
                "tag__and": [],
                "tag_slug__in": [],
                "tag_slug__and": [],
                "post_parent__in": [],
                "post_parent__not_in": [],
                "author__in": [],
                "author__not_in": [],
                "search_columns": [],
                "ignore_sticky_posts": false,
                "suppress_filters": false,
                "cache_results": true,
                "update_post_term_cache": true,
                "update_menu_item_cache": false,
                "lazy_load_term_meta": true,
                "update_post_meta_cache": true,
                "posts_per_page": 16,
                "nopaging": false,
                "comments_per_page": "50",
                "no_found_rows": false,
                "order": "DESC"
            },
            "current_url": "https:\/\/live.mangabooth.com\/x\/manga\/manga-17-2"
        };
        var single_manga_show_more = {
            "show_more": "Show more  ",
            "show_less": "Show less  "
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/template.js?ver=1.7.3" id="madara-js-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara-child-x/assets/js/child.js?ver=6.6.2" id="madara-child-js-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/mycred/addons/badges/assets/js/front.js?ver=1.3" id="mycred-badge-front-js"></script>
    <link rel="https://api.w.org/" href="https://live.mangabooth.com/x/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://live.mangabooth.com/x/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <link rel="canonical" href="https://live.mangabooth.com/x/manga/manga-17-2/" />
    <link rel='shortlink' href='https://live.mangabooth.com/x/?p=249' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://live.mangabooth.com/x/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flive.mangabooth.com%2Fx%2Fmanga%2Fmanga-17-2%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://live.mangabooth.com/x/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flive.mangabooth.com%2Fx%2Fmanga%2Fmanga-17-2%2F&#038;format=xml" />
    <style type="text/css">
        .wp-manga-chapter.free-chap .coin {
            background-color: #DCDCDCCC;
            color: #000
        }

        .wp-manga-chapter.premium .coin {
            background-color: #fe6a10cc;
            color: #ffffff
        }

        .wp-manga-chapter.premium.premium-block .coin {
            background-color: #fe6a10cc;
            color: #ffffff
        }

        .shortcode-top-bought .item-thumb .index {
            background-color: rgba(255, 248, 26, 0.6);
            color: #333333
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Article",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://google.com/article"
            },
            "headline": "Manga 17",
            "image": {
                "@type": "ImageObject",
                "url": "https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249.jpg",
                "height": 391,
                "width": 696
            },
            "datePublished": "2024-10-24 03:42:49",
            "dateModified": "2024-10-24 03:42:49",
            "author": {
                "@type": "Person",
                "name": "madara"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Madara Child X Theme",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://live.mangabooth.com/x/wp-content/themes/madara/images/logo.png"
                }
            },
            "description": "What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry s standard dummy text ever sin "
        }
    </script>
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249.jpg" />
    <meta property="og:site_name" content="Madara Child X Theme" />
    <meta property="fb:app_id" content="" />
    <meta property="og:title" content="Manga 17" />
    <meta property="og:url" content="https://live.mangabooth.com/x/manga/manga-17-2/" />
    <meta property="og:description" content="What is Lorem Ipsum?
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever sin" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Madara Child X Theme" />
    <meta name="twitter:title" content="Manga 17" />
    <meta name="twitter:description" content="What is Lorem Ipsum?
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever sin" />
    <meta name="twitter:url" content="https://live.mangabooth.com/x/manga/manga-17-2/" />
    <meta name="twitter:image" content="https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249.jpg" />
    <meta name="description" content="What is Lorem Ipsum?
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever sin" />
    <meta name="generator" content="Powered by Madara - A powerful manga, novel theme from Mangabooth.com" />
</head>

<body class="wp-manga-template-default single single-wp-manga postid-249 wp-embed-responsive wp-manga-page manga-page page header-style-1 sticky-enabled sticky-style-1 text-ui-light minimal-reading-layout">



    <div class="wrap">
        <div class="body-wrap">
            <header class="site-header">
                <div class="c-header__top">
                    <ul class="search-main-menu">
                        <li>
                            <form id="blog-post-search" class="ajax" action="https://live.mangabooth.com/x/" method="get">
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
                                            <a class="logo" href="https://live.mangabooth.com/x/" title="Madara Child X Theme">
											                                            <img class="img-responsive" src="https://live.mangabooth.com/x/wp-content/themes/madara/images/logo.png"  alt="Madara Child X Theme"/>
                                        </a>
                                            <div class="main-menu">
                                                <ul class="nav navbar-nav main-navbar">
                                                    <li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-197"><a href="https://live.mangabooth.com/x/">Home</a></li>
                                                    <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="https://live.mangabooth.com/x/all-series/">All Series</a></li>
                                                    <li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="https://live.mangabooth.com/x/calendar-2/">Calendar</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="menu-right">

                                            <div id="search-sidebar">

                                                <form class="manga-search-form search-form ajax" id="blog-post-search" action="https://live.mangabooth.com/x/" method="get">
                                                    <input class="manga-search-field" type="text" placeholder="Search" name="s" value="">
                                                    <button type="submit" class="btn-search"><i class="fas fa-search-minus"></i></button>
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

                                            <div class="c-sub-header-nav ">
                                                <div class="c-sub-nav_wrap">
                                                    <div class="c-modal_item">
                                                        <!-- Button trigger modal -->
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Sign in</a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Sign up</a>
                                                    </div>
                                                </div>

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
                        <form class="manga-search-form search-form ajax" id="blog-post-search" action="https://live.mangabooth.com/x/" method="get">
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
                            <li id="nav-menu-item-197" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="https://live.mangabooth.com/x/" class="menu-link  main-menu-link">Home </a></li>
                            <li id="nav-menu-item-198" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="https://live.mangabooth.com/x/all-series/" class="menu-link  main-menu-link">All Series </a></li>
                            <li id="nav-menu-item-199" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="https://live.mangabooth.com/x/calendar-2/" class="menu-link  main-menu-link">Calendar </a></li>
                        </ul>
                    </nav>

                    <div class="center">
                        <div class="section_adult off">
                            <a href="https://live.mangabooth.com/x/" target="_self" title="Family Safe">
					<span class="dot"><!-- --></span><span>Family Safe</span>
				</a>
                        </div>
                    </div>
                </div>

            </header>



            <!--Start Content-->
            <div class="site-content">
                <div class="post-249 wp-manga type-wp-manga status-publish has-post-thumbnail hentry wp-manga-tag-tag-1 wp-manga-tag-tag-2 wp-manga-tag-tag-3 wp-manga-release-4 wp-manga-author-the-author wp-manga-artist-artist wp-manga-genre-action wp-manga-genre-adventure wp-manga-genre-boys wp-manga-genre-chinese wp-manga-genre-drama wp-manga-genre-ecchi wp-manga-genre-fighting wp-manga-genre-fun wp-manga-genre-girl wp-manga-genre-horrow wp-manga-genre-manhwa chapter-listing-1">
                    <div class="profile-manga" style="">
                        <div class="container">
                            <div class="row">
                                <div class="left col-12 col-sm-12 col-md-4">
                                    <div class="manga-thumb">
                                        <div class="summary_image">
                                            <a href="https://live.mangabooth.com/x/manga/manga-17-2/">
                                <img width="450" height="450"  data-src="https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249-450x450.jpg" data-srcset="https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249-450x450.jpg 450w, https://live.mangabooth.com/x/wp-content/uploads/images/thumb-4-249-150x150.jpg 150w" data-sizes="(max-width: 450px) 100vw, 450px" class="img-responsive lazyload effect-fade" src="https://live.mangabooth.com/x/wp-content/themes/madara/images/dflazy.jpg"  style="padding-top:100%;"  alt="249"/>                            </a>
                                            <span class="manga-title-badges custom trending">trending</span> <span class="manga-chapter-type">Video</span>
                                        </div>
                                    </div>

                                    <div class="action-buttons">
                                        <div class="left">

                                            <div id="init-links" class="nav-links">
                                                <a href="#" id="btn-read-last" class="c-btn c-btn_style-1">
			                                        Read First</a>
                                                <a href="#" id="btn-read-first" class="c-btn c-btn_style-1">Read Last</a>
                                            </div>

                                            <div class="add-bookmark">
                                                <div class="action_icon">
                                                    <script type="text/javascript">
                                                        var requireLogin2BookMark = true;
                                                    </script><a href="#" class="wp-manga-action-button" data-action="bookmark" data-post="249" data-chapter="" data-page="1" title="Bookmark"><i class="icon ion-ios-bookmark"></i></a></div>
                                                <div class="action_detail"><span>Bookmark This</span></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="right col-12 col-sm-12 col-md-8">
                                    <div class="post-title">
                                        <h1>
                                            Manga 17 </h1>
                                    </div>
                                    <div class="post-content">

                                        <div class="post-content_item">
                                            <div class="summary-content">
                                                <div class="genres-content">
                                                    <a href="https://live.mangabooth.com/x/manga-genre/action/" rel="tag">action</a> <a href="https://live.mangabooth.com/x/manga-genre/adventure/" rel="tag">adventure</a> <a href="https://live.mangabooth.com/x/manga-genre/boys/"
                                                        rel="tag">boys</a> <a href="https://live.mangabooth.com/x/manga-genre/chinese/" rel="tag">chinese</a> <a href="https://live.mangabooth.com/x/manga-genre/drama/" rel="tag">drama</a> <a href="https://live.mangabooth.com/x/manga-genre/ecchi/"
                                                        rel="tag">ecchi</a> <a href="https://live.mangabooth.com/x/manga-genre/fighting/" rel="tag">fighting</a> <a href="https://live.mangabooth.com/x/manga-genre/fun/" rel="tag">fun</a> <a href="https://live.mangabooth.com/x/manga-genre/girl/"
                                                        rel="tag">girl</a> <a href="https://live.mangabooth.com/x/manga-genre/horrow/" rel="tag">horrow</a> <a href="https://live.mangabooth.com/x/manga-genre/manhwa/" rel="tag">manhwa</a> </div>
                                            </div>
                                        </div>

                                        <div class="description-summary">

                                            <div class="summary__content">
                                                <p>What is Lorem Ipsum?<br /> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer
                                                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                                                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <p> Why do we use it?<br /> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                                    normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                                    default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                                                    humour and the like).</p>
                                            </div>

                                        </div>

                                        <div class="author-row">

                                            <div class="post-content_item">
                                                <div class="summary-heading">
                                                    <h5>
                                                        Author </h5>
                                                </div>
                                                <div class="summary-content">
                                                    <div class="author-content">
                                                        <a href="https://live.mangabooth.com/x/manga-author/the-author/" rel="tag">The Author</a> </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="ranking manga-info-row">
                                            <div class="summary-heading">
                                                <h5>
                                                    Rank </h5>
                                            </div>
                                            <div class="summary-content">
                                                N/A, it has 5 monthly views </div>
                                        </div>
                                        <div class="rating manga-info-row">
                                            <div class="summary-heading">
                                                <h5>Rating</h5>
                                            </div>
                                            <div class="summary-content">
                                                <div class="post-content">
                                                    <div class="loader-inner ball-pulse">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="post-rating">
                                                    <div class="post-total-rating allow_vote"><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i>
                                                        <i
                                                            class="ion-ios-star ratings_stars rating_current"></i><span class="score font-meta total_votes">5</span></div>
                                                    <div class="user-rating allow_vote"><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i><i class="ion-ios-star ratings_stars rating_current"></i>
                                                        <i
                                                            class="ion-ios-star ratings_stars rating_current"></i><span class="score font-meta total_votes">Your Rating</span></div><input type="hidden" class="rating-post-id" value="249"> </div>

                                                <div class="vote-details" vocab="https://schema.org/" typeof="AggregateRating">
                                                    <span property="itemReviewed" typeof="Book"><span class="rate-title" property="name" title="Manga 17">Manga 17</span></span><span> <span> Average <span property="ratingValue" id="averagerate"> 5</span>                                                    / <span property="bestRating">5</span> </span>
                                                    </span> out of <span property="ratingCount" id="countrate">1</span> </div>

                                            </div>
                                        </div>



                                        <div class="release-time author-row">

                                            New chapter released daily </div>

                                        <div class="tags-list">
                                            <div class="post-content_item">
                                                <div class="summary-content">
                                                    <div class="tags-content">
                                                        <a href="https://live.mangabooth.com/x/manga-tag/tag-1/" rel="tag">tag-1</a> <a href="https://live.mangabooth.com/x/manga-tag/tag-2/" rel="tag">tag-2</a> <a href="https://live.mangabooth.com/x/manga-tag/tag-3/"
                                                            rel="tag">tag-3</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div id="manga-chapters-holder" data-id="249"><i class="fas fa-spinner fa-spin fa-3x"></i></div> -->

                                </div>
                            </div>
                            <h3>Related Series</h3>
                           

                        </div>
                    </div>

                </div>
            </div>
            <!--End Content-->
            <!-- <div class="site-content"> -->




            <footer class="site-footer">



                <div class="c-footer-sidebar">
                    <div class="container">
                        <div class="row c-row">
                            <div id="manga-genres-id-3" class="widget col-12 col-md-12   default no-icon  manga-genres-class-name">
                                <div class="widget__inner manga-genres-class-name__inner c-widget-wrap">
                                    <div class="genres_wrap">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget-heading font-nav">
                                                    <h5 class="heading">All Genres</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="genres__collapse" style="display:block;">
                                                        <div class="row genres">
                                                            <ul class="list-unstyled">
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/action/">
                                                action                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/adventure/">
                                                adventure                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/boys/">
                                                boys                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/chinese/">
                                                chinese                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/drama/">
                                                drama                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/ecchi/">
                                                ecchi                                                                                                    <span class="count">
                                                        (38)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/fighting/">
                                                fighting                                                                                                    <span class="count">
                                                        (38)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/fun/">
                                                fun                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/girl/">
                                                girl                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/horrow/">
                                                horrow                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
                                                                <li class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-6">
                                                                    <a href="https://live.mangabooth.com/x/manga-genre/manhwa/">
                                                manhwa                                                                                                    <span class="count">
                                                        (37)
                                                    </span>
                                                                                                </a>
                                                                </li>
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
                                    <h3>Manta</h3>
                                    <p>Madara WordPress Theme by Mangabooth.com</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </footer>


        </div>
        <!-- class="wrap" -->
    </div>
    <!-- class="body-wrap" -->



    <!-- Modal -->
    <div class="wp-manga-section">
        <input type="hidden" name="bookmarking" value="0" />
        <div class="modal fade" id="form-login" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="login" class="login">
                            <h3>
                                <a href="https://live.mangabooth.com/x/" title="Madara Child X Theme" tabindex="-1">Sign in</a>
                            </h3>
                            <p class="message login"></p>
                            <meta name='robots' content='max-image-preview:large' />
                            <form name="loginform" id="loginform" method="post">
                                <p>
                                    <label>Username or Email Address *                                    <br> <input type="text" name="log" class="input user_login" value="" size="20">
                                </label>
                                </p>
                                <p>
                                    <label>Password *                                    <br> <input type="password" autocomplete="" name="pwd" class="input user_pass" value="" size="20">
                                </label>
                                </p>
                                <p>

                                </p>
                                <p class="forgetmenot">
                                    <label>
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever">Remember Me                                 </label>
                                </p>
                                <p class="submit">
                                    <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Log In"> <input type="hidden" name="redirect_to" value="https://live.mangabooth.com/x/wp-admin/">
                                    <input type="hidden" name="testcookie" value="1">
                                </p>
                            </form>
                            <p class="nav">
                                <a href="javascript:avoid(0)" class="to-reset">Lost your password?</a>
                            </p>
                            <p class="backtoblog">
                                <a href="javascript:void(0)">&larr; Back to Madara Child X Theme</a>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="form-sign-up" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="sign-up" class="login">
                            <h3>
                                <a href="https://live.mangabooth.com/x/" title="Madara Child X Theme" tabindex="-1">Sign Up</a>
                            </h3>
                            <p class="message register">Register For This Site.</p>
                            <form name="registerform" id="registerform" novalidate="novalidate">
                                <p>
                                    <label>Username *                                    <br>
                                    <input type="text" name="user_sign-up" class="input user_login" value="" size="20">
                                </label>
                                </p>
                                <p>
                                    <label>Email Address *                                    <br>
                                    <input type="email" name="email_sign-up" class="input user_email" value="" size="20">
                                </label>
                                </p>
                                <p>
                                    <label>Password *<br>
                                    <input type="password" name="pass_sign-up" autocomplete="" class="input user_pass" value="" size="25">
                                </label>
                                </p>
                                <p class="action">
                                </p>

                                <input type="hidden" name="redirect_to" value="">
                                <p class="submit">
                                    <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Register">
                                </p>
                            </form>
                            <p class="nav">
                                <a href="javascript:void(0)" class="to-login">Log in</a> |
                                <a href="javascript:void(0)" class="to-reset">Lost your password?</a>
                            </p>
                            <p class="backtoblog">
                                <a href="javascript:void(0)">&larr; Back to Madara Child X Theme</a>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="form-reset" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="reset" class="login">
                            <h3>
                                <a href="javascript:void(0)" class="to-reset">Lost your password?</a>
                            </h3>
                            <p class="message reset">Please enter your username or email address. You will receive a link to create a new password via email.</p>
                            <form name="resetform" id="resetform" method="post">
                                <p>
                                    <label>Username or Email Address                                    <br>
                                    <input type="text" name="user_reset" id="user_reset" class="input" value="" size="20">
                                </label>
                                </p>
                                <p class="submit">
                                    <input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Get New Password">
                                    <input type="hidden" name="testcookie" value="1">
                                </p>
                            </form>
                            <p>
                                <a class="backtoblog" href="javascript:void(0)">&larr; Back to  Madara Child X Theme</a>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var gRecaptchas = document.getElementsByClassName('g-recaptcha');
            for (let i = 0; i < gRecaptchas.length; i++) {
                gRecaptchas[i].setAttribute('data-callback', 'wpMangaSubmitSwitch');
                gRecaptchas[i].setAttribute('data-expired-callback', 'wpMangaSubmitSwitch');
                gRecaptchas[i].setAttribute('data-error', 'wpMangaSubmitSwitch');
            }
        </script>
    </div>
    <div class="modal fade" id="frm-wp-manga-buy-coin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="wp-manga-coin-nonce" value="8234a21314" />
                    <input type="hidden" class="wp-manga-chapter" name="wp-manga-chapter" value="" />
                    <div class="modal-content-header">
                        <div class="manga-thumb" style="background-size: cover; background-position: center center;">
                            <!-- -->
                        </div>
                        <div class="manga-info">
                            <h3>
                                This chapter is locked. </h3>
                            <div class="manga-chapter-name">
                                <div class="icon-lock">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="names">
                                    <p class="manga-name"></p>
                                    <p class="chapter-name"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="message-login">You are required to login first</p>
                </div>
            </div>
        </div>
    </div>
    <div class="go-to-top active">
        <i class="icon ion-md-arrow-up"></i>
    </div>
    <script type="text/javascript" id="wp-manga-single-js-js-extra">
        /* <![CDATA[ */
        var wpMangaSingle = {
            "ajax_url": "https:\/\/live.mangabooth.com\/x\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/live.mangabooth.com\/x"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/madara-core/assets/js/manga-single.js?ver=6.6.2" id="wp-manga-single-js-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/wp-manga-chapter-thumbnail/assets/js/frontend.js?ver=6.6.2" id="wp-manga-chapter-thumbnail-frontend-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/lightbox.min.js?ver=2.11.2" id="lightbox-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/comment-reply.min.js?ver=6.6.2" id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/core.js?ver=6.6.2" id="madara-core-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/smoothscroll.js?ver=1.4.10" id="smoothscroll-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/lazysizes/lazysizes.min.js?ver=5.3.2" id="lazysizes-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/aos.js?ver=6.6.2" id="aos-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/ajax.js?ver=6.6.2" id="madara-ajax-js"></script>
    <script type="text/javascript" id="wp-manga-login-ajax-js-extra">
        /* <![CDATA[ */
        var wpMangaLogin = {
            "admin_ajax": "https:\/\/live.mangabooth.com\/x\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/live.mangabooth.com\/x",
            "nonce": "305e79732f",
            "messages": {
                "please_enter_username": "Please enter username",
                "please_enter_password": "Please enter password",
                "invalid_username_or_password": "Invalid username or password",
                "server_error": "Server Error!",
                "username_or_email_cannot_be_empty": "Username or Email cannot be empty",
                "please_fill_all_fields": "Please fill in all password fields.",
                "password_cannot_less_than_12": "Password cannot have less than 12 characters",
                "password_doesnot_match": "Password does not match. Please try again.",
                "username_cannot_empty": "Username cannot be empty",
                "email_cannot_empty": "Email cannot be empty",
                "password_cannot_empty": "Password cannot be empty"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/madara-core/assets/js/login.js?ver=1.7.2" id="wp-manga-login-ajax-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/madara-core/assets/slick/slick.min.js?ver=6.6.2" id="wp-manga-slick-js-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/themes/madara/js/slick/slick.min.js?ver=1.9.0" id="slick-js"></script>
    <script type="text/javascript" src="https://live.mangabooth.com/x/wp-content/plugins/madara-shortcodes/shortcodes/js/ct-shortcodes.js?ver=1.5.2.1" id="ct-shortcode-js-js"></script>

</body>

</html>
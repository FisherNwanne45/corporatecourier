<?php
include('resources/config.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . "/New_Courier/resources/config.php");
//require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
 //require_once __DIR__."/resources/config.php";

?>
<!DOCTYPE html>
<html lang="en-US">




    <!-- Mirrored from www.corporatecouriersllc.com/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 20:40:16 GMT -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Logistics -->

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="xmlrpc.php" />
        <link rel="icon" type="image/x-icon" href="wp-content/uploads/2015/07/fav.png" />
        <title>Gallery &#8211; <?php echo $row['name']; ?></title>
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        <link rel="alternate" type="application/rss+xml" title="<?php echo $row['name']; ?>&raquo; Feed"
            href="feed/index.php" />
        <link rel="alternate" type="application/rss+xml" title="<?php echo $row['name']; ?>&raquo; Comments Feed"
            href="comments/feed/index.php" />
        <link rel="alternate" type="application/rss+xml"
            title="<?php echo $row['name']; ?>&raquo; Grid Alternative Category Feed" href="feed/index.php" />


        <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        </style>
        <link rel='stylesheet' id='timeline-css-css'
            href='wp-content/plugins/content_timeline/css/frontend/timelinecbf4cbf4cbf4.css?ver=4.9.4' type='text/css'
            media='all' />
        <link rel='stylesheet' id='customScroll-css-css'
            href='wp-content/plugins/content_timeline/css/frontend/jquery.mCustomScrollbarcbf4cbf4cbf4.css?ver=4.9.4'
            type='text/css' media='all' />
        <link rel='stylesheet' id='prettyPhoto-css-css'
            href='wp-content/plugins/content_timeline/css/frontend/prettyPhotocbf4cbf4cbf4.css?ver=4.9.4'
            type='text/css' media='all' />
        <link rel='stylesheet' id='my_timeline_font_awesome-css'
            href='wp-content/plugins/content_timeline/css/frontend/awesome/font-awesomecbf4cbf4cbf4.css?ver=4.9.4'
            type='text/css' media='all' />
        <link rel='stylesheet' id='my_timeline_lineicons_css-css'
            href='wp-content/plugins/content_timeline/css/frontend/themify-iconscbf4cbf4cbf4.css?ver=4.9.4'
            type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'
            href='wp-content/plugins/revslider/public/assets/css/settings9d079d079d07.css?ver=5.4.6.4' type='text/css'
            media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
        .tp-caption a {
            color: #ff7302;
            text-shadow: none;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            -ms-transition: all 0.2s ease-out
        }

        .tp-caption a:hover {
            color: #ffa902
        }
        </style>
        <link rel='stylesheet' id='theme-font-Hind-css'
            href='http://fonts.googleapis.com/css?family=Hind:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext'
            type='text/css' media='all' />
        <link rel='stylesheet' id='theme-font-Ubuntu-css'
            href='http://fonts.googleapis.com/css?family=Ubuntu:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext'
            type='text/css' media='all' />
        <link rel='stylesheet' id='theme-font-Roboto-css'
            href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext'
            type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-fontello-style-css'
            href='wp-content/themes/globallogistics/css/fontello/css/fontello.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-main-style-css' href='wp-content/themes/globallogistics/style.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-shortcodes-style-css'
            href='wp-content/themes/globallogistics/fw/shortcodes/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-animation-style-css'
            href='wp-content/themes/globallogistics/fw/css/core.animation.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-skin-style-css'
            href='wp-content/themes/globallogistics/skins/globallogistics/skin.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-custom-style-css'
            href='wp-content/themes/globallogistics/fw/css/custom-style.css' type='text/css' media='all' />
        <style id='themerex-custom-style-inline-css' type='text/css'>
        .contacts_wrap .logo img {
            height: 50px
        }
        </style>
        <link rel='stylesheet' id='themerex-responsive-style-css'
            href='wp-content/themes/globallogistics/css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-skin-responsive-style-css'
            href='wp-content/themes/globallogistics/skins/globallogistics/skin-responsive.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='mediaelement-css'
            href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min45a045a045a0.css?ver=4.2.6-78496d1'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wp-mediaelement-css'
            href='wp-includes/js/mediaelement/wp-mediaelement.mincbf4cbf4cbf4.css?ver=4.9.4' type='text/css'
            media='all' />
        <link rel='stylesheet' id='themerex-customizer-style-css'
            href='wp-content/themes/globallogistics/fw/core/core.customizer/front.customizer.css' type='text/css'
            media='all' />
        <script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ffb8ffb8ff.js?ver=1.12.4'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a330a330a.js?ver=1.4.1'></script>

        <script type='text/javascript'
            src='wp-content/plugins/content_timeline/js/frontend/jquery.mousewheel.mincbf4cbf4cbf4.js?ver=4.9.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/plugins/content_timeline/js/frontend/jquery.mCustomScrollbar.mincbf4cbf4cbf4.js?ver=4.9.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/plugins/content_timeline/js/frontend/rollovercbf4cbf4cbf4.js?ver=4.9.4'></script>
        <script type='text/javascript'
            src='wp-content/plugins/content_timeline/js/frontend/jquery.prettyPhotocbf4cbf4cbf4.js?ver=4.9.4'></script>
        <script type='text/javascript'
            src='wp-content/plugins/content_timeline/js/frontend/jquery.my_add_functioncbf4cbf4cbf4.js?ver=4.9.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min9d079d079d07.js?ver=5.4.6.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min9d079d079d07.js?ver=5.4.6.4'>
        </script>
        <script type='text/javascript'>
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen-off": "Turn off Fullscreen",
                "mejs.fullscreen-on": "Go Fullscreen",
                "mejs.download-video": "Download Video",
                "mejs.fullscreen": "Fullscreen",
                "mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
                "mejs.loop": "Toggle Loop",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.close": "Close",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.mute-toggle": "Mute Toggle",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.ad-skip": "Skip ad",
                "mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
                "mejs.source-chooser": "Source Chooser",
                "mejs.stop": "Stop",
                "mejs.speed-rate": "Speed Rate",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
        </script>
        <script type='text/javascript'
            src='wp-includes/js/mediaelement/mediaelement-and-player.min45a045a045a0.js?ver=4.2.6-78496d1'></script>
        <script type='text/javascript'
            src='wp-includes/js/mediaelement/mediaelement-migrate.mincbf4cbf4cbf4.js?ver=4.9.4'></script>
        <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/skins/globallogistics/skin.customizer.js'>
        </script>
        <link rel='https://api.w.org/' href='wp-json/index.php' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db00db00db0.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.9.4" />
        <script type="text/javascript">
        my_timeline_front_ajax_nonce = "4d2071fb24";
        my_timeline_front_ajax_url = "wp-admin/admin-ajax.php";
        </script>
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="#/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
        <meta name="generator"
            content="Powered by Slider Revolution 5.4.6.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] ||
                    e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" ==
                    e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset,
                                0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -=
                                parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
        </script>
        <noscript>
            <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
            </style>
        </noscript>
    </head>


    <!--End of Tawk.to Script-->

    <body
        class="archive category category-grid-alternative category-13 themerex_body body_style_wide body_filled theme_skin_globallogistics article_style_stretch layout_alternative template_alternative top_panel_opacity_transparent padding_content_yes top_panel_show top_panel_over user_menu_hide sidebar_hide top_image_show wpb-js-composer js-comp-ver-5.4.5 vc_responsive">


        <a id="toc_home" class="sc_anchor" title="Home"
            data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site"
            data-icon="icon-home-1" data-url="#" data-separator="yes"></a><a id="toc_top" class="sc_anchor"
            title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page"
            data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
        <div class="body_wrap">


            <div class="page_wrap">




                <div class="top_panel_fixed_wrap"></div>

                <!-- Header -->
                <header class="top_panel_wrap">



                    <div class="menu_main_wrap logo_left">

                        <div class="content_wrap clearfix">

                            <div class="logo">
                                <a href="index.php"><img src="resources/img/<?= htmlspecialchars($row['image']) ?>"
                                        class="logo_main" alt=""> <span class="logo_info">
                                    </span>
                                </a>
                            </div>

                            <div class="menu_main">
                                <nav role="navigation" class="menu_main_nav_area">
                                    <ul id="menu_main" class="menu_main_nav">
                                        <li id="menu-item-2050"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-homepage_item page-item-1560   menu-item-has-children menu-item-2050">
                                            <a href="index.php">Home</a>

                                        </li>
                                        <li id="menu-item-3366"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3366">
                                            <a href="services.php">Our services</a>
                                        </li>
                                        <li id="menu-item-2720"
                                            class="menu-item menu-item-type-custom current-menu-parent  current-menu-item current_page_parent current_page_ancestor menu-item-object-custom menu-item-has-children menu-item-2720">
                                            <a href="#">Our Company</a>
                                            <ul class="sub-menu">

                                                <li id="menu-item-2722"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2722">
                                                    <a href="about-us.php">About Us</a>
                                                </li>
                                                <li id="menu-item-20"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20">
                                                    <a href="gallery.php">Gallery</a>

                                                </li>

                                            </ul>
                                        </li>
                                        <li id="menu-item-3416"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3416">
                                            <a href="tracking.php">Secured Tracking</a>
                                        </li>
                                        <li id="menu-item-2045"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2045">
                                            <a href="contact.php">Contact Us</a>
                                        </li>

                                    </ul>
                                </nav>
                                <a href="#" class="menu_main_responsive_button icon-menu"></a>
                                <div class="search_wrap search_style_regular search_state_closed search_ajax">
                                    <div class="search_form_wrap">
                                        <form role="search" method="get" class="search_form" action="#">
                                            <button type="submit" class="search_submit icon-search"
                                                title="Open search"></button>
                                            <input type="text" class="search_field" placeholder="Search" value=""
                                                name="s" title="Search" />
                                        </form>
                                    </div>
                                    <div class="search_results widget_area"><a
                                            class="search_results_close icon-cancel"></a>
                                        <div class="search_results_content"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </header> <!-- / Header -->

                <section class="top_panel_image"
                    style="background-image: url(wp-content/uploads/2015/06/globallogistics_7.jpg)">
                    <div class="top_panel_image_hover"></div>
                    <div class="top_panel_image_header">

                        <h1 itemprop="name" class="top_panel_image_title entry-title"> Our Gallery</h1>

                        <div class="breadcrumbs">
                            <span class="breadcrumbs_item_first">You Are Here:</span><a class="breadcrumbs_item home"
                                href="index.php">Home</a><span class="breadcrumbs_delimiter"></span><span
                                class="breadcrumbs_item current">Our Gallery</span>
                        </div>

                    </div>
                </section>


                <div class="page_content_wrap">


                    <div class="content_wrap">
                        <div class="content">
                            <div class="isotope_filters"></div>
                            <div class="isotope_wrap alternative " data-columns="1">
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_27">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Exclusive Transportation Study"
                                                    src="wp-content/uploads/2015/07/globallogistics_22-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_22.jpg"
                                                            title="Exclusive Transportation Study"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Exclusive Transportation
                                                                    Study</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="2" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_23 flt_28">
                                    <article class="post_item post_item_alternative		post_format_standard even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="840" height="420"
                                                    alt="Driving Organizational Alignment"
                                                    src="wp-content/uploads/2015/06/globallogistics_2-840x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/06/globallogistics_2.jpg"
                                                            title="Driving Organizational Alignment"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Driving Organizational
                                                                    Alignment</a></h4>

                                                            <span class="info"><a class="post_tag_link"
                                                                    href="#">Carrier</a>, <a class="post_tag_link"
                                                                    href="#">Transportation</a></span>

                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="2" data-height="2"
                                    class="isotope_item isotope_item_alternative						 flt_29">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="840" height="840"
                                                    alt="Logistics Planning: From Good to Great"
                                                    src="wp-content/uploads/2015/07/globallogistics_18-840x840.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_18.jpg"
                                                            title="Logistics Planning: From Good to Great"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Logistics Planning: From
                                                                    Good to Great</a></h4>

                                                            <span class="info"><a class="post_tag_link" href="#">Supply
                                                                    Management</a></span>

                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_27 flt_26">
                                    <article class="post_item post_item_alternative		post_format_standard even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Private Fleets: Finding the Right Blend"
                                                    src="wp-content/uploads/2015/07/globallogistics_26-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_26.jpg"
                                                            title="Private Fleets: Finding the Right Blend"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Private Fleets: Finding
                                                                    the Right Blend</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_23 flt_27">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="The E-commerce Effect"
                                                    src="wp-content/uploads/2015/07/globallogistics_16-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_16.jpg"
                                                            title="The E-commerce Effect"></a>
                                                        <div class="post_info">





                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_25">
                                    <article class="post_item post_item_alternative		post_format_standard even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Supply Chain Security"
                                                    src="wp-content/uploads/2015/07/globallogistics_23-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_23.jpg"
                                                            title="Supply Chain Security"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Supply Chain Security</a>
                                                            </h4>


                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="2" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_22 flt_23">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="840" height="420"
                                                    alt="Ocean Cargo Still Faces Stiff Headwinds"
                                                    src="wp-content/uploads/2015/07/globallogistics_25-840x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_25.jpg"
                                                            title="Ocean Cargo Still Faces Stiff Headwinds"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Ocean Cargo Still Faces
                                                                    Stiff Headwinds</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_28">
                                    <article class="post_item post_item_alternative		post_format_standard even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Building air Cargo Relationships"
                                                    src="wp-content/uploads/2015/07/globallogistics_27-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_27.jpg"
                                                            title="Building air Cargo Relationships"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Building air Cargo
                                                                    Relationships</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_28">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Managing Complex Global Networks"
                                                    src="wp-content/uploads/2015/06/globallogistics_4-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/06/globallogistics_4.jpg"
                                                            title="Managing Complex Global Networks"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Managing Complex Global
                                                                    Networks</a></h4>


                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="2" data-height="2"
                                    class="isotope_item isotope_item_alternative						 flt_27">
                                    <article class="post_item post_item_alternative		post_format_gallery even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="840" height="840"
                                                    alt="Ocean Cargo Roundtable"
                                                    src="wp-content/uploads/2015/07/globallogistics_21-840x840.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_21.jpg"
                                                            title="Ocean Cargo Roundtable"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Ocean Cargo
                                                                    Roundtable</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_29">
                                    <article class="post_item post_item_alternative		post_format_standard odd">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Import Fundamentals"
                                                    src="wp-content/uploads/2015/07/globallogistics_20-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_20.jpg"
                                                            title="Import Fundamentals"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Import Fundamentals</a>
                                                            </h4>


                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_26">
                                    <article class="post_item post_item_alternative		post_format_standard even">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Air Freight Forwarding"
                                                    src="wp-content/uploads/2015/06/globallogistics_2-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/06/globallogistics_2.jpg"
                                                            title="Air Freight Forwarding"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Air Freight
                                                                    Forwarding</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                                <div data-width="1" data-height="1"
                                    class="isotope_item isotope_item_alternative						 flt_22">
                                    <article class="post_item post_item_alternative		post_format_standard odd last">

                                        <div class="post_content isotope_item_content">
                                            <div class="post_featured img">
                                                <img class="wp-post-image" width="420" height="420"
                                                    alt="Reverse Logistics Regulations"
                                                    src="wp-content/uploads/2015/07/globallogistics_14-420x420.jpg">

                                                <div class="hover_wrap">
                                                    <div class="hover_content">

                                                        <a class="hover"
                                                            href="wp-content/uploads/2015/07/globallogistics_14.jpg"
                                                            title="Reverse Logistics Regulations"></a>
                                                        <div class="post_info">

                                                            <h4 class="post_title"><a href="#">Reverse Logistics
                                                                    Regulations</a></h4>



                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                        </div> <!-- /.post_content -->
                                    </article> <!-- /.post_item -->
                                </div> <!-- /.isotope_item -->
                            </div> <!-- /.isotope_wrap -->
                            <script type="text/javascript">
                            jQuery(document).ready(function() {
                                THEMEREX_GLOBALS['ppp'] = 13;
                                jQuery(".isotope_filters").append(
                                    '<a href="#" data-filter="*" class="isotope_filters_button active">All</a><a href="#" data-filter=".flt_27" class="isotope_filters_button">Change</a><a href="#" data-filter=".flt_23" class="isotope_filters_button">Carrier</a><a href="#" data-filter=".flt_28" class="isotope_filters_button">Transportation</a><a href="#" data-filter=".flt_29" class="isotope_filters_button">Supply Management</a><a href="#" data-filter=".flt_26" class="isotope_filters_button">Construction</a><a href="#" data-filter=".flt_25" class="isotope_filters_button">Delivery</a><a href="#" data-filter=".flt_22" class="isotope_filters_button">Cargo</a>'
                                );
                            });
                            </script>
                            <div id="viewmore" class="pagination_wrap pagination_viewmore">
                                <a href="#" id="viewmore_link" class="viewmore_button"><span
                                        class="icon-spin3 animate-spin viewmore_loading"></span><span
                                        class="viewmore_text">LOAD MORE</span></a>
                                <span class="viewmore_loader"></span>
                                <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    THEMEREX_GLOBALS['viewmore_page'] = 1;
                                    THEMEREX_GLOBALS['viewmore_data'] =
                                        'a:66:{s:13:"category_name";s:16:"grid-alternative";s:5:"error";s:0:"";s:1:"m";s:0:"";s:1:"p";i:0;s:11:"post_parent";s:0:"";s:7:"subpost";s:0:"";s:10:"subpost_id";s:0:"";s:10:"attachment";s:0:"";s:13:"attachment_id";i:0;s:4:"name";s:0:"";s:6:"static";s:0:"";s:8:"pagename";s:0:"";s:7:"page_id";i:0;s:6:"second";s:0:"";s:6:"minute";s:0:"";s:4:"hour";s:0:"";s:3:"day";i:0;s:8:"monthnum";i:0;s:4:"year";i:0;s:1:"w";i:0;s:3:"tag";s:0:"";s:3:"cat";i:13;s:6:"tag_id";s:0:"";s:6:"author";s:0:"";s:11:"author_name";s:0:"";s:4:"feed";s:0:"";s:2:"tb";s:0:"";s:5:"paged";i:0;s:8:"meta_key";s:0:"";s:10:"meta_value";s:0:"";s:7:"preview";s:0:"";s:1:"s";s:0:"";s:8:"sentence";s:0:"";s:5:"title";s:0:"";s:6:"fields";s:0:"";s:10:"menu_order";s:0:"";s:5:"embed";s:0:"";s:12:"category__in";a:0:{}s:16:"category__not_in";a:0:{}s:13:"category__and";a:0:{}s:8:"post__in";a:0:{}s:12:"post__not_in";a:0:{}s:13:"post_name__in";a:0:{}s:7:"tag__in";a:0:{}s:11:"tag__not_in";a:0:{}s:8:"tag__and";a:0:{}s:12:"tag_slug__in";a:0:{}s:13:"tag_slug__and";a:0:{}s:15:"post_parent__in";a:0:{}s:19:"post_parent__not_in";a:0:{}s:10:"author__in";a:0:{}s:14:"author__not_in";a:0:{}s:14:"posts_per_page";i:13;s:5:"order";s:4:"DESC";s:7:"orderby";s:9:"post_date";s:19:"ignore_sticky_posts";b:0;s:16:"suppress_filters";b:0;s:13:"cache_results";b:1;s:22:"update_post_term_cache";b:1;s:19:"lazy_load_term_meta";b:1;s:22:"update_post_meta_cache";b:1;s:9:"post_type";s:0:"";s:8:"nopaging";b:0;s:17:"comments_per_page";s:2:"50";s:13:"no_found_rows";b:0;s:11:"post_status";s:7:"publish";}';
                                    THEMEREX_GLOBALS['viewmore_vars'] =
                                        'a:9:{s:10:"blog_style";s:11:"alternative";s:10:"body_style";s:4:"wide";s:13:"columns_count";i:1;s:13:"parent_tax_id";i:13;s:12:"show_sidebar";s:4:"none";s:7:"filters";s:4:"tags";s:5:"hover";s:0:"";s:9:"hover_dir";s:0:"";s:3:"ppp";i:13;}';
                                });
                                </script>
                            </div>

                        </div> <!-- </div> class="content"> -->


                    </div> <!-- </div> class="content_wrap"> -->
                </div> <!-- </.page_content_wrap> -->
                <!-- footer_wrap -->
                <footer class="footer_wrap bg_tint_dark footer_style_dark widget_area">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <aside id="themerex_widget_socials-2"
                                class="widget_number_1 column-1_4 widget widget_socials">
                                <div class="widget_inner">

                                    <div class="logo">
                                        <a href="index.php"><img
                                                src="resources/img/<?= htmlspecialchars($row['image']) ?>"
                                                class="logo_main" alt=""> <span class="logo_info">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="logo_descr">Thousands of projects have made us a leader in Logistics
                                        area. We stand behind our promise to deliver timely and quality service</div>
                                    <div class="sc_socials sc_socials_size_small">
                                        <div class="sc_socials_item"><a href="#" target="_blank"
                                                class="social_icons social_twitter icons"><span
                                                    class="icon-twitter"></span><span
                                                    class="sc_socials_hover icon-twitter"></span></a></div>
                                        <div class="sc_socials_item"><a href="#" target="_blank"
                                                class="social_icons social_facebook icons"><span
                                                    class="icon-facebook"></span><span
                                                    class="sc_socials_hover icon-facebook"></span></a></div>
                                        <div class="sc_socials_item"><a href="#" target="_blank"
                                                class="social_icons social_gplus icons"><span
                                                    class="icon-gplus"></span><span
                                                    class="sc_socials_hover icon-gplus"></span></a></div>
                                        <div class="sc_socials_item"><a href="#" target="_blank"
                                                class="social_icons social_linkedin icons"><span
                                                    class="icon-linkedin"></span><span
                                                    class="sc_socials_hover icon-linkedin"></span></a></div>
                                    </div>
                                </div>

                            </aside>
                            <aside id="text-2" class="widget_number_2 column-1_4 widget widget_text">
                                <h5 class="widget_title">Contact Info</h5>
                                <div class="textwidget">
                                    <div class="sc_section" style="margin-bottom:26px !important;"><a
                                            href="#"><b><?php echo $row['name']; ?></b></a><br />
                                        Global Sort Facility

                                    </div>
                                    <div class="sc_section">
                                        <small>Tel: <?php echo $row['phone']; ?> <br>
                                            e-mail: <?php echo $row['email']; ?></small>
                                    </div>
                                </div>
                            </aside>
                            <aside id="themerex_widget_recent_reviews-2"
                                class="widget_number_3 column-1_4 widget widget_recent_reviews">
                                <h5 class="widget_title">Recent reviews </h5>
                                <div class="recent_reviews">
                                    <article class="post_item with_thumb first">
                                        <div class="post_thumb"><img class="wp-post-image" width="90" height="70"
                                                alt="Justify Your Private Fleet"
                                                src="wp-content/uploads/2015/06/globallogistics_6-90x70.jpg"></div>
                                        <div class="post_content">
                                            <h6 class="post_title"><a href="#">Justify Your Private Fleet</a></h6>
                                            <div class="post_rating reviews_summary blog_reviews">
                                                <div class="criteria_summary criteria_row">
                                                    <div class="reviews_stars reviews_style_stars" data-mark="53.0">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                            <div class="reviews_stars_hover" style="width:53%"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        </div>
                                                        <div class="reviews_value">53.0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post_info"></div>
                                        </div>
                                    </article>
                                    <article class="post_item with_thumb">
                                        <div class="post_thumb"><img class="wp-post-image" width="90" height="70"
                                                alt="Import Fundamentals"
                                                src="wp-content/uploads/2015/07/globallogistics_20-90x70.jpg"></div>
                                        <div class="post_content">
                                            <h6 class="post_title"><a href="#">Import Fundamentals</a></h6>
                                            <div class="post_rating reviews_summary blog_reviews">
                                                <div class="criteria_summary criteria_row">
                                                    <div class="reviews_stars reviews_style_stars" data-mark="47.0">
                                                        <div class="reviews_stars_wrap">
                                                            <div class="reviews_stars_bg"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                            <div class="reviews_stars_hover" style="width:47%"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        </div>
                                                        <div class="reviews_value">47.0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post_info"></div>
                                        </div>
                                    </article>
                                </div>
                            </aside>
                            <aside id="nav_menu-3" class="widget_number_4 column-1_4 widget widget_nav_menu">
                                <h5 class="widget_title">Pages</h5>
                                <div class="menu-categories-container">
                                    <ul id="menu-categories" class="menu">
                                        <li id="menu-item-1466"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1466">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li id="menu-item-1467"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1467">
                                            <a href="tracking.php">Secured Tracking</a>
                                        </li>
                                        <li id="menu-item-1468"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1468">
                                            <a href="about-us.php">About US</a>
                                        </li>
                                        <li id="menu-item-3555"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3555">
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                        <li id="menu-item-3556"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3556">
                                            <a href="services.php">Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div> <!-- /.columns_wrap -->
                    </div> <!-- /.content_wrap -->
                </footer> <!-- /.footer_wrap -->

                <div class="copyright_wrap">
                    <div class="content_wrap">
                        <p><?php echo $row['name']; ?>© <?php echo date("Y"); ?> All Rights Reserved. <a href="#">Terms
                                of Use</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                </div>

            </div> <!-- /.page_wrap -->

        </div> <!-- /.body_wrap -->

        <div class="custom_options_shadow"></div>

        <div id="custom_options" class="custom_options co_light">

            <a href="#" id="co_toggle">
                <span class="icon-cog animate-spin"></span>
            </a>

            <div class="co_header">
                <div class="co_title">
                    <span>Style switcher</span>
                    <a href="#" id="co_theme_reset" class="co_reset icon-arrows-cw" title="Reset to defaults">Reset</a>
                </div>
            </div>

            <div id="sc_custom_scroll" class="co_options sc_scroll sc_scroll_vertical">
                <div class="sc_scroll_wrapper swiper-wrapper">
                    <div class="sc_scroll_slide swiper-slide">
                        <input type="hidden" id="co_site_url" name="co_site_url" value="index.php" />

                        <div class="co_section">
                            <div class="co_label">Body styles</div>
                            <div class="co_switch_box co_switch_horizontal co_switch_columns_3"
                                data-options="body_style">
                                <div class="switcher" data-value="wide"></div>
                                <a href="#" data-value="boxed">Boxed</a>
                                <a href="#" data-value="wide">Wide</a>
                                <a href="#" data-value="fullscreen">Fullscreen</a>
                            </div>
                        </div>

                        <div class="co_section">
                            <div class="co_label">Custom Color</div>
                            <div class="co_colorpic_list">
                                <div class="iColorPicker" data-options="main_color" data-value="#eeba00"><span>Main
                                        color</span></div>
                                <div class="iColorPicker" data-options="accent_color" data-value="#5cb9e2"><span>Accent
                                        color</span></div>
                            </div>
                        </div>

                        <div class="co_section">
                            <div class="co_label">Background image</div>
                            <div id="co_bg_images_list" class="co_image_check" data-options="bg_image">
                                <a href="#" id="pattern_1" class="co_image_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/image_1_thumb.jpg)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/image_1.jpg)"></span></a>
                                <a href="#" id="pattern_2" class="co_image_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/image_2_thumb.jpg)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/image_2.jpg)"></span></a>
                                <a href="#" id="pattern_3" class="co_image_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/image_3_thumb.jpg)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/image_3.jpg)"></span></a>
                            </div>
                        </div>

                        <div class="co_section">
                            <div class="co_label">Patterns</div>
                            <div id="co_bg_pattern_list" class="co_image_check" data-options="bg_pattern">
                                <a href="#" id="pattern_1" class="co_pattern_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_1_thumb.png)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_1.png)"></span></a>
                                <a href="#" id="pattern_2" class="co_pattern_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_2_thumb.png)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_2.png)"></span></a>
                                <a href="#" id="pattern_3" class="co_pattern_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_3_thumb.png)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_3.png)"></span></a>
                                <a href="#" id="pattern_4" class="co_pattern_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_4_thumb.png)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_4.png)"></span></a>
                                <a href="#" id="pattern_5" class="co_pattern_wrapper"
                                    style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_5_thumb.png)"><span
                                        class="co_bg_preview"
                                        style="background-image: url(wp-content/themes/globallogistics/images/bg/pattern_5.png)"></span></a>
                            </div>
                        </div>

                    </div><!-- .sc_scroll_slide -->
                </div><!-- .sc_scroll_wrapper -->
                <div id="sc_custom_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical sc_custom_scroll_bar"></div>
            </div><!-- .sc_scroll -->
        </div><!-- .custom_options -->
        <a href="#" class="scroll_to_top" title="Scroll to top">
            <span class="icon-up-open hover"></span>
            <span class="icon-up-open"></span>
        </a>


        <script type="text/javascript">
        jQuery(document).ready(function() {
            THEMEREX_GLOBALS["strings"] = {
                bookmark_add: "Add the bookmark",
                bookmark_added: "Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;",
                bookmark_del: "Delete this bookmark",
                bookmark_title: "Enter bookmark title",
                bookmark_exists: "Current page already exists in the bookmarks list",
                search_error: "Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.",
                email_confirm: "On the e-mail address <b>%s</b> we sent a confirmation email.<br>Please, open it and click on the link.",
                reviews_vote: "Thanks for your vote! New average rating is:",
                reviews_error: "Error saving your vote! Please, try again later.",
                error_like: "Error saving your like! Please, try again later.",
                error_global: "Global error text",
                name_empty: "The name can&#039;t be empty",
                name_long: "Too long name",
                email_empty: "Too short (or empty) email address",
                email_long: "Too long email address",
                email_not_valid: "Invalid email address",
                subject_empty: "The subject can&#039;t be empty",
                subject_long: "Too long subject",
                criteria_empty: "The predefined destinations can&#039;t be empty",
                criteria_long: "Too long predefined destinations",
                date_start_empty: "The date start can&#039;t be empty",
                date_time: "The time can&#039;t be empty",
                text_empty: "The message text can&#039;t be empty",
                text_long: "Too long message text",
                send_complete: "Send message complete!",
                send_order_complete: "Your request has been received. We will get back to you asap!",
                send_error: "Transmit failed!",
                login_empty: "The Login field can&#039;t be empty",
                login_long: "Too long login field",
                password_empty: "The password can&#039;t be empty and shorter then 5 characters",
                password_long: "Too long password",
                password_not_equal: "The passwords in both fields are not equal",
                registration_success: "Registration success! Please log in!",
                registration_failed: "Registration failed!",
                geocode_error: "Geocode was not successful for the following reason:",
                googlemap_not_avail: "Google map API not available!",
                editor_save_success: "Post content saved!",
                editor_save_error: "Error saving post data!",
                editor_delete_post: "You really want to delete the current post?",
                editor_delete_post_header: "Delete post",
                editor_delete_success: "Post deleted!",
                editor_delete_error: "Error deleting post!",
                editor_caption_cancel: "Cancel",
                editor_caption_close: "Close",
                username_empty: "The First Name can&#039;t be empty",
                username2_empty: "The Last Name can&#039;t be empty",
                company_empty: "The Company can&#039;t be empty",
                address_empty: "The Address can&#039;t be empty",
                city_empty: "The City can&#039;t be empty",
                zip_empty: "The Zip can&#039;t be empty",
                phone_empty: "The Telephone can&#039;t be empty",
                pieces_empty: "The Number Of Pieces can&#039;t be empty",
                weight_empty: "The Total Weight (LBS) can&#039;t be empty",
                height_empty: "The Height (inches) can&#039;t be empty",
                width_empty: "The Width (inches) can&#039;t be empty",
                depth_empty: "The Depth (inches) can&#039;t be empty",
                commodity_empty: "The Commodity can&#039;t be empty"
            };
        });
        </script>
        <script type="text/javascript">
        jQuery(document).ready(function() {
            THEMEREX_GLOBALS['ajax_url'] = 'wp-admin/admin-ajax.php';
            THEMEREX_GLOBALS['ajax_nonce'] = 'b1be9619ab';
            THEMEREX_GLOBALS['ajax_nonce_editor'] = 'f8f68c341e';
            THEMEREX_GLOBALS['site_url'] = 'index.php';
            THEMEREX_GLOBALS['vc_edit_mode'] = false;
            THEMEREX_GLOBALS['theme_font'] = '';
            THEMEREX_GLOBALS['theme_skin'] = 'globallogistics';
            THEMEREX_GLOBALS['theme_skin_bg'] = '';
            THEMEREX_GLOBALS['slider_height'] = 100;
            THEMEREX_GLOBALS['system_message'] = {
                message: '',
                status: '',
                header: ''
            };
            THEMEREX_GLOBALS['user_logged_in'] = false;
            THEMEREX_GLOBALS['toc_menu'] = 'fixed';
            THEMEREX_GLOBALS['toc_menu_home'] = true;
            THEMEREX_GLOBALS['toc_menu_top'] = true;
            THEMEREX_GLOBALS['menu_fixed'] = false;
            THEMEREX_GLOBALS['menu_relayout'] = 959;
            THEMEREX_GLOBALS['menu_responsive'] = 959;
            THEMEREX_GLOBALS['menu_slider'] = false;
            THEMEREX_GLOBALS['demo_time'] = 0;
            THEMEREX_GLOBALS['media_elements_enabled'] = true;
            THEMEREX_GLOBALS['ajax_search_enabled'] = true;
            THEMEREX_GLOBALS['ajax_search_min_length'] = 3;
            THEMEREX_GLOBALS['ajax_search_delay'] = 200;
            THEMEREX_GLOBALS['css_animation'] = true;
            THEMEREX_GLOBALS['menu_animation_in'] = 'none';
            THEMEREX_GLOBALS['menu_animation_out'] = 'fadeOut';
            THEMEREX_GLOBALS['popup_engine'] = 'magnific';
            THEMEREX_GLOBALS['popup_gallery'] = true;
            THEMEREX_GLOBALS['email_mask'] =
                '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';
            THEMEREX_GLOBALS['contacts_maxlength'] = 1000;
            THEMEREX_GLOBALS['comments_maxlength'] = 1000;
            THEMEREX_GLOBALS['remember_visitors_settings'] = false;
            THEMEREX_GLOBALS['admin_mode'] = false;
            THEMEREX_GLOBALS['isotope_resize_delta'] = 0.3;
            THEMEREX_GLOBALS['error_message_box'] = null;
            THEMEREX_GLOBALS['viewmore_busy'] = false;
            THEMEREX_GLOBALS['video_resize_inited'] = false;
            THEMEREX_GLOBALS['top_panel_height'] = 0;
        });
        </script>
        <script type="text/javascript">
        jQuery(document).ready(function() {
            if (THEMEREX_GLOBALS['theme_font'] == '') THEMEREX_GLOBALS['theme_font'] = 'Hind';
            THEMEREX_GLOBALS['main_color'] = '#eeba00';
            THEMEREX_GLOBALS['accent_color'] = '#5cb9e2';
        });
        </script>
        <link rel='stylesheet' id='themerex-messages-style-css'
            href='wp-content/themes/globallogistics/fw/js/core.messages/core.messages.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='themerex-magnific-style-css'
            href='wp-content/themes/globallogistics/fw/js/magnific/magnific-popup.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themerex-swiperslider-style-css'
            href='wp-content/themes/globallogistics/fw/js/swiper/idangerous.swiper.css' type='text/css' media='all' />
        <script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899e899e899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.mine899e899e899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.mine899e899e899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/ui/draggable.mine899e899e899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/superfish.min.js'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/core.utils.js'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/core.init.js'></script>
        <script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelement.mincbf4cbf4cbf4.js?ver=4.9.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/themes/globallogistics/fw/core/core.customizer/front.customizer.js'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/core.debug.js'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/formstyler/jquery.formstyler.js'>
        </script>
        <script type='text/javascript' src='wp-includes/js/wp-embed.mincbf4cbf4cbf4.js?ver=4.9.4'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/shortcodes/shortcodes.js'></script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/core.messages/core.messages.js'>
        </script>
        <script type='text/javascript'
            src='wp-content/themes/globallogistics/fw/js/magnific/jquery.magnific-popup.mincbf4cbf4cbf4.js?ver=4.9.4'>
        </script>
        <script type='text/javascript'
            src='wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min524352435243.js?ver=5.4.5'>
        </script>
        <script type='text/javascript' src='wp-content/themes/globallogistics/fw/js/swiper/idangerous.swiper-2.7.js'>
        </script>
        <script type='text/javascript'
            src='wp-content/themes/globallogistics/fw/js/swiper/idangerous.swiper.scrollbar-2.4.js'></script>
        <?php echo $row['tawk']; ?>
    </body>



    <!-- Mirrored from www.corporatecouriersllc.com/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 20:41:02 GMT -->

</html>
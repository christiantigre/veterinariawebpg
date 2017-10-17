@extends('web.index')
@section('content')



<div class="container-fluid fondo-equipo" style="margin: 35px;">
    <div class="row">
        <div class="col-xs-12 text-center clearfix">
            <p>
                @if(count($secciones)>0)
        @foreach($secciones as $sec)
        @if(($sec->section)=='equipo')

        <h1>
                {!! $sec->title !!}
            </h1>

        <small>{!! $sec->subtitle !!}</small>
        
        @endif
        @endforeach
        @else
        No configurado
        @endif
            </p>
        </div>
    </div>
    <div class="row">

        <div class="container-fluid">
            @if(count($socios)>0)
            <main>
                <div class="grid-row clearfix">
                    <div class="grid-col grid-col-12">
                        <section class="cws-widget">
                            <div class="cws_widget">
                                <div class="cws_widget_content">
                                    <section class="photo_tour_section cws_widget">
                                        <div class="photo_tour_section_header clearfix">
                                            <div class="widget-title"></div>
                                        </div>
                                        <div class="our_team news-pinterest news--1">
                                            <div class="grid isotope" style="position: relative; height: auto;">
                                                <div class="col-xs-8 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="thumbnail">

                                                        @foreach($socios as $socio)
                                                        <center>

                                                            <div class="item col-lg-4">
                                                                <div class="pic">
                                                                    <img src="{{ asset($socio->img) }}" alt="{{ $socio->name }}"><div class="hover-effect">

                                                                    </div>
                                                                    <div class="links">

                                                                    </div>
                                                                </div>
                                                                <div class="team_member_info">
                                                                    <a href="{{ url('view_socio', ['id' => $socio->id])}}">
                                                                        <div class="name">{{ $socio->abrevTitulo }} {{ $socio->name }} {{ $socio->lastname }}</div>
                                                                    </a>
                                                                    <div class="positions">{{ $socio->especialitation }}</div>
                                                                </div>
                                                            </div>

                                                            <!--fin section items-->
                                                        </center>

                                                        @endforeach




                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
                @else

                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center" role="tabpanel">
                    No se ha configurado sección de socios
                </div>


                @endif


            </div>
        </div>
    </div>



    <style type="text/css" id="custom-fonts-css">
    .logo_header{
    max-width: 40%; 
    height: auto; 
}
    .fondo-equipo{
        background-color: #FFFFFF;
    }
    .main-menu .menu-item, .main-menu .menu-item a, .mobile_menu_header{
        font-family:Lato;font-weight:400;font-size:18px;line-height:16px;color:#000;
    }
    .widget-title,
    .widget-title a,
    .tribe-events-list-event-title,
    #tribe-geo-results .tribe-events-list-event-title,
    #tribe-geo-options .tribe-events-list-event-title,
    .tribe-events-single-section-title,
    .tribe-events-map-event-title
    {
        font-family:Lato;font-weight:400;font-size:26px;line-height:30px;color:#373737;
        }#tribe-events-content .tribe-events-single-section-title{font-family:Lato;font-weight:400;font-size:26px;line-height:30px;color:#373737;}.comment-reply-title{font-family:Lato;font-weight:400;font-size:26px;line-height:30px;color:#373737;}.cws-widget ul>li>a{color:#373737}.cws-widget .post-list .time-post{color:#373737}a:hover{color:#373737}.news .cats{color:#373737}.news h3>a{color:#373737}.comments-part .comment_author{color:#373737}.tribe-events-list-event-title{font-family:Lato;font-weight:400;font-size:26px;line-height:30px;color:#373737;}.tribe-events-list-event-title a{color:#373737;line-height:30px;}.accordion_title,
        .tab,
        .tab_widget.type-vertical .tab.active,
        .callout_widget .text_part,
        .milestone_content, .services .col_title,
        .pricing_table_column:hover .content_part,
        .pricing_table_column.active_table_column .content_part,
        #title-404,#text-404 .sel,
        .archive_item a, #lang_sel li>a,
        #lang_sel_click ul ul a,
        #lang_sel_click ul ul a:visited,
        #lang_sel_list .lang_sel_sel:hover,
        .services .details a:hover,
        .toggle_widget.type-2 .accordion_section.active a:hover,
        .tab_widget.type-vertical .tabs .tab.active
        {color:#373737}#tribe-mini-calendar-month,
        h2.tribe-events-page-title a:hover,
        h2.tribe-events-page-title a:focus
        {color:#373737}div.woocommerce form p.form-row label:not(.checkbox),
        .woocommerce-tabs form p label,
        ul.woocommerce-error li,
        .woocommerce-tabs .tabs li a,
        #comments .comment_container,
        .woocommerce .order .order-total,
        #searchform label.screen-reader-text,
        .widget_shopping_cart_content p,
        .woocommerce .woocommerce-tabs .shop_attributes th,
        .woocommerce #content h1.page-title{color:#373737}body{font-family:Lato;font-weight:400;font-size:14px;line-height:21px;word-spacing:0px;letter-spacing:0px;color:#7c7c7c;}.wpcf7-response-output, .wpcf7-form-control-wrap{line-height:21px}.tribe-events-event-cost{color:#7c7c7c}.cws_language_bar #lang_sel a>*,
        div.woocommerce td.actions input[type="text"]{font-size:14px}ul.product_list_widget li>*,
        .woocommerce .toggle_sidebar .switcher{line-height:21px}a,.cws-widget ul>li>a:before,
        .cws-widget .recentcomments:before,
        .cws-widget ul>li>a:hover,
        .search-form label.button-hover:after,
        [type="submit"]:hover,
        .cws-widget .widget-icon.icon>i,
        .social-icons .icon:hover i,
        .news .date span,
        .news h3>a:hover,
        .footer_sidebar_area,
        .tribe-events-calendar thead th,
        .tribe-events-list-event-title a:hover,
        .tribe-events-day .tribe-events-day-time-slot h5,
        .accordion_title:hover,
        .cws_button:not(.custom_color):hover,
        .callout_widget .title,
        .soc_icon:hover:not(.custom_color),
        .milestone .number,
        .services .accordion_title,
        .pricing_table_column:hover .content_part i,
        .pricing_table_column.active_table_column .content_part i,
        .our_team .team_member_info .name,
        .theme_color_sb_area [type="submit"],
        .theme_color_sb_area .find_a_doctor .search_field input,
        .theme_color_sb_area .find_a_doctor .search_field select,
        .tparrows.default:hover,
        .cws-widget ul>li.page_item.current_page_item>a,
        .cws-widget ul>li.current-menu-item>a,
        #scrollup:hover,
        .widget-title a:hover,
        .archive_item a:hover,
        .woocommerce  .col2-set h3,
        .woocommerce .button:hover, 
        ul.products h3,
        ul.products h3 mark,
        div.woocommerce table tr.order-total,
        .woocommerce .order .order-actions a:hover,
        .widget_shopping_cart_content p.buttons a:hover,
        .woocommerce div[class^="post-"] h1.product_title.entry-title,
        .woocommerce h2,
        .woocommerce-tabs h3,
        #searchform>div.hover-search:before,
        .footer_sidebar_area a:hover,
        .footer_sidebar_area .cws-widget ul>li>a:hover,
        #lang_sel_list .lang_sel_sel,
        .tribe-events-list-event-title a:hover,
        #tribe-geo-results .tribe-events-list-event-title a:hover,
        #tribe-geo-options .tribe-events-list-event-title a:hover,
        .page_footer .cws-widget .post-list .time-post,
        .page_footer .latest_tweets .icon_frame>i{
            color:#199ad9;
        }
        .footer_sidebar_area .cws-widget-content:not(.backlight) a{
            color: #5eb8e4;
        }
        .theme_color_sb_area .find_a_doctor .search_field input::-webkit-input-placeholder{
            color:#199ad9;
        }
        .theme_color_sb_area .find_a_doctor .search_field input::-moz-placeholder{
            color:#199ad9;
        }
        .main-menu>.menu-item.current-menu-item>a,
        .main-menu>.menu-item.current-menu-ancestor>a,
        .main-menu>.menu-item>.sub-menu>.menu-item.current-menu-ancestor>a,
        .main-menu>.menu-item>.sub-menu>.menu-item.current-menu-item>a,
        .main-menu .menu-item .menu-item>.sub-menu>.menu-item:first-child:before,
        .main-menu .menu-item .menu-item>.sub-menu>.menu-item>a,
        .main-menu>.menu-item>.sub-menu>.menu-item:hover>a,
        .cws-widget .wpcf7-form .wpcf7-form-control-wrap:nth-of-type(even):before,
        .cws-widget .wpcf7-form p:nth-of-type(even) .wpcf7-form-control-wrap:only-child:before,
        .widget_carousel_nav>i:hover,
        .gallery_carousel_nav>i:hover,
        .carousel_nav>i:hover,
        .news .date i,
        .news .cats .more:hover,
        .load_more:hover,
        .testimonial:after,
        .testimonial:before,
        blockquote:before,
        .benefits_more:hover,
        .benefits .cws-widget:nth-child(odd) .benefits_more,
        .cws-widget-content.backlight,
        .cws-widget .archive_item:nth-child(even):before,
        #tribe-bar-collapse-toggle,
        #tribe-bar-views .icons_part,
        .tribe-events-sub-nav>li a:hover:before,
        #tribe-events-content.tribe-events-month td:hover div[id^="tribe-events-daynum"],
        .tribe-grid-allday .entry-title a,
        .tribe-bar-collapse-toggle-full-width #tribe-bar-collapse-toggle:hover,
        .tribe-mini-calendar-nav-link:hover,
        .services .accordion_section:nth-child(even) .service_icon,
        .services .accordion_section:nth-child(even) .details,
        .pricing_table_header,
        .pricing_table_column:hover .price_part,
        .pricing_table_column.active_table_column .price_part,
        .links a:hover,
        .toggle_sidebar,
        .toggle_sidebar .switcher,
        .theme_color_sb_area [type="submit"]:hover,
        .find_a_doctor .search_field:nth-of-type(even):before,
        mark,
        .main-menu>.menu-item-language>a,
        .header_language_bar #lang_sel li a.lang_sel_sel:hover,
        .accordion_section.featured:nth-child(even) .acc_featured_icon,
        .accordion_section.featured:nth-child(even) .acc_featured_img{
            background:#5eb8e4;
        }
        .main-menu .menu-item .menu-item>.sub-menu>.menu-item.current-menu-item>a,
        .main-menu .menu-item .menu-item>.sub-menu>.menu-item.current-menu-ancestor>a,
        .main-menu>.menu-item:hover>a, .main-menu>.menu-item>.sub-menu>.menu-item>.sub-menu>.menu-item:hover>a,
        .main-menu>.menu-item>.sub-menu>.menu-item>a,.page-title,
        .search-form label:after,
        .cws-widget .tagcloud a:hover,
        .cws-widget .wpcf7-form .wpcf7-form-control-wrap:nth-of-type(odd):before,
        .cws-widget .wpcf7-form p:nth-of-type(odd) .wpcf7-form-control-wrap:only-child:before,
        *[type="submit"],
        .widget_carousel_nav>i,
        .gallery_carousel_nav>i,
        .carousel_nav>i,
        .social-icons .icon i,
        .social-icons .icon:hover>a,
        .news .date,
        .news .cats .more,
        .load_more,
        .pagination .current,
        html:not(.touch) .pagination *:hover,
        .testimonial .author,
        .benefits_more,
        .benefits .cws-widget:nth-child(odd) .benefits_more:hover,
        .cws-widget .archive_item:before,
        .icon_frame,
        #tribe-bar-header,
        #tribe-events-header,
        .tribe-events-sub-nav>li a:before,
        #tribe-events-content.tribe-events-month td:hover:not(.tribe-events-othermonth),
        #tribe-bar-views .view_icons .view_icon.selected,
        #tribe-bar-views .view_icons .view_icon:hover,
        .tribe-grid-allday .entry-title:hover a,
        .view_icon_tooltip,
        .tribe-bar-collapse-toggle-full-width #tribe-bar-collapse-toggle,
        .tabs .tab.active,
        .accordion_title .accordion_icon:before,
        .accordion_title .accordion_icon:after,
        .tab_widget.type-2 .tab.active,
        .tab_widget.type-vertical .tab,
        .accordion_widget.type-2 .accordion_section.active .accordion_title,
        .cws_button,
        .dropcap,
        main ul>li:before,
        .soc_icon:not(.custom_color),
        .featured_icon:not(.custom_color),
        .toggle_widget.type-2 .accordion_section.active,
        .tribe-mini-calendar-nav-link,
        .tribe-mini-calendar .vcalendar td:hover,
        .tribe-mini-calendar .tribe-events-present:after,
        .tribe-mini-calendar .tribe-mini-calendar-today:after,
        .services .service_icon,
        .services .details,
        .pricing_table_column:hover .pricing_table_header,
        .pricing_table_column.active_table_column .pricing_table_header,
        .links a,
        .our_team .item:hover .team_member_info,
        .photo_tour .item:hover .portfolio_item_info,
        .mobile_menu_header,
        #block-404-substrate,
        .link_url,
        .find_a_doctor .search_field:before,
        #lang_sel li a:hover,
        #lang_sel_list.lang_sel_list_horizontal li a:hover,
        .pagination.page_links>span,
        .acc_featured_icon,
        .acc_featured_img{
            background:#199ad9;
        }
        .page-title,
        .toggle_sidebar .switcher:after{
            border-top-color:#5eb8e4;
        }
        .widget-title,
        .cws-widget .wpcf7-form .wpcf7-form-control-wrap:nth-of-type(odd):after,
        .cws-widget .wpcf7-form p:nth-of-type(odd) .wpcf7-form-control-wrap:only-child:after,
        .cws-widget .archive_item:after,
        .comment-reply-title,
        .tribe-events-list-event-title,
        .tribe-events-single-section-title,
        .tribe-events-map-event-title,
        .find_a_doctor .search_field:after,
        .woocommerce .onsale:after,
        .acc_featured_icon:after,
        .acc_featured_img:after{
            border-left-color:#199ad9;
        }
        .cws-widget .wpcf7-form .wpcf7-form-control-wrap:nth-of-type(even):after,
        .cws-widget .wpcf7-form p:nth-of-type(even) .wpcf7-form-control-wrap:only-child:after,
        .cws-widget .archive_item:nth-child(even):after,
        .find_a_doctor .search_field:nth-of-type(even):after,
        .accordion_section.featured:nth-child(even) .acc_featured_icon:after,
        .accordion_section.featured:nth-child(even) .acc_featured_img:after{
            border-left-color:#5eb8e4;
        }
        .search-form label:before,
        #searchform>div:after{
            border-right-color:#199ad9;
        }
        .search-form label:after,
        .cws-widget .tagcloud a:hover,
        *[type="submit"],
        .cws-widget .widget-icon.icon>i,
        .cws-widget .widget-icon.icon>i>.triangle:before,
        .social-icons .icon>a,
        .testimonial,
        blockquote,
        .tab_widget.type-2 .tab,
        .tab_widget.type-2 .tab_items,
        .tab_widget.type-vertical .tabs,
        .tab_widget.type-vertical .tab_items,
        .cws_button:not(.custom_color),
        .soc_icon:not(.custom_color),
        .tparrows.default,
        .cws-widget .search-form input,
        ul.products li,
        .woocommerce .order .order-actions a,
        .widget_shopping_cart_content p.buttons a,
        #searchform>div:before,
        .button.add_to_cart_button,
        .added_to_cart.wc-forward,
        #content h1.page-title,
        .woocommerce .return-to-shop a,
        #lang_sel_list.lang_sel_list_horizontal li a:hover,
        .rev_slider_wrapper .tp-bullets.simplebullets.round .bullet{
            border-color:#199ad9;
        }
        #lang_sel li a,
        #lang_sel_click li a{
            outline-color:#199ad9;
        }
        .testimonial .author:before,
        .tab_widget.type-2 .tab.active:after,
        .view_icon_tooltip:after,
        .link_url:before{
            border-top-color:#199ad9;
        }
        .cws-widget #wp-calendar td>a,
        .our_team .team_member_info,
        .photo_tour .portfolio_item_info{
            border-bottom-color:#199ad9;
        }
        .benefits .cws-widget{
            background: rgba(25,154,217,0.9);
        }
        .benefits .cws-widget:nth-child(even),
        .tribe-events-week-grid .tribe-week-event .vevent,
        .rev_slider_wrapper .tp-bullets.simplebullets.round .bullet.selected{
            background: rgba(94,184,228,0.9);
        }
        .tribe-events-tooltip,
        .slimScrollRail,
        .tribe-events-event-meta .more:hover,
        .pricing_table_button:hover,
        html.touch .main-nav-container .main-menu .sub-menu .menu-item a,
        html.touch .main-nav-container .main-menu>.menu-item.current-menu-ancestor:not(.active)>a,
        html.touch .main-nav-container .main-menu>.menu-item.current-menu-item:not(.active)>a{
            background-color: #5eb8e4 !important;
        }
        .events-archive.events-gridview #tribe-events-content table .vevent{
            border-bottom-color: #199ad9 !important;
        }
        .tribe-grid-header .column a,
        .tribe-events-list-separator-month,
        #footer-top-part div.tribe-countdown-number,
        #footer-top-part div.tribe-countdown-colon,
        #footer-top-part span.tribe-countdown-under,
        .tp-caption.clinico{
            color: #199ad9 !important;
        }
        .slimScrollBar,
        .tribe-events-event-meta .more,
        .tribe-week-grid-wrapper .tribe-events-tooltip,
        .tparrows.default,
        html.touch .main-nav-container .main-menu>.menu-item a,
        html.touch .main-nav-container .main-menu .sub-menu .menu-item.current-menu-item>a,
        html.touch .main-nav-container .main-menu .sub-menu .menu-item.current-menu-ancestor>a{
            background-color: #199ad9 !important;
        }
        .tribe-events-tooltip .tribe-events-arrow{
            border-top-color: #5eb8e4 !important;
        }
        .single_bar .progress,
        .woocommerce .onsale,
        .woocommerce-pagination .page-numbers.current,
        .woocommerce-pagination ul.page-numbers li a:hover,
        .button.add_to_cart_button,
        .added_to_cart.wc-forward,
        ul.products li.product:hover,
        .quantity.buttons_added input.plus,
        .quantity.buttons_added input.minus,
        .woocommerce .order .order-actions a,
        .widget_shopping_cart_content p.buttons a,
        .woocommerce-tabs .tabs li.active a,
        #searchform>div:before,
        .price_slider .ui-slider-handle,
        .woocommerce .return-to-shop a{
            background-color: #199ad9;
        }
        .quantity.buttons_added input.plus:hover,
        .quantity.buttons_added input.minus:hover,
        ul.products>li .button.add_to_cart_button:hover, 
        ul.products>li .added_to_cart.wc-forward:hover,
        .price_slider .ui-slider-range{
            background-color: #5eb8e4;
        }
        @media screen and (max-width: 767px){
            .main-menu>.menu-item a,
            .main-menu .sub-menu .menu-item.current-menu-item>a,
            .main-menu .sub-menu .menu-item.current-menu-ancestor>a{
                background: #199ad9 !important;
            }
            .main-menu .sub-menu .menu-item a,
            .main-menu>.menu-item.current-menu-ancestor:not(.active)>a,
            .main-menu>.menu-item.current-menu-item:not(.active)>a{
                background: #5eb8e4 !important;
            }
        }</style>


        <link rel='stylesheet' id='main-css'  href="{{ asset('theme/css/maincicl.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' id='main-css'  href="{{ asset('theme/css/cic1.css') }}" type='text/css' media='all' />
        @stop
@extends('web.index')
@section('content')



<div class="container-fluid fondo-equipo" style="margin: 35px;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center clearfix">
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
                    <div class="grid-col grid-col-12 text-center ">
                        <section class="cws-widget">
                            <div class="cws_widget">
                                <div class="cws_widget_content">
                                    <section class="photo_tour_section cws_widget">
                                        <div class="photo_tour_section_header clearfix">
                                            <div class="widget-title"></div>
                                        </div>
                                        <div class="our_team news-pinterest news--1">
                                            <div class="grid isotope" style="position: relative; height: auto;">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
                                                    <div class="thumbnail">

                                                        @foreach($socios as $socio)
                                                        <center>

                                                            <div class="item col-lg-4 col-xs-12 text-center ">
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
    
    .tribe-events-tooltip .tribe-events-arrow{
        border-top-color: #5eb8e4 !important;
    }
    
    



</style>


<link rel='stylesheet' id='main-css'  href="{{ asset('theme/css/maincicl.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href="{{ asset('theme/css/cic1.css') }}" type='text/css' media='all' />


@stop
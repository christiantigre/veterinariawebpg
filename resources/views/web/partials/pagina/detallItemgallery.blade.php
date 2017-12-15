@extends('web.index')
@section('content')


<div class="container">
    <div class="row">

        <div class="row">
            <div class="col-xs-12">
                <h4 style="line-height: 25px;">{{ $gallery->intro }}.</h4>
            </div>
        </div>
        <div class="row row-eq-height" style="padding-right:15px">
            <div class="row">
            <div class="col-md-4 col-lg-4">
                @if(empty($gallery->img))
                Sin imagen de encabezado
                @else
                <a href="{{ url($gallery->img) }}">                    
                <img style="width:100%" src="{{ asset($gallery->img) }}" />
                </a>
                @endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 text">
                <p class="semi-title">{{ $gallery->title }}</p>
                <p>{!! $gallery->content !!}</p>
                @include('web.partials.pagina.cajas.likecompartir')
            </div>

            <!-- Sidebar // advertising -->
            @include('web.partials.pagina.sidebar')
            <!--fin de sidebar-->
        </div>
        </div>
    </div>

    @include('web.partials.pagina.cajas.comentarios')
</div>
<style type="text/css">
.list-item-group, .list-group-item a:hover {
font-size:20px;
color:#100;
}
    .header{position:relative;overflow:hidden;max-height:350px;display:flex;align-items:center;justify-content:center}
.text{
    /*-webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2; */
    margin-top:15px;
}
.statistics > p{margin-bottom:2px;}
.statistics > p > span.label{background-color:white;color:gray;}
.side{background:#fafafa;padding-top:15px}
.side > img { margin-bottom:15px;}
.semi-title{font-weight: bold;margin-top:30px;}
.title_head{
    position: absolute;
    bottom: 45px;
    padding: 7px;
    right: 25px;
    padding-left: 25px;
    padding-right: 30px;
    color: white;
    background: rgba(0,0,0,0.5);
}
.sub-title{
    position: absolute;
    bottom: 94px;
    padding: 7px;
    right: 25px;
    padding-left: 12px;
    padding-right: 12px;
    color: orange;
    background: rgba(0,0,0,0.7);
}
.name-author{
    position: absolute;
    bottom: 35px;
    left: 100px;
    font-size: 11px;
    color: white;
    background: black;
    padding: 2px;
    padding-right: 10px;
    padding-left: 22px;
    margin-left: -21px;
    z-index: 1;
    font-weight: 500;
}
.photo-author{
    max-height: 70px;
    padding: 2px;
    position: absolute;
    left: 25px;
    bottom: 25px;
    background: white;
    z-index: 3;
}
.triangulo{
    position:absolute;
    bottom:0px;
    left:0px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 60px 0 0 1200px;
    border-color: transparent transparent transparent #ffffff;
}
.row-eq-height {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
}

@media (max-width: 426px) {
    .header{
            margin-left: -15px;
            margin-top: -15px;
            margin-right: -15px;
    }
    .title_head{
        font-size:15px;
        bottom:-12px;
        right:0px;
        padding-left:10px;
        padding-right:10px;
    }
    .photo-author{
        max-height:45px;
        left:5px;
        bottom:40px;
    }
    .name-author{
        font-size:9px;
        margin-left:-63px;
        bottom:44px;
    }
    .sub-title{
        right:0px;
        bottom:18px;
        padding:5px;
        font-size:10px;
    }
}
</style>

@stop

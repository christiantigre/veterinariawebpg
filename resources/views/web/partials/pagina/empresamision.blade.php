@extends('web.index')
@section('content')


<div class="container">
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 <!-- HEADER -->
        
@foreach($veterinary as $veterinaria)
        <!-- INFO -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4 style="line-height: 25px;">Nuestra empresa {{ $veterinaria->name }}</h4>
            </div>
        </div>
        <div class="row row-eq-height" style="padding-right:15px">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text">
                <p>{!! $veterinaria->description !!}</p>
                <p>{!! $veterinaria->mision !!}</p>
            </div>
            <!-- Sidebar // advertising -->            
            @include('web.partials.pagina.sidebar')
        </div>
        @endforeach
	</div>
    </div>
</div>

<style type="text/css">
    .header_div{position:relative;overflow:hidden;max-height:350px;display:flex;align-items:center;justify-content:center}
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
.title_h2{    
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
    .header_div{
            margin-left: -15px;
            margin-top: -15px;
            margin-right: -15px;
    }
    .title{
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

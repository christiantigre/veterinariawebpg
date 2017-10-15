@extends('web.index')
@section('content')


<div class="container">
	<div class="row">
		 <!-- HEADER -->
        <div class="header">
            @if(empty($notices->img))
                @foreach($veterinary as $vet)
                    <img style="width:100%" src="{{ asset($vet->logo) }}" />
                @endforeach
            @else
            <img style="width:100%" src="{{ asset($notices->img) }}" />
            @endif
            <div class="triangulo"></div>
            <h2 class="title_head">{{ $notices->title }}...</h2>
        </div>

        <!-- INFO -->
        <div class="row">
            <div class="col-xs-12">
                <h4 style="line-height: 25px;">{!! $notices->content !!}</h4>
            </div>
        </div>
        <div class="row row-eq-height" style="padding-right:15px">
            <div class="col-xs-9 text">
                
                <p class="semi-title">{{ $notices->title }}</p>



                <div class="row">
                    @if(!empty($notices->precio))
                    <div class="col-md-12">
                      <div class="update-nag">
                        <div class="update-split"><i class="glyphicon glyphicon-usd"></i></div>
                        <div class="update-text"><a href="#">Précio </a><strong>{{ $notices->precio }}</strong> </div>
                    </div>
                </div>
                @endif

    @if(!empty($notices->fechainit))
    <div class="col-md-12">
      <div class="update-nag">
        <div class="update-split update-info"><i class="glyphicon glyphicon-calendar"></i></div>
        <div class="update-text"> <a href=""> <strong>Fecha</strong> </a> 
            {{ $notices->fechainit }} </div>
        </div>
    </div>
    @endif
                @if(!empty($notices->asistire))
                <div class="col-md-12">
                  <div class="update-nag">
                    <div class="update-split update-info"><i class="glyphicon glyphicon-arrow-right"></i></div>
                    <div class="update-text"><a href="#">Asistirán </a> {{ $notices->asistire }} 
                        <a href="#"></a> </div>
                    </div>
                </div>
                @endif
        

@if(!empty($veterinary))
<div class="col-md-12">
  <div class="update-nag">
    <div class="update-split update-info"><i class="glyphicon glyphicon-info-sign"></i></div>
    <div class="update-text"> 
        @foreach($veterinary as $vet)
        <strong> <i class="glyphicon glyphicon-earphone"></i> </strong> {{ $vet->tlf1 }} {{ $vet->tlf2 }} 
        <strong> <i class="glyphicon glyphicon-phone"></i> </strong> {{ $vet->cel1 }} {{ $vet->cel2 }} 
        <strong> <i class="glyphicon glyphicon-envelope"></i> </strong> {{ $vet->mail }} 
        @endforeach
    </div>
</div>
</div>
@endif

</div>   



            </div>
            <!-- Sidebar // advertising -->
            @include('web.partials.pagina.sidebar')
        </div>
	</div>
</div>
<style type="text/css">
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



/*================0LISTA===================*/


/*lista*/


.update-nag{
  display: inline-block;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  height: 40px;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  margin-bottom: 10px;
}

.update-nag:hover{
    cursor: pointer;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.4);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.3);
}

.update-nag > .update-split{
  background: #337ab7;
  width: 33px;
  float: left;
  color: #fff!important;
  height: 100%;
  text-align: center;
}

.update-nag > .update-split > .glyphicon{
  position:relative;
  top: calc(50% - 9px)!important; /* 50% - 3/4 of icon height */
}
.update-nag > .update-split.update-success{
  background: #5cb85c!important;
}

.update-nag > .update-split.update-danger{
  background: #d9534f!important;
}

.update-nag > .update-split.update-info{
  background: #5bc0de!important;
}



.update-nag > .update-text{
  line-height: 19px;
  padding-top: 11px;
  padding-left: 45px;
  padding-right: 20px;
}


</style>

@stop

<div class="col-sm-3">
  <h3><strong>Servicios</strong></h3>
  <div class="seprator"></div>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?Php $i=1; ?>
  @foreach($cards as $service)
    @if($i==1)
      <div class="item active">
        @else
         <div class="item"> 
        @endif
        <div class="row" style="padding: 20px; text-align: center;">
          <div class="col-md-3">
      <div class="column" style="text-align: center;">  
            <!-- Post Content-->
            <div class="post-content" style="text-align: center;">
              <div class="categoryr" style="text-align: center;">{{ $service->slug }}</div>
              <a href="{{ url('detall_service', ['id' => $service->id])}}">  <h2 class="title" style="text-align: center;">{{ $service->service }}</h2> </a>
              <h2 class="sub_title">{{ $service->slug }}</h2>
              <p class="description">{{ $service->description }}</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> {{ $service->actividad() }}</span><span class="comments"><i class="fa fa-plus"></i><a href="{{ url('detall_service', ['id' => $service->id])}}"> ver detalles</a></span></div>
            </div>
        </div>
      </div>
        </div>
      </div>
      <?Php $i++; ?>
      @endforeach

  </div>
</div>
<div class="controls testimonial_control pull-right">
  <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
  data-slide="prev"></a>

  <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
  data-slide="next"></a>
</div>
</div>


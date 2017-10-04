@extends('web.index')
@section('content')



<div class="container-fluid fondo-quint">
	<div class="sixteen columns">
		<div class="sub-text link-svgline">
			<a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#about">
				We believe
				<svg class="link-svgline">
					<use xlink:href="#svg_line">
					</use>
				</svg>
			</a>
			in coming up with original ideas and turning them into digital work that is both
			<a data-gal="m_PageScroll2id" data-ps2id-offset="65" href="#services">
				innovative and measurable.
				<svg class="link-svgline">
					<use xlink:href="#svg_line">
					</use>
				</svg>
			</a>
		</div>
	</div>
	


	<div class="row ">
		<div class="col-md-12 ">
			<p><h2>{{ $slider->title }}</h2></p>
			<div class="work">	

			<div class="col-md-4">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">{{ $slider->subtittle }}</h4>
                        </div>
                    </span>
                    
                    @if(!empty($slider->body))
                    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        {{ $slider->body }}
                        </div>
                    </div>
                    @else
                    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        Sin descripción
                        </div>
                    </div>
                    @endif
                </div> 
                <!-- / panel 1 -->
                @if(!empty($slider->detall))
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">{{ $slider->detall }}</h4>
                        </div>
                    </span>                    
                </div>
                <!-- / panel 2 -->
                @endif
                
            </div> <!-- / panel-group -->
             
        </div> <!-- /col-md-4 -->
        
        <div class="col-md-8">
            <!-- begin macbook pro mockup -->
            <div class="md-macbook-pro md-glare">
                <div class="md-lid">
                    <div class="md-camera"></div>
                    <div class="md-screen">
                    <!-- content goes here -->                
                        <div class="tab-featured-image">
                            <div class="tab-content">
                                <div class="tab-pane  in active" id="tab1">

                                        <img src="{{ asset($slider->img) }}" alt="tab1" class="img img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-base"></div>
            </div> <!-- end macbook pro mockup -->



        </div> <!-- / .col-md-8 -->			
				<div class="grid gal-item" id="grid">    
					<div class="guide">
					</div>
				</div>
			</div>
		</div>
	</div>


	


</div>




@stop

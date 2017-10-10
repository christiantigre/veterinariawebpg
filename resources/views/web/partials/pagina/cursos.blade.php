@extends('web.index')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<center>
				<h1 class="page-header">
					<small>  Elije tu curso </small><!--small>Statistics Overview</small-->
				</h1>
			</center>                       
                       <ul id="myTab" class="nav nav-tabs">
                       	<li class="active">
                       		<a href="#init" data-toggle="tab">
                       			Nuestros clientes prefieren
                       		</a>
                       	</li>
                        @if(count($tipocources)>0)                      
                          @foreach($tipocources as $tipo)
                       	  <li><a href="#{{ $tipo->id }}" data-toggle="tab">{{ $tipo->type }}</a></li>
                          @endforeach
                        @else
                          No configurado los tipos de cursos
                        @endif

                      </ul>
                      <div id="myTabContent" class="tab-content">
                      	<div class="tab-pane fade in active" id="init">
                      		<div class="content_accordion">
                      			<div class="panel-group" id="accordion">
                      				
                      				<div class="panel panel-default">
                      					<div class="panel-heading">
                      						<h4 class="panel-title">
                      							<a data-toggle="collapse" data-parent="#accordion" href="#essay">1. Essay Compulsory (Total Marks-l00)</a>
                      						</h4>
                      					</div>
                      					<div id="essay" class="panel-collapse collapse in">
                      						<div class="panel-body">
                      							<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      						</div>
                      					</div>
                      				</div>
                      				<div class="panel panel-default">
                      					<div class="panel-heading">
                      						<h4 class="panel-title">
                      							<a data-toggle="collapse" data-parent="#accordion" href="#eng">2. ENGLISH (PRECIS & COMPOSITION) Compulsory (Total Marks-l00)</a>
                      						</h4>
                      					</div>
                      					<div id="eng" class="panel-collapse collapse">
                      						<div class="panel-body">
                      							<p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

                      								The candidates should be capable of:

                      								Using English correctly and efficiently as a vehicle of communication.
                      								Reading, comprehending and analyzing advanced texts.
                      								Grammar and Vocabulary
                      								The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
                      								There shall be no prescribed course for this purpose.
                      								Reading Comprehension and Analysis
                      								Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

                      								Precise Writing
                      								The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
                      								<a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#accordion" href="#isl">3. Islamic Studies</a>
                      							</h4>
                      						</div>
                      						<div id="isl" class="panel-collapse collapse">
                      							<div class="panel-body">
                      								<p> <a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#accordion" href="#eds">4. Everyday Science</a>
                      							</h4>
                      						</div>
                      						<div id="eds" class="panel-collapse collapse">
                      							<div class="panel-body">
                      								<p> <a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#accordion" href="#ca">5. Current Affairs</a>
                      							</h4>
                      						</div>
                      						<div id="ca" class="panel-collapse collapse">
                      							<div class="panel-body">
                      								<p> <a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#accordion" href="#pa">6. Pakistan Affairs</a>
                      							</h4>
                      						</div>
                      						<div id="pa" class="panel-collapse collapse">
                      							<div class="panel-body">
                      								<p> <a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					
                      				</div>
                      			</div>
                      			<!--accordion end-->
                      		</div>

                          @foreach($tipocources as $tipo)
                          
                      		<div class="tab-pane fade" id="{{ $tipo->id }}">
                      			<div class="content_accordion">
                      				<div class="panel-group" id="{{ $tipo->id }}{{ $tipo->type }}">
                                <?Php $i=1; ?>
                                @foreach($clases as $clase)
                                  @if(($tipo->id)==($clase->typecourse_id))
                          					<div class="panel panel-default">
                          						<div class="panel-heading">
                          							<h4 class="panel-title">
                          								<a data-toggle="collapse" data-parent="#{{ $clase->typecourse_id }}{{ $clase->TypeCourse->type }}" href="#{{ $clase->id }}-{{ $clase->TypeCourse->type }}"><?Php echo $i; ?>. {{ $clase->clasification }} </a>
                          							</h4>
                          						</div>
                                        @if($i=='1')
                                          <div id="{{ $clase->id }}-{{ $clase->TypeCourse->type }}" class="panel-collapse collapse in">
                                        @else
                                          <div id="{{ $clase->id }}-{{ $clase->TypeCourse->type }}" class="panel-collapse collapse">
                                        @endif
                          							<div class="panel-body">
                          								<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                          							</div>
                          						</div>
                          					</div>
                                    @endif
                                    <?Php $i++; ?>
                                @endforeach

                      				</div>
                      			</div>
                      				<!--accordion end-->
                      		</div>

                          @endforeach
                          

                      </div>


		</div>


		<div class="col-sm-3">
        <h3><strong>Testimonial</strong></h3>
        <div class="seprator"></div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                    <div class="row">
                    <div class="col-sm-2">
                        <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-10">
                        <h4><strong>Jack Andreson</strong></h4>
                        <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                        <span>Officeal All Star Cafe</span>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
               <div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                    <div class="row">
                    <div class="col-sm-2">
                        <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-10">
                        <h4><strong>Kiara Andreson</strong></h4>
                        <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                        <span>Officeal All Star Cafe</span>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="next"></a>
              </div>
        </div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container-fluid -->

<style type="text/css">
.content_accordion{
	margin: 20px;
}
</style>


@stop

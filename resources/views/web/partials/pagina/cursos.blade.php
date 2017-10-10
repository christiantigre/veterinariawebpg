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
                      		<div class="tab-pane fade" id="1">
                      			<div class="content_accordion">
                      				<div class="panel-group" id="ga">
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#ga" href="#aa">1. Accounting and Auditing </a>
                      							</h4>
                      						</div>
                      						<div id="aa" class="panel-collapse collapse in">
                      							<div class="panel-body">
                      								<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      							</div>
                      						</div>
                      					</div>
                      					<div class="panel panel-default">
                      						<div class="panel-heading">
                      							<h4 class="panel-title">
                      								<a data-toggle="collapse" data-parent="#ga" href="#eco">2. Economics</a>
                      							</h4>
                      						</div>
                      						<div id="eco" class="panel-collapse collapse">
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
                      									<a data-toggle="collapse" data-parent="#ga" href="#pba">3. Public Administration</a>
                      								</h4>
                      							</div>
                      							<div id="pba" class="panel-collapse collapse">
                      								<div class="panel-body">
                      									<p> <a href="" target="_blank">Learn more.</a></p>
                      								</div>
                      							</div>
                      						</div>
                      						<div class="panel panel-default">
                      							<div class="panel-heading">
                      								<h4 class="panel-title">
                      									<a data-toggle="collapse" data-parent="#ga" href="#ba">4.Business Administration</a>
                      								</h4>
                      							</div>
                      							<div id="ba" class="panel-collapse collapse">
                      								<div class="panel-body">
                      									<p> <a href="" target="_blank">Learn more.</a></p>
                      								</div>
                      							</div>
                      						</div>
                      					</div>
                      				</div>
                      				<!--accordion end-->
                      			</div>

                      			<div class="tab-pane fade" id="2">
                      				<div class="content_accordion">
                      					<div class="panel-group" id="gb">
                      						<div class="panel panel-default">
                      							<div class="panel-heading">
                      								<h4 class="panel-title">
                      									<a data-toggle="collapse" data-parent="#gb" href="#ps">1. Political Science </a>
                      								</h4>
                      							</div>
                      							<div id="ps" class="panel-collapse collapse in">
                      								<div class="panel-body">
                      									<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      								</div>
                      							</div>
                      						</div>
                      						<div class="panel panel-default">
                      							<div class="panel-heading">
                      								<h4 class="panel-title">
                      									<a data-toggle="collapse" data-parent="#gb" href="#agr">2. Agriculture</a>
                      								</h4>
                      							</div>
                      							<div id="agr" class="panel-collapse collapse">
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
                      										<a data-toggle="collapse" data-parent="#gb" href="#for">3. Forestry </a>
                      									</h4>
                      								</div>
                      								<div id="for" class="panel-collapse collapse">
                      									<div class="panel-body">
                      										<p> <a href="" target="_blank">Learn more.</a></p>
                      									</div>
                      								</div>
                      							</div>
                      							<div class="panel panel-default">
                      								<div class="panel-heading">
                      									<h4 class="panel-title">
                      										<a data-toggle="collapse" data-parent="#gb" href="#soc">4.Sociology</a>
                      									</h4>
                      								</div>
                      								<div id="soc" class="panel-collapse collapse">
                      									<div class="panel-body">
                      										<p> <a href="" target="_blank">Learn more.</a></p>
                      									</div>
                      								</div>
                      							</div>
                      							<div class="panel panel-default">
                      								<div class="panel-heading">
                      									<h4 class="panel-title">
                      										<a data-toggle="collapse" data-parent="#gb" href="#jou">5.Journalism</a>
                      									</h4>
                      								</div>
                      								<div id="jou" class="panel-collapse collapse">
                      									<div class="panel-body">
                      										<p> <a href="" target="_blank">Learn more.</a></p>
                      									</div>
                      								</div>
                      							</div>
                      						</div>
                      					</div>
                      					<!--accordion end-->
                      				</div>
                      				
                      				<div class="tab-pane fade" id="3">
                      					<div class="content_accordion">
                      						<div class="panel-group" id="gc">
                      							<div class="panel panel-default">
                      								<div class="panel-heading">
                      									<h4 class="panel-title">
                      										<a data-toggle="collapse" data-parent="#gc" href="#pm">1. Pure Mathematics </a>
                      									</h4>
                      								</div>
                      								<div id="pm" class="panel-collapse collapse in">
                      									<div class="panel-body">
                      										<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      									</div>
                      								</div>
                      							</div>
                      							<div class="panel panel-default">
                      								<div class="panel-heading">
                      									<h4 class="panel-title">
                      										<a data-toggle="collapse" data-parent="#gc" href="#am">2. Applied Mathematics</a>
                      									</h4>
                      								</div>
                      								<div id="am" class="panel-collapse collapse">
                      									<div class="panel-body">
                      										<p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.
                      											<a href="" target="_blank">Learn more.</a></p>
                      										</div>
                      									</div>
                      								</div>
                      								<div class="panel panel-default">
                      									<div class="panel-heading">
                      										<h4 class="panel-title">
                      											<a data-toggle="collapse" data-parent="#gc" href="#cs">3. Computer Science </a>
                      										</h4>
                      									</div>
                      									<div id="cs" class="panel-collapse collapse">
                      										<div class="panel-body">
                      											<p> <a href="" target="_blank">Learn more.</a></p>
                      										</div>
                      									</div>
                      								</div>
                      								<div class="panel panel-default">
                      									<div class="panel-heading">
                      										<h4 class="panel-title">
                      											<a data-toggle="collapse" data-parent="#gc" href="#stat">4.Statistics</a>
                      										</h4>
                      									</div>
                      									<div id="stat" class="panel-collapse collapse">
                      										<div class="panel-body">
                      											<p> <a href="" target="_blank">Learn more.</a></p>
                      										</div>
                      									</div>
                      								</div>
                      							</div>
                      						</div>
                      						<!--accordion end-->
                      					</div>
                      					<div class="tab-pane fade" id="4">
                      						<div class="content_accordion">
                      							<div class="panel-group" id="gd">
                      								<div class="panel panel-default">
                      									<div class="panel-heading">
                      										<h4 class="panel-title">
                      											<a data-toggle="collapse" data-parent="#gd" href="#ps">1. Physics </a>
                      										</h4>
                      									</div>
                      									<div id="phy" class="panel-collapse collapse in">
                      										<div class="panel-body">
                      											<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      										</div>
                      									</div>
                      								</div>
                      								<div class="panel panel-default">
                      									<div class="panel-heading">
                      										<h4 class="panel-title">
                      											<a data-toggle="collapse" data-parent="#gd" href="#geo">2. Geology</a>
                      										</h4>
                      									</div>
                      									<div id="geo" class="panel-collapse collapse">
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
                      												<a data-toggle="collapse" data-parent="#gd" href="#geog">3. Geography </a>
                      											</h4>
                      										</div>
                      										<div id="geog" class="panel-collapse collapse">
                      											<div class="panel-body">
                      												<p> <a href="" target="_blank">Learn more.</a></p>
                      											</div>
                      										</div>
                      									</div>
                      									<div class="panel panel-default">
                      										<div class="panel-heading">
                      											<h4 class="panel-title">
                      												<a data-toggle="collapse" data-parent="#gd" href="#chem">4.Chemistry</a>
                      											</h4>
                      										</div>
                      										<div id="chem" class="panel-collapse collapse">
                      											<div class="panel-body">
                      												<p> <a href="" target="_blank">Learn more.</a></p>
                      											</div>
                      										</div>
                      									</div>
                      									<div class="panel panel-default">
                      										<div class="panel-heading">
                      											<h4 class="panel-title">
                      												<a data-toggle="collapse" data-parent="#gd" href="#bot">5. Botany</a>
                      											</h4>
                      										</div>
                      										<div id="bot" class="panel-collapse collapse">
                      											<div class="panel-body">
                      												<p> <a href="" target="_blank">Learn more.</a></p>
                      											</div>
                      										</div>
                      									</div>
                      								</div>
                      							</div>
                      							<!--accordion end-->
                      						</div>
                      						<div class="tab-pane fade" id="e">
                      							<div class="content_accordion">
                      								<div class="panel-group" id="ge">
                      									<div class="panel panel-default">
                      										<div class="panel-heading">
                      											<h4 class="panel-title">
                      												<a data-toggle="collapse" data-parent="#ge" href="#ihc">1. Islamic History & Culture </a>
                      											</h4>
                      										</div>
                      										<div id="ihc" class="panel-collapse collapse in">
                      											<div class="panel-body">
                      												<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      											</div>
                      										</div>
                      									</div>
                      									<div class="panel panel-default">
                      										<div class="panel-heading">
                      											<h4 class="panel-title">
                      												<a data-toggle="collapse" data-parent="#ge" href="#iph">2. Indo Pak History</a>
                      											</h4>
                      										</div>
                      										<div id="iph" class="panel-collapse collapse">
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
                      													<a data-toggle="collapse" data-parent="#ge" href="#bh">3. British history </a>
                      												</h4>
                      											</div>
                      											<div id="bh" class="panel-collapse collapse">
                      												<div class="panel-body">
                      													<p> <a href="" target="_blank">Learn more.</a></p>
                      												</div>
                      											</div>
                      										</div>
                      										<div class="panel panel-default">
                      											<div class="panel-heading">
                      												<h4 class="panel-title">
                      													<a data-toggle="collapse" data-parent="#ge" href="#ah">4. History of United States of America</a>
                      												</h4>
                      											</div>
                      											<div id="ah" class="panel-collapse collapse">
                      												<div class="panel-body">
                      													<p> <a href="" target="_blank">Learn more.</a></p>
                      												</div>
                      											</div>
                      										</div>
                      										<div class="panel panel-default">
                      											<div class="panel-heading">
                      												<h4 class="panel-title">
                      													<a data-toggle="collapse" data-parent="#ge" href="#eh">5. European History</a>
                      												</h4>
                      											</div>
                      											<div id="eh" class="panel-collapse collapse">
                      												<div class="panel-body">
                      													<p> <a href="" target="_blank">Learn more.</a></p>
                      												</div>
                      											</div>
                      										</div>
                      									</div>
                      								</div>
                      								<!--accordion end-->
                      							</div>
                      							<div class="tab-pane fade" id="f">
                      								<div class="content_accordion">
                      									<div class="panel-group" id="gf">
                      										<div class="panel panel-default">
                      											<div class="panel-heading">
                      												<h4 class="panel-title">
                      													<a data-toggle="collapse" data-parent="#gf" href="#law">1. Law </a>
                      												</h4>
                      											</div>
                      											<div id="law" class="panel-collapse collapse in">
                      												<div class="panel-body">
                      													<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      												</div>
                      											</div>
                      										</div>
                      										<div class="panel panel-default">
                      											<div class="panel-heading">
                      												<h4 class="panel-title">
                      													<a data-toggle="collapse" data-parent="#gf" href="#ilaw">2. International Law</a>
                      												</h4>
                      											</div>
                      											<div id="ilaw" class="panel-collapse collapse">
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
                      														<a data-toggle="collapse" data-parent="#gf" href="#claw">3. Constitutional Law </a>
                      													</h4>
                      												</div>
                      												<div id="claw" class="panel-collapse collapse">
                      													<div class="panel-body">
                      														<p> <a href="" target="_blank">Learn more.</a></p>
                      													</div>
                      												</div>
                      											</div>
                      											<div class="panel panel-default">
                      												<div class="panel-heading">
                      													<h4 class="panel-title">
                      														<a data-toggle="collapse" data-parent="#gf" href="#mlaw">4. Mercantile Law</a>
                      													</h4>
                      												</div>
                      												<div id="mlaw" class="panel-collapse collapse">
                      													<div class="panel-body">
                      														<p> <a href="" target="_blank">Learn more.</a></p>
                      													</div>
                      												</div>
                      											</div>
                      											<div class="panel panel-default">
                      												<div class="panel-heading">
                      													<h4 class="panel-title">
                      														<a data-toggle="collapse" data-parent="#gf" href="#mlj">5. Muslim Law and Jurisprudence</a>
                      													</h4>
                      												</div>
                      												<div id="mlj" class="panel-collapse collapse">
                      													<div class="panel-body">
                      														<p> <a href="" target="_blank">Learn more.</a></p>
                      													</div>
                      												</div>
                      											</div>
                      										</div>
                      									</div>
                      									<!--accordion end-->
                      								</div>
                      								<div class="tab-pane fade" id="g">
                      									<div class="content_accordion">
                      										<div class="panel-group" id="gg">
                      											<div class="panel panel-default">
                      												<div class="panel-heading">
                      													<h4 class="panel-title">
                      														<a data-toggle="collapse" data-parent="#gg" href="#psy">1. Psychology </a>
                      													</h4>
                      												</div>
                      												<div id="psy" class="panel-collapse collapse in">
                      													<div class="panel-body">
                      														<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      													</div>
                      												</div>
                      											</div>
                      											<div class="panel panel-default">
                      												<div class="panel-heading">
                      													<h4 class="panel-title">
                      														<a data-toggle="collapse" data-parent="#gg" href="#phi">2. Philosophy</a>
                      													</h4>
                      												</div>
                      												<div id="phi" class="panel-collapse collapse">
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
                      											</div>
                      										</div>
                      										<!--accordion end-->
                      									</div>
                      									<div class="tab-pane fade" id="h">
                      										<div class="content_accordion">
                      											<div class="panel-group" id="gh">
                      												<div class="panel panel-default">
                      													<div class="panel-heading">
                      														<h4 class="panel-title">
                      															<a data-toggle="collapse" data-parent="#gh" href="#sind">1. Sindhi </a>
                      														</h4>
                      													</div>
                      													<div id="sind" class="panel-collapse collapse in">
                      														<div class="panel-body">
                      															<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      														</div>
                      													</div>
                      												</div>
                      												<div class="panel panel-default">
                      													<div class="panel-heading">
                      														<h4 class="panel-title">
                      															<a data-toggle="collapse" data-parent="#gh" href="#bal">2. Balochi</a>
                      														</h4>
                      													</div>
                      													<div id="bal" class="panel-collapse collapse">
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
                      																<a data-toggle="collapse" data-parent="#gh" href="#kpk">3. Pushto </a>
                      															</h4>
                      														</div>
                      														<div id="kpk" class="panel-collapse collapse">
                      															<div class="panel-body">
                      																<p> <a href="" target="_blank">Learn more.</a></p>
                      															</div>
                      														</div>
                      													</div>
                      													<div class="panel panel-default">
                      														<div class="panel-heading">
                      															<h4 class="panel-title">
                      																<a data-toggle="collapse" data-parent="#gh" href="#pun">4.Punjabi</a>
                      															</h4>
                      														</div>
                      														<div id="pun" class="panel-collapse collapse">
                      															<div class="panel-body">
                      																<p> <a href="" target="_blank">Learn more.</a></p>
                      															</div>
                      														</div>
                      													</div>
                      												</div>
                      											</div>
                      											<!--accordion end-->
                      										</div>
                      										<div class="tab-pane fade" id="i">
                      											<div class="content_accordion">
                      												<div class="panel-group" id="gi">
                      													<div class="panel panel-default">
                      														<div class="panel-heading">
                      															<h4 class="panel-title">
                      																<a data-toggle="collapse" data-parent="#gi" href="#el">1. English Literature </a>
                      															</h4>
                      														</div>
                      														<div id="el" class="panel-collapse collapse in">
                      															<div class="panel-body">
                      																<p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                      															</div>
                      														</div>
                      													</div>
                      													<div class="panel panel-default">
                      														<div class="panel-heading">
                      															<h4 class="panel-title">
                      																<a data-toggle="collapse" data-parent="#gi" href="#urd">2. Urdu</a>
                      															</h4>
                      														</div>
                      														<div id="urd" class="panel-collapse collapse">
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
                      																	<a data-toggle="collapse" data-parent="#gi" href="#per">3. Persian </a>
                      																</h4>
                      															</div>
                      															<div id="per" class="panel-collapse collapse">
                      																<div class="panel-body">
                      																	<p> <a href="" target="_blank">Learn more.</a></p>
                      																</div>
                      															</div>
                      														</div>
                      														<div class="panel panel-default">
                      															<div class="panel-heading">
                      																<h4 class="panel-title">
                      																	<a data-toggle="collapse" data-parent="#gi" href="#arb">4. Arabic</a>
                      																</h4>
                      															</div>
                      															<div id="arb" class="panel-collapse collapse">
                      																<div class="panel-body">
                      																	<p> <a href="" target="_blank">Learn more.</a></p>
                      																</div>
                      															</div>
                      														</div>
                      													</div>
                      													<!--accordion end-->
                      												</div>
                      											</div>
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
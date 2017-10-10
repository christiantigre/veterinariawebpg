@extends('web.index')
@section('content')
<div class="container">
	
    

	
     
<div class="row"><div class="hidden-xs voffset6" ></div>
  
    <div class="col-md-12   col-lg-12 panel panel-danger" >  
            
             
                <br>
                <div class="panel-heading" id="syllabus">
                  <h1 class="text-center text-primary hidden-xs"    style="font-size:400%"><span class="glyphicon glyphicon-cloud"></span> Tabs with Pagination</h1>
                  <h1 class="text-center text-primary visible-xs"                       ><span class="glyphicon glyphicon-cloud"></span> Tabs with Pagination</h1>

                  <br><br>
                   <div class="tabbable" >
                        <ul class="nav nav-tabs" id="myTabs">
                            <li class="active"><a href="#p1" data-toggle="tab"><strong>Page 1</strong></a></li>
                            <li><a href="#p2" data-toggle="tab"><strong>Page 2</strong></a></li>
                            <li><a href="#p3" data-toggle="tab"><strong>Page 3</strong></a></li>
                            <li><a href="#p4" data-toggle="tab"><strong>Page 4</strong></a></li>
                            <li><a href="#p5" data-toggle="tab"><strong><i class="fa fa-file-pdf-o"></i> PDF</strong></a></li>
                            
                    </ul>
                    
                  </div>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                                
                    <!-- ---------------- ---------------- 
                    ----------------     tab 1 ----------------  
                       ---------------- ------------------>   
                        <div class="tab-pane fade  in active " id="p1">
                        PAGE 1<br><br>
                         <br>
                        	
                          <div class="col-sm-12 col-md-12 col-lg-12">
                             
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan ligula velit, et tristique orci posuere ut. Nunc sed nisi lacinia, lobortis eros ac, dapibus purus. In luctus leo ante, quis pharetra enim elementum nec. Nam tincidunt egestas elit at efficitur. Quisque ut mollis dolor. Vestibulum ullamcorper semper faucibus. Aliquam vestibulum pharetra turpis. Nam dignissim nisi et purus placerat luctus. Aliquam nec condimentum leo. Cras quis scelerisque nunc, pharetra scelerisque quam. Duis dignissim quam non ligula varius fringilla. Aliquam suscipit egestas ante in fringilla. Ut interdum, lacus sed congue pharetra, sem ipsum tempus odio, eu condimentum sapien enim eu metus. Nulla convallis arcu ut urna scelerisque eleifend. Aliquam nec purus sed dolor ultricies aliquam sed nec nulla. Nulla ut ante eget orci bibendum pellentesque quis condimentum massa.

Suspendisse varius cursus mi ac gravida. Etiam varius pharetra ante, placerat cursus erat posuere sed. Donec consequat nibh sed eros rutrum lobortis. Cras turpis odio, tempor vitae vestibulum at, pulvinar eu diam. Phasellus facilisis finibus ligula, et volutpat purus interdum at. Pellentesque feugiat nisl libero, vitae consectetur diam volutpat vitae. In semper vehicula fermentum. Vivamus rutrum pretium lacus id egestas. Vestibulum pellentesque ultrices varius. Sed vitae ex eu mi faucibus suscipit ac non quam. Nullam vitae ante ex. Fusce placerat, sapien vitae imperdiet tincidunt, justo urna pulvinar ex, in tincidunt dolor diam vehicula urna. Nunc ex est, convallis eu tristique vulputate, pellentesque eu augue.

Praesent et lorem augue. Nam tincidunt ipsum velit, sit amet condimentum enim maximus id. Maecenas hendrerit consequat est, ac blandit purus. Phasellus sem massa, feugiat auctor sollicitudin quis, malesuada quis lacus. Duis commodo venenatis pharetra. Morbi a odio sit amet mi tristique gravida. Nam semper felis vitae quam dapibus luctus.

Mauris eu porttitor felis, ut pulvinar metus. Etiam at massa vitae massa elementum tempor quis at erat. Duis pretium tempus sem, sit amet blandit turpis eleifend a. Vivamus bibendum neque risus, et egestas erat auctor a. Nunc pulvinar pellentesque condimentum. Aenean non magna elit. In hac habitasse platea dictumst. Sed accumsan gravida metus, eget malesuada tellus placerat sed. Vivamus posuere tortor enim, id tempus lectus blandit maximus. Proin dictum, quam a ullamcorper tincidunt, purus orci cursus felis, id laoreet est elit vel nulla.

Aliquam eget enim quam. Morbi faucibus vitae dolor non fringilla. Morbi eget cursus purus. Donec velit purus, dignissim in libero mattis, molestie scelerisque justo. Nullam hendrerit in nunc et laoreet. Integer vestibulum neque ac mi vestibulum condimentum. Donec nec quam nisi. Integer ac mauris sit amet est egestas sagittis vel et quam. Fusce suscipit neque a mauris commodo, eget feugiat felis maximus.
                              
                              
                        
                        
<div class="text-center">
  <ul class="pagination  pagination-lg">
      <li class="active"><a href="#p1">1</a></li>
      <li><a onclick='switchTab("#p2")' >2</a></li>
      <li><a onclick='switchTab("#p3")'>3</a></li>
      <li><a onclick='switchTab("#p4")'>4</a></li>
      <li><a onclick='switchTab("#p5")'>pdf</a></li>
 </ul>
</div> 
                              </div>
                   
                   
                   
                    
                        		<div class="voffset9"></div>
                                
  
                  </div><!--  end tab 1-->
                          
                      
                          
                          <!-- ---------------- ---------------- 
                    ----------------     tab 2 ----------------  
                       ---------------- ------------------>   
                          <div class="tab-pane fade " id="p2">
                     <div id="pg2"> PAGE 2</div><br><br>
                     <div class="col-sm-12 col-md-12 col-lg-12">
                              
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan ligula velit, et tristique orci posuere ut. Nunc sed nisi lacinia, lobortis eros ac, dapibus purus. In luctus leo ante, quis pharetra enim elementum nec. Nam tincidunt egestas elit at efficitur. Quisque ut mollis dolor. Vestibulum ullamcorper semper faucibus. Aliquam vestibulum pharetra turpis. Nam dignissim nisi et purus placerat luctus. Aliquam nec condimentum leo. Cras quis scelerisque nunc, pharetra scelerisque quam. Duis dignissim quam non ligula varius fringilla. Aliquam suscipit egestas ante in fringilla. Ut interdum, lacus sed congue pharetra, sem ipsum tempus odio, eu condimentum sapien enim eu metus. Nulla convallis arcu ut urna scelerisque eleifend. Aliquam nec purus sed dolor ultricies aliquam sed nec nulla. Nulla ut ante eget orci bibendum pellentesque quis condimentum massa.

Suspendisse varius cursus mi ac gravida. Etiam varius pharetra ante, placerat cursus erat posuere sed. Donec consequat nibh sed eros rutrum lobortis. Cras turpis odio, tempor vitae vestibulum at, pulvinar eu diam. Phasellus facilisis finibus ligula, et volutpat purus interdum at. Pellentesque feugiat nisl libero, vitae consectetur diam volutpat vitae. In semper vehicula fermentum. Vivamus rutrum pretium lacus id egestas. Vestibulum pellentesque ultrices varius. Sed vitae ex eu mi faucibus suscipit ac non quam. Nullam vitae ante ex. Fusce placerat, sapien vitae imperdiet tincidunt, justo urna pulvinar ex, in tincidunt dolor diam vehicula urna. Nunc ex est, convallis eu tristique vulputate, pellentesque eu augue.

Praesent et lorem augue. Nam tincidunt ipsum velit, sit amet condimentum enim maximus id. Maecenas hendrerit consequat est, ac blandit purus. Phasellus sem massa, feugiat auctor sollicitudin quis, malesuada quis lacus. Duis commodo venenatis pharetra. Morbi a odio sit amet mi tristique gravida. Nam semper felis vitae quam dapibus luctus.

Mauris eu porttitor felis, ut pulvinar metus. Etiam at massa vitae massa elementum tempor quis at erat. Duis pretium tempus sem, sit amet blandit turpis eleifend a. Vivamus bibendum neque risus, et egestas erat auctor a. Nunc pulvinar pellentesque condimentum. Aenean non magna elit. In hac habitasse platea dictumst. Sed accumsan gravida metus, eget malesuada tellus placerat sed. Vivamus posuere tortor enim, id tempus lectus blandit maximus. Proin dictum, quam a ullamcorper tincidunt, purus orci cursus felis, id laoreet est elit vel nulla.

Aliquam eget enim quam. Morbi faucibus vitae dolor non fringilla. Morbi eget cursus purus. Donec velit purus, dignissim in libero mattis, molestie scelerisque justo. Nullam hendrerit in nunc et laoreet. Integer vestibulum neque ac mi vestibulum condimentum. Donec nec quam nisi. Integer ac mauris sit amet est egestas sagittis vel et quam. Fusce suscipit neque a mauris commodo, eget feugiat felis maximus.

<br><br>
                        
             <div class="text-center">
  <ul class="pagination  pagination-lg">
  <li><a onclick='switchTab("#p1")' >1</a></li>
  <li class="active"><a href="#p2">2</a></li>
  <li><a onclick='switchTab("#p3")'>3</a></li>
  <li><a onclick='switchTab("#p4")'>4</a></li>
  <li><a onclick='switchTab("#p5")'>pdf</a></li>
</ul>
      </div>        
                        </div>
                        </div> <!--  end tab 2-->
                       
                       
                       
                                    
                    <!-- ---------------- ---------------- 
                    ----------------     tab 3 ----------------  
                       ---------------- ------------------>   
                        <div class="tab-pane fade " id="p3">
                         PAGE 3<br><br>
                    <div class="col-sm-12 col-md-12 col-lg-12">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan ligula velit, et tristique orci posuere ut. Nunc sed nisi lacinia, lobortis eros ac, dapibus purus. In luctus leo ante, quis pharetra enim elementum nec. Nam tincidunt egestas elit at efficitur. Quisque ut mollis dolor. Vestibulum ullamcorper semper faucibus. Aliquam vestibulum pharetra turpis. Nam dignissim nisi et purus placerat luctus. Aliquam nec condimentum leo. Cras quis scelerisque nunc, pharetra scelerisque quam. Duis dignissim quam non ligula varius fringilla. Aliquam suscipit egestas ante in fringilla. Ut interdum, lacus sed congue pharetra, sem ipsum tempus odio, eu condimentum sapien enim eu metus. Nulla convallis arcu ut urna scelerisque eleifend. Aliquam nec purus sed dolor ultricies aliquam sed nec nulla. Nulla ut ante eget orci bibendum pellentesque quis condimentum massa.

Suspendisse varius cursus mi ac gravida. Etiam varius pharetra ante, placerat cursus erat posuere sed. Donec consequat nibh sed eros rutrum lobortis. Cras turpis odio, tempor vitae vestibulum at, pulvinar eu diam. Phasellus facilisis finibus ligula, et volutpat purus interdum at. Pellentesque feugiat nisl libero, vitae consectetur diam volutpat vitae. In semper vehicula fermentum. Vivamus rutrum pretium lacus id egestas. Vestibulum pellentesque ultrices varius. Sed vitae ex eu mi faucibus suscipit ac non quam. Nullam vitae ante ex. Fusce placerat, sapien vitae imperdiet tincidunt, justo urna pulvinar ex, in tincidunt dolor diam vehicula urna. Nunc ex est, convallis eu tristique vulputate, pellentesque eu augue.

Praesent et lorem augue. Nam tincidunt ipsum velit, sit amet condimentum enim maximus id. Maecenas hendrerit consequat est, ac blandit purus. Phasellus sem massa, feugiat auctor sollicitudin quis, malesuada quis lacus. Duis commodo venenatis pharetra. Morbi a odio sit amet mi tristique gravida. Nam semper felis vitae quam dapibus luctus.

Mauris eu porttitor felis, ut pulvinar metus. Etiam at massa vitae massa elementum tempor quis at erat. Duis pretium tempus sem, sit amet blandit turpis eleifend a. Vivamus bibendum neque risus, et egestas erat auctor a. Nunc pulvinar pellentesque condimentum. Aenean non magna elit. In hac habitasse platea dictumst. Sed accumsan gravida metus, eget malesuada tellus placerat sed. Vivamus posuere tortor enim, id tempus lectus blandit maximus. Proin dictum, quam a ullamcorper tincidunt, purus orci cursus felis, id laoreet est elit vel nulla.

Aliquam eget enim quam. Morbi faucibus vitae dolor non fringilla. Morbi eget cursus purus. Donec velit purus, dignissim in libero mattis, molestie scelerisque justo. Nullam hendrerit in nunc et laoreet. Integer vestibulum neque ac mi vestibulum condimentum. Donec nec quam nisi. Integer ac mauris sit amet est egestas sagittis vel et quam. Fusce suscipit neque a mauris commodo, eget feugiat felis maximus.

                        <br><br>
        <div class="text-center">
  <ul class="pagination  pagination-lg">
  <li><a onclick='switchTab("#p1")' >1</a></li>
  <li><a onclick='switchTab("#p2")'>2</a></li>
  <li class="active"><a href="#p3">3</a></li>
  <li><a onclick='switchTab("#p4")'>4</a></li>
  <li><a onclick='switchTab("#p5")'>pdf</a></li>
</ul>
      </div>                    
 </div>
                        </div><!--  end tab 3-->
                       
                       
                       
                       
                                    
                    <!-- ---------------- ---------------- 
                    ----------------     tab 4 ----------------  
                       ---------------- ------------------>   
                        <div class="tab-pane fade" id="p4">
                         PAGE 4<br><br>
              <div class="col-lg-12 voffset2">
              
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan ligula velit, et tristique orci posuere ut. Nunc sed nisi lacinia, lobortis eros ac, dapibus purus. In luctus leo ante, quis pharetra enim elementum nec. Nam tincidunt egestas elit at efficitur. Quisque ut mollis dolor. Vestibulum ullamcorper semper faucibus. Aliquam vestibulum pharetra turpis. Nam dignissim nisi et purus placerat luctus. Aliquam nec condimentum leo. Cras quis scelerisque nunc, pharetra scelerisque quam. Duis dignissim quam non ligula varius fringilla. Aliquam suscipit egestas ante in fringilla. Ut interdum, lacus sed congue pharetra, sem ipsum tempus odio, eu condimentum sapien enim eu metus. Nulla convallis arcu ut urna scelerisque eleifend. Aliquam nec purus sed dolor ultricies aliquam sed nec nulla. Nulla ut ante eget orci bibendum pellentesque quis condimentum massa.

Suspendisse varius cursus mi ac gravida. Etiam varius pharetra ante, placerat cursus erat posuere sed. Donec consequat nibh sed eros rutrum lobortis. Cras turpis odio, tempor vitae vestibulum at, pulvinar eu diam. Phasellus facilisis finibus ligula, et volutpat purus interdum at. Pellentesque feugiat nisl libero, vitae consectetur diam volutpat vitae. In semper vehicula fermentum. Vivamus rutrum pretium lacus id egestas. Vestibulum pellentesque ultrices varius. Sed vitae ex eu mi faucibus suscipit ac non quam. Nullam vitae ante ex. Fusce placerat, sapien vitae imperdiet tincidunt, justo urna pulvinar ex, in tincidunt dolor diam vehicula urna. Nunc ex est, convallis eu tristique vulputate, pellentesque eu augue.

Praesent et lorem augue. Nam tincidunt ipsum velit, sit amet condimentum enim maximus id. Maecenas hendrerit consequat est, ac blandit purus. Phasellus sem massa, feugiat auctor sollicitudin quis, malesuada quis lacus. Duis commodo venenatis pharetra. Morbi a odio sit amet mi tristique gravida. Nam semper felis vitae quam dapibus luctus.

Mauris eu porttitor felis, ut pulvinar metus. Etiam at massa vitae massa elementum tempor quis at erat. Duis pretium tempus sem, sit amet blandit turpis eleifend a. Vivamus bibendum neque risus, et egestas erat auctor a. Nunc pulvinar pellentesque condimentum. Aenean non magna elit. In hac habitasse platea dictumst. Sed accumsan gravida metus, eget malesuada tellus placerat sed. Vivamus posuere tortor enim, id tempus lectus blandit maximus. Proin dictum, quam a ullamcorper tincidunt, purus orci cursus felis, id laoreet est elit vel nulla.

Aliquam eget enim quam. Morbi faucibus vitae dolor non fringilla. Morbi eget cursus purus. Donec velit purus, dignissim in libero mattis, molestie scelerisque justo. Nullam hendrerit in nunc et laoreet. Integer vestibulum neque ac mi vestibulum condimentum. Donec nec quam nisi. Integer ac mauris sit amet est egestas sagittis vel et quam. Fusce suscipit neque a mauris commodo, eget feugiat felis maximus.

                               
                               
              <div class="text-center">
  <ul class="pagination  pagination-lg">
  <li><a onclick='switchTab("#p1")' >1</a></li>
  <li><a onclick='switchTab("#p2")'>2</a></li>
  <li><a onclick='switchTab("#p3")'>3</a></li>
  <li class="active"><a href="#p4">4</a></li>
  <li><a onclick='switchTab("#p5")'>pdf</a></li>
</ul>
      </div> 

                          </div>
                             
                             
                        </div><!--  end tab 4-->
                       
                       
                       
                       
                                    
                   
                       
                       
                       
                                    
                    <!-- ---------------- ---------------- 
                    ----------------     tab 5 ----------------  
                       ---------------- ------------------>   
                         <div class="tab-pane fade " id="p5" data-src="">
                        
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan ligula velit, et tristique orci posuere ut. Nunc sed nisi lacinia, lobortis eros ac, dapibus purus. In luctus leo ante, quis pharetra enim elementum nec. Nam tincidunt egestas elit at efficitur. Quisque ut mollis dolor. Vestibulum ullamcorper semper faucibus. Aliquam vestibulum pharetra turpis. Nam dignissim nisi et purus placerat luctus. Aliquam nec condimentum leo. Cras quis scelerisque nunc, pharetra scelerisque quam. Duis dignissim quam non ligula varius fringilla. Aliquam suscipit egestas ante in fringilla. Ut interdum, lacus sed congue pharetra, sem ipsum tempus odio, eu condimentum sapien enim eu metus. Nulla convallis arcu ut urna scelerisque eleifend. Aliquam nec purus sed dolor ultricies aliquam sed nec nulla. Nulla ut ante eget orci bibendum pellentesque quis condimentum massa.

Suspendisse varius cursus mi ac gravida. Etiam varius pharetra ante, placerat cursus erat posuere sed. Donec consequat nibh sed eros rutrum lobortis. Cras turpis odio, tempor vitae vestibulum at, pulvinar eu diam. Phasellus facilisis finibus ligula, et volutpat purus interdum at. Pellentesque feugiat nisl libero, vitae consectetur diam volutpat vitae. In semper vehicula fermentum. Vivamus rutrum pretium lacus id egestas. Vestibulum pellentesque ultrices varius. Sed vitae ex eu mi faucibus suscipit ac non quam. Nullam vitae ante ex. Fusce placerat, sapien vitae imperdiet tincidunt, justo urna pulvinar ex, in tincidunt dolor diam vehicula urna. Nunc ex est, convallis eu tristique vulputate, pellentesque eu augue.

Praesent et lorem augue. Nam tincidunt ipsum velit, sit amet condimentum enim maximus id. Maecenas hendrerit consequat est, ac blandit purus. Phasellus sem massa, feugiat auctor sollicitudin quis, malesuada quis lacus. Duis commodo venenatis pharetra. Morbi a odio sit amet mi tristique gravida. Nam semper felis vitae quam dapibus luctus.

Mauris eu porttitor felis, ut pulvinar metus. Etiam at massa vitae massa elementum tempor quis at erat. Duis pretium tempus sem, sit amet blandit turpis eleifend a. Vivamus bibendum neque risus, et egestas erat auctor a. Nunc pulvinar pellentesque condimentum. Aenean non magna elit. In hac habitasse platea dictumst. Sed accumsan gravida metus, eget malesuada tellus placerat sed. Vivamus posuere tortor enim, id tempus lectus blandit maximus. Proin dictum, quam a ullamcorper tincidunt, purus orci cursus felis, id laoreet est elit vel nulla.

Aliquam eget enim quam. Morbi faucibus vitae dolor non fringilla. Morbi eget cursus purus. Donec velit purus, dignissim in libero mattis, molestie scelerisque justo. Nullam hendrerit in nunc et laoreet. Integer vestibulum neque ac mi vestibulum condimentum. Donec nec quam nisi. Integer ac mauris sit amet est egestas sagittis vel et quam. Fusce suscipit neque a mauris commodo, eget feugiat felis maximus.

            
             <div class="text-center">
  <ul class="pagination  pagination-lg">
  <li><a onclick='switchTab("#p1")' >1</a></li>
  <li><a onclick='switchTab("#p2")'>2</a></li>
  <li><a onclick='switchTab("#p3")'>3</a></li>
  <li><a onclick='switchTab("#p4")'>4</a></li>
    <li class="active"><a href="#p5">pdf</a></li>
</ul>
      </div>           
                          
                        <!--   <span class="visible-xs hidden-sm  hidden-md  hidden-lg  text-center">
                           <a href="../../assets/math-51/syllabus-Sp15.pdf" target="_blank">tap here for syllabus.pdf</a>
                          </span>
                            
                            
                             
                          <span class="visible-sm  hidden-xs  hidden-md  hidden-lg text-center">
                          <iframe src="../../assets/math-51/syllabus-Sp15.pdf" scrolling="yes" 
                            marginheight="0" marginwidth="0" width="600" height="400" frameborder="0"></iframe>
                          </span>
                        
                        
                        <span class="visible-md  hidden-sm  hidden-xs  hidden-lg text-center">
                       	<iframe src="../../assets/math-51/syllabus-Sp15.pdf" scrolling="yes" 
                            marginheight="0" marginwidth="0" width="800" height="600" frameborder="0"></iframe>
                        </span>
                        
                        
                        <span class="visible-lg  hidden-sm  hidden-md  hidden-xs text-center">
                       	<iframe src="../../assets/math-51/syllabus-Sp15.pdf" scrolling="yes" 
                            marginheight="0" marginwidth="0" width="1100" height="900" frameborder="0" ></iframe>
                        </span>-->
                      
              </div><!--  end tab 6-->
                       
            
                        
                              
                        
                        
                        
                        
                    </div><!-- tab-content-->
                </div><!-- panel body -->
           <!-- panel -->
	  </div><!-- end column -->
   </div>  <!-- end row -->   
    
<!--......................................................
..........................................................
..........................................................
					END SYLLABUS
.......................................................... 
..........................................................
..........................................................-->    
        
</div>

<style type="text/css">
  /*center the tabs
/*http://stackoverflow.com/questions/9421966/how-do-i-center-the-twitter-bootstrap-tabs-on-the-page*/
.nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}
</style>


<script type="text/javascript">
   
<!--   scroll down to link /  scroll top  -->
//alijafarian.com/responsive-page-scrolling-with-jquery-and-bootstrap/ -->
$(document).ready(function() {
    // navigation click actions 
  $('.scroll-link').on('click', function(event){
    event.preventDefault();
    var sectionID = $(this).attr("data-id");
    scrollToID('#' + sectionID, 750);
  });
  // scroll to top action
  $('.scroll-top').on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:0}, 'slow');     
  });
  // mobile nav toggle
  $('#nav-toggle').on('click', function (event) {
    event.preventDefault();
    $('#main-nav').toggleClass("open");
  });
});
// scroll function
function scrollToID(id, speed){
  var offSet = 50;
  var targetOffset = $(id).offset().top - offSet;
  var mainNav = $('#main-nav');
  $('html,body').animate({scrollTop:targetOffset}, speed);
  if (mainNav.hasClass("open")) {
    mainNav.css("height", "1px").removeClass("in").addClass("collapse");
    mainNav.removeClass("open");
  }
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
};




  $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});





$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
}) ;

 

// make paginator change tab and scroll to the top of tab content
function switchTab(id) {
    $('#myTabs a[href='+id+']').tab('show');// Select tab by name
    scrollToID(syllabus, 750)
};
</script>



@stop
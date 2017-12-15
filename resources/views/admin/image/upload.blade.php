@extends('adminlte::page')

@section('content')
@include('errors.success')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Image</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/albun') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <style type="text/css">
                            #gallery-images img{
                                width: 240px;
                                height: 160px;
                                border: 2px solid black;
                                margin-bottom: 10px;
                            }
                            #gallery-images ul{
                                margin: 0;
                                padding: 0;
                            }
                            #gallery-images li{
                                margin: 0;
                                padding: 0;
                                list-style: none;
                                float: left;
                                padding-right: 10px;
                            }
                        </style>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div id="gallery-images">
                                    <ul>
                                    {{-- $albunmodel->images --}}

                                        @foreach($albunmodel->images as $image)
                                            <li>
                                                <a href="{{ url($image->file_path) }}" target="_blank">
                                                    <img src="{{ asset($image->file_path) }}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>



                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        (Categoría) - {{ $cat }}
                        <br/>
                        (Albun) - {{ $alb }}

                        {!! Form::open(['url' => '/admin/image', 'class' => 'form-horizontal dropzone',
                        'enctype'=>'multipart/form-data' ,
                        'files' => true,'id'=>'dropzone']) !!}

        {!! Form::hidden('category_id', $categoria, ['class' => 'form-control']) !!}
        {!! Form::hidden('albun_id', $albun, ['class' => 'form-control']) !!}

<div class="fallback">
    <input name="file" type="file" multiple />
  </div>




                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <script> var baseUrl = "{{ asset('/') }}"; </script>﻿
<script type="text/javascript">
    Dropzone.options.dropzone= {
        maxFilesize: 2,
        acceptedFiles: "image/*",
        success: function(file, response){
            if(file.status == 'success'){
                handleDropzoneFileUpload.handleSuccess(response);
            }else{
                handleDropzoneFileUpload.handleError(response);
            }
        }
    };

    var handleDropzoneFileUpload = {
        handleError: function(response){
            console.log(response);
        },
        handleSuccess: function(response){
            var imageList = $('#gallery-images ul');
            var imageSrc = baseUrl + response.file_path;
            $(imageList).append('<li><a href="'+imageSrc+'"><img src="'+imageSrc+'"></a></li>');
        }
    };


</script>
@endsection

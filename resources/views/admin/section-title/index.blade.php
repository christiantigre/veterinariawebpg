@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Sección</div>
                    <div class="panel-body">
                        @if(count($sectiontitle)>7)
                        <!--<a href="{{ url('/admin/section-title/create') }}" class="btn btn-success btn-sm" title="Add New SectionTitle">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>-->
                        @else
                        <a href="{{ url('/admin/section-title/create') }}" class="btn btn-success btn-sm" title="Add New SectionTitle">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                        </a>
                        @endif

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/section-title', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Sección</th><th>Titulo</th><th>Subtitulo</th><th>Color</th><th>Ver Inicio</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sectiontitle as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->section }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>@if(($item->visible)=='0')
                                                Inactivo
                                            @else
                                                Activo
                                            @endif</td>
                                        <td>
                                            <a href="{{ url('/admin/section-title/' . $item->id) }}" title="View SectionTitle"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/section-title/' . $item->id . '/edit') }}" title="Edit SectionTitle"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $sectiontitle->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

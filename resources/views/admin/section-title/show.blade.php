@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Sección {{ $sectiontitle->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/section-title') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/section-title/' . $sectiontitle->id . '/edit') }}" title="Edit SectionTitle"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $sectiontitle->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $sectiontitle->title }} </td></tr><tr><th> Subtitle </th><td> {{ $sectiontitle->subtitle }} </td></tr><tr><th> Color </th><td> {{ $sectiontitle->color }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

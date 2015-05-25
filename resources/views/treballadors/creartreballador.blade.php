@extends('layouts.default')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {
                }
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="home">Home</a>
                </li>

                <li>
                    <a href="#">Treballadors</a>
                </li>
                <li class="active">Crear</li>
            </ul>
            <!-- .breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    @if (Session::has('flash_message'))
                        <div style="background-color: #ff0000; text-align: center;">
                            {!! Session::get('flash_message') !!}
                        </div>
                    @endif

                    {!! Form::open(['url'=>'creartreballadorpost', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('Nom') !!}
                        {!! Form::text('name', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Nom')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Cognom') !!}
                        {!! Form::text('lastname', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Cognom')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('DNI') !!}
                        {!! Form::text('dni', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'DNI')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Data de naixement') !!}
                        {!! Form::text('birthdate', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Data de naixement')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Localitat') !!}
                        {!! Form::text('location', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'location')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Email') !!}
                        {!! Form::text('email', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Email')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Password') !!}
                        {!! Form::password('password', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Password')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Crear treballador',
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- PAGE CONTENT ENDS -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.page-content -->
    </div><!-- /.main-content -->
@stop
@extends('layouts.default')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="home">Home</a>
                </li>

                <li>
                    <a href="#">Tasques</a>
                </li>
                <li class="active">Crear</li>
            </ul><!-- .breadcrumb -->


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


                    {!! Form::open(['url'=>'creartascapost', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('Breu resum de la tasca') !!}
                        {!! Form::text('resum', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Breu resum de la tasca')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Descripcio detallada') !!}
                        {!! Form::textarea('task', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Descripcio detallada')) !!}
                    </div>



                    <div class="form-group">
                        {!! Form::submit('Crear tasca',
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@stop
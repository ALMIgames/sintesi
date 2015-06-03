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
                    <a href="#">Correu</a>
                </li>
                <li class="active">Enviar</li>
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
                    {!! Form::open(['url'=>'enviarcorreupost', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('Per a') !!}
                        {!! Form::text('mail_to', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Per a')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Assumpte') !!}
                        {!! Form::text('subject', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Assumpte')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Missatge') !!}
                        {!! Form::textarea('message', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Missatge')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Enviar',
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@stop
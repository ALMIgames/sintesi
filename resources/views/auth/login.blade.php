@extends('layouts.default')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li class="active">
                    <i class="icon-home home-icon"></i>
                    <a href="#">Login</a>
                </li>
            </ul><!-- .breadcrumb -->

        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Login</div>
                                        <div class="panel-body">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> Algo ha fallat.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">E-Mail</label>
                                                    <div class="col-md-6">
                                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="remember"> Recorda'm
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">Login</button>

                                                        <a class="btn btn-link" href="{{ url('/password/email') }}">Has oblidat la password?</a>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <a class="btn btn-link" href="register">Registra't</a>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@stop

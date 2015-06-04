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
                    <a href="#">Registre</a>
                </li>

                <li>
                    <a href="#">Other Pages</a>
                </li>
                <li class="active">Blank Page</li>
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
                                    <div class="panel-heading">Register</div>
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

                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">E-Mail Address</label>
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
                                                <label class="col-md-4 control-label">Confirm Password</label>
                                                <div class="col-md-6">
                                                    <input type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Register
                                                    </button>
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

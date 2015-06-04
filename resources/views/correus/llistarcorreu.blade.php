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
                    <a href="#">correu</a>
                </li>
                <li class="active">Llistar</li>
            </ul>
            <!-- .breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <!-- PAGE CONTENT BEGINS -->
                <div class="page-content">
                    <div class="col-xs-12">
                        <div class="page-header col-xs-10">
                            <h1>
                                Correu
                            </h1>
                        </div>
                        <div class="col-xs-2">
                            <a href="{{url('/enviarcorreu')}}">
                                {!! Form::submit('Enviar correu',
                                array('class'=>'btn btn-primary')) !!}
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-2"
                                       class="sortable table table-striped table-bordered table-hover">
                                    <thead>
                                    <th>Tipus</th>
                                    <th>Emisor</th>
                                    <th></th>
                                    <th>Receptor</th>
                                    <th>Assumpte</th>
                                    <th>Data</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    @foreach($correus as $c)
                                        <tr>
                                            <td>
                                                @if($c->mail_from == $usermail)
                                                    <i class="icon-arrow-left" style="color: red"></i>
                                                @else($c->mail_to == $usermail)
                                                    <i class="icon-arrow-right" style="color: green"></i>
                                                @endif
                                            </td>
                                            <td>
                                                @if($c->new == '0' and $c->mail_from != $usermail)
                                                    <strong>
                                                        <?php echo $c->mail_from ?>
                                                    </strong>
                                                @else
                                                    <?php echo $c->mail_from ?>
                                                @endif
                                            </td>
                                            <td>
                                                <i class="icon-arrow-right" style="color: black;"></i>
                                            </td>
                                            <td>
                                                @if($c->new == '0' and $c->mail_from != $usermail)
                                                    <strong>
                                                        <?php echo $c->mail_to ?>
                                                    </strong>
                                                @else
                                                    <?php echo $c->mail_to ?>
                                                @endif
                                            </td>
                                            <td>
                                                @if($c->new == '0' and $c->mail_from != $usermail)
                                                    <strong>
                                                        <?php echo $c->subject ?>
                                                    </strong>
                                                @else
                                                    <?php echo $c->subject ?>
                                                @endif
                                            </td>
                                            <td>
                                                @if($c->new == '0' and $c->mail_from != $usermail)
                                                    <strong>
                                                        <?php echo $c->created_at ?>
                                                    </strong>
                                                @else
                                                    <?php echo $c->created_at ?>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="{{url('mostrarcorreu/'.$c->id)}}">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->
@stop
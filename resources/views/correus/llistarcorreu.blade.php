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
                    <div class="page-header">
                        <h1>
                            Correu
                        </h1>
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
                                    <th>Data</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    @foreach($correus as $c)
                                        <tr>
                                            <td>
                                                @if($c->mail_from == $usermail)
                                                    <i class="icon-arrow-left" style="color: green"></i>
                                                @else($c->mail_to == $usermail)
                                                    <i class="icon-arrow-right" style="color: red"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <?php echo $c->mail_from ?>
                                            </td>
                                            <td>
                                                <i class="icon-arrow-right" style="color: black;"></i>
                                            </td>
                                            <td>
                                                <?php echo $c->mail_to ?>
                                            </td>
                                            <td>
                                                <?php echo $c->created_at ?>
                                            </td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="{{url('veurecorreu/'.$c->id)}}">
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
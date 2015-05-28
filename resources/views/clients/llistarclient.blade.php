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
                    <a href="#">Clients</a>
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
                            Clients
                        </h1>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-2"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Cognom</th>
                                        <th>e-mail</th>
                                        <th>Accions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($client as $c)
                                        <tr>
                                            <td>
                                                <?php echo $c->name; ?>
                                            </td>
                                            <td>
                                                <?php echo $c->lastname; ?>
                                            </td>
                                            </td>
                                            <td>
                                                <?php echo $c->email; ?>
                                            </td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="{{url('veureclient/'.$c->id)}}">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>

                                                    <a class="green" href="#">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="esborrarclient/{{$c->id}}">
                                                        <i class="icon-trash bigger-130"></i>
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
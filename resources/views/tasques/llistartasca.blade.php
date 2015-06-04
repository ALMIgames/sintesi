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
                    <a href="#">Tasques</a>
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
                            Tasques
                        </h1>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-2"
                                       class="sortable table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Resum</th>
                                        <th>Data de creació</th>
                                        <th>Estat</th>
                                        <th>Assignat / No assignat</th>
                                        <th>Accions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($tasca as $t)
                                        <tr>
                                            <td>
                                                <?php echo $t->resum; ?>
                                            </td>
                                            <td>
                                                <?php echo $t->created_at; ?>
                                            </td>
                                            </td>
                                            <td>
                                                @if($t->complete == '2')
                                                    <span class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                @elseif($t->complete == '1')
                                                    <span class="label label-warning arrowed-in">En procés</span>
                                                @elseif($t->complete == '0')
                                                    <span class="label label-inverse">Incompleta</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($t->id_worker == '0')
                                                    <a class="red">
                                                        <i class="icon-circle bigger-130"></i>
                                                    </a>
                                                @else
                                                    <a class="green">
                                                        <i class="icon-circle bigger-130"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="{{url('veuretasca/'.$t->id)}}">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>
                                                    @if(($t->id_client == Auth::user()->id_persona && Auth::user()->tipususuari == 3) or Auth::user()->tipususuari == 1)
                                                        <a class="green" href="#">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                        @if($t->complete == '0')
                                                            <a class="red" href="esborrartasca/{{$t->id}}">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        @endif
                                                    @endif
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
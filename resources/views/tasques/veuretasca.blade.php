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
                <li class="active">Detalls</li>
            </ul>
            <!-- .breadcrumb -->

        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4 class="lighter">Descripció de la tasca</h4>

                            <div class="widget-toolbar no-border">
                                @if(Auth::user()->tipususuari == '2')
                                    @if($tasca->id_worker == '0')
                                        <a href="{{url('/asignartasca/'.$tasca->id)}}">
                                            {!! Form::submit('Autoassignar tasca',
                                            array('class'=>'btn btn-primary')) !!}
                                        </a>
                                    @else
                                            {!! Form::submit('Autoassignar tasca',
                                            array('class'=>'btn btn-grey', 'disabled' => 'disabled')) !!}
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main padding-6 no-padding-left no-padding-right">
                                <?php echo $tasca->task; ?>
                            </div>
                        </div>
                        <div class="space-20"></div>
                        <div class="widget-header">
                            <h4 class="lighter">Detalls</h4>
                        </div>
                        <div class="widget-main padding-6 no-padding-left no-padding-right">
                            <strong>Data de creació:</strong>
                            <?php echo $tasca->created_at; ?>
                        </div>
                        <div class="widget-main padding-6 no-padding-left no-padding-right">
                            <strong>Usuari:</strong>
                            @foreach($client as $c)
                                <?php echo $c->name; ?>
                            @endforeach
                        </div>
                        <div class="widget-main padding-6 no-padding-left no-padding-right">
                            <strong>Estat:</strong>
                            @if($tasca->complete == '2')
                                Completa
                            @elseif($tasca->complete == '1')
                                En procés
                            @elseif($tasca->complete == '0')
                                Incompleta
                            @endif
                        </div>
                        @if($tasca->id_worker != '0')
                            <div class="widget-main padding-6 no-padding-left no-padding-right">
                                <strong>Treballador assignat:</strong>
                                @foreach($treballador as $t)
                                    <?php echo $t->name; ?>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <!-- PAGE CONTENT ENDS -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-content -->
    </div><!-- /.main-content -->
@stop
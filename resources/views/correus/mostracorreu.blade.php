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
                    <a href="#">Correu</a>
                </li>
                <li class="active">Mostrar</li>
            </ul>
            <!-- .breadcrumb -->

        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4 class="lighter">Correu</h4>

                            <div class="widget-toolbar no-border col-xs-12">
                                <h4 class="lighter">
                                    Emisor:
                                </h4>
                                <?php echo $correu->mail_from ?>
                            </div>

                            <div class="widget-toolbar no-border col-xs-12">
                                <h4 class="lighter">
                                    Receptor:
                                </h4>
                                <?php echo $correu->mail_to ?>
                            </div>
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
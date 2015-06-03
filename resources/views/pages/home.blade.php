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
                <li class="active">
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
            </ul>
            <!-- .breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <br>

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 infobox-container">
                                <div class="widget-box transparent" style="text-align:left;">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="lighter">
                                            Estadístiques generals
                                        </h4>
                                    </div>
                                </div>
                                <div class="infobox infobox-blue">
                                    <div class="infobox-icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">{{count($treballadors)}}</span>

                                        <div class="infobox-content">Treballadors registrats</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-blue  ">
                                    <div class="infobox-icon">
                                        <i class="icon-group"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">{{count($clients)}}</span>

                                        <div class="infobox-content">Clients registrats</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-orange2">
                                    <div class="infobox-icon">
                                        <i class="icon-tasks"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">{{count($tasques)}}</span>

                                        <div class="infobox-content">Tasques creades</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-green">
                                    <div class="infobox-progress">
                                        <div class="easy-pie-chart percentage"
                                             data-percent=<?php echo round($percent, 1) ?> data-size="45">
                                            <span class="percent"><?php echo round($percent, 1) ?></span>
                                        </div>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-text"
                                              style="width: 130px; font-size: 15px;">% Completes</span>

                                        <div class="infobox-content">
                                            <span class="bigger-110">~</span>
                                            @if($tasquesrestants == 1)
                                                <?php echo $tasquesrestants ?> tasca restant
                                            @else
                                                <?php echo $tasquesrestants ?> tasques restants
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="vspace-sm"></div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-flat">
                                            <h4 class="lighter">
                                                Top treballadors
                                            </h4>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <table class="table table-bordered table-striped">
                                                    <thead class="thin-border-bottom">
                                                    <tr>
                                                        <th>
                                                            <i class="icon-caret-right blue"></i>
                                                            Usuari
                                                        </th>

                                                        <th>
                                                            <i class="icon-caret-right blue"></i>
                                                            Tasques completes
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        @if(isset($rank[0]))
                                                            <td>
                                                                <i class="icon-trophy bigger-130"
                                                                   style="color: #ffd700"></i> <?php echo $rank[0]->name; ?>
                                                            </td>
                                                            <td>
                                                                <b class="green"><?php echo $rank[0]->tasquescompletes; ?></b>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        @if(isset($rank[1]))
                                                            <td>
                                                                <i class="icon-trophy bigger-130"
                                                                   style="color: #cccccc"></i> <?php echo $rank[1]->name; ?>
                                                            <td>
                                                                <b class="green"><?php echo $rank[1]->tasquescompletes; ?></b>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        @if(isset($rank[2]))
                                                            <td>
                                                                <i class="icon-trophy bigger-130"
                                                                   style="color: #cd7f32"></i> <?php echo $rank[2]->name; ?>
                                                            </td>
                                                            <td>
                                                                <b class="green"><?php echo $rank[2]->tasquescompletes; ?></b>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr hr32 hr-dotted"></div>

                        <div class="col-xs-12">
                            <div class="col-sm-5">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="lighter">
                                            Tasques mes recents
                                        </h4>

                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <table class="table table-bordered table-striped">
                                                <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Resum
                                                    </th>

                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Estat
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="icon-caret-right blue"></i>
                                                        Data
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    @if(isset($ranktasquesrecents[0]))
                                                        <td><?php echo $ranktasquesrecents[0]->resum ?></td>

                                                        @if($ranktasquesrecents[0]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[0]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[0]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquesrecents[0]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquesrecents[1]))
                                                        <td><?php echo $ranktasquesrecents[1]->resum ?></td>

                                                        @if($ranktasquesrecents[1]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[1]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[1]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquesrecents[1]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquesrecents[2]))
                                                        <td><?php echo $ranktasquesrecents[2]->resum ?></td>

                                                        @if($ranktasquesrecents[2]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[2]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[2]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquesrecents[2]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquesrecents[3]))
                                                        <td><?php echo $ranktasquesrecents[3]->resum ?></td>

                                                        @if($ranktasquesrecents[3]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[3]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[3]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquesrecents[3]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquesrecents[4]))
                                                        <td><?php echo $ranktasquesrecents[4]->resum ?></td>

                                                        @if($ranktasquesrecents[4]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[4]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquesrecents[4]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquesrecents[4]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vspace-sm"></div>

                            <div class="col-sm-6">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="lighter">
                                            Ultimes tasques completes
                                        </h4>

                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <table class="table table-bordered table-striped">
                                                <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Resum
                                                    </th>

                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        Estat
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="icon-caret-right blue"></i>
                                                        Data
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    @if(isset($ranktasquescompletes[0]))
                                                        <td><?php echo $ranktasquescompletes[0]->resum ?></td>

                                                        @if($ranktasquescompletes[0]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[0]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[0]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquescompletes[0]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquescompletes[1]))
                                                        <td><?php echo $ranktasquescompletes[1]->resum ?></td>

                                                        @if($ranktasquescompletes[1]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[1]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[1]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquescompletes[1]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquescompletes[2]))
                                                        <td><?php echo $ranktasquescompletes[2]->resum ?></td>

                                                        @if($ranktasquescompletes[2]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[2]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[2]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquescompletes[2]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquescompletes[3]))
                                                        <td><?php echo $ranktasquescompletes[3]->resum ?></td>

                                                        @if($ranktasquescompletes[3]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[3]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[3]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquescompletes[3]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if(isset($ranktasquescompletes[4]))
                                                        <td><?php echo $ranktasquescompletes[4]->resum ?></td>

                                                        @if($ranktasquescompletes[4]->complete == '2')
                                                            <td><span
                                                                        class="label label-success arrowed-in arrowed-in-right">Completa</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[4]->complete == '1')
                                                            <td>
                                                                <span class="label label-warning arrowed-in">En procés</span>
                                                            </td>
                                                        @elseif($ranktasquescompletes[4]->complete == '0')
                                                            <td><span class="label label-inverse">Incompleta</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <?php echo $ranktasquescompletes[4]->created_at ?>
                                                        </td>
                                                    @endif
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
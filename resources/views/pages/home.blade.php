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


                    <div class="row">
                        <div class="col-sm-6 infobox-container">
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
                            <div class="infobox infobox-green  ">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent={{count($tasquescompletes)}} data-size="45">
                                        <span class="percent">30</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-text">Tasques completes</span>

                                    <div class="infobox-content">
                                        <span class="bigger-110">~</span>
                                        X tasques restants
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
                                            <i class="icon-star orange"></i>
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
                                                        name
                                                    </th>

                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        price
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="icon-caret-right blue"></i>
                                                        status
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>internet.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red">$29.99</s>
                                                        </small>
                                                        <b class="green">$19.99</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="hr hr32 hr-dotted"></div>


                        <div class="row">
                            <div class="col-sm-5">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="lighter">
                                            <i class="icon-star orange"></i>
                                            Popular Domains
                                        </h4>

                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <table class="table table-bordered table-striped">
                                                <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        name
                                                    </th>

                                                    <th>
                                                        <i class="icon-caret-right blue"></i>
                                                        price
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="icon-caret-right blue"></i>
                                                        status
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>internet.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red">$29.99</s>
                                                        </small>
                                                        <b class="green">$19.99</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>online.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red"></s>
                                                        </small>
                                                        <b class="green">$16.45</b>
                                                    </td>
                                                    <td class="hidden-480">
                                                        <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>newnet.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red"></s>
                                                        </small>
                                                        <b class="green">$15.00</b>
                                                    </td>
                                                    <td class="hidden-480">
                                                        <span class="label label-danger arrowed">pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>web.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red">$24.99</s>
                                                        </small>
                                                        <b class="green">$19.95</b>
                                                    </td>
                                                    <td class="hidden-480">
																	<span class="label arrowed">
																		<s>out of stock</s>
																	</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>domain.com</td>
                                                    <td>
                                                        <small>
                                                            <s class="red"></s>
                                                        </small>
                                                        <b class="green">$12.00</b>
                                                    </td>
                                                    <td class="hidden-480">
                                                        <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                                    </td>
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
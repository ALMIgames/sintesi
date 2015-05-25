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
                <li class="active">Detalls</li>
            </ul>
            <!-- .breadcrumb -->


        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div>
                        <div id="user-profile-1" class="user-profile row">
                            <div class="col-xs-12 col-sm-3 center">
                                <div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Avatar"
                                                         src="/avatars/avatar.png"/>
												</span>

                                    <div class="space-4"></div>

                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                        <div class="inline position-relative">
                                            <span class="white">{{$client->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-6"></div>

                                <div class="hr hr12 dotted"></div>

                                <div class="clearfix">
                                    <div class="grid2">
                                        <span class="bigger-175 blue">0</span>

                                        <br/>
                                        Tasques creades
                                    </div>

                                    <div class="grid2">
                                        <span class="bigger-175 blue">0</span>

                                        <br/>
                                        Tasques pendents
                                    </div>
                                </div>

                                <div class="hr hr16 dotted"></div>
                            </div>

                            <div class="col-xs-12 col-sm-9">
                                <div class="space-12"></div>

                                <div class="profile-user-info profile-user-info-striped">
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Nom</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->name }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Cognom</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->lastname }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Dni</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->dni }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Localitat</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->location }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Nascut el</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->birthdate }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">E-mail</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ $client->email }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-20"></div>

                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-small">
                                        <h4 class="blue smaller">
                                            <i class="icon-tasks orange"></i>
                                            Tasques pendents
                                        </h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main padding-8">
                                            <div id="profile-feed-1" class="profile-feed">

                                            <!--FOREACH TASCA-->
                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <img class="pull-left" alt="Alex Doe's avatar"
                                                             src="assets/avatars/avatar5.png"/>
                                                        <a class="user" href="#"> Alex Doe </a>
                                                        changed his profile photo.
                                                        <a href="#">Take a look</a>

                                                        <div class="time">
                                                            <i class="icon-time bigger-110"></i>
                                                            an hour ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="icon-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="icon-remove bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            <!--END FOREACH-->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr hr2 hr-double"></div>
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
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
                    <a href="#">Usuari</a>
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
                                            <span class="white">{{ Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-9">
                                <div class="space-12"></div>

                                <div class="profile-user-info profile-user-info-striped">
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Nom</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Email</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Data de registre</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ Auth::user()->created_at}}</span>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Rol:</div>
                                        <div class="profile-info-value">
                                            @if(Auth::user()->tipususuari == '1')
                                            Administrador
                                            @elseif(Auth::user()->tipususuari == '2')
                                            Treballador
                                            @elseif(Auth::user()->tipususuari == '3')
                                            Client
                                            @endif
                                        </div>
                                    </div>
                                    <!--
                                    @if(Auth::user()->tipususuari != '1')
                                    <div class="profile-info-row">
                                        <div class="profile-info-name">Veure el perfil complet:</div>
                                        <div class="profile-info-value">
                                            @if(Auth::user()->tipususuari == '2')
                                            <a class="blue"
                                               href="{{url('veuretreballador/'. Auth::user()->id_persona)}}"></a>
                                            @elseif(Auth::user()->tipususuari == '3')
                                            <a class="blue"
                                               href="{{url('veureclient/'. Auth::user()->id_persona)}}"></a>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                            -->
                                </div>
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
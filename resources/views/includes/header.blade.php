<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/home" class="navbar-brand">
                <small>
                    <i class="icon-code"></i>
                    Sintesi 2015
                </small>
            </a><!-- /.brand -->
        </div>
        <!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                @if (Auth::check() == true)
                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/llistarcorreu">

                        <?php
                        $mail = Auth::user()->email;
                        $test = count(\App\Mail::find($mail));
                        ?>

                        @if($test == 0)
                            <i class="icon-envelope"></i>
                        @else
                            <i class="icon-envelope icon-animated-vertical"></i>
                        @endif

                        <span class="badge badge-danger"><?php echo $test; ?></span>
                    </a>
                </li>
                @endif


                <li class="light-blue">

                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Benvingut</small>
                                    @if (Auth::check() == true)
                                        {{ Auth::user()->name }}
                                    @else
                                        usuari
                                    @endif

								</span>
                        <i class="icon-caret-down"></i>
                    </a>
                    @if (Auth::check() == true)

                        <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="/veureusuari">
                                    <i class="icon-user"></i>
                                    Perfil
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="{{ ('/auth/logout') }}">
                                    <i class="icon-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    @endif
                </li>
            </ul>
            <!-- /.ace-nav -->
        </div>
        <!-- /.navbar-header -->
    </div>
    <!-- /.container -->
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
            </script>


            <ul class="nav nav-list">
                @if (Auth::check() == false)
                    <li>
                        <a href="/inici">
                            <i class="icon-long-arrow-right"></i>
                            <span class="menu-text"> Log-in </span>
                        </a>
                    </li>
                @endif

                @if (Auth::check() == true)
                    <li>
                        <a href="/inici">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Inici </span>
                        </a>
                    </li>
                    @if(Auth::user()->tipususuari != '0')
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-user"></i>
                                <span class="menu-text"> Treballadors </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                @if(Auth::user()->tipususuari == '1')
                                    <li>
                                        <a href="/creartreballador">
                                            <i class="icon-double-angle-right"></i>
                                            Crear
                                        </a>
                                    </li>
                                @endif

                                <li>
                                    <a href="/llistartreballador">
                                        <i class="icon-double-angle-right"></i>
                                        Llistar
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-group"></i>
                                <span class="menu-text"> Clients </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                @if(Auth::user()->tipususuari == '1')
                                    <li>
                                        <a href="/crearclient">
                                            <i class="icon-double-angle-right"></i>
                                            Crear
                                        </a>
                                    </li>
                                @endif

                                <li>
                                    <a href="/llistarclient">
                                        <i class="icon-double-angle-right"></i>
                                        Llistar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-tasks"></i>
                                <span class="menu-text"> Tasques </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                @if(Auth::user()->tipususuari != '2')
                                    <li>
                                        <a href="/creartasca">
                                            <i class="icon-double-angle-right"></i>
                                            Crear
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a href="/llistartasca">
                                        <i class="icon-double-angle-right"></i>
                                        Llistar
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endif
            </ul>
            <!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>
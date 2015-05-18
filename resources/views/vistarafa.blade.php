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
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Other Pages</a>
                </li>
                <li class="active">Blank Page</li>
            </ul>
            <!-- .breadcrumb -->

        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div style="background:dodgerblue;">
                        <?php
                        //if (/*BD ACCIO*/ == 'null') {
                        echo "<h3><div style='text-align: center;'>" .

                                'Hola,'. 'NOMUSUARI'

                                . "</div></h3>";
                        echo "<h3><div style='text-align: center;'>" .

                                'Benvingut a la'

                                . "</div></h3>";
                        echo "<h1><div style='text-align: center;'>" .

                                'LANPARTY 2015!'

                                . "</div></h1>";
                        echo "<h3><div style='text-align: center;'>" .

                                'Hora d\'entrada: '. 'TIMESTAMP ENTRADA'

                                . "</div></h3>";?>
                    </div>

                    <div style="background:greenyellow;">
                        <?php
                        //if (/*BD ACCIO*/ == 'ENTRADA') {
                        echo "<h3><div style='text-align: center;'>" .

                                'Benvingut de nou a la'

                                . "</div></h3>";

                        echo "<h1><div style='text-align: center;'>" .

                                'LANPARTY'

                                . "</div></h1>";
                        echo "<h3><div style='text-align: center;'>" .

                                'NOMUSUARI!'

                                . "</div></h3>";
                        echo "<h3><div style='text-align: center;'>" .

                                'Hora d\'entrada: '. 'TIMESTAMP ENTRADA'

                                . "</div></h3>";?>
                    </div>

                    <div style="background:palevioletred;">
                        <?php
                        //if (/*BD ACCIO*/ == 'SORTIDA') {
                        echo "<h3><div style='text-align: center;'>" .

                                'Que la fuerza te acompañe, NOMUSUARI'

                                . "</div></h3>";

                        echo "<h1><div style='text-align: center;'>" .

                                'Esperem veure\'t aviat!'

                                . "</div></h1>";
                        echo "<h3><div style='text-align: center;'>" .

                                'Hora d\'entrada: '. 'TIMESTAMP ENTRADA'

                                ."<br />".

                                'Hora de sortida'. 'TIMESTAMP SORTIDA'

                                . "</div></h3>";?>

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
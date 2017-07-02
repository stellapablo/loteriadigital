<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>DigDoc - Digitalización de documentos</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- vector map CSS -->
    <link href="{{ url('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ url('plugins/bower_components/css-chart/css-chart.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ url('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ url('css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @yield('login')

<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ url('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src=" {{ url('js/jquery.slimscroll.js') }}"></script>
<script src=" {{ url('js/approve.js') }}"></script>
<!--Wave Effects -->
<script src="{{ url('js/waves.js') }}"></script>
<script src="{{ url('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- EASY PIE CHART JS -->
<script src="{{ url('plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<script src="{{ url('plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js') }}"></script>
<script src="{{ url('js/custom.min.js') }}"></script>
<!-- Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/moment/moment.js') }}"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
<script src="{{ url('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
<script src="{{ url('plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{ url('plugins/bower_components/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ url('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!--Style Switcher -->
<script src="{{ url('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@yield('scripts.footer')
</body>

</html>
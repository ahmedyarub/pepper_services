@extends('layouts.app')

@section('title', 'Emotions Chart')

@section('content')
    <div class="card">
        <div class="card-header">
            Emotions Distribution Chart
            <div class="card-header-actions">
                <a href="http://www.chartjs.org" class="card-header-action" target="_blank">
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="chart-wrapper">
                <canvas id="canvas-5"></canvas>
            </div>
        </div>
    </div>
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script type="text/javascript">
        var data = {!! $emotions!!};
    </script>
    <script src="{{asset('js/charts.js')}}"></script>
@endsection

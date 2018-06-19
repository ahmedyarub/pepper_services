@extends('layouts.app')

@section('title', 'Emotions Chart')

@section('content')
    <div class="card">
        <div class="card-header">
            Emotions Distribution Chart
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Emotion</label>
                        {{ Form::open(["action" => "EmotionsController@emotions_chart", 'method' => 'get']) }}
                        <select class="form-control" id="period_type" name="period_type">
                            <option value="m" {{$period_type=='m'?'selected':''}}>Month</option>
                            <option value="w" {{$period_type=='w'?'selected':''}}>Week</option>
                            <option value="d" {{$period_type=='d'?'selected':''}}>Day</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="chart-wrapper">
                <canvas id="canvas-2"></canvas>
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
        var titles = {!! $titles !!};
    </script>
    <script src="{{asset('js/charts.js')}}"></script>
@endsection

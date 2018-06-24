@extends('layouts.app')

@section('title', 'Suggestion Videos List')

@section('content')
    <div class="card">
        {{ Form::open(["action" => "EmotionsController@suggestions_table", 'method' => 'get']) }}
        <div class="card-header">
            <strong>Filters</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="ccmonth">Day</label>
                    <select class="form-control" id="day" name="day">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                </div>

                <div class="form-group col-sm-4">
                    <label for="ccmonth">Month</label>
                    <select class="form-control" id="month" name="month">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>

                <div class="form-group col-sm-4">
                    <label for="ccyear">Year</label>
                    <select class="form-control" id="year" name="year">
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select>
                </div>
            </div>
            <!--/.row-->
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-sm btn-danger" onclick="window.location.href='emotions_table';"><i
                        class="fa fa-ban"></i> Reset
            </button>
        </div>
        {{ Form::close() }}
    </div>
    <div class="card">
        <div class="card-header">
            <strong>Suggestion Videos</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Suggestion File</th>
                    <th>Date/Time</th>
                </tr>
                @foreach($suggestions as $suggestion)
                    <tr>
                        <td>
                            {{ Html::link(action('EmotionsController@suggestion_video',['id' => $suggestion->id]),$suggestion->video_file,['type'=>'video/avi']) }}
                        </td>
                        <td>
                            {{$suggestion->created_at->format('d/m/Y H:i:s')}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

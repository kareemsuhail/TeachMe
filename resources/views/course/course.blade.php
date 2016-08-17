@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">{{$course->name}}</span>

                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">


                        </div>
                    </div>
                </div>
                <div class="portlet-body">

                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                            <tr class="uppercase">
                                <th >Video</th>

                                <th>view</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                            <tr>
                                <td>{{$video->name}}</td>
                                <td><a class="btn btn-primary">show video</a></td>
                            </tr>
                            @endforeach


                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
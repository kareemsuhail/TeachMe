@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <!-- BEGIN PORTLET -->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="icon-bar-chart theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">{{"people who learn"." ".$name}}</span>

                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">

                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">

                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                        <tr class="uppercase">
                            <th >name</th>

                            <th>profile</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>

                                <td>{{$user->name}}</td>
                                <td><a class="btn btn-primary" href="{{url('profile/'.$user->id)}}">show profile</a></td>
                            </tr>
                        @endforeach


                        </tbody></table>
                </div>
            </div>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="icon-bar-chart theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">{{"classes which teach"." ".$name}} </span>

                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">

                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">

                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                        <tr class="uppercase">
                            <th >class name</th>

                            <th>show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classes as $class)
                            <tr>
                                <td>{{$class->name}}</td>
                                <td><a href="{{url('Class/'.$class->id)}}" class="btn btn-primary">show</a></td>
                            </tr>
                        @endforeach

                        </tbody></table>
                </div>
            </div>
        </div>
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption caption-md">
                    <i class="icon-bar-chart theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">{{$name." "."courses"}}</span>

                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">

                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">

                <div class="table-scrollable table-scrollable-borderless">
                    <table class="table table-hover table-light">
                        <thead>
                        <tr class="uppercase">
                            <th >Course Name</th>

                            <th>Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cources as $course)
                            <tr>
                                <td>{{$course->name}}</td>
                                <td><a class="btn btn-primary" href="{{url('Course/'.$course->id)}}">Show</a></td>
                            </tr>
                        @endforeach

                        </tbody></table>
                </div>
            </div>
        </div>
        <!-- END PORTLET -->
    </div>
    </div>
@endsection
@section('js')
@endsection
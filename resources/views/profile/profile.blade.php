@extends('layouts.app')
@section('css')
    <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="../assets/pages/media/profile/profile_user.png" class="img-responsive" alt=""> </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">{{$UserData->name}} </div>
                        <div class="profile-usertitle-job"> Developer </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                        <button type="button" class="btn btn-circle red btn-sm">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="page_user_profile_1.html">
                                    <i class="icon-home"></i> Overview </a>
                            </li>
                            <li>
                                @if(Auth::check())
                                    @if(Auth::user()->id == $UserData->id)
                                <a href="{{url('AccountInfo/'.$UserData->id)}}">
                                    <i class="icon-settings"></i> Account Settings </a>
                                    @endif
                                    @endif
                            </li>
                            <li>
                                <a href="page_user_profile_1_help.html">
                                    <i class="icon-info"></i> Help </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
                <!-- PORTLET MAIN -->
                <div class="portlet light ">
                    <!-- STAT -->
                    <div class="row list-separated profile-stat">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 37 </div>
                            <div class="uppercase profile-stat-text"> Followers </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 51 </div>
                            <div class="uppercase profile-stat-text"> Classes </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title"> 61 </div>
                            <div class="uppercase profile-stat-text"> Cources </div>
                        </div>
                    </div>
                    <!-- END STAT -->
                    <div>
                        <h4 class="profile-desc-title">About Marcus Doe</h4>
                        <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-globe"></i>
                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-twitter"></i>
                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-facebook"></i>
                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">What are you learning</span>

                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        @if(Auth::check())
                                            @if(Auth::user()->id == $UserData->id)
                                                <a data-target="#create-category" data-toggle="modal" class="btn btn-circle green">Add New                                           <i class="fa fa-plus"></i>
                                                </a>
                                            @endif
                                            @endif


                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">

                                <div class="table-scrollable table-scrollable-borderless">
                                    <table class="table table-hover table-light">
                                        <thead>
                                        <tr class="uppercase">
                                            <th > category</th>
                                            @if(Auth::check())
                                                @if(Auth::user()->id == $UserData->id)
                                            <th> Edit </th>
                                             <th>Suggestions</th>
                                                @endif
                                                @endif
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $a)
                                            <tr>
                                                <td>{{$a->name}}</td>
                                                @if(Auth::check())
                                                @if(Auth::user()->id == $UserData->id)
                                                <td style="align-content: center">{!! Form::open(array('url' => "UserCategory/{{$a->id}}", 'method' => 'put')) !!}
                                                     {{csrf_field()}}
                                                      <button class="btn red-mint" type="submit">Delete</button>
                                                    {!! Form::close() !!}</td>
                                                    <td>
                                                        <a href="{{url('Suggestions/'.$a->name.'/'.$a->id)}}" class="btn purple">show suggestions
                                                            <i class="fa fa-lightbulb-o"></i>
                                                        </a>
                                                    </td>
                                                    @endif
                                                    @endif
                                            </tr>
                                        @endforeach

                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">classes</span>

                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <a data-target="#create-class" data-toggle="modal" class="btn btn-circle green">Create Class                                           <i class="fa fa-plus"></i>
                                        </a>

                                        <a href="javascript:;" class="btn btn-circle  purple">see Suggestions
                                            <i class="fa fa-lightbulb-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">

                                <div class="table-scrollable table-scrollable-borderless">
                                    <table class="table table-hover table-light">
                                        <thead>
                                        <tr class="uppercase">
                                            <th colspan="2"> class</th>

                                            <th> Edit </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($classes as $a)
                                            <tr>
                                                <td>{{$a->name}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Cources</span>

                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <a href="javascript:;" class="btn btn-circle btn-sm green">Add New
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">

                                <div class="table-scrollable table-scrollable-borderless">
                                    <table class="table table-hover table-light">
                                        <thead>
                                        <tr class="uppercase">
                                            <th colspan="2"> cource</th>

                                            <th> Edit </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $a)
                                            <tr>
                                                <td>{{$a->name}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                    <div class="col-md-6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Following</span>

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
                                            <th colspan="2">Following</th>

                                            <th> Edit </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $a)
                                            <tr>
                                                <td>{{$a->name}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
    <!-- modals -->
    <div id="create-class" class="modal fade" tabindex="-1" data-width="760" aria-hidden="true" style="display: none; width: 760px; margin-left: -379px; margin-top: -289px;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Create class</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-body">
                    {!! Form::open(array('url' => 'Class', 'method' => 'POST')) !!}


                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Class Name</label>
                        <div class="col-md-10">
                            <input name="name" type="text" class="form-control" id="form_control_1" placeholder="">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Category</label>
                        <div class="col-md-10">
                            <select name="categoryid" class="form-control" id="form_control_1">

                                <option value="0"></option>
                                @foreach($AllCategories as $a)

                                <option value="{{$a->id}}">{{$a->name}}</option>
                                @endforeach

                            </select>
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
            <button type="submit" class="btn green">Create</button>
            {!! Form::close() !!}
        </div>
    </div>
    <div id="create-category" class="modal fade" tabindex="-1" data-width="760" aria-hidden="true" style="display: none; width: 760px; margin-left: -379px; margin-top: -289px;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-body">
                    {!! Form::open(array('action' => 'UserCategoryController@store')) !!}



                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Category</label>
                        <div class="col-md-10">
                            <select name="categoryid" class="form-control" id="form_control_1">

                                <option value="0"></option>
                                @foreach($AllCategories as $a)

                                    <option value="{{$a->id}}">{{$a->name}}</option>
                                @endforeach

                            </select>
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
            <button type="submit" class="btn green">Create</button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
    <script src="../assets/pages/scripts/timeline.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <!-- END THEME GLOBAL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- END PAGE LEVEL PLUGINS -->
@endsection
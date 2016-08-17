@extends('layouts.app')
@section('css')

@endsection
@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">




            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="fa fa-graduation-cap font-yellow-crusta"></i>
                        <span class="caption-subject bold font-yellow-crusta uppercase">{{$class->name}}</span>

                    </div>
                    <ul class="nav nav-tabs">

                        <li>
                            <a href="#portlet_tab2" data-toggle="tab">Discussion </a>
                        </li>
                        <li class="active">
                            <a href="#portlet_tab1" data-toggle="tab">Lectures </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <div class="slimScrollDiv" style="position: relative; overflow: auto !important; width: auto;max-height: 450px !important; "><div class="scroller" style="max-height: 450px !important; overflow: auth ; width: auto;" data-initialized="1">
                                    <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                            <tr class="uppercase">
                                                <th colspan="2"> Lecture </th>
                                                <th>view </th>
                                                <th> CASES </th>
                                                <th> CLOSED </th>
                                                <th> RATE </th>
                                            </tr>
                                            </thead>
                                            <tbody><tr>
                                                <td class="fit">
                                                    <img class="user-pic" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                <td>
                                                    php intro
                                                </td>
                                                <td><a class="btn blue btn-outline">view</a>  </td>
                                                <td> 45 </td>
                                                <td> 124 </td>
                                                <td>
                                                    <span class="bold theme-font">80%</span>
                                                </td>
                                            </tr>

                                            </tbody></table>
                                    </div>

                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 104.439px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                        </div>
                        <div class="tab-pane" id="portlet_tab2">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; max-height: 450px;"><div class="scroller" style="max-height: 450px; overflow: hidden; width: auto;" data-initialized="1">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption caption-md">
                                                <i class="icon-bar-chart font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Discussion</span>
                                                <span class="caption-helper">45 pending</span>
                                            </div>
                                            <div class="inputs">
                                                <div class="portlet-input input-inline input-small ">
                                                    <div class="input-icon right">
                                                        <i class="icon-magnifier"></i>
                                                        <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                <div class="general-item-list">
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">3 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                                <a href="" class="item-name primary-link">Mark</a>
                                                                <span class="item-label">5 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">8 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">12 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                                <a href="" class="item-name primary-link">Richard Stone</a>
                                                                <span class="item-label">2 days ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-danger"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                                <a href="" class="item-name primary-link">Dan</a>
                                                                <span class="item-label">3 days ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                                <a href="" class="item-name primary-link">Larry</a>
                                                                <span class="item-label">4 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

@endsection
@section('js')

@endsection
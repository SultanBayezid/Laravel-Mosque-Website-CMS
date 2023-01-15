@extends('layouts.backend.header') 
            @section('content') 
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Announcements</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Announcements</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{route('announcement.create')}}"
                            class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Add Announcement</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Announcements</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($announcements as $key => $announcement)
                                            <tr>
                                                <td>{{$key +1}}</td>
                                                <td>{{$announcement->announcement ?? ''}}</td>
                                               
                                               
                                                <td class="text-center" width="15%">
                                <form action="{{action('App\Http\Controllers\AnnouncementController@destroy', $announcement['id'])}}"
                                    method="post">
                                    <a href="{{action('App\Http\Controllers\AnnouncementController@edit', $announcement['id'])}}"
                                        class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger btn-sm btn-remove"
                                        type="submit"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
           
        @endsection
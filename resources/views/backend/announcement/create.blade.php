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
                            <li class="breadcrumb-item active">Table Basic</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{route('news.create')}}"
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
                            <form class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="POST" action="{{route('announcement.store')}}"> 
                                @csrf
              
 
                                    <div class="form-group">
                                        <label class="col-md-12">Announcement</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="announcement" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Save Announcement</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
           
        @endsection
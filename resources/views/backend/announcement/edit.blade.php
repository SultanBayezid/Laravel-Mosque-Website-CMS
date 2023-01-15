@extends('layouts.backend.header') 
            @section('content') 
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor">News and Events</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('news.index')}}">News</a></li>
                            <li class="breadcrumb-item active">Editiong</li>
                        </ol>
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
                            <form class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="POST" action="{{route('announcement.update', $announcement->id)}}"> 
                            @method('PUT')
				{{ csrf_field() }}
                              
                <div class="form-group">
                                        <label class="col-md-12">Announcement</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="announcement" class="form-control form-control-line">{{$announcement->announcement ?? ''}}</textarea>
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
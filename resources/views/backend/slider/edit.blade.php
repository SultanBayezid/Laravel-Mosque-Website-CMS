@extends('layouts.backend.header') 
            @section('content') 
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor">Home Page Slider</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('news.index')}}">Home Page Slider</a></li>
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
                            <form class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="POST" action="{{route('slider.update', $slider->id)}}"> 
                            @method('PUT')
				{{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-md-12">Slider Title</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$slider->title ?? ''}}" name="title"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Slider Image</label>
                                        <div class="col-md-12">
                                        <img src=" {{ asset('uploads/slider/'.$slider->image) }}"
                                                            alt="user" width="200">
                                            <input type="file" placeholder="johnathan@admin.com" 
                                                class="form-control form-control-line" name="image"
                                                id="example-email">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Save Slider</button>
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
@extends('layouts.backend.header') 
            @section('content') 
         

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="{{ asset('uploads/profile/'.Auth::user()->image) }}" class="img-circle"
                                        width="150" />
                                    <h4 class="card-title mt-2">{{Auth::user()->name ?? ''}}</h4>
                                    <h6 class="card-subtitle">Admin User</h6>
                                    <div class="row text-center justify-content-md-center">
                              
            
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                          
                                <form  autocomplete="off" class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="POST" action="{{route('profile-update', Auth::user()->id)}}"> 
                            @method('PUT')
				{{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{Auth::user()->name ?? ''}}" name="name"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{Auth::user()->email ?? ''}}"
                                                class="form-control form-control-line" name="email"
                                                id="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input autocomplete="new-password" type="password" name="password" value=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{Auth::user()->phone ?? ''}}" name="phone"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Change Profile Picture</label>
                                        <div class="col-md-12">
                                            <input type="file" placeholder="johnathan@admin.com" 
                                                class="form-control form-control-line" name="image"
                                                id="example-email">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
           
        @endsection
@extends('layouts.backend.header') 
            @section('content') 
            <style>
               b, strong {
    font-weight: bolder;
    font-weight: 700;
}
            </style>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Jamat Times</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Jamat Times</li>
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
                              
<form method="post" class="ajax-submit" autocomplete="off" action="{{route('jamattime.update', $jamat->id)}}"
    enctype="multipart/form-data">
    @method('PUT')
				{{ csrf_field() }}
            <div class="modal-body">
            <div class="form-group row">
           
            <label for="appointment_interval" class="col-sm-3 col-form-label">{{ ('Title') }}</label>
                  <div class="col-sm-8">
                
                   <input type="text" name="title" class="form-control" placeholder="" value="{{$jamat->title}}">
                  </div>
            </div>
            <div class="form-group row">
           
           <label for="appointment_interval" class="col-sm-3 col-form-label">{{ ('Sun Title') }}</label>
                 <div class="col-sm-8">
               
                  <input type="text" name="sub_title" class="form-control" placeholder="" value="{{$jamat->sub_title}}">
                 </div>
           </div>

               <div class="form-group row">
                  <div class="col-sm-4 col-md-4" >
                  <strong>Prayer</strong>
                  </div>
                  <div class="col-sm-4 col-md-4" >
                  <strong>Weekdays</strong>
                  </div>
                  <div class="col-sm-4 col-md-4">
                  <strong>Weekends</strong>
                  </div>
               </div>
                 <div class="form-group row">
                  <label for="Saturday" class="col-sm-4 col-md-3 col-form-label">{{ ('Fajr') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="time" class="form-control" id="Saturday" name="Fajr_weekdays" value="{{$jamat->Fajr_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="time" class="form-control" id="Saturday" name="Fajr_weekends" value="{{$jamat->Fajr_weekends}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="Sunday" class="col-sm-4 col-md-3 col-form-label">{{ ('Dhuhr') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="time" class="form-control" id="Sunday" name="Dhuhr_weekdays" value="{{$jamat->Dhuhr_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="time" class="form-control" id="Sunday" name="Dhuhr_weekends" value="{{$jamat->Dhuhr_weekends}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="Monday" class="col-sm-4 col-md-3 col-form-label">{{ ('Asr') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="time" class="form-control" id="Monday" name="Asr_weekdays" value="{{$jamat->Asr_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="time" class="form-control" id="Monday" name="Asr_weekends" value="{{$jamat->Asr_weekends}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="Tuesday" class="col-sm-4 col-md-3 col-form-label">{{ ('Magrib') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="text" class="form-control" id="Tuesday" name="Magrib_weekdays" value="{{$jamat->Magrib_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="text" class="form-control" id="Tuesday" name="Magrib_weekends" value="{{$jamat->Magrib_weekends}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="Thurday" class="col-sm-4 col-md-3 col-form-label">{{ ('Isha') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="time" class="form-control" id="Thurday" name="Isha_weekdays" value="{{$jamat->Isha_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="time" class="form-control" id="Thurday" name="Isha_weekends" value="{{$jamat->Isha_weekends}}">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="Friday" class="col-sm-4 col-md-3 col-form-label">{{ ('Jummah') }}</label>
                  <div class="col-sm-4 col-md-4" >
                     <input type="text" class="form-control" id="Friday" name="Jummah_weekdays" value="{{$jamat->Jummah_weekdays}}">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <input type="time" class="form-control" id="Friday" name="Jummah_weekends" value="{{$jamat->Jummah_weekends}}">
                  </div>
               </div>

            <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-sm">Update Jamat Times</button>
              
            </div>
         </form>
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
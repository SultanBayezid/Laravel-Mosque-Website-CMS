@if ($notification = Session::get('success'))
<div class="alert alert-success alert-block">
	
        <strong>{{ $notification }}</strong>
</div>
@endif


@if ($notification = Session::get('error'))
<div class="alert alert-danger alert-block">
	
        <strong>{{ $notification }}</strong>
</div>
@endif


@if ($notification = Session::get('warning'))
<div class="alert alert-warning alert-block">
	
	<strong>{{ $notification }}</strong>
</div>
@endif


@if ($notification = Session::get('info'))
<div class="alert alert-info alert-block">
	
	<strong>{{ $notification }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	
	Please check the form below for errors
</div>
@endif
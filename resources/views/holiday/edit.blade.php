@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Edit Holiday</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Edit Holiday</h4>
            </div>
            <form class="form-horizontal" method="POST" action="{{route('holiday.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 text-end control-label col-form-label">Event Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Event Name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="start_date" class="col-sm-3 text-end control-label col-form-label">Start Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" value="{{$data->start_date}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="end_date" class="col-sm-3 text-end control-label col-form-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="End Date" value="{{$data->end_date}}">
                        </div>
                    </div>
                </div>
                <div class="p-3 border-top">
                    <div class="text-end">
                        <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
                        <button type="cancel" class="btn btn-dark rounded-pill px-4 waves-effect waves-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>
@endsection
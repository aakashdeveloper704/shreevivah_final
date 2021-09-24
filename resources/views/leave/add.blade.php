@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Add Leave</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Add Leave</h4>
            </div>
            <form class="form-horizontal" method="POST" action="{{route('leave.insert')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @permission(["superadmin", "coordinator", "recruiter_manager"])
                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-3 text-end control-label col-form-label">User</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="user_id" id="user_id">
                                <option value="">Select User</option>
                                @foreach($users as $value)
                                    <option value="{{$value->id}}">{{$value->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endpermission
                    <div class="mb-3 row">
                        <label for="category" class="col-sm-3 text-end control-label col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category" id="category">
                                <option value="">Select Type</option>
                                <option value="medical">Medical</option>
                                <option value="vacation">Vacation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="start_date" class="col-sm-3 text-end control-label col-form-label">Start Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="end_date" class="col-sm-3 text-end control-label col-form-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="reason" class="col-sm-3 text-end control-label col-form-label">Reason</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="reason" id="reason" placeholder="Reason"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="reason" class="col-sm-3 text-end control-label col-form-label">Attachment</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="attachment" name="attachment">
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
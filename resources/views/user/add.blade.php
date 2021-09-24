@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Add User</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Add User</h4>
            </div>
            <form class="form-horizontal" method="POST" action="{{route('user.insert')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="full_name" class="col-sm-3 text-end control-label col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 text-end control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 text-end control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>
                    </div>
                    <!-- <div class="mb-3 row">
                        <label for="locale" class="col-sm-3 text-end control-label col-form-label">Locale</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="locale" id="locale">
                                <option value="">Select Locale</option>
                                <option value="1">English (United Kingdom)</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="language" class="col-sm-3 text-end control-label col-form-label">Language</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="language" id="language">
                                <option value="">Select Language</option>
                                <option value="1">English</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                        </div>
                    </div> -->
                    <div class="mb-3 row">
                        <label for="mobile" class="col-sm-3 text-end control-label col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                        </div>
                    </div>
                    <!-- <div class="mb-3 row">
                        <label for="skype_id" class="col-sm-3 text-end control-label col-form-label">Skype ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="skype_id" id="skype_id" placeholder="Skype ID">
                        </div>
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="profile_photo" class="col-sm-3 text-end control-label col-form-label">Profile Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="profile_photo" id="profile_photo">
                        </div>
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="type" class="col-sm-3 text-end control-label col-form-label">Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="type" id="type">
                                <option value="">Select Type</option>
                                <option value="coordinator">Coordinator</option>
                                <option value="recruiter_manager">Recruiter Manager</option>
                                <option value="recruiter">Recruiter</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="direction" class="col-sm-3 text-end control-label col-form-label">Direction</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="direction" id="direction">
                                <option value="">Select Direction</option>
                                <option value="LTR">LTR</option>
                                <option value="RTL">RTL</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="mb-3 row">
                        <label for="joining_date" class="col-sm-3 text-end control-label col-form-label">Joining Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="joining_date" id="joining_date">
                        </div>
                    </div> -->

                    <!-- <div class="mb-3 row">
                        <label for="probation_period" class="col-sm-3 text-end control-label col-form-label">Probation Period</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="probation_period" id="probation_period">
                        </div>
                    </div> -->
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
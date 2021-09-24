@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Add Client</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Add Client</h4>
            </div>
            <form class="form-horizontal" method="POST" action="{{route('client.insert')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="company_name" class="col-sm-3 text-end control-label col-form-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_primary_email" class="col-sm-3 text-end control-label col-form-label">Primary Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="company_primary_email" name="company_primary_email" placeholder="Primary Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_secondary_email" class="col-sm-3 text-end control-label col-form-label">Secondary Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="company_secondary_email" name="company_secondary_email" placeholder="Secondary Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_gst_number" class="col-sm-3 text-end control-label col-form-label">GST Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_gst_number" name="company_gst_number" placeholder="GST Number">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_gst_type" class="col-sm-3 text-end control-label col-form-label">GST Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="company_gst_type" id="company_gst_type">
                                <option value="">Select GST Type</option>
                                <option value="cgst">CGST</option>
                                <option value="sgst">SGST</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_pan_number" class="col-sm-3 text-end control-label col-form-label">PAN Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_pan_number" name="company_pan_number" placeholder="PAN Number">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_payout_term" class="col-sm-3 text-end control-label col-form-label">Payout Term</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="company_payout_term" id="company_payout_term">
                                <option value="">Select Payout Term</option>
                                <option value="7">7 Days</option>
                                <option value="15">15 Days</option>
                                <option value="30">30 Days</option>
                                <option value="60">60 Days</option>
                                <option value="90">90 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_attachment_document" class="col-sm-3 text-end control-label col-form-label">Attachment</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="company_attachment_document" name="company_attachment_document">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_phone_number" class="col-sm-3 text-end control-label col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_phone_number" name="company_phone_number" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_mobile_number" class="col-sm-3 text-end control-label col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_mobile_number" name="company_mobile_number" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_city" class="col-sm-3 text-end control-label col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_city" name="company_city" placeholder="City">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_address" class="col-sm-3 text-end control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_longitude" class="col-sm-3 text-end control-label col-form-label">Longitude</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_longitude" name="company_longitude" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="company_latitude" class="col-sm-3 text-end control-label col-form-label">Lattitude</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company_latitude" name="company_latitude" placeholder="Lattitude">
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
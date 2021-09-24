@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Edit Aboutus</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Edit Aboutus</h4>
            </div>
            <form class="form-horizontal" id="form_update">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <!-- <input type="hidden" name="old_attachment_name" value="{{$data->company_attachment_document}}"> -->
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="metaname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="metaname" name="metaname" value="{{$data->metaname}}" placeholder="Name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="metavalue" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" id="metavalue"  name="metavalue">{{$data->metavalue}}</textarea>
                        <!-- <input type="text" class="form-control" id="metavalue" name="metavalue" value="{{$data->metavalue}}" placeholder="Commission"> -->
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                         <label for="active" class="col-sm-3 text-end control-label col-form-label">Active</label>
                        <div class="col-sm-9" id="switch_aligment">
                            <div class="form-check form-switch">
                                <input {{$data->active ? 'checked' : ''}} class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="p-3 border-top">
                    <div class="text-end">
                        <button type="button" id="edit_btn" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Update</button>
                        <button type="cancel" class="btn btn-dark rounded-pill px-4 waves-effect waves-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
var metavalue = '';
var active = "{{$data->active}}";
$( document ).ready(function() {
    $('#metavalue').summernote({
        height: 400,
    });   
    
});
$("#flexSwitchCheckChecked").on('change', function() {
    
    var switchStatus = false;
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
    }
    else {
        switchStatus = $(this).is(':checked');
    }

    active = switchStatus ? 1 : 0 ;
});
$('#edit_btn').click(function(){

    $.ajax({
    type : 'POST',
    url : "{{route('aboutus.update')}}",
    data : $('#form_update').serialize()+"&active="+active,
    success: function(data) {
        data.code == 200 ?  swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
    }
});
});
// 
</script>
@endsection
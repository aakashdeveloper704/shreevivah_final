@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Edit Pricing</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Edit Pricing</h4>
            </div>
            <form class="form-horizontal" id="form_update"  autocomplete="off">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="hidden" name="old_image_name" value="{{$data->image}}">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$data->title}}" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" id="description" name="description" placeholder="description"> -->
                            <textarea class="form-control" id="description" name="description">{{ $data->description}}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="type"  class="col-sm-3 text-end control-label col-form-label">Type</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" id="metaname" name="metaname" placeholder="Name"> -->
                            <select    class="form-control" name="type" id="type">
                            <option value="">Select Type</option>
                                <option value="test" {{$data->type == 'test' ? 'selected' : ''}} >Test</option>
                                <option value="test1" {{$data->type == 'test1' ? 'selected' : ''}} >Test1</option>
                                <option value="test2" {{$data->type == 'test2' ? 'selected' : ''}} >Test2</option>
                                <option value="test3" {{$data->type == 'test3' ? 'selected' : ''}} >Test3</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label">MRP</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$data->mrp}}" class="form-control" id="mrp" name="mrp" placeholder="mrp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label">Discount</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$data->discount}}" class="form-control" id="discount" name="discount" placeholder="Discount">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label">Upload Image</label>
                        <div class="col-sm-9">
                            <input id="image" type="file" name="image" />
                            <!-- <div id="preview"><img src="filed.png" /></div><br> -->
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-3 text-end control-label col-form-label">Active</label>
                        <div class="col-sm-9" id="switch_aligment">
                            <div class="form-check form-switch">
                                <input {{$data->active ? 'checked' : ''}} class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                            </div>
                        </div> 
                    </div>
                    <!-- <div class="mb-3 row">
                         <label for="active" class="col-sm-3 text-end control-label col-form-label">Active</label>
                        <div class="col-sm-9" id="switch_aligment2">
                            <div class="form-check form-switch">
                                <input value="{{$data->active}}" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked2">
                            </div>
                        </div> 
                    </div> -->
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
var description = '';
var active = "{{$data->active}}";
$( document ).ready(function() {
    $('#description').summernote({
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

    // $('#form_update').serialize()+"&active="+active
    // var status = flexSwitchCheckChecked2 ? 1 : 0 ;
     var formData = new FormData($('#form_update')[0]);
    formData.append("active",active);
    // formData.append("description",description);
    formData.append("type",$('#type').val());
    $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type : 'POST',
    url : "{{route('pricing.update')}}",
    data : formData,
    contentType : false,
    processData : false,
    success: function(data) {
        data.code == 200 ?  swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
    }
});
});
// 
</script>
@endsection

<!-- @section('scripts')
<script type="text/javascript">
var metalink = '';
var editor = CKEDITOR.replace( 'description' );
$( document ).ready(function() {
    $('#description').val('{{$data->description}}');
   
    CKEDITOR.instances.metalink.setData('{{$data->description }}');
    console.log( '{{$data->description }}' );
    editor.setData('{{ $data->description}}');
    CKEDITOR.instances['description'].setData('{{ $data->description}}');

    var active_status = '<?php echo $data->active ?>';
    // alert(active_status);
    if(active_status == 1){
        $("#flexSwitchCheckChecked").prop('checked', true);
    } else {
        $("#flexSwitchCheckChecked").prop('checked', false);
    }
    // active_status ? $("#flexSwitchCheckChecked").prop('checked', true) : $("#flexSwitchCheckChecked").prop('checked', false);
});

// var editor2 = CKEDITOR.replace( 'metalink' );
    
        
    editor.on( 'change', function( evt ) {
    // getData() returns CKEditor's HTML content.
  
    description = evt.editor.getData();
    // console.log(  evt.editor.getData() );
    });
var switchStatus = false;
$("#flexSwitchCheckChecked").on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
    }
    else {
        switchStatus = $(this).is(':checked');
    }
});
$('#edit_btn').click(function(){

    var active = switchStatus ? 1 : 0 ;
    $.ajax({
    type : 'POST',
    url : "{{route('pricing.update')}}",
    data : $('#form_update').serialize()+"&active="+active+"&description="+description,
    success: function(data) {
        data.code == 200 ?  swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
    }
});
});
// 
</script>
@endsection -->
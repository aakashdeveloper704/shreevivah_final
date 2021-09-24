@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Edit Setting</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Edit Setting</h4>
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
                        <textarea class="form-control" id="metavalue"  value="{{$data->metavalue}}" name="metavalue"></textarea>
                        <!-- <input type="text" class="form-control" id="metavalue" name="metavalue" value="{{$data->metavalue}}" placeholder="Commission"> -->
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                         <label for="active" class="col-sm-3 text-end control-label col-form-label">Active</label>
                        <div class="col-sm-9" id="switch_aligment">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
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
<script type="text/javascript">
var metavalue = '';
$( document ).ready(function() {
    var editor = CKEDITOR.replace( 'metavalue' );
    CKEDITOR.instances.metavalue.setData('{{$data->metavalue }}');
    console.log( '{{$data->metavalue }}' );
    editor.setData('{{ $data->metavalue}}');
    CKEDITOR.instances['metavalue'].setData('{{ $data->metavalue}}');

    var active_status = '<?php echo $data->active ?>';
    // alert(active_status);
    if(active_status == 1){
        $("#flexSwitchCheckChecked").prop('checked', true);
    } else {
        $("#flexSwitchCheckChecked").prop('checked', false);
    }
    // active_status ? $("#flexSwitchCheckChecked").prop('checked', true) : $("#flexSwitchCheckChecked").prop('checked', false);
});
var editor2 = CKEDITOR.replace( 'metavalue' );
    
        
    editor2.on( 'change', function( evt ) {
    // getData() returns CKEditor's HTML content.
  
    metavalue = evt.editor.getData();
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
    url : "{{route('setting.update')}}",
    data : $('#form_update').serialize()+"&active="+active+"&metavaluenew="+metavalue,
    success: function(data) {
        data.code == 200 ?  swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
    }
});
});
// 
</script>
@endsection
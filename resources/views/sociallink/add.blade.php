@extends('layouts.app')

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">Add Sociallink</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Add Sociallink</h4>
            </div>
            <form class="form-horizontal" id="form_add"  autocomplete="off">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="metaname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" id="metaname" name="metaname" placeholder="Name"> -->
                            <select class="form-control" name="metaname" id="metaname">
                                <option value="">Select Type</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Instagram">Instagram</option>
                                <option value="LinkedIn">LinkedIn</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="metalink" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" id="metalink" name="metalink" placeholder="metalink"> -->
                            <textarea class="form-control" id="metalink" name="metalink"></textarea>
                        </div>
                    </div>
                    
                    <!-- <div class="mb-3 row">
                        <label for="active" class="col-sm-3 text-end control-label col-form-label">Active</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="active" name="active" placeholder="Active">
                        </div>
                    </div> -->
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
                        <button type="button" id="save_btn" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
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
var metalink = '';
$( document ).ready(function() {
    var editor2 = CKEDITOR.replace( 'metalink' );

    editor2.on( 'change', function( evt ) {
    // getData() returns CKEditor's HTML content.
    metalink = evt.editor.getData();
    console.log( metalink );
    });
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
$('#save_btn').click(function(){
// console.log($('#form_add').serialize());
    var active = switchStatus ? 1 : 0 ;
    $.ajax({
    type : 'POST',
    url : "{{route('sociallink.insert')}}",
    data : $('#form_add').serialize()+"&active="+active+"&metalink="+metalink,
    success: function(data) {
        data.code == 200 ?  swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
    }
});
});
</script>
@endsection
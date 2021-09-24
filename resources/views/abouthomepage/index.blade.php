@extends('layouts.app')

@section('styles')
<style type="text/css">
    .hidden {
        display: none;
    }

    .table-responsive {
        overflow-y: hidden;
    }

    .table-responsive nav {
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
	        <div class="col-md-5 col-12 align-self-center">
	            <h3 class="text-themecolor mb-0">About Home Page</h3>
	        </div>
	    </div><br>
        
	    <div class="card">
            <!-- <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Aboutus <a href="{{route('abouthomepage.add')}}" class="btn btn-rounded btn-primary">Add</a></h4>
                </div>
            </div> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
var users_table;
$(document).ready( function(){
 users_table = $('#dataTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{route('abouthomepage.index')}}",
    columnDefs: [ {
        "targets": [1],
        "orderable": false,
        "searchable": false
    } ],
    "columns":[
        {"data":"id"},
        {"data":"metaname"},
        {"data":"metavalue"},
        {"data":"active"},
        {"data":"action"},
    ],
    "aaSorting": [],
    "order": [[ 1, "desc" ]],
    "columnDefs": [
        {render: function (data, type, row, meta) {
    		        	return (data==1)?'<label class="label label-success">Active</label>':'<label class="label label-danger">Inactive</label>';
            		},
    	        	"targets": -2,
    	        },
    ]
});
});

function delete_function(id){
    swal({
        title: 'Delete',
        text: 'The About us will be deleted',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
              var href = "{{route('abouthomepage.delete')}}";
              var data = id;
              $.ajax({
                  headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                  method: "POST",
                  url: href,
                  dataType: "json",
                  data: {id:data},
                  success: function(data){
                      if(data.code == 200) {
                          swal("Success", data.message, 'success');
                          users_table.ajax.reload();
                      } else {
                          swal("Error", data.message, 'error');
                          // $('#dataTable').ajax.reload();
                      }    
                  }
              });
          }
       });
}

</script>
@endsection
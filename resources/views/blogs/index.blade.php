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
	            <h3 class="text-themecolor mb-0">Blogs</h3>
	        </div>
	    </div><br>
        
	    <div class="card">
            <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Blogs <a href="{{route('blogs.add')}}" class="btn btn-rounded btn-primary">Add</a></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Active</th>
                                <!-- <th>Created</th> -->
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
    ajax: "{{route('blogs.index')}}",
    columnDefs: [ {
        "targets": [1],
        "orderable": false,
        "searchable": false
    } ],
    "columns":[
        {"data":"id"},
        {"data":"title"},
        {"data":"description"},
        {"data":"image"},
        // {"data":"status"},
        {"data":"active"},
        // {"data":"Created"},
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
        {render: function (data, type, row, meta) {
            // alert(data);
            return (data != '' && data != null) ? '<img src="images/blogs/'+data+'" width="50" height="50">': '';
        },
        "targets": -3,
        }
    ]
});
});

function delete_function(id){
    swal({
        title: 'Delete',
        text: 'The Pricing will be deleted',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
              var href = "{{route('blogs.delete')}}";
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
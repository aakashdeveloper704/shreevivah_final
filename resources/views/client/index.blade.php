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
	            <h3 class="text-themecolor mb-0">Clients</h3>
	        </div>
	    </div><br>
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100" style="cursor: pointer;" onclick="fetchData(1);">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <h6 class="text-muted mt-2 mb-0">Total Client</h6>
                                <h2>{{$totalClients}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100" style="cursor: pointer;" onclick="fetchData(2);">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <h6 class="text-muted mt-2 mb-0">Active Client</h6>
                                <h2>{{$totalActiveClients}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100" style="cursor: pointer;" onclick="fetchData(3);">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <h6 class="text-muted mt-2 mb-0">Inactive Client</h6>
                                <h2>{{$totalInactiveClients}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <div class="card">
            <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Clients <a href="{{route('client.add')}}" class="btn btn-rounded btn-primary">Add</a></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="dataTable">
                    <table class="table" style="width: 200%">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Primary Email</th>
                                <th>Secondary Email</th>
                                <th>GST</th>
                                <th>PAN</th>
                                <th>Payout</th>
                                <th>Phone Number</th>
                                <th>Mobile Number</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Attachment</th>
                                <th>Created</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp

                            @forelse($rows as $row)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$row->company_name}}</td>
                                <td>{{$row->company_primary_email}}</td>
                                <td>{{$row->company_secondary_email}}</td>
                                <td>{{$row->company_gst_type}} {{$row->company_gst_number}}</td>
                                <td>{{$row->company_pan_number}}</td>
                                <td>{{$row->company_payout_term}} Days</td>
                                <td>{{$row->company_phone_number}}</td>
                                <td>{{$row->company_mobile_number}}</td>
                                <td>{{$row->company_city}}</td>
                                <td>{{$row->company_address}}</td>
                                <td>
                                    @if(!empty($row->company_attachment_document))
                                    <a href="{{route('client.downloadAttachment', ['filename' => $row->company_attachment_document])}}">
                                        {{$row->company_attachment_document}}
                                    </a>
                                    @endif
                                </td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->createdBy->full_name}}</td>
                                <td>{{$row->active}}</td>
                                <td>
                                    <a href="{{route('client.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                                        Edit
                                    </a>
                                    @if($row->active == "Enabled")
                                    <a href="{{route('client.disable', ['id' => $row->id])}}" class="btn btn-rounded btn-danger">
                                        Disable
                                    </a>
                                    @else
                                    <a href="{{route('client.enable', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                        Enable
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="16">No Records Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$rows->links()}}
                </div>
            </div>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
   function fetchData(type)
   {
        if (type == 1)
        {
            $("#dataTable").load(" #dataTable > *");
        }
        else
        {
            $.ajax({
                url: "{{route('client.getByType')}}",
                method: "POST",
                data: {type: type},
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                success: function(response) {
                    $("#dataTable").html(response);
                },
                error: function(_error) {
                    console.log(_error);
                }
            });
        }
    } 
</script>
@endsection
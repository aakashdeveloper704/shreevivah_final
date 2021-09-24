@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<style type="text/css">
    .text-right {
        text-align: right !important;
    }

    .bold {
        font-weight: bold;
    }

    .morris-donut-inverse {
        height: 250px;
    }

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
	            <h3 class="text-themecolor mb-0">Leave</h3>
	        </div>
	    </div><br>
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="leave-chart" class="morris-donut-inverse"></div>
                                <input type="hidden" id="medicalLeavesCount" value="{{$medicalLeavesCount}}">
                                <input type="hidden" id="vacationLeavesCount" value="{{$vacationLeavesCount}}">
                                <input type="hidden" id="otherLeavesCount" value="{{$otherLeavesCount}}">
                            </div>
                            <div class="col-lg-6" id="charttable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Medical (7)</td>
                                            <td class="text-right bold">
                                                 {{round($medicalLeavesCount / (7 / 100), 2)}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vacation (15)</td>
                                            <td class="text-right bold">
                                                {{round($vacationLeavesCount / (15 / 100), 2)}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other (5)</td>
                                            <td class="text-right bold">
                                                {{round($otherLeavesCount / (5 / 100), 2)}}
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="d-flex border-bottom title-part-padding align-items-center">
                        <div>
                            <h4 class="card-title mb-0">Leave <a href="{{route('leave.add')}}" class="btn btn-rounded btn-primary">Add</a></h4>
                        </div>
                        @permission(["superadmin", "coordinator", "recruiter_manager"])
                        <div class="ml-4">
                            <select class="form-control" name="filter_leave" id="filter_leave">
                                <option value="" selected>My Leaves</option>
                                @foreach($users as $value)
                                <option value="{{$value->id}}">{{$value->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endpermission
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="dataTable">
                            <table class="table" style="width: 180%;">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Reason</th>
                                        <th>Attachment</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                        <th>Approved</th>
                                        <th>Approved By</th>
                                        <th>Approved Date</th>
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
                                        <td>{{$row->category}}</td>
                                        <td>{{$row->start_date}}</td>
                                        <td>{{$row->end_date}}</td>
                                        <td>{{$row->reason}}</td>
                                        <td>
                                            @if(!empty($row->attachment))
                                                <a href="{{route('leave.downloadAttachment', ['filename' => $row->attachment])}}">
                                                    attachment
                                                </a>
                                            @endif
                                        </td>
                                        <td>{{$row->createdBy->full_name}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>{{$row->approved}}</td>
                                        <td>{{$row->approvedBy->full_name ?? ''}}</td>
                                        <td>{{$row->approved_date}}</td>
                                        <td>
                                            @if(!$row->freeze || !$row->approved == "No")
                                            <a href="{{route('leave.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                                                Edit
                                            </a>
                                            @endif
                                            @permission("superadmin")
                                            <a href="{{route('leave.delete', ['id' => $row->id])}}" class="btn btn-rounded btn-danger">
                                                Delete
                                            </a>
                                            @if(!$row->getRawOriginal("approved"))
                                            <a href="{{route('leave.approve', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                                Approve
                                            </a>
                                            @else
                                            <a href="{{route('leave.reject', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                                Reject
                                            </a>
                                            @endif
                                            @endpermission
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="12">No Records Found</td>
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
	</div>
</div>
@endsection

@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript">
    var medical = "#37bc9b";
    var vacation = "#7266ba";
    var other = "#f05050";
    var chart = Morris.Donut({
      element: 'leave-chart',
      resize: true,
      redraw: true,
      data: [
        {label:"Medical", value: $("#medicalLeavesCount").val(), color:medical},
        {label:"Vacation", value: $("#vacationLeavesCount").val(), color: vacation},
        {label:"Other", value: $("#otherLeavesCount").val(), color: other}
      ]
    });

    @permission(["superadmin", "coordinator", "recruiter_manager"])
    $("#filter_leave").on('change', function () {
        if ($("#filter_leave").val() === '')
        {
            $("#dataTable").load(" #dataTable > *");
            $("#charttable").load(" #charttable > *");
            chart.setData([
                {label:"Medical", value: $("#medicalLeavesCount").val(), color:medical},
                {label:"Vacation", value: $("#vacationLeavesCount").val(), color: vacation},
                {label:"Other", value: $("#otherLeavesCount").val(), color: other}
            ]);
        }
        else
        {
            $.ajax({
                url: "{{route('leave.filter')}}",
                method: "POST",
                data: {userId: $("#filter_leave").val()},
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                success: function(response) {
                    $("#dataTable").html(response.datatable);
                    $("#charttable").html(response.charttable);
                    chart.setData([
                        {label:"Medical", value: response.medicalLeavesCount, color:medical},
                        {label:"Vacation", value: response.vacationLeavesCount, color: vacation},
                        {label:"Other", value: response.otherLeavesCount, color: other}
                    ]);
                },
                error: function(_error) {
                    console.log(_error);
                }
            });
        }
    });
    @endpermission
</script>
@endsection
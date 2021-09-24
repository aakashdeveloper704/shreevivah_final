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
	            <h3 class="text-themecolor mb-0">Holidays</h3>
	        </div>
	    </div><br>
	    <div class="card">
            <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Holidays @permission(["superadmin", "coordinator"])<a href="{{route('holiday.add')}}" class="btn btn-rounded btn-primary">Add</a>@endpermission</h4>
                </div>
                <div class="ml-4">
                    <select class="form-control" name="filter_year" id="filter_year">
                        <option value="" selected>All</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
                <div class="ml-4">
                    <select class="form-control" name="filter_month" id="filter_month">
                        <option value="" selected>All</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="dataTable">
                    <table class="table" style="max-width: 200%;">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                @permission(["superadmin", "coordinator"])
                                <th>Created Date</th>
                                <th>CreatedBy</th>
                                <th>Action</th>
                                @endpermission
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
                                <td>{{$row->name}}</td>
                                <td>{{$row->start_date}}</td>
                                <td>{{$row->end_date}}</td>
                                @permission(["superadmin", "coordinator"])
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->createdBy->full_name}}</td>
                                <td>
                                    <a href="{{route('holiday.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                                        Edit
                                    </a>
                                    <a href="{{route('holiday.delete', ['id' => $row->id])}}" class="btn btn-rounded btn-danger">
                                        Delete
                                    </a>
                                </td>
                                @endpermission
                            </tr>
                            @empty
                            <tr>
                                @permission(["superadmin", "coordinator"])
                                <td colspan="7">No Records Found</td>
                                @endpermission

                                @permission(["recruiter_manager", "recruiter"])
                                <td colspan="4">No Records Found</td>
                                @endpermission
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
    $("#filter_year, #filter_month").on('change', function () {
        if ($("#filter_year").val() === '' && $("#filter_month").val() === '')
        {
            $("#dataTable").load(" #dataTable > *");
        }
        else
        {
            $.ajax({
                url: "{{route('holiday.filter')}}",
                method: "POST",
                data: {year: $("#filter_year").val(), month: $("#filter_month").val()},
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                success: function(response) {
                    $("#dataTable").html(response);
                },
                error: function(_error) {
                    console.log(_error);
                }
            });
        }
    });
</script>
@endsection
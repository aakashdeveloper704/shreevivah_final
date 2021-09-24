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
	            <h3 class="text-themecolor mb-0">Salary</h3>
	        </div>
	    </div><br>
        <div class="card">
            <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Salary</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="dataTable">
                    <table class="table" style="width: 100%;">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Month</th>
                                <th>Paid</th>
                                <th>Paid Date</th>
                                <th>Generated Date</th>
                                @permission(["superadmin"])
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
                                <td>{{$row->user->full_name}}</td>
                                <td>{{$row->amount ?? 0}} INR</td>
                                <td>{{$row->month}}</td>
                                <td>{{$row->paid}}</td>
                                <td>{{$row->paid_date}}</td>
                                <td>{{$row->created_at}}</td>
                                @permission(["superadmin"])
                                <td>
                                    @if($row->paid == "Unpaid")
                                    <a href="{{route('salary.paid', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                        Paid
                                    </a>
                                    @else
                                    <a href="{{route('salary.unpaid', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                        Unpaid
                                    </a>
                                    @endif
                                    <a href="{{route('salary.delete', ['id' => $row->id])}}" class="btn btn-rounded btn-danger">
                                        Delete
                                    </a>
                                </td>
                                @endpermission
                            </tr>
                            @empty
                            <tr>
                                @permission(["superadmin"])
                                    <td colspan="7">No Records Found</td>
                                @endpermission

                                @permission(["coordinator", "recruiter_manager", "recruiter"])
                                    <td colspan="8">No Records Found</td>
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
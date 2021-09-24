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
	            <h3 class="text-themecolor mb-0">User</h3>
	        </div>
	    </div>
        <div class="card">
            <div class="d-flex border-bottom title-part-padding align-items-center">
                <div>
                    <h4 class="card-title mb-0">Users <a href="{{route('user.add')}}" class="btn btn-rounded btn-primary">Add</a></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="dataTable">
                    <table class="table" style="width: 200%;">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>#</th>
                                <!-- <th>Photo</th> -->
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Type</th>
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
                                <!-- <td><img src="{{asset('storage/user    ProfilePhoto/'.$row->profile_photo)}}" width="50" height="40"></td> -->
                                <td>{{$row->full_name}}</td>
                                <td>{{$row->username}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->type}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->createdBy->full_name}}</td>
                            
                                <td>{{$row->active}}</td>
                                <td>
                                    <a href="{{route('user.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                                        Edit
                                    </a>
                                    @if($row->active == "Active")
                                    <a href="{{route('user.inactive', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                        Inactive
                                    </a>
                                    @else
                                    <a href="{{route('user.active', ['id' => $row->id])}}" class="btn btn-rounded btn-info">
                                        Active
                                    </a>
                                    @endif
                                    <a href="{{route('user.delete', ['id' => $row->id])}}" class="btn btn-rounded btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="13">No Records Found</td>
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
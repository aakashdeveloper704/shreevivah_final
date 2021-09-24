<div class="table-responsive">
    <table class="table">
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
                $i = 1;
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
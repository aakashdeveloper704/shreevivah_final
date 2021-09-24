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
                    <a href="{{route('leave.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                        Edit
                    </a>
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
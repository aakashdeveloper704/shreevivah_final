<div class="table-responsive" id="dataTable">
    <table class="table">
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
                $i = 1;
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
                <td>{{$row->company_attachment_document}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->createdBy->full_name}}</td>
                <td>{{$row->active}}</td>
                <td>
                    <a href="{{route('client.edit', ['id' => $row->id])}}" class="btn btn-rounded btn-success">
                        Edit
                    </a>
                    @if($row->active == 1)
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
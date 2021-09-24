<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index', [
            'rows' => Client::active()->paginate(20),
            'totalClients' => Client::active()->count(),
            'totalActiveClients' => Client::activeClients()->active()->count(),
            'totalInactiveClients' => Client::inactiveClients()->active()->count()
        ]);
    }

    public function add()
    {
        return view('client.add');
    }

    public function insert(Request $request)
    {
        $result = Client::insert([
            'company_name' => $request->company_name,
            'company_primary_email' => $request->company_primary_email,
            'company_secondary_email' => $request->company_secondary_email,
            'company_gst_number' => $request->company_gst_number,
            'company_gst_type' => $request->company_gst_type,
            'company_pan_number' => $request->company_pan_number,
            'company_payout_term' => $request->company_payout_term,
            'company_attachment_document' => uploadAttachment($request, "clientAttachment", "company_attachment_document"),
            'company_phone_number' => $request->company_phone_number,
            'company_mobile_number' => $request->company_mobile_number,
            'company_city' => $request->company_city,
            'company_address' => $request->company_address,
            'company_longitude' => $request->company_longitude,
            'company_latitude' => $request->company_latitude,
            'company_active_date' => now(),
            'created_by' => auth()->id()
        ]);

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        return view('client.edit', ['data' => Client::find($id)]);
    }

    public function update(Request $request)
    {
        $result = Client::find($request->id)->update([
            'company_name' => $request->company_name,
            'company_primary_email' => $request->company_primary_email,
            'company_secondary_email' => $request->company_secondary_email,
            'company_gst_number' => $request->company_gst_number,
            'company_gst_type' => $request->company_gst_type,
            'company_pan_number' => $request->company_pan_number,
            'company_payout_term' => $request->company_payout_term,
            'company_attachment_document' => uploadAttachment($request, "clientAttachment", "company_attachment_document"),
            'company_phone_number' => $request->company_phone_number,
            'company_mobile_number' => $request->company_mobile_number,
            'company_city' => $request->company_city,
            'company_address' => $request->company_address,
            'company_longitude' => $request->company_longitude,
            'company_latitude' => $request->company_latitude
        ]);

        return redirect()->route('client.index');
    }

    public function disable($id)
    {
        $result = Client::find($id)->update([
            'active' => 0
        ]);

        return redirect()->route('client.index');
    }

    public function enable($id)
    {
        $result = Client::find($id)->update([
            'active' => 1
        ]);

        return redirect()->route('client.index');
    }

    public function getByType(Request $request)
    {
        if($request->type == 2)
        {
            return view('client.ajax.clientTypes', [
                'rows' => Client::activeClients()->paginate(20)
            ]);
        }

        return view('client.ajax.clientTypes', [
            'rows' => Client::inactiveClients()->paginate(20)
        ]);
    }

    public function downloadAttachment($filename)
    {
        return response()->download(storage_path("app/public/clientAttachment/{$filename}"));
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

function uploadAttachment(Request $request, $directory, $inputName)
{
	if($request->hasFile($inputName))
	{
        $baseStoragePath = "app/public/";
        
        $name = time() * rand().'.'.$request->file($inputName)->getClientOriginalExtension();

        $request->file($inputName)->move(storage_path($baseStoragePath . $directory), $name);

        if(isset($request->old_attachment_name) && !empty($request->old_attachment_name) && file_exists($baseStoragePath . $directory . $request->old_attachment_name))
        {
        	unlink(storage_path($baseStoragePath . $directory . $request->old_attachment_name));
        }

        return $name;
    }
}

function randomString()
{
    return substr(bin2hex(random_bytes(10)), 0, 10);
}
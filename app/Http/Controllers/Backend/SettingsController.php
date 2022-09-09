<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.settings.index');
    }

    public function create()
    {
        return view('backend.settings.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        try {
            $validated = $request->validate([
                'name' => 'required',
                'content' => 'required',
            ]);
            Settings::create([
                'name' => $request->name,
                'content' => $request->content,
            ]);
            return Redirect::back()->withSuccess();
        } catch (Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return Redirect::back();
        }
    }
}

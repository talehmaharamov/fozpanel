<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Redirect;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('backend.permissions.index', compact('permissions'));
    }

    public function create()
    {

        return view('backend.permissions.create');

    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'guardName' => 'required',
            ]);
            Permission::create([
                'name' => $request->name,
                'guard_name' => $request->guardName
            ]);
            return Redirect::back()->withSuccess();

        } catch (Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return Redirect::back();
        }
    }

    public function edit($language, $permission)
    {
        $perOne = Permission::findById(intval($permission));
        return view('backend.permissions.edit', compact('perOne'));
    }
}

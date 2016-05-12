<?php

namespace app\Http\Controllers\Admin;

use app\Http\Controllers\Controller;
use app\Http\Requests;
use Illuminate\Http\Request;

use app\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPermission(Request $request)
    {
        if($request->isMethod('post'))
        {
            //validate request data
            $this->validate($request, [
                'name' => 'required|max:255',
                'display_name' => 'required|max:255',
                'description' => 'required|max:255'
            ]);

            //add role
            $permission = new Permission();
            $permission->name = $request->input('name');
            $permission->display_name = $request->input('display_name');
            $permission->description = $request->input('description');
            $permission->save();
            //redirect to manage-roles route
            return redirect('admin/manage-roles')->withErrors('!success!Permission '.$permission->name.' added successfully!');
        }
        else
        {
            return view('admin.permissions.add-permission');
        }
    }

    public function editPermission(Request $request, $id)
    {
        $permission = Permission::find($id);
        if($request->isMethod('post'))
        {
            //validate request data
            $this->validate($request, [
                'name' => 'required|max:255',
                'display_name' => 'required|max:255',
                'description' => 'required|max:255'
            ]);

            //update role
            $permission->name = $request->input('name');
            $permission->display_name = $request->input('display_name');
            $permission->description = $request->input('description');
            $permission->save();
            //redirect to manage-roles route
            return redirect('admin/manage-roles')->withErrors('!success!Permission '.$permission->name.' updated successfully!');
        }
        else
        {
            return view('admin.permissions.edit-permission')->with(['permission' => $permission]);
        }
    }

    public function deletePermission(Request $request, $id)
    {
        $permission = Permission::find($id);
        if($request->isMethod('post'))
        {
            //delete role
            $permission->delete();

            //redirect to manage-roles route
            return redirect('admin/manage-roles')->withErrors('!success!Permission '.$permission->name.' deleted successfully!');
        }
        else
        {
            return view('admin.permissions.delete-permission')->with(['permission' => $permission]);
        }
    }
}

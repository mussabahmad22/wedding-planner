<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use App\Models\Package;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){

        return view('admin.auth.login');
    }

    public function dashboard(Request $request){

        return view('admin.dashboard');
    }

    public function users(){

        $users =  User::all();
        return view('admin.users',compact('users'));
    }

    public function index(){

        $url = url('admin/add_packages');
        $title = 'Add New Package';
        $text = 'Save';
        return view('admin.add_packages', compact('url', 'title', 'text'));
    }

    public function add_packages(Request $request){

        $package = new Package();
        $package->event_title = $request['event_title'];
        $package->event_details = $request['event_details'];
        $package->amount = $request['amount'];
        $package->amount_desc = $request['amount_desc'];
        // $package->save_amount = $request['save_amount'];
        // $package->saving_amount_details = $request['save_amount_details'];
        // $package->event_capacity_details = $request['event_capacity_details'];
        // $package->total_events = $request['total_events'];
        // $package->users_details = $request['user_details'];
        // $package->total_users = $request['total_users'];
        $package->save();
        return redirect(route('admin.all_packages',compact('package')))->with('success', 'Package Added successfully');

    }

    public function packages(){

        $packages =  Package::all();
        return view('admin.all_packages',compact('packages'));
    }  

    public function edit($id){

        $record = Package::find($id);
        $url = url('admin/update_package') ."/". $id;
        $title = 'Edit Package';
        $text = 'Update';
        return view('admin.add_packages', compact('record', 'url', 'title', 'text'));

    }

    public function delete($id){

        $data = Package::find($id);
        $data->delete(); //returns true/false
        return redirect('admin/all_packages')->with('success', 'Package Deleted successfully');
    } 

    public function update($id, Request $request){

        $package = Package::find($id);
        $package->event_title = $request['event_title'];
        $package->event_details = $request['event_details'];
        $package->amount = $request['amount'];
        $package->amount_desc = $request['amount_desc'];
        // $package->save_amount = $request['save_amount'];
        // $package->saving_amount_details = $request['save_amount_details'];
        // $package->event_capacity_details = $request['event_capacity_details'];
        // $package->total_events = $request['total_events'];
        // $package->users_details = $request['user_details'];
        // $package->total_users = $request['total_users'];
        $package->save();
        return redirect('admin/all_packages')->with('success', 'Package Updated successfully');
    }

}

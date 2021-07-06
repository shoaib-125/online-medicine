<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\User;
use App\UsersRole;
use App\PublishName;
use DB;
use Auth;

class DoctorController extends Controller
{
    public function index(){

        $roles = new UsersRole();

        if(Auth::user()->user_role->slug == "superadmin"){

            $roles  = UsersRole::all();

        }elseif (Auth::user()->user_role->slug == "admin") {

            $roles  = UsersRole::where('slug','=','stuff')->orWhere('slug','=','customer')->get();

        }else{

            $roles  = UsersRole::where('slug','=','customer')->get();

        }

        $publish = PublishName::all();

        return view('admin.Doctors.add',['roles' => $roles, 'publish' => $publish]);
    }

    public function save(Request $request){

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'image' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required|min:11|digits_between: 11,13',
        ]);

        $datas = new Doctor();

        $datas->first_name = $request->firstname;

        $datas->last_name = $request->lastname;

        $datas->email = $request->email;

        $datas->phone_no = $request->phone;

        $datas->address = $request->address;

        $datas->city = $request->city;

        $datas->image = 'image';

        $findVal = Doctor::where('email' , '=', $request->email)->first();

        if(empty($findVal)) {

            $datas->save();

            $imgInfo = $request->file('image');

            if(isset($imgInfo)){

                $lastId = $datas->id;

                $imgInfo = $imgInfo;

                $imgName = $lastId.$imgInfo->getClientOriginalName();

                $folderName = 'projectImage/doctors/';

                $imgInfo->move($folderName, $imgName);

                $imgUrl = $folderName.$imgName;

                // update image name
                $medImg = User::find($lastId);

                $medImg->image = $imgUrl;

                $medImg->save();

            }

            return redirect('/doctors/add')->with('message','Inserted Successfully.');

        } else{

            return redirect('/doctors/add')->with('error','Already Exists.');

        }
    }

    public function update(Request $request){

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            //'image' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required|min:11|digits_between: 11,13',
        ]);

        $datas = Doctor::find($request->id);

        $datas->first_name = $request->firstname;

        $datas->last_name = $request->lastname;

        $datas->phone_no = $request->phone;

        $datas->address = $request->address;

        $datas->city = $request->city;

        $dataExists = Doctor::where('id', $request->id)->first();

        if(!empty($dataExists) && $request->id != $dataExists->id) {

            return redirect('/doctors/edit/'.$request->id.'')->with('error',''.$request->first_name.' Has Already Been Taken.');

        }

        if(!empty($datas)) {

            $imgInfo = $request->file('image');

            $datas->save();

            if(isset($imgInfo)){

                if(file_exists($datas->image)){

                    unlink($datas->image);

                }

                $lastId = $request->id;

                $imgInfo = $request->file('image');

                $imgName = $lastId.$imgInfo->getClientOriginalName();

                $folderName = 'projectImage/doctors/';

                $imgInfo->move($folderName, $imgName);

                $imgUrl = $folderName.$imgName;

                // update image name
                $medImg = Doctor::find($lastId);

                $medImg->image = $imgUrl;

                $medImg->save();
            }

            return redirect('/doctors/list')->with('message','Updated Successfully.');

        } else{

            return redirect('/doctors/add')->with('error','Not Updated Successfully.');
        }
    }

    public function delete($id){

        $datas = Doctor::find($id);

        $datas->delete();

        return redirect()->back()->with('message','Deleted Successfully.');

    }

    public function details($id){
        $data = Doctor::where('id', $id)->first();

        return view('admin.Doctors.details',['data' => $data]);

    }

    public function manage()
    {
        $listData = DB::table('doctors')->paginate(5);

        return view('admin.Doctors.manage',['listData' => $listData]);

    }

    public function edit($id){

        $editData = Doctor::where('id', $id)->first();

        $publish = PublishName::all();

        if(Auth::user()->user_role->slug == "superadmin"){

            $roles  = UsersRole::all();

        }elseif (Auth::user()->user_role->slug == "admin") {

            $roles  = UsersRole::where('slug','=','stuff')->orWhere('slug','=','customer')->get();

        }else{

            $roles  = UsersRole::where('slug','=','customer')->get();

        }

        return view('admin.Doctors.add',['editData' => $editData, 'roles' => $roles, 'publish' => $publish]);
    }

    public function getUser($id){

        return $data = Doctor::where('id', $id)->first();

    }
}

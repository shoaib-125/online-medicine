<?php

namespace App\Http\Controllers;

use App\Article;
use App\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\UsersRole;
use App\PublishName;
use DB;
use Auth;

class ArticleController extends Controller
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

        return view('admin.Articles.add',['roles' => $roles, 'publish' => $publish]);
    }

    public function save(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        $datas = new Article();

        $datas->name = $request->name;
        $datas->details = $request->details;
        $datas->save();

        return redirect('/articles/add')->with('message','Inserted Successfully.');
      //  $datas->image = 'image';

       // $findVal = Doctor::where('email' , '=', $request->email)->first();

        /*if(empty($findVal)) {

            $datas->save();

            $imgInfo = $request->file('image');

            if(isset($imgInfo)){

                $lastId = $datas->id;

                $imgName = $lastId.$imgInfo->getClientOriginalName();

                $folderName = 'projectImage/doctors/';

                $imgInfo->move($folderName, $imgName);

                $imgUrl = $folderName.$imgName;

                // update image name
                $medImg = Doctor::find($lastId);

                $medImg->image = $imgUrl;

                $medImg->save();

            }

            return redirect('/doctors/add')->with('message','Inserted Successfully.');

        } else{

            return redirect('/doctors/add')->with('error','Already Exists.');

        }*/
    }

    public function update(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        $datas = Article::find($request->id);

        $datas->name = $request->name;
        $datas->details = $request->details;

        $dataExists = Article::where('id', $request->id)->first();

        if(!empty($dataExists) && $request->id != $dataExists->id) {

            return redirect('/articles/edit/'.$request->id.'')->with('error',''.$request->first_name.' Has Already Been Taken.');

        }

        $datas->save();
        return redirect('/articles/list')->with('message','Updated Successfully.');


       /* if(!empty($datas)) {

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
        }*/
    }

    public function delete($id){

        $datas = Article::find($id);

        $datas->delete();

        return redirect()->back()->with('message','Deleted Successfully.');

    }

    public function details($id){
        $data = Article::where('id', $id)->first();

        return view('admin.Articles.details',['data' => $data]);

    }

    public function manage()
    {
        $listData = DB::table('articles')->paginate(10);

        return view('admin.Articles.manage',['listData' => $listData]);

    }

    public function edit($id){

        $editData = Article::where('id', $id)->first();

        $publish = PublishName::all();

        if(Auth::user()->user_role->slug == "superadmin"){

            $roles  = UsersRole::all();

        }elseif (Auth::user()->user_role->slug == "admin") {

            $roles  = UsersRole::where('slug','=','stuff')->orWhere('slug','=','customer')->get();

        }else{

            $roles  = UsersRole::where('slug','=','customer')->get();

        }

        return view('admin.Articles.add',['editData' => $editData, 'roles' => $roles, 'publish' => $publish]);
    }

    public function getUser($id){

        return $data = Doctor::where('id', $id)->first();

    }
}

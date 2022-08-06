<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facebook;
class Sosial extends Controller
{
    public function facebook(){
$data=Facebook::paginate(5);
        return view('admin.facebook',compact('data'));
    }

    public function Storefacebook(Request $req){
        $data=new Facebook;
        
        $data->url=$req->url;
        $data->save();
        return redirect()->back();
}

public function editfacebook($id){
$data=Facebook::find($id);
return view("admin.editfacebook",["data"=>$data]);
}

public function ufacebook(Request $req){
    $data=Facebook::find($req->id);
  
    $data->url=$req->url;
    $data->save();
    return redirect("Facebook");

}

public function deletefacebook($id){
    $data=Facebook::find($id);
    $data->delete();
    return redirect("Facebook");
    
    
    }
}

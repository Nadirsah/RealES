<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppartnyorlar;

class Pagepartnyor extends Controller
{
    public function ppartnyorlar(){
        $data=Ppartnyorlar::paginate(5);
                return view("admin.Ppartnyorlar",compact('data'));
            }
        
            public function Sppartnyorlar(Request $req){
        $data=new Ppartnyorlar;
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Ppartnyorlarimage",$imagename);
        $data->image=$imagename;
        $data->save();
        return redirect()->back();
        
            }

            public function editppartnyorlar($id){
                $data=Ppartnyorlar::find($id);
                 return view ("admin.editppartnyorlar",["data"=>$data]);
            }
        
            public function uppartnyorlar(Request $req){
                $data=Ppartnyorlar::find($req->id);
                $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Ppartnyorlarimage",$imagename);
        
        $data->image=$imagename;
        $data->save();
        return redirect("PPartnyorlar");
            }
            public function deleteppartnyorlar($id){
                $data=Ppartnyorlar::find($id);
                $data->delete();
                return redirect("PPartnyorlar");
            }


}

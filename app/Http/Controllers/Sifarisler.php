<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageSifarisler;
use App\Models\PageSifarislerComment;

class Sifarisler extends Controller
{

    //video-slide
    public function sifarisler(){
        $data=PageSifarisler::paginate(5);
                return view("admin.sifarisler",compact('data'));
            }
        
            public function SSifarisler(Request $req){
        $data=new PageSifarisler;
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Sifarisimage",$imagename);
        $data->image=$imagename;
        $data->mezmun=$req->coment;
        $data->basliq=$req->text;

        $data->save();
        return redirect()->back();
        
            }

            public function editSifarisler($id){
                $data=PageSifarisler::find($id);
                 return view ("admin.editsifarisler",["data"=>$data]);
            }
        
            public function uSifarisler(Request $req){
                $data=PageSifarisler::find($req->id);
                $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Sifarisimage",$imagename);
        
        $data->image=$imagename;
        $data->mezmun=$req->coment;
        $data->basliq=$req->text;
        $data->save();
        return redirect("Sifarisler");
            }
            public function deleteSifarisler($id){
                $data=PageSifarisler::find($id);
                $data->delete();
                return redirect("Sifarisler");
            }


            //basliq-comment

            public function sifarislercomment(){
                $data=PageSifarislerComment::paginate(5);
                        return view("admin.sifarislercomment",compact('data'));
                    }
                
                    public function SSifarislercomment(Request $req){
                $data=new PageSifarislerComment;
                $data->mezmun=$req->coment;
                $data->basliq=$req->text;
        
                $data->save();
                return redirect()->back();
                
                    }
        
                    public function editSifarislercommnet($id){
                        $data=PageSifarislerComment::find($id);
                         return view ("admin.editsifarislercomment",["data"=>$data]);
                    }
                
                    public function uSifarislercomment(Request $req){
                        $data=PageSifarislerComment::find($req->id);
                       
                $data->mezmun=$req->coment;
                $data->basliq=$req->text;
                $data->save();
                return redirect("SifarislerComment");
                    }
                    public function deleteSifarislercomment($id){
                        $data=PageSifarislerComment::find($id);
                        $data->delete();
                        return redirect("SifarislerComment");
                    }
}

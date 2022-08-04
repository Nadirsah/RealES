<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Eslide;
use App\Models\Emlaksifaris;
use App\Models\HAqqimizda;
use App\Models\Reyler;
use App\Models\Partnyor;



class AdminController extends Controller
{
    // public function index(){
    //      return view ('admin.home');
    // }

    public function user(){
        return view ('admin.user');
   }

public function redirect(){

$usertype=Auth::user()->usertype;

if($usertype=="1"){
    return view("admin.home");
   }
   else{
    return view("admin.user");
   }
}

//Esas->Slide

public function slide(){
$data=Eslide::paginate(2);
    return view("admin.Eslide",compact("data"));
}

public function sslide(Request $req){
    $data=new Eslide; 
    $image=$req->image;
    $imagename=time().".".$image->getClientOriginalExtension();
    $req->image->move("Eslideimage",$imagename);
    
    $data->image=$imagename;
    $data->save();
    return redirect()->back();

}

public function editSlide($id){
$data=Eslide::find($id);
    return view("admin.editslide",["data"=>$data]);
}

public function updateslide(Request $req){

$data=Eslide::find($req->id);
$image=$req->image;
    $imagename=time().".".$image->getClientOriginalExtension();
    $req->image->move("Eslideimage",$imagename);

    $data->image=$imagename;
    $data->save();
    return redirect("slide");


}

public function deleteslide($id){

    $data=Eslide::find($id);

    $data->delete();
    return redirect("slide");
    

}

//Esas->Emlak sifarisi

public function emlaksifarisi(){
    $data=Emlaksifaris::paginate(5);
        return view("admin.Emlaksifaris",compact("data"));
    }
    
    public function semlaksifaris(Request $req){
        $data=new Emlaksifaris; 
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Emlaksifarisimage",$imagename);
        
        $data->image=$imagename;
        $data->text=$req->text;
        $data->save();
        return redirect()->back();
    
    }

    public function editemlak($id){

        $data=Emlaksifaris::find($id);

        return view('admin.editemlak',["data"=>$data]);

    }

    public function uemlaksifaris(Request $req){

        $data=Emlaksifaris::find($req->id);{
            $image=$req->image;
            $imagename=time().".".$image->getClientOriginalExtension();
            $req->image->move("Emlaksifarisimage",$imagename);
            
            $data->image=$imagename;
            $data->text=$req->text;
            $data->save();
            return redirect('Emlaksifaris');

        }
    }

    public function deleteemlak($id){
        $data=Emlaksifaris::find($id);
        $data->delete();
        return redirect('Emlaksifaris');

    }

    //haqqimizda

    public function haqqimizda(){
$data=HAqqimizda::paginate(5);
        return view("admin.haqqimizda",compact('data'));
    }

    public function Shaqqimizda(Request $req){

$data=new HAqqimizda;

$image=$req->image;
$imagename=time().".".$image->getClientOriginalExtension();
$req->image->move("haqqimizdaimage",$imagename);

$data->image=$imagename;
$data->text=$req->text;
$data->save();
return redirect()->back();

    }
    public function edithaqqimizda($id){
        $data=HAqqimizda::find($id);
         return view ("admin.edithaqqimizda",["data"=>$data]);
    }

    public function uhaqqimizda(Request $req){
        $data=HAqqimizda::find($req->id);
        $image=$req->image;
$imagename=time().".".$image->getClientOriginalExtension();
$req->image->move("haqqimizdaimage",$imagename);

$data->image=$imagename;
$data->text=$req->text;
$data->save();
return redirect("Haqqimizda");
    }
    public function deletehaqqimizda($id){
        $data=HAqqimizda::find($id);
        $data->delete();
        return redirect("Haqqimizda");
    }


    //comment
    public function reyler(){
        $data=Reyler::paginate(5);
                return view("admin.reyler",compact('data'));
            }
        
            public function Sreyler(Request $req){
        
        $data=new Reyler;
        
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("reylerimage",$imagename);
        
        $data->image=$imagename;
        $data->name=$req->name;
        $data->comment=$req->comment;
        $data->save();
        return redirect()->back();
        
            }

            public function editreyler($id){
                $data=Reyler::find($id);
                 return view ("admin.editreyler",["data"=>$data]);
            }
        
            public function ureyler(Request $req){
                $data=Reyler::find($req->id);
                $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("reylerimage",$imagename);
        
        $data->image=$imagename;
        $data->name=$req->name;
        $data->comment=$req->comment;
        $data->save();
        return redirect("Reyler");
            }
            public function deletereyler($id){
                $data=Reyler::find($id);
                $data->delete();
                return redirect("Reyler");
            }

            //partnyorlar
            public function partnyorlar(){
                $data=Partnyor::paginate(5);
                        return view("admin.partnyorlar",compact('data'));
                    }
                
                    public function Spartnyorlar(Request $req){
                $data=new Partnyor;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Partnyorlarimage",$imagename);
                $data->image=$imagename;
                $data->save();
                return redirect()->back();
                
                    }

                    public function editpartnyorlar($id){
                        $data=Partnyor::find($id);
                         return view ("admin.editpartnyorlar",["data"=>$data]);
                    }
                
                    public function upartnyorlar(Request $req){
                        $data=Partnyor::find($req->id);
                        $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Partnyorlarimage",$imagename);
                
                $data->image=$imagename;
                $data->save();
                return redirect("Partnyorlar");
                    }
                    public function deletepartnyorlar($id){
                        $data=Partnyor::find($id);
                        $data->delete();
                        return redirect("Partnyorlar");
                    }

}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eslide;
use App\Models\Emlaksifaris;
use App\Models\HAqqimizda;
use App\Models\Reyler;
use App\Models\Partnyor;
use App\Models\Video;
use App\Models\Gosterici;
use App\Models\Gallery;
use App\Models\Hpartnyorlar;
use App\Models\Ppartnyorlar;
use App\Models\PageSifarisler;
use App\Models\PageSifarislerComment;
use App\Models\Adress;
use App\Models\Phone;
use App\Models\Email;
use App\Models\Employe;
use App\Models\Facebook;





class REScontroller extends Controller
{
    public function index(){
$data=Eslide::all();
$basa=Emlaksifaris::all();
$item=HAqqimizda::where('id',1)->first();
$rey=Reyler::all();
$partnyor=Partnyor::all();
        return view('index',compact('data',"basa",'item',"rey","partnyor"));
    }

    public function haqqimizda(){
        $data=Video::where('id',1)->first();
        $gosterici=Gosterici::all();
        $gallery=Gallery::all();
        $hpartnyor=Hpartnyorlar::all();
        return view("Haqqimizda",compact('data','gosterici','gallery',"hpartnyor"));
    }

    public function partnyorlar(){
        $ppartnyor=Ppartnyorlar::all();
        return view("Partnyorlar",compact("ppartnyor"));
    }

    public function sifarisler(){
        $order=PageSifarisler::all();
        $comment=PageSifarislerComment::where('id',3)->first();
        return view("Sifarisler",compact("order","comment"));
    }

    public function contact(){
$adress=Adress::where('id',2)->first();
$phone=Phone::where('id',1)->first();
$email=Email::where('id',1)->first();
        return view("Contact",compact('adress','phone','email'));
    }


public function employe(Request $req){

$data=new Employe;

$req->validate([
"name"=>"required",
"busines"=>"required",
"job"=>"required",
"person"=>"required",
"phone"=>"required",
]);

$data->name=$req->name;
$data->busines=$req->busines;
$data->job=$req->job;
$data->person=$req->person;
$data->phone=$req->phone;

$data->save();

return redirect()->back()->with('message',"Success!");
}

public function adminemploye(){
$data=Employe::paginate(5);
    return view('admin.employe',compact('data'));
}

public function footer(){
$data=Facebook::where('id',1)->first();

    return view("footer",compact('data'));
}
}

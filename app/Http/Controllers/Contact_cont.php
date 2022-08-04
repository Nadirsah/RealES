<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Adress;
use App\Models\Phone;
use App\Models\Email;
use Illuminate\Support\Facades\Validator;


class Contact_cont extends Controller
{
public function admincontact(){
$data=Contact::paginate(5);
    return view('admin.contact',compact('data'));
}
    public function contact(Request $req){
$req->validate([
"name"=>'required',
"email"=>'required',
"text"=>'required'


]);



$data=new Contact;

$data->name=$req->name;
$data->email=$req->email;
$data->text=$req->text;
$data->save();

return redirect()->back();
    }

//adress
    public function adress(){
$data=Adress::paginate(5);
        return view('admin.adress',compact('data'));
    }

    public function Storeadress(Request $req){

        $data=new Adress;
        
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("Adresimage",$imagename);
        $data->image=$imagename;
        $data->adress=$req->adress;
       
        $data->save();

        return redirect()->back();

}

public function editadress($id){

$data=Adress::find($id);

return view("admin.editadress",["data"=>$data]);


}

public function uadress(Request $req){
    
    $data=Adress::find($req->id);

    $image=$req->image;
    $imagename=time().".".$image->getClientOriginalExtension();
    $req->image->move("Adresimage",$imagename);
    
    $data->image=$imagename;
    $data->adress=$req->adress;
    

    $data->save();

    return redirect("Address");

}

public function deleteadress($id){

    $data=Adress::find($id);

    $data->delete();
    
    return redirect("Address");
    
    
    }


    //phone

    public function phone(){
        $data=Phone::paginate(5);
                return view('admin.phone',compact('data'));
            }
        
            public function Storephone(Request $req){
                $data=new Phone;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Phoneimage",$imagename);
                $data->image=$imagename;
                $data->tel=$req->tel;
                $data->save();
                return redirect()->back();
        }
        
        public function editphone($id){
        $data=Phone::find($id);
        return view("admin.editphone",["data"=>$data]);
        }
        
        public function uphone(Request $req){
            $data=Phone::find($req->id);
            $image=$req->image;
            $imagename=time().".".$image->getClientOriginalExtension();
            $req->image->move("Phoneimage",$imagename);
            $data->image=$imagename;
            $data->tel=$req->tel;
            $data->save();
            return redirect("Phone");
        
        }
        
        public function deletephone($id){
            $data=Phone::find($id);
            $data->delete();
            return redirect("Phone");
            
            
            }
        

            //email

    public function email(){
        $data=Email::paginate(5);
                return view('admin.email',compact('data'));
            }
        
            public function Storeemail(Request $req){
                $data=new Email;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Emailimage",$imagename);
                $data->image=$imagename;
                $data->email=$req->email;
                $data->save();
                return redirect()->back();
        }
        
        public function editemail($id){
        $data=Email::find($id);
        return view("admin.editemail",["data"=>$data]);
        }
        
        public function uemail(Request $req){
            $data=Email::find($req->id);
            $image=$req->image;
            $imagename=time().".".$image->getClientOriginalExtension();
            $req->image->move("Emailimage",$imagename);
            $data->image=$imagename;
            $data->email=$req->email;
            $data->save();
            return redirect("Email");
        
        }
        
        public function deleteemail($id){
            $data=Email::find($id);
            $data->delete();
            return redirect("Email");
            
            
            }
        

}

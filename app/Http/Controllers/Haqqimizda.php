<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Gosterici;
use App\Models\Gallery;
use App\Models\Hpartnyorlar;


class Haqqimizda extends Controller
{
    public function about(){
        $data=Video::all();
            return view("admin.video",compact("data"));
        }

        public function svideo(Request $req){

            $data=new Video;

            $image=$req->image;
            $imagename=time().".".$image->getClientOriginalExtension();
            $req->image->move("Aboutimage",$imagename);
            
            $data->video=$imagename;
            $data->text=$req->text;
            $data->basliq=$req->name;

            $data->save();

            return redirect()->back();

        }

        public function editvideo($id){

            $data=Video::find($id);

            return view("admin.editvideo",["data"=>$data]);
        }


      public function uvideo(Request $req){

            $data=Video::find($req->id);

            $image=$req->image;
            $imagename=time().".".$image->getClientOriginalExtension();
            $req->image->move("Aboutimage",$imagename);
            
            $data->video=$imagename;
            $data->text=$req->text;
            $data->basliq=$req->name;

            $data->save();

            return redirect("AdminHaqqimizda");

        }

        public function deletevideo($id){

            $data=Video::find($id);
            $data->delete();

            return redirect("AdminHaqqimizda");
        }

        //gosterici

        public function gosterici(){
            $data=Gosterici::all();
                return view("admin.gosterici",compact("data"));
            }
    
            public function sgosterici(Request $req){
                $data=new Gosterici;
    
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Gostericiimage",$imagename);
                $data->image=$imagename;
                $data->text=$req->text;
                $data->eded=$req->eded;
                $data->save();
    
                return redirect()->back();
    
            }

            public function editgosterici($id){

                $data=Gosterici::find($id);
    
                return view("admin.editgosterici",["data"=>$data]);
            }
    
    
          public function ugosterici(Request $req){
    
                $data=Gosterici::find($req->id);
    
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("Gostericiimage",$imagename);
                
                $data->image=$imagename;
                $data->text=$req->text;
                $data->eded=$req->eded;
    
                $data->save();
    
                return redirect("Admingosterici");
    
            }
    
            public function deletegosterici($id){
    
                $data=Gosterici::find($id);
                $data->delete();
    
                return redirect("Admingosterici");
            }
    

            //gallery

            public function gallery(){
                $data=Gallery::all();
                    return view("admin.gallery",compact("data"));
                }
        
                public function sgallery(Request $req){
                    $data=new Gallery;
        
                    $image=$req->image;
                    $imagename=time().".".$image->getClientOriginalExtension();
                    $req->image->move("Galleryimage",$imagename);
                    $data->image=$imagename;
                    
                    $data->save();
        
                    return redirect()->back();
        
                }

                public function editgallery($id){

                    $data=Gallery::find($id);
        
                    return view("admin.editgallery",["data"=>$data]);
                }
        
        
              public function ugallery(Request $req){
        
                    $data=Gallery::find($req->id);
        
                    $image=$req->image;
                    $imagename=time().".".$image->getClientOriginalExtension();
                    $req->image->move("GAlleryimage",$imagename);
                    
                    $data->image=$imagename;
                    
        
                    $data->save();
        
                    return redirect("Admingallery");
        
                }
        
                public function deletegallery($id){
        
                    $data=Gallery::find($id);
                    $data->delete();
        
                    return redirect("Admingallery");
                }
        

                //haq-partnyrolar

                public function hpartnyorlar(){
                    $data=Hpartnyorlar::paginate(5);
                            return view("admin.Hpartnyorlar",compact('data'));
                        }
                    
                        public function Shpartnyorlar(Request $req){
                    $data=new Hpartnyorlar;
                    $image=$req->image;
                    $imagename=time().".".$image->getClientOriginalExtension();
                    $req->image->move("Hpartnyorlarimage",$imagename);
                    $data->image=$imagename;
                    $data->save();
                    return redirect()->back();
                    
                        }
    
                        public function edithpartnyorlar($id){
                            $data=Hpartnyorlar::find($id);
                             return view ("admin.edithpartnyorlar",["data"=>$data]);
                        }
                    
                        public function uhpartnyorlar(Request $req){
                            $data=Hpartnyorlar::find($req->id);
                            $image=$req->image;
                    $imagename=time().".".$image->getClientOriginalExtension();
                    $req->image->move("Hpartnyorlarimage",$imagename);
                    
                    $data->image=$imagename;
                    $data->save();
                    return redirect("HPartnyorlar");
                        }
                        public function deletehpartnyorlar($id){
                            $data=Hpartnyorlar::find($id);
                            $data->delete();
                            return redirect("HPartnyorlar");
                        }
    
    
}

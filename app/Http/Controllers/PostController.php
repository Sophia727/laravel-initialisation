<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function home(){
        $post = " ";
        return view("Home", compact('post'));
        
    }

    public function about(){
        $title = "About page";
        return view("About")->with('title',$title);
    }
    
    public function contact(){
        $title = "Contact Page";
        return view("Contact")->with('title',$title);
    }
    public function useId($id){
        $shows = [
            1 => "premier affichage",
            2 => "deuxieme affichage"
        ];
        $how = $shows[$id];
        return view ('display')->with('show', $shows[$id]);
    }

    
}

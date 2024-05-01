<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $datos = null;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Soy el método index"; //GET
        $losblogs= Blog::orderBy('created_at','asc')->get();
        //$losblogs=Blog::all()->orderBy('created_at')->get(); //select*from blog
        //var_dump($losblogs[3]->contenido);
        //dd($losblogs[0]);
        return view("blog",with(['losblogs'=> $losblogs]));
        //localhost:8000/blog
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estateagency.home.secciones.post.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $elPost = new Blog($request->all());
        $elPost->save();
        return redirect()->route('blog.index');
        //dd($request->all());
        //return "Soy el método store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->datos['elpost'] = Blog::find($id);
        return view('elpost',$this->datos);
        //return "Soy el método show con id: " . $id; //GET
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$elBlog= Blog::find($id);
        $this->datos['post']= Blog::find($id);
        $this->datos['mensaje']=Blog::find($id);
        //dd($elBlog);
        return view("estateagency.home.secciones.post.edit", $this->datos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return "Soy el método update";
        $post= Blog::find($id);
        $post->fill($request->all());
        $post->save();
        //return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $elBlog = Blog::find($id);
        $elBlog->delete();
        return redirect()->route('blog.index');
    }
}

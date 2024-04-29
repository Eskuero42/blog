<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ExamenController;
use Illuminate\Support\Facades\Route;

Route::get("/", [BlogController::class, "index"]);

Route::resource('blog', BlogController::class);

/*
Route::get('/', function () {
    return view('blog');
});

Route::get('/blog-blade',function(){
    return view('blog');
});
*/
/*
Route::get('/blog-grid',function(){
    return view('estateagency.pages.blog-grid');
});

Route::get('/agent-single',function(){
    return view('estateagency.pages.agent-single');
});

Route::get('/agents-grid',function(){
    return view('estateagency.pages.agents-grid');
});

Route::get('/blog-single',function(){
    return view('estateagency.pages.blog-single');
});

Route::get('/contact',function(){
    return view('estateagency.pages.contact');
});

Route::get('/property-grid',function(){
    return view('estateagency.pages.property-grid');
});

Route::get('/property-single',function(){
    return view('estateagency.pages.property-single');
});

Route::get('/about',function(){
    $nombres=["Joel","Teresa","Eli"];             //nombre captura para mostrar en la vista
    return view('estateagency.pages.about')->with(['nombres'=>$nombres]);
});

// ruta dimanica con un parametro 
Route::get('/cursos/{id}',function($id){
    return "Bienvenido al curso " . $id;
});

Route::get("blog", [BlogController::class, "index"]);
//Route::resource('blog', BlogController::class);


Route::get('/{id}',function($id){
    return "<html> Bienvendio a carrera: <b> " .$id. "</b> <br>
    Asignatura: <b> ".$id. "</b> </html>";
});

*/
/*Route::get('/{nombre}',function($nombre){
    return view('examen2')->with(['nombres'=>$nombre]);
});
*/
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogsController extends Controller {
    public function blog() {
        $blogs = Blog::all();
        return view('blogs.blog', [
            'blogs' => $blogs
        ]);
    }

    public static function allBlogsForTheHome() {
        $blogs = Blog::all();

        return $blogs;
    }

    public function blogById(int $id) {
        $blog = Blog::findOrFail($id);

        return view('blogs.details', [
            'blog' => $blog
        ]);
    }

    public function adminBlogs() {
        $blogs = Blog::all();

        return view('blogs.adminBlogs', [
            'blogs' => $blogs,
        ]);
    }

    public function showContent(int $id) {
        $blog = Blog::findOrFail($id);

        return view('blogs.blogContenido', [
            'blog' => $blog
        ]);
    }

    // ADMIN

    public function create() {
        return view('blogs.create');
    }

    public function store(Request $request) {
      // Validamos entradas
      $request->validate([
        'titulo' => 'required|min:5|max:255',
        'descripcion' => 'required|max:90',
        'contenido' => 'required',
        'autor' => 'required|max:255'
      ],
      [
        'titulo.required' => 'El título es obligatorio',
        'titulo.min' => 'El título debe tener más de 5 caracteres',
        'titulo.max' => 'El título no debe tener más de 255 caracteres', 
        'descripcion.required' => 'La descripción es obligatoria',
        'descripcion.max' => 'La descripción no debe tener más de 90 caracteres',
        'contenido.required' => 'La descripción es obligatoria',
        'autor.required' => 'El autor es obligatorio',
        'autor.max' => 'El autor no debe tener más de 255 caracteres',
      ]);

      $contenidoLimpio = preg_replace('#<script.*?>.*?</script>#is', '', $request->contenido);


      $data = $request->only('titulo', 'descripcion', 'contenido', 'autor');
      $data['contenido'] = $contenidoLimpio;

      Blog::create($data);

      return to_route('blogs.adminBlogs')
        ->with('feedback.message', 'El blog <b>' . e($data['titulo']) . '</b> se creó con éxito.'); 
    }   

    public function delete(int $id) {
      $blog = Blog::findOrFail($id);
      return view('blogs.delete', [
        'blog' => $blog
      ]);
    }

    public function destroy(int $id) {
      $blog = Blog::findOrFail($id);
      $blog->delete();

      return to_route('blogs.adminBlogs')
        ->with('feedback.message', 'El blog <b>' . e($blog['titulo']) . '</b> se eliminó con éxito.');
    }

    public function edit(int $id) {
      $blog = Blog::findOrFail($id);
      return view('blogs.edit', [
        'blog' => $blog
      ]);
    }

    public function update(Request $request, int $id) {
       $request->validate([
        'titulo' => 'required|min:5|max:255',
        'descripcion' => 'required|max:90',
        'contenido' => 'required',
        'autor' => 'required|max:255'
      ],
      [
        'titulo.required' => 'El título es obligatorio',
        'titulo.min' => 'El título debe tener más de 5 caracteres',
        'titulo.max' => 'El título no debe tener más de 255 caracteres', 
        'descripcion.required' => 'La descripción es obligatoria',
        'descripcion.max' => 'La descripción no debe tener más de 90 caracteres',
        'contenido.required' => 'La descripción es obligatoria',
        'autor.required' => 'El autor es obligatorio',
        'autor.max' => 'El autor no debe tener más de 255 caracteres',
      ]);

       $contenidoLimpio = preg_replace('#<script.*?>.*?</script>#is', '', $request->contenido);


      $data = $request->only('titulo', 'descripcion', 'contenido', 'autor');
      $data['contenido'] = $contenidoLimpio;

      $game = Blog::findOrFail($id);
      $game->update($data);

      return to_route('blogs.adminBlogs')
        ->with('feedback.message', 'El blog <b>' . e($data['titulo']) . '</b> se creó con éxito.'); 
    }



}
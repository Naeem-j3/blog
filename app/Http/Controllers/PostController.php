<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $posts=Post::orderby('updated_at','DESC')->get();
        return view('blog.index',compact('posts'));
    }


    public function create()
    {
        return view('blog.create');
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //     'title'=>'required',
    //     'description'=>'required',
    //     'image_path'=>'required'

    //     ]);
    //     $slug=Str::slug($request['title'],'-');
    //     $newIgeName=uniqid().'-'.$slug.'.'.$request['image_path']->extension();
    //     $request['image_path']->move(public_path('img'),$newIgeName);

    //     Post::create([
    //         'title'=>$request['title'],
    //         'description'=>$request['description'],
    //         'image_path'=> $newIgeName,
    //         'slug'=>$slug,
    //         'user_id'=>Auth::id()
    //     ]);
    //     return redirect()->route('blog.index');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust the validation as needed
        ]);

        $slug = Str::slug($request['title'], '-');

        // Resizing the image
        $image = $request->file('image_path');
        $resizedImage = Image::make($image)->fit(300, 200)->encode('jpg');
        $newImageName = uniqid() . '-' . $slug . '.jpg';
        $resizedImagePath = public_path('img') . '/' . $newImageName;
        file_put_contents($resizedImagePath, $resizedImage);

        Post::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'image_path' => $newImageName,
            'slug' => $slug,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('blog.index');
    }


    public function show($id)
    {
        $post=Post::where('id',$id)->first();

         return view('blog.show',compact('post'));
    }

    public function edit($id)
    {
        $post=Post::where('id',$id)->first();

        return view('blog.edit',compact('post'));
    }


    public function update(Request $request, $id)
    {
         $request->validate([
        'title'=>'required',
        'description'=>'required',
        'image_path'=>'required'
        ]);
        $slug=Str::slug($request['title'],'-');
         // Resizing the image
         $image = $request->file('image_path');
         $resizedImage = Image::make($image)->fit(300, 200)->encode('jpg');
         $newImageName = uniqid() . '-' . $slug . '.jpg';
         $resizedImagePath = public_path('img') . '/' . $newImageName;
         file_put_contents($resizedImagePath, $resizedImage);

        $post=Post::where('id',$id);
        $post->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'image_path'=> $newImageName,
           'slug'=>$slug,
            'user_id'=>Auth::id()
        ]);
        return redirect('blog/')->with('message','updated successfuly');
    }


    public function destroy($id)
    {
     Post::where('id',$id)->delete();
     return redirect('blog')->with('message','deleted successfully');
    }
}

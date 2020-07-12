<?php

namespace App\Http\Controllers;

use App\customer;
use App\post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $post=post::all();
    return view('post/index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=customer::all();
        return view('post/create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $post=new Post([
          // 'title'=>$request->get('title'),
       // 'content'=>$request->get('content'),
          //  'author'=>$request->get('author')
        //]);
       // $post=>Post::($this->validateRequset());
       // $post->save();
        $post=Post::create($this->validateRequset());
        $this->storeImage($post);
        $post->save();
        return redirect('/post');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('/post/show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $customer=Coustomers::all();
        return view('/post/edit',compact('post','customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $post->update($this->validateRequset());
        $this->storeImage($post);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)

    {
        $post->delete();
        return redirect('/post');
    }
    private function validateRequset(){
        return request()->validate([
            'title'=>'required|min:3',
            'content'=>'required|min:5',
            'customer_id'=>'required',
            'image'=>'sometimes|file|image|max:5000'
        ]);
    }
    private function storeImage($post)
    {
        if (request()->has('image')) {
            $post->update([
                'image' => request()->image->store('uploads', 'public')
            ]);

        }
        $image = Image::make(public_path('storage/' . $post -> image))->fit(250, 250);
        $image->save();

    }
 }


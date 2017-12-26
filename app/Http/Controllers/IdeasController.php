<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$idea= idea::all();
        $idea= idea::orderby('created_at','desc')->paginate(4);
        return view('posts.index')->with('abc',$idea);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'Title' => 'required',
            'Body' => 'required',
        ]);
        
        $idea=new idea;
        $idea->Title=$request->input('Title');
        $idea->Body=$request->input('Body');
        $idea->save();

        return redirect('/ideas')->with('success','post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea=Idea::find($id);
        //return "hello";
        return view('posts.show')->with('idea',$idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idea=Idea::find($id);
        return view('posts.edit')->with('idea',$idea);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Title' => 'required',
            'Body' => 'required',
        ]);
        
        $idea=idea::find($id);
        $idea->Title=$request->input('Title');
        $idea->Body=$request->input('Body');
        /*$idea->created_at=$request->input('date');
        $idea->updated_at=$request->input('date');*/
        $idea->save();

        return redirect('/ideas')->with('success','Post Updates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $idea=idea::find($id);
       if ($idea != null)
        {
           $idea->DELETE();
           return redirect('/ideas')->with('success','Post Removed');
        }
         return redirect('/ideas')->with('success','Post Removed');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class StarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index()
        {
            $data = star::paginate(5);
            return view('stars.index',compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO image extension
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
            'profileimage' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
   
        star::create($request->all());            
        
        $profileimage = $request->file('profileimage');
        $extension = $profileimage->getClientOriginalExtension();
                //TODO image extension
        Storage::disk('public')->put($request->prenom.$request->nom.'.'.$extension,  File::get($profileimage));

        return redirect()->route('stars.index')
                        ->with('success','star created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $star=star::findOrFail($id);
        return view('stars.show',compact('star'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $star=star::findOrFail($id);
        return view('stars.edit',compact('star'));
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
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'description' => 'required',
                'profileimage'=> 'required',
            ]);
            $input = $request->all();
            $stars = star::findOrFail($id);
            $stars->fill($input)->save();
    
        return redirect()->route('stars.index')
                        ->with('success','star updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $star=star::findOrFail($id);
        $star->delete();
        return redirect()->route('stars.index')
                        ->with('success','star deleted successfully');
    }
}

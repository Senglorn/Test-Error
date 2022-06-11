<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\category;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index(){
        if(session()->get('success')) {
            Alert::success('Create Success!', 'Category has been Created Successfully!');
        }

        // $categories = category::orderBy('id', 'DESC')->paginate(10);
        $categories = category::orderBy('id', 'DESC')->paginate(10);
        return view('categories.list')->with('category', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $varidated_date = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);
        category::create($varidated_date);
        // use with method should have key and value, success is key and title is value, thought key success and value to function index on top then study conditional 
        return redirect()->route('categories.index')->with('success', 'Category has been added Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Request $request)
    // {
    //     //
    //     $categories = Category::find($request->id);
    //     // Session::put('id', $request->id);
    //     return view('categories.edit')->with('category', $categories);
    // }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
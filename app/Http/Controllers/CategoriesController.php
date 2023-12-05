<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        // dd($categories);

        return view('admin.categories.index')->with('categories', $categories);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $categories = new Categories();
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories');
    }


    public function show($id)
    {
        //Grab keda
        // I added admin. because categories are inside Admin Folder ... understood ? tmam bos keda 3la web.php
        $category = Categories::where('id', $id)->firstOrFail();

        return view('admin.categories.show',compact('category'));
    }


    public function edit($id)
    {
        $category = Categories::where('id', $id)->firstOrFail();

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);

         $categories = Categories::find($id);
         $categories->name = $request->name ;
         $categories->save();
        return redirect()->route('categories');
    }

    public function destroy(Categories $categories , $id)
    {
        // $categories = Categories::find($id)->delete();
         $categories= Categories::find($id);
        $categories->delete();
        return redirect()->route('categories');
    }
}

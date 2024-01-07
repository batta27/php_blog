<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 

        // dd($request->all());
        //mass assignment
        $request->validate([

             'name' => 'required|min:4',
             'img' => 'required|image',
             'description' => 'required|max:200|min:4',

        ]);

        Category::create([
            'name' => $request->name,
            'img' => $request->file('img')->store('public/image'),
            'description' => $request->description,
        ]);
        return redirect()->back()->with('message', "Hai creato la categoria: $request->name");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd:($request->all());
        if($request->file('img')){
            $img = $request->file('img')->store('public/image');
        }
        else{
            $img = $category->img;
        }
        
        $category->update([
            'name' => $request->name,
            'img' => $img,
            'description' => $request->description,
        ]);
        // dd($category);
        return redirect()->back()->with('message','Categoria Modifica');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        
        return redirect(route('category.index'))->with('message','la categoria è stata eliminata');
    }
}

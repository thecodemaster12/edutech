<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['name' => Str::title($request->name)]);

        $request->validate([
            'name' => 'required|unique:categories,name|max:100',
        ]);

        $author = Auth::user()->name . ", " .Auth::user()->role;

        $category = new Category();
        $category->name = $request->name;
        $category->author = $author;
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->merge(['name' => Str::title($request->name)]);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id . '|max:100',
        ]);

        $author = Auth::user()->name . ", " .Auth::user()->role;

        $category->name = $request->name;
        $category->author = $author;
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');
        // return response()->json(['message' => 'Category deleted successfully']);
    }
}

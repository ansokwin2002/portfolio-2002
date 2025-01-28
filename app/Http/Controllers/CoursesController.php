<?php

namespace App\Http\Controllers;

use App\DataTables\CoursesDataTable;
use App\Models\Courses;
use Illuminate\Http\Request;
use Str;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CoursesDataTable $dataTable)
    {
        return $dataTable->render('admin.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required', 'image'],
            'url'   => ['required','url'],
            'description' => ['string']
        ]);

        $courses = new Courses();

        $ImageUpload = $request->file('image');
        if ($ImageUpload) {
            $pathImage = $ImageUpload->store('Images_Path', 'public');
            $courses->image = $pathImage;
        }  
        $courses->title = $request->title;
        $courses->slug  = Str::slug($request->title);
        $courses->url   = $request->url;
        $courses->description = $request->description;

        $courses->save();
        toastr()->success('Created Course Successfully!');
        return back();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        //
    }
}

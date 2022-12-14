<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Utils\UploadingUtils;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $video = "";
        $picture = "";
        $poster = "";
        $article = "";

        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $request->validate(['video' => 'max:20480']);
            $video = UploadingUtils::storeImage($request->video, 'uploads/videos');
        }

        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $request->validate(['picture' => 'max:20480']);
            $picture = UploadingUtils::storeImage($request->picture, 'uploads/pictures');
        }

        if ($request->hasFile('poster') && $request->file('poster')->isValid()) {
            $request->validate(['poster' => 'max:20480']);
            $poster = UploadingUtils::storeImage($request->poster, 'uploads/posters');
        }

        if ($request->hasFile('article') && $request->file('article')->isValid())
            $request->validate(['article' => 'max:20480']); {
            $article = UploadingUtils::storeImage($request->article, 'uploads/articles');
        }

        if (Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'age' => $request->age,
            'region' => $request->region,
            'mobile' => $request->mobile,
            'job' => $request->job,
            'id_card' => $request->id_card,
            'video' => $video,
            'picture' => $picture,
            'poster' => $poster,
            'article' => $article,
        ]))
            // dd('Registered Successfully');
            return back()->with('success', 'Thank you, your request has been sent successfully');
        return back()->with('error', 'Oops ! <br> an error occured while register your information');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}

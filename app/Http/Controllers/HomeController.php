<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'students' => Student::all()
        ]);
    }

    public function destroy($id)
    {
        if (Student::find($id)->delete())
            return back()->with('success', 'Student Deleted Successfully');
        return back()->with('error', 'Oops ! <br> an error occured while deleting student');
    }
}

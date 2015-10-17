<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CourseRequest;
use App\Course;

class CoursesController extends Controller
{
    //Show a list of all courses in the database
    /**
     * @return \Illuminate\View\View
     */
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    //show a specific course identified by their course id
    /**
     * @param $course_id
     * @return \Illuminate\View\View
     */
    public function show($course_id){
        $course = Course::findOrFail($course_id);
        return view('courses.show',compact('course'));
    }

    //create a new course
    /**
     * @return \Illuminate\View\View
     */
    public function create(){
        return view('courses.create');
    }

    //send a newly created course to the database
    /**
     * @param CourseRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CourseRequest $request){
        //validation
        //this will never run if validation fails

        Course::create($request->all());
        return redirect('courses');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id){
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    /**
     * @param $id
     * @param CourseRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CourseRequest $request){
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect('courses');
    }
}

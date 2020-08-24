<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

use App\Repositories\CourseRepository;
//use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


class CourseController extends AppBaseController
{
    /** @var  CourseRepository */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
    }


    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     * @return Response
     */
    public function approve(Request $request)
    {
        Course::where('id',$request->course_id)->update(['admin_status'=>1]);
        Flash::success('Course approved successful');
        return redirect()->back();
    }
    public function disapprove(Request $request)
{
    Course::where('id',$request->course_id)->update(['admin_status'=>0]);
    Flash::success('Course disapproved successful');
    return redirect()->back();
}
    public function publishCourse(Request $request)
    {
        Course::where('id',$request->course_id)->update(['creator_status'=>1]);
        Flash::success('Course published successful');
        return redirect()->back();
    }
    public function UnpublishCourse(Request $request)
    {
        Course::where('id',$request->course_id)->update(['creator_status'=>0]);
        Flash::success('Course unpublished successful');
        return redirect()->back();
    }

    public function index(Request $request)
    {
        $this->courseRepository->pushCriteria(new RequestCriteria($request));
        $courses = $this->courseRepository->all();

        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('courses.create')->with('categories',$categories);
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->all();
        $input['user_id']=Auth::user()->id;
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/course_image', $filename);
        $input['photo'] = $filename;
//        $input['photo']=$request->file('photo')->storeAs('public', $filename);
//        $request->file('photo') ->store('public/course_image');

        $course = $this->courseRepository->create($input);

        Flash::success('Course saved successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

//     2   now writing a query to select or show  course  with category_id in courses table is same with category id in category table

        $users=Course::find($id)->users()->get();

//        3  now we want to increment the viws when ever we refresh the page so we import facades  the it use the id ot identify
        DB::table('courses')->where('id',$id)->increment('view_count');
//dd($users);
        return view('courses.show')->with('course', $course)->with('users', $users);
//        return view('courses.show')->with('course', $course->users);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }
        $categories=Category::all();
//        return view('courses.create')->with('categories',$categories);

        return view('courses.edit')->with('course', $course)->with('categories',$categories);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param  int              $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $course = $this->courseRepository->update($request->all(), $id);

        Flash::success('Course updated successfully.');

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error('Course not found');

            return redirect(route('courses.index'));
        }

        $this->courseRepository->delete($id);

        Flash::success('Course deleted successfully.');

        return redirect(route('courses.index'));
    }
}

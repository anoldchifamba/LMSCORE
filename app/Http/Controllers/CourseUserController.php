<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;
use App\Mail\At_academy;
use App\Models\Category;
use App\Models\Course;
use App\Repositories\CourseUserRepository;
use App\Http\Controllers\AppBaseController;
use App\User;
use Illuminate\Http\Request;
use Flash;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;use Auth;

class CourseUserController extends AppBaseController
{
    /** @var  CourseUserRepository */
    private $courseUserRepository;
    protected $token;
    public function __construct(CourseUserRepository $courseUserRepo)
    {
        $this->courseUserRepository = $courseUserRepo;
    }

    /**
     * Display a listing of the CourseUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseUserRepository->pushCriteria(new RequestCriteria($request));
        $courseUsers = $this->courseUserRepository->all();

        return view('course_users.index')
            ->with('courseUsers', $courseUsers);
    }

    /**
     * Show the form for creating a new CourseUser.
     *
     * @return Response
     */
    public function create()
    {
        $categories=Category::all();$courses=Course::all();$users=User::all();
        return view('course_users.create')->with('categories',$categories)->with('courses',$courses)->with('users',$users);
    }

    /**
     * Store a newly created CourseUser in storage.
     *
     * @param CreateCourseUserRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseUserRequest $request)
    {
        $input = $request->all();
        $input['user_account_id']=Auth::user()->id;
        $courseid=$input['course_id'];
        $expiry_date=$input['expiry_date'];
$token=$input['token'];
        $user=User::where('id',$input['user_id'])->get();
        $courseid=Course::where('id',$input['course_id'])->get();
        foreach ($courseid as $course_id) {
            $courseid=$course_id->title;

        foreach ($user as $users) {
            Mail::to($users->email)->send(new At_academy($token,$expiry_date,$courseid ));
        }
        }
        $courseUser = $this->courseUserRepository->create($input);
        DB::table('courses')->where('id', $request->course_id)->increment('subscriber_count');
        Flash::success('Course User saved successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Display the specified CourseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

//        3  now we want to increment the viws when ever we refresh the page so we import facades  the it use the id ot identify
//        DB::table('course_user')->where('id',$id)->increment('view_count');
        return view('course_users.show')->with('courseUser', $courseUser);
    }

    /**
     * Show the form for editing the specified CourseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }
        $categories=Category::all();$courses=Course::all();$users=User::all();
        return view('course_users.edit')->with('courseUser', $courseUser)->with('categories',$categories)->with('courses',$courses)->with('users',$users);
    }

    /**
     * Update the specified CourseUser in storage.
     *
     * @param  int              $id
     * @param UpdateCourseUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseUserRequest $request)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }
        $input = $request->all();
        $input['user_account_id']=Auth::user()->id;
        $courseUser = $this->courseUserRepository->update($input, $id);

        Flash::success('Course User updated successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Remove the specified CourseUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseUser = $this->courseUserRepository->findWithoutFail($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $this->courseUserRepository->delete($id);

        Flash::success('Course User deleted successfully.');

        return redirect(route('courseUsers.index'));
    }
}

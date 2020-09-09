<?php

namespace AT_academy\Http\Controllers;

use AT_academy\Http\Requests\CreateUserRequest;
use AT_academy\Http\Requests\UpdateUserRequest;
use AT_academy\Models\Course;
use AT_academy\Models\Payment;
use AT_academy\Models\Role;
use AT_academy\Repositories\UserRepository;
use AT_academy\Http\Controllers\AppBaseController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('users.create')->with('roles',$roles);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['user_id']=Auth::user()->id;
        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        //     2   now writing a query to select or show  course  with (user_id) in courses table is same with user (id) in users table

        $courses=Course::where('user_id',$user->id)->get();
        $payments=Payment::where('user_id',$user->id)->get();


//        3  now we want to increment the viws when ever we refresh the page so we import facades  the it use the id ot identify
        DB::table('users')->where('id',$id)->increment('view_count');
        return view('users.show')->with('user', $user)->with('courses', $courses)->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $roles=Role::all();
//        return view('users.create')->with('roles',$roles);
        return view('users.edit')->with('user', $user)->with('roles',$roles);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}

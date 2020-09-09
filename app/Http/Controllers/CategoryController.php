<?php

namespace AT_academy\Http\Controllers;

use AT_academy\Http\Requests\CreateCategoryRequest;
use AT_academy\Http\Requests\UpdateCategoryRequest;
use AT_academy\Models\Course;
use AT_academy\Repositories\CategoryRepository;
use AT_academy\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CategoryController extends AppBaseController
{
    /** @var  CategoryRepository */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Category.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoryRepository->pushCriteria(new RequestCriteria($request));
        $categories = $this->categoryRepository->all();

        return view('categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/category_image', $filename);
        $input['photo'] = $filename;

        $category = $this->categoryRepository->create($input);

        Flash::success('Category saved successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }


//        3  now we want to increment the viws when ever we refresh the page so we import facades  the it use the id ot identify
        DB::table('categories')->where('id',$id)->increment('view_count');

//     2   now writing a query to select or show  course  with category_id in courses table is same with category id in category table

        $courses=Course::where('category_id',$category->id)->get();

        return view('categories.show')          //    passing two variables to be shwn on categorypage
        ->with('category', $category)
            ->with('courses', $courses);
    }
    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }
        $input = $request->all();
        
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/category_image', $filename);
        $input['photo'] = $filename;
        $category = $this->categoryRepository->update($input, $id);

        Flash::success('Category updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->findWithoutFail($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        $this->categoryRepository->delete($id);

        Flash::success('Category deleted successfully.');

        return redirect(route('categories.index'));
    }
}

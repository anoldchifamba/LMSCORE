<?php

namespace AT_academy\Http\Controllers;

use AT_academy\Http\Requests\CreateViewsRequest;
use AT_academy\Http\Requests\UpdateViewsRequest;
use AT_academy\Repositories\ViewsRepository;
use AT_academy\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ViewsController extends AppBaseController
{
    /** @var  ViewsRepository */
    private $viewsRepository;

    public function __construct(ViewsRepository $viewsRepo)
    {
        $this->viewsRepository = $viewsRepo;
    }

    /**
     * Display a listing of the Views.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->viewsRepository->pushCriteria(new RequestCriteria($request));
        $views = $this->viewsRepository->all();

        return view('views.index')
            ->with('views', $views);
    }

    /**
     * Show the form for creating a new Views.
     *
     * @return Response
     */
    public function create()
    {
        return view('views.create');
    }

    /**
     * Store a newly created Views in storage.
     *
     * @param CreateViewsRequest $request
     *
     * @return Response
     */
    public function store(CreateViewsRequest $request)
    {
        $input = $request->all();

        $views = $this->viewsRepository->create($input);

        Flash::success('Views saved successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Display the specified Views.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $views = $this->viewsRepository->findWithoutFail($id);

        if (empty($views)) {
            Flash::error('Views not found');

            return redirect(route('views.index'));
        }

        return view('views.show')->with('views', $views);
    }

    /**
     * Show the form for editing the specified Views.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $views = $this->viewsRepository->findWithoutFail($id);

        if (empty($views)) {
            Flash::error('Views not found');

            return redirect(route('views.index'));
        }

        return view('views.edit')->with('views', $views);
    }

    /**
     * Update the specified Views in storage.
     *
     * @param  int              $id
     * @param UpdateViewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateViewsRequest $request)
    {
        $views = $this->viewsRepository->findWithoutFail($id);

        if (empty($views)) {
            Flash::error('Views not found');

            return redirect(route('views.index'));
        }

        $views = $this->viewsRepository->update($request->all(), $id);

        Flash::success('Views updated successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Remove the specified Views from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $views = $this->viewsRepository->findWithoutFail($id);

        if (empty($views)) {
            Flash::error('Views not found');

            return redirect(route('views.index'));
        }

        $this->viewsRepository->delete($id);

        Flash::success('Views deleted successfully.');

        return redirect(route('views.index'));
    }
}

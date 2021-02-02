<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\JobHistoryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateJobHistoryRequest;
use App\Http\Requests\Admin\UpdateJobHistoryRequest;
use App\Repositories\Admin\JobHistoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JobHistoryController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  JobHistoryRepository */
    private $jobHistoryRepository;

    public function __construct(JobHistoryRepository $jobHistoryRepo)
    {
        $this->jobHistoryRepository = $jobHistoryRepo;
        $this->ModelName = 'jobHistories';
        $this->BreadCrumbName = 'Job History';
    }

    /**
     * Display a listing of the JobHistory.
     *
     * @param JobHistoryDataTable $jobHistoryDataTable
     * @return Response
     */
    public function index(JobHistoryDataTable $jobHistoryDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $jobHistoryDataTable->render('admin.job_histories.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new JobHistory.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.job_histories.create');
    }

    /**
     * Store a newly created JobHistory in storage.
     *
     * @param CreateJobHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateJobHistoryRequest $request)
    {
        $input = $request->all();

        $jobHistory = $this->jobHistoryRepository->create($input);

        Flash::success('Job History saved successfully.');

        return redirect(route('admin.jobHistories.index'));
    }

    /**
     * Display the specified JobHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            Flash::error('Job History not found');

            return redirect(route('admin.jobHistories.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $jobHistory);
        return view('admin.job_histories.show')->with('jobHistory', $jobHistory);
    }

    /**
     * Show the form for editing the specified JobHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            Flash::error('Job History not found');

            return redirect(route('admin.jobHistories.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $jobHistory);
        return view('admin.job_histories.edit')->with('jobHistory', $jobHistory);
    }

    /**
     * Update the specified JobHistory in storage.
     *
     * @param  int $id
     * @param UpdateJobHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobHistoryRequest $request)
    {
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            Flash::error('Job History not found');

            return redirect(route('admin.jobHistories.index'));
        }

        $jobHistory = $this->jobHistoryRepository->update($request->all(), $id);

        Flash::success('Job History updated successfully.');

        return redirect(route('admin.jobHistories.index'));
    }

    /**
     * Remove the specified JobHistory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            Flash::error('Job History not found');

            return redirect(route('admin.jobHistories.index'));
        }

        $this->jobHistoryRepository->delete($id);

        Flash::success('Job History deleted successfully.');

        return redirect(route('admin.jobHistories.index'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\MessageDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMessageRequest;
use App\Http\Requests\Admin\UpdateMessageRequest;
use App\Repositories\Admin\MessageRepository;
use App\Repositories\Admin\ThreadMessageRepository;
use App\Repositories\Admin\ThreadRepository;
use App\Repositories\Admin\ThreadUserRepository;
use App\Repositories\Admin\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MessageController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  MessageRepository */
    private $messageRepository;

    /** @var  ThreadRepository */
    private $threadRepository;

    /** @var  ThreadMessageRepository */
    private $threadMessageRepository;

    /** @var  ThreadUserRepository */
    private $threadUserRepository;

    /** @var  UserRepository */
    private $userRepository;

    public function __construct(MessageRepository $messageRepo, ThreadRepository $threadRepo, ThreadMessageRepository $threadMessageRepo, ThreadUserRepository $threadUserRepo, UserRepository $userRepo)
    {
        $this->messageRepository = $messageRepo;
        $this->threadRepository = $threadRepo;
        $this->threadMessageRepository = $threadMessageRepo;
        $this->threadUserRepository = $threadUserRepo;
        $this->userRepository = $userRepo;
        $this->ModelName = 'messages';
        $this->BreadCrumbName = 'Message';
    }

    /**
     * Display a listing of the Message.
     *
     * @param MessageDataTable $messageDataTable
     * @return Response
     */
    public function index(MessageDataTable $messageDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $messageDataTable->render('admin.messages.index');
    }

    /**
     * Show the form for creating a new Message.
     *
     * @return Response
     */
    public function create()
    {
        $users = $this->userRepository->all();
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.messages.create')->with('users', $users);
    }

    /**
     * Store a newly created Message in storage.
     *
     * @param CreateMessageRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageRequest $request)
    {
        $input = $request->all();
        $thread = $this->threadRepository->createRecord($request, $this->threadUserRepository, $this->threadMessageRepository);
        /*//$message = $this->messageRepository->create($input);

/*        if (!isset($input['return_url_id'])) {
            Flash::success('Message saved successfully.');
            return redirect()->back();
            return redirect(route('admin.messages.show', $thread->id));
        } else {
            return redirect()->back();
        }*/
        return redirect()->back();
    }

    /**
     * Display the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');
            return redirect(route('admin.messages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $message);
        return view('admin.messages.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('admin.messages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $message);
        return view('admin.messages.edit')->with('message', $message);
    }

    /**
     * Update the specified Message in storage.
     *
     * @param  int $id
     * @param UpdateMessageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageRequest $request)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('admin.messages.index'));
        }

        $message = $this->messageRepository->update($request->all(), $id);

        Flash::success('Message updated successfully.');

        return redirect(route('admin.messages.index'));
    }

    /**
     * Remove the specified Message from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('admin.messages.index'));
        }

        $this->messageRepository->delete($id);

        Flash::success('Message deleted successfully.');

        return redirect(route('admin.messages.index'));
    }
}

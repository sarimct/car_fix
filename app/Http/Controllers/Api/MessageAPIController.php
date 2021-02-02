<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateMessageAPIRequest;
use App\Http\Requests\Api\UpdateMessageAPIRequest;
use App\Models\Message;
use App\Repositories\Admin\MessageRepository;
use App\Repositories\Admin\ThreadMessageRepository;
use App\Repositories\Admin\ThreadRepository;
use App\Repositories\Admin\ThreadUserRepository;
use App\Repositories\Admin\UdeviceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class MessageController
 * @package App\Http\Controllers\Api
 */
class MessageAPIController extends AppBaseController
{
    /** @var  ThreadRepository */
    private $threadMessageRepository, $threadRepository, $threadUserRepository, $udeviceRepository, $messageRepository;

    public function __construct(ThreadRepository $threadRepo, ThreadUserRepository $threadUserRepo, ThreadMessageRepository $threadMessageRepo, UdeviceRepository $udeviceRepo, MessageRepository $messageRepo)
    {
        $this->threadMessageRepository = $threadMessageRepo;
        $this->threadUserRepository = $threadUserRepo;
        $this->threadRepository = $threadRepo;
        $this->udeviceRepository = $udeviceRepo;
        $this->messageRepository = $messageRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * //@SWG\Get(
     *      path="/messages",
     *      summary="Get a listing of the Messages.",
     *      tags={"Message"},
     *      description="Get all Messages",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      //@SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     //@SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  //@SWG\Items(ref="#/definitions/Message")
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->messageRepository->pushCriteria(new RequestCriteria($request));
        $this->messageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $messages = $this->threadRepository->getThreadsOfUser(Auth::id());

        return $this->sendResponse($messages->toArray(), 'Messages retrieved successfully');
    }

    /**
     * @param CreateMessageAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/messages",
     *      summary="Store a newly created Message in storage",
     *      tags={"Message"},
     *      description="Store Message",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Message that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Message")
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Message"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateMessageAPIRequest $request)
    {
        $thread = $this->threadRepository->createRecord($request, $this->threadUserRepository, $this->threadMessageRepository);

        /*$thread_messages = $this->threadRepository->findWithoutFail($thread->id);

        if (empty($thread_messages)) {
            return $this->sendError('Message not found');
        }

        ///////////////////////////////////////////////////////////////////////////////////
        $input = $request->all();

        $messages = $this->messageRepository->create($input);*/

        return $this->sendResponse($thread->toArray(), 'Message saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * //@SWG\Get(
     *      path="/messages/{id}",
     *      summary="Display the specified Message",
     *      tags={"Message"},
     *      description="Get Message",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Message",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Message"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Message $message */
        $message = $this->threadRepository->findWithoutFail($id);

        if (empty($message)) {
            return $this->sendErrorWithData('Message not found');
        }

        return $this->sendResponse($message->toArray(), 'Message retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateMessageAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/messages/{id}",
     *      summary="Update the specified Message in storage",
     *      tags={"Message"},
     *      description="Update Message",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Message",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Message that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Message")
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Message"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateMessageAPIRequest $request)
    {
        $input = $request->all();

        /** @var Message $message */
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            return $this->sendErrorWithData('Message not found');
        }

        $message = $this->messageRepository->update($input, $id);

        return $this->sendResponse($message->toArray(), 'Message updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * //@SWG\Delete(
     *      path="/messages/{id}",
     *      summary="Remove the specified Message from storage",
     *      tags={"Message"},
     *      description="Delete Message",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Message",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Message $message */
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            return $this->sendErrorWithData('Message not found');
        }

        $message->delete();

        return $this->sendResponse($id, 'Message deleted successfully');
    }
}
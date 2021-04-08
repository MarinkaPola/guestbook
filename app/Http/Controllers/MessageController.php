<?php

namespace App\Http\Controllers;


use App\Http\Resources\MessageResource;
use App\Http\Resources\MessageResourceCollection;
use App\Models\Message;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Middleware\VerifyCsrfToken;
class MessageController extends Controller
{

    //public function __construct()
    //{
     //   $this->authorizeResource(Message::class);
   // }
    /**
     * Display a listing of the resource.
     *
    @return JsonResponse
     */
    public function index()
    {
        $messages = Message::latest()->paginate();
       // return $this->success(MessageResourceCollection::make($messages));
        return View('index')->with('messages', $messages);
    }


    public function messages_table(){
        $messages = Message::latest()->paginate();
        return View('messages_table')->with('messages', $messages);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return JsonResponse
     */
    public function messages_edit(Message $message){

        return View('messages_edit')->with('message', $message);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param MessageRequest $request
     * @return JsonResponse
     */
    public function store(MessageRequest $request)

    {
        $message = Message::create($request->validated());
       return $this->created(MessageResource::make($message));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return JsonResponse
     */
 //   public function show(Message $message)
   // {
   //     return $this->success(MessageResource::make($message));
   // }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MessageRequest $request, Message $message)
    {
        $message->update($request->validated());
        //return $this->success(MessageResource::make($message));
        return redirect('/admin/messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Message $message
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Message $message)
    {
       $message->delete();
        return redirect('/admin/messages');
        //return $this->success('Record deleted.', JsonResponse::HTTP_NO_CONTENT);
    }


}

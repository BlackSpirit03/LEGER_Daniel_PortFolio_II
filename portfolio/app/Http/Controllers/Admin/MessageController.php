<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers\Admin;

use App\Models\MyMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMessages = MyMessage::where('user_id',env('APP_OWNER_USERID'))->orderBy('created_at','desc');
        $nbrOfMessages = $listMessages->count();
        $listMessages = $listMessages->Paginate(7);

        return view('admin.messages', compact('listMessages','nbrOfMessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // No needed : no messages created manualy
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // No needed : no messages created manualy
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(MyMessage $message)
    {
        // No needed : no messages show individualy
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(MyMessage $message)
    {
        // No needed : no messages edited manualy
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyMessage $message)
    {
        // No needed : no messages updated manualy
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyMessage $message)
    {
        $OneMessages = MyMessage::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $message->id]])->delete();
        return back();
    }
}

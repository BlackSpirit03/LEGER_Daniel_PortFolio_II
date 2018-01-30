<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers\Admin;

use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessionalRequest;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProfessionals = Professional::where('user_id',env('APP_OWNER_USERID',1))->orderBy('created_at','desc');
        $listProfessionals = $listProfessionals->Paginate(4);
        return view('admin.professionals', compact('listProfessionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professionals_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Professional::create($request->except('_token'));
        return Redirect()->route('professionals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        //dd($skill);
        $oneProfessional = Professional::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $professional->id]])->first();
        $nextRoute = "route('professionals.update'), $oneProfessional->id";
        return view('admin.professionals_update', compact('oneProfessional','nextRoute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        $oneProfessional = Professional::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $professional->id]])->delete();
        return back();
    }
}

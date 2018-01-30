<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSkills = Skill::where('user_id',env('APP_OWNER_USERID',1))->orderBy('created_at','desc');
        $listSkills = $listSkills->Paginate(7);
        return view('admin.skills', compact('listSkills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {
        //Create entrie in the database
        //$request->logo = $request->logo->getClientOriginalName();
        Skill::create($request->except('_token'));

        //Store the logo file
        $uploadStore = public_path('img/logos');
        $fileName = $request->logo->getClientOriginalName();
        $request->logo->move($uploadStore,$fileName);

        return Redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //dd($skill);
        $oneSkill = Skill::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $skill->id]])->first();
        return view('admin.skills_update', compact('oneSkill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        
        //dd($request);
        $skill->language = $request->language;
        $skill->short_label = $request->short_label;
        $skill->detail = $request->detail;
        $skill->type = $request->type;
        $skill->level = $request->level;
        $skill->order = $request->order;
        $skill->logo = $request->logo;
        $skill->save();

        return redirect('admin/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $oneSkill = Skill::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $skill->id]])->delete();
        return back();
    }
}

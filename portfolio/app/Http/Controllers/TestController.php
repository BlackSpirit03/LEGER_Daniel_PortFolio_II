<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyMessage;
use App\Models\Professional;


class TestController extends Controller
{
    // MAIN PAGE DISPLAY
    public function index()
    {	
        // Retrieve Skill Informations in the database for display
        $listMessages = MyMessage::where('user_id',env('APP_OWNER_USERID'))->orderBy('created_at','desc');
        $nbrOfMessages = $listMessages->count();
        $listMessages = $listMessages->get();

        // Return the view
        return view('test', compact('listMessages','nbrOfMessages'));
    }

    public function index2()
    {   
        // Retrieve Skill Informations in the database for display
        $listProfessionals = Professional::where('user_id',env('APP_OWNER_USERID'))->orderBy('created_at','desc');
        $nbrOfProfessionals = $listProfessionals->count();
        $listProfessionals = $listProfessionals->get();

        // Return the view
        return view('admin.professionalCrUD', compact('listProfessionals','nbrOfProfessionals'));
    }

    public function index3()
    {
        return view('admin.skills_crud_2');
    }



    // LANGUAGES
    public function language(String $locale)
    {
        // Definition of the langage site capabilities
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        session(['locale' => $locale]);
        
        // Return the view
        return back();

    }

    public function destroy(MyMessage $message)
    {
        $listMessages = MyMessage::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $message->id]])->delete();

        // Return the view
        return back();
    }

}

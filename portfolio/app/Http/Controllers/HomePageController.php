<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Skill;
use App\Models\Professional;
use App\Models\Project; 
use App\Models\MyMessage;
use App\Models\Personal;

class HomePageController extends Controller
{
    // MAIN PAGE DISPLAY
    public function index()
    {	
        // Retrieve Skill Informations in the database for display
        $listSkills = Skill::where([['user_id','=',env('APP_OWNER_USERID',1)],['language',"=", session('locale')]])->get();

        // Retrieve Professional Informations in the database for display
        $listProfessionals = Professional::where([['user_id','=',env('APP_OWNER_USERID',1)],['language',"=", session('locale')]])->get();

        // Retrieve Project Informations in the database for display
        $listProjects = Project::where([['user_id','=',env('APP_OWNER_USERID',1)],['language',"=", session('locale')]])->get();

        // Retrieve Personal informations in the database for display
        $listPersonals = Personal::where([['user_id','=',env('APP_OWNER_USERID',1)],['language',"=", session('locale')]])->get();

    	// Displaying of the page
    	return view('homepage', compact('listSkills','listProfessionals','listProjects','listPersonals'));
    }


    // FORM POST
    public function sendmessage(Request $FieldsOfForm)
    {
        //Writing informations into the database
        $messages = new MyMessage($FieldsOfForm->except('csrf_token'));
        $messages->user_id = env('APP_OWNER_USERID',1); // Connect to .env variable
        $messages->save();
        
        //Envoi du mail avec le lien vers le fichier
        Mail::to($FieldsOfForm->email)->bcc(env('MAIL_FROM_ADDRESS'))->send(new SendMail($messages));

        //Back to the Main page with Flash Message
        return redirect('/#contact')->with('confirm_mail', 'Merci pour votre message !');
    }


    // LANGUAGES
    public function language(String $locale)
    {
        // Definition of the langage site capabilities
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        session(['locale' => $locale]);
        
        return back();

    }

}

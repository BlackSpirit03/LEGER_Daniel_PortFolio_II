<?php
// Made or Customized by DLEGER

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MyMessage;

class Test2Controller extends Controller
{
    // MAIN PAGE DISPLAY
    public function index()
    {	
        $categoryList = MyMessage::all();
        return view('test2')->with('categoryList', $categoryList);
    }


    // LANGUAGES
    public function language(String $locale)
    {
        // Definition of the langage site capabilities
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        session(['locale' => $locale]);
        
        return back();

    }

    public function destroy(MyMessage $message)
    {
        $listMessages = MyMessage::where([['user_id','=',env('APP_OWNER_USERID',1)],['id',"=", $message->id]])->delete();
        return back();
    }

}

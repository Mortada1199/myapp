<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Manager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;
class Controllernews extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){

    }

    public function addnews(){

        // if (!session()-> has('password')) {return redirect()->route('admin.login');}

        if (!Session()-> has('password'))
  { 
    return redirect() -> route('login') ;
   }
    return view(view:'admin.news.create');
}

public function shownews(){
    $post = Post::select('id','bodypost','photo')->get();
    return view('admin.news.show',compact('post'));
}

public function ShowReports(){

    // if (!session()-> has('password')) {return redirect()->route('admin.login');}
    if (!Session()-> has('password'))
  { 
    return redirect() -> route('login') ;
   }

    return view(view:'admin.news.report');
}

public function storenews(Request $request){
    $rules = [
        'postbody' => 'required',
        //'photo' =>'required',
    ];
$messages = [
'postbody.required'=>' الخبر مطلوب الرجاء كتابة الخبر',
'photo.required'=>' الصورة مطلوبة',
];

 $validator = Validator::make($request->all(),$rules,$messages);

//   if($validation->fails()){
//     return redirect()->back()->withErrors($validation)->withInput($request->all());
//   }

if($validator->fails()){
    return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
}
//insert images in folder
$file_extention = $request -> photo -> getClientOriginalExtension();
$file_name = time() . '.' . $file_extention ;
$path = 'images/news';
$request -> photo ->move($path,$file_name);
  //insert
    Post::create([
        'bodypost'=> $request -> postbody ,
        'photo'=> $file_name,
    ]);
    return redirect()->back()->with(['success'=>'تم اضافة الخبر بنجاح']);
}


public function login(){
    return view('admin.binfit.login');
}


public function CreateLogin(Request $request){

    // where(['email' => $request-> email,'password' => $request->password]) -> get();
    
    $manager = Manager::where('email', '=',  $request-> email) -> where('password', '=', $request->password)->get();
  
          if($manager->count() > 0){
            session::put('email' ,$request -> email);
            session::put('password' ,$request -> password);
         return redirect()->route('admin.home');         
        }
  
          if($manager->count() == 0){
            return redirect() -> back() -> with(['error'=>'البيانات المدخلة خاطءة']);
          }
  }


                    public function funExit(){
                    session()->forget('email');
                    session()->forget('password');
                    return redirect()->route('login');
                    }

















                    
}

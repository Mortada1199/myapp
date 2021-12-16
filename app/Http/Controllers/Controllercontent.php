<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Animal;
use App\Models\Animaldatat;
use App\Models\AnimalBehavior;
use App\Models\AnimalContent;
use App\Models\MilkContent;
use Illuminate\Support\Facades\Validator;

class Controllercontent extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



public function createmillk(){

    // if (!session()-> has('password')) {return redirect()->route('admin.login');}
    if (!Session()-> has('password'))
  { 
    return redirect() -> route('login') ;
   }
     return view(view:'admin.content.createmilk');
}


public function viewmilk(){
    $milkconte = MilkContent::select('id','catogre','description','video')->get();
    return view('admin.content.viewmilk',compact('milkconte'));

}

public function editmilk($milk_id){
    $milk= MilkContent::find($milk_id);
    if(!$milk)
    return redirect()->back();

    $milk = MilkContent::select('id','catogre','description','video')->find($milk_id);

      return view('admin.content.editmilk',compact('milk'));
}

public function animalcreate(){
    // if (!session()-> has('password')) {return redirect()->route('admin.login');}
    if (!Session()-> has('password'))
  { 
    return redirect() -> route('login') ;
   }

    return view(view:'admin.content.createanimal');
}
//$behaviour = AnimalBehavior::find($behaviour_id)->load('animal','animalContent');الدالة دي بتعمل  استرجاع من الملفات 


public function animaledit(Request $request, $behaviour_id){
    $behaviour = AnimalBehavior::find($behaviour_id)->load('animal','animalContent');

    return view('admin.content.editanimal',compact('behaviour'));

}

public function updateAnimalBehavior(Request $request , $contentId){
    $content = AnimalContent::find($contentId);
    $content->update(['description'=>$request->story,'video'=>$request->video_file]);

    return redirect()->back()
    ->with(['successed' => 'تم التعديل بنجاح']);



}

//this function store animal data and save un database
public function animalStore(Request $request)
{
//    dd($request->all());
    $animal =Animal::where('name',$request->animal)->first();
    if($animal != null){
        $behavior = $animal->animalBehaviors->where('behavior',$request->animal_behaviors)->first();
        if($behavior == null){
            // add the new behavior t9 the existed animal
            $mBehavior = $animal->animalBehaviors()->create(
                [
                    'behavior' => $request->animal_behaviors
                ]
            );
            ////////////////////////////////
            $file_extention = $request -> video -> getClientOriginalExtension();
            $file_name = time() . '.' . $file_extention ;
            $path = 'images/videoss';
            $request -> video ->move($path,$file_name);
            ///////////////////////////////////
        //dd()
            $mBehavior->animalContent()->create([
                'description'=>$request->input('description'),
              // 'video' => $request->input('file_name'),
                 'video' =>  $file_name ,
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
               
            ]);
                return redirect()->back()->with('success','تم إضافة الخصائص للحيوان بنجاح');
        }
        else {
            //return "Animal and its behavior already exist";
            return redirect()->back()->with('error','العناصر موجودة مسبقا');
        }
    }
    else {
        /////////////////////////////
       
        /////////////////////////////
        // create the animal itself and create its behavior
        $animal = Animal::create([
            'name' => $request->animal
        ]);
        $behavior = $animal->animalBehaviors->create([
            'name' => $request->animal_behaviors
        ]);

       


        $behavior->animalContent->create([
            'description' => $request->description,
               'video' => $file_name ,
            
           // 
        ]);
        return redirect()->back()->with('success','تم الاضافة بالكامل بنجاح');
    }
}

public function animalview(){

   $animals = Animaldatat::select('name', 'behaviour_id'  , 'behavior' ,'description','video')->get();
    return view('admin.content.viewanimal',compact('animals'));

}

public function storemilk(Request $request){
    $rules = [
        'catogre' => 'required|unique:milk_contents',
        'description' =>'required',
        //'video' =>'required',

    ];
$messages = [
'catogre.required'=>'الصنف مطلوب',
'catogre.unique'=>'الاسم موجود مسبقا',
'description.required'=>'الوصف  مطلوب',
//'video.required'=>'التخصص مطلوب',
];
$validator = Validator::make($request->all(),$rules,$messages);

if($validator->fails()){
    return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
}
  //insert
  /////////////////////////////
  $file_extention = $request -> video -> getClientOriginalExtension();
  $file_name = time() . '.' . $file_extention ;
  $path = 'images/videoss';
  $request -> video ->move($path,$file_name);
  ///////////////////////////////////////////////////
    MilkContent::create([
        'catogre'=> $request -> catogre,
        'description'=> $request -> description,
        'video'=> $file_name,
    ]);
    return redirect()->back()->with(['success'=>'تم الاضافة بنجاح']);
}

public function updatemilk(Request $request,$milk_id){
        $milk = MilkContent::find($milk_id);
        if(!$milk){
          return redirect()
          ->back()
          ->with(['error' => 'العنصر غير موجود']);
        }
          $milk -> update(['description'=>$request->story,'video'=>$request->video_file]);
          return redirect()
          ->route('milk.view')
          ->with(['successd' => 'تم التعديل بنجاح']);
}
}


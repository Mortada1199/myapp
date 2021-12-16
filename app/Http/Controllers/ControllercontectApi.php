<?php
namespace App\Http\Controllers;
use App\Models\AnimalContent;
use App\Models\Animaldatat;
use App\Models\Benificary;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\MilkContent;
use App\Models\Doctor;

class ControllerContectApi extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){

    }


    public function FunMilk(Request $request){
        
        $milkconte = MilkContent::find($request -> id);
        if( !$milkconte)
            return response()-> json([ 'status' => false ]);

        $milkconte = MilkContent::select('id','catogre','description','video')->find($request -> id);

        return response()-> json([
            'status' => true ,
            'milkconte' => $milkconte
        ]);
    }

    public function FunAniml(Request $request){

        $animal = Animaldatat::find($request -> id);
        if( !$animal)
            return response()-> json([ 'status' => false ]);

        $animal = Animaldatat::select('id','name','behaviour_id','behavior','description','video' )->where('id', $request -> id)->get();
        return response()-> json([
            'status' => true ,
            'animal' => $animal
        ]);

    }
    //

    public function FunLogin(Request $request){

        $checklogin = Benificary::find($request -> name );
        if( !$checklogin)
            return response()-> json([ 'status' => false ]);

         return response()-> json([
            'status' => true ,
            'checklogin' => $checklogin
        ]);

    }
    
    



}
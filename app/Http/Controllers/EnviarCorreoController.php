<?php
namespace App\Http\Controllers;

use App\Flow\ResetPassFlow;
use Illuminate\Http\Request;

// use Mail;

class EnviarCorreoController extends Controller{

    private $resetPassFlow;

    public function __construct(Request $request){
        $this->resetPassFlow = new ResetPassFlow();
    }


    public function envio(Request $request){
        try{
            //$archivos = $_FILES;
            //$file = $request->file();
            //$data   = $_REQUEST;
            //dd($data,$file,$archivos); 
            $et = $this->resetPassFlow->send_Mail($request);
        }catch(\Exception $e){
        }
        return response()->json($et);
    }
    
}
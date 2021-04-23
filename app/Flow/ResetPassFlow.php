<?php

namespace App\Flow;

use App\Helpers\EstadoTransaccionHelper;
use App\Http\BussinesLayer\ResetPass;
use App\Utils\ModuleUtil;
use App\Models\CorreoModels;

use Illuminate\Contracts\Session\Session;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use app\Mail\TestMail;
use Dotenv\Store\File\Paths;

class ResetPassFlow
{

    public $modelCorreo;

    public function __construct(){
        $this->modelCorreo = new CorreoModels();//modelo de datos    
    }

    public function send_Mail($request){
        try{
            $configCorreo   = $_REQUEST;
            $files = $request->file('file');
            //dd($files);
            $MAIL_MAILER =$configCorreo['MAIL_MAILER'];
            $MAIL_HOST =$configCorreo['MAIL_HOST'];
            $MAIL_PORT =$configCorreo['MAIL_PORT'];
            $MAIL_USERNAME =$configCorreo['MAIL_USERNAME'];
            $MAIL_PASSWORD =$configCorreo['MAIL_PASSWORD'];
            $MAIL_ENCRYPTION =$configCorreo['MAIL_ENCRYPTION'];
            $MAIL_FROM_ADDRESS =$configCorreo['MAIL_FROM_ADDRESS'];
            $MAIL_FROM_NAME =$configCorreo['MAIL_FROM_NAME'];
            $correos_copia =$configCorreo['correos_copia'];
            $correos_principal =$configCorreo['correos_principal'];
            $cuerpo =$configCorreo['cuerpo'];
            $asunto =$configCorreo['asunto'];
            
            //dd($tmp_name,$name);
            //dd($archivos);
            $this->modelCorreo->setMAIL_DRIVER($MAIL_MAILER);
            $this->modelCorreo->setMAIL_HOST($MAIL_HOST);
            $this->modelCorreo->setMAIL_PORT($MAIL_PORT);
            $this->modelCorreo->setMAIL_USERNAME($MAIL_USERNAME);
            $this->modelCorreo->setMAIL_PASSWORD($MAIL_PASSWORD);
            $this->modelCorreo->setMAIL_ENCRYPTION($MAIL_ENCRYPTION);
            $this->modelCorreo->setMAIL_FROM_ADDRESS($MAIL_FROM_ADDRESS);
            $this->modelCorreo->setMAIL_FROM_NAME($MAIL_FROM_NAME);
            $this->modelCorreo->setCorreos_copia($correos_copia);
            $this->modelCorreo->setCorreos_principal($correos_principal);
            $this->modelCorreo->setCuerpo($cuerpo);
            $this->modelCorreo->setAsunto($asunto);
            $this->modelCorreo->setAdjunto($files);
            
            
            // set_include_path('/home/viamatica/Descargas/200023025634_003212');

            // $path= get_include_path();

            // dd($path);

            

            $data = array('name' => $this->modelCorreo->getcuerpo());
            
            $bool = Mail::send('mail', $data, function ($message){
                
                $multiplesCorreoPrincipal =explode(';',$this->modelCorreo->getCorreos_principal());    
                $multiplesCorreoCopia =explode(';',$this->modelCorreo->getCorreos_copia());    
                
                $message->to($multiplesCorreoPrincipal, '')->subject($this->modelCorreo->getAsunto());//donde llega 
                $message->from($this->modelCorreo->getMAIL_FROM_ADDRESS(), $this->modelCorreo->getMAIL_FROM_NAME());//desde donde sale el correo
                $message->cc($multiplesCorreoCopia);
                if($this->modelCorreo->getAdjunto()!= null)
                {   
                    //dd($this->modelCorreo->getAdjunto());
                    $arch = $this->modelCorreo->getAdjunto();
                    //dd($arch);
                    foreach($arch as $f){
                        //dd($f);
                        $message->attach($f->getRealPath(),
                                [
                                    "as"=>$f->getClientOriginalName(),
                                    "mine"=>$f->getMimeType()
                                ]);
                    }
                }
                
            },true);
            
            return true;

        }catch(\Exception $e){
            //throw new \Exception(className($this) . ' :: enviar Correo -> ' . $e->getMessage());
        }
    }

}
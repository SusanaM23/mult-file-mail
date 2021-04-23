<?php
namespace App\Models;

class CorreoModels {

       /**
     * @param String $MAIL_DRIVER
     */
    public function setMAIL_DRIVER($MAIL_DRIVER){
        $this->MAIL_DRIVER = $MAIL_DRIVER;
    }

     /**
     * @return String $MAIL_DRIVER
     */
    public function getMAIL_DRIVER(){
        return $this->MAIL_DRIVER;
    }


       /**
     * @param String $MAIL_HOST
     */
    public function setMAIL_HOST($MAIL_HOST){
        $this->MAIL_HOST = $MAIL_HOST;
    }

     /**
     * @return String $MAIL_HOST
     */
    public function getMAIL_HOST(){
        return $this->MAIL_HOST;
    }


       /**
     * @param String $MAIL_PORT
     */
    public function setMAIL_PORT($MAIL_PORT){
        $this->MAIL_PORT = $MAIL_PORT;
    }

     /**
     * @return String $MAIL_PORT
     */
    public function getMAIL_PORT(){
        return $this->MAIL_PORT;
    }


       /**
     * @param String $MAIL_USERNAME
     */
    public function setMAIL_USERNAME($MAIL_USERNAME){
        $this->MAIL_USERNAME = $MAIL_USERNAME;
    }

     /**
     * @return String $MAIL_USERNAME
     */
    public function getMAIL_USERNAME(){
        return $this->MAIL_USERNAME;
    }


       /**
     * @param String $MAIL_PASSWORD
     */
    public function setMAIL_PASSWORD($MAIL_PASSWORD){
        $this->MAIL_PASSWORD = $MAIL_PASSWORD;
    }

     /**
     * @return String $MAIL_PASSWORD
     */
    public function getMAIL_PASSWORD(){
        return $this->MAIL_PASSWORD;
    }


       /**
     * @param String $MAIL_ENCRYPTION
     */
    public function setMAIL_ENCRYPTION($MAIL_ENCRYPTION){
        $this->MAIL_ENCRYPTION = $MAIL_ENCRYPTION;
    }

     /**
     * @return String $MAIL_ENCRYPTION
     */
    public function getMAIL_ENCRYPTION(){
        return $this->MAIL_ENCRYPTION;
    }


       /**
     * @param String $MAIL_FROM_ADDRESS
     */
    public function setMAIL_FROM_ADDRESS($MAIL_FROM_ADDRESS){
        $this->MAIL_FROM_ADDRESS = $MAIL_FROM_ADDRESS;
    }

     /**
     * @return String $MAIL_FROM_ADDRESS
     */
    public function getMAIL_FROM_ADDRESS(){
        return $this->MAIL_FROM_ADDRESS;
    }


       /**
     * @param String $MAIL_FROM_NAME
     */
    public function setMAIL_FROM_NAME($MAIL_FROM_NAME){
        $this->MAIL_FROM_NAME = $MAIL_FROM_NAME;
    }

     /**
     * @return String $MAIL_FROM_NAME
     */
    public function getMAIL_FROM_NAME(){
        return $this->MAIL_FROM_NAME;
    }


       /**
     * @param String $correos_copia
     */
    public function setCorreos_copia($correos_copia){
        $this->correos_copia = $correos_copia;
    }

     /**
     * @return String $correos_copia
     */
    public function getCorreos_copia(){
        return $this->correos_copia;
    }


       /**
     * @param String $correos_principal
     */
    public function setCorreos_principal($correos_principal){
        $this->correos_principal = $correos_principal;
    }

     /**
     * @return String $correos_principal
     */
    public function getCorreos_principal(){
        return $this->correos_principal;
    }


       /**
     * @param String $cuerpo
     */
    public function setCuerpo($cuerpo){
        $this->cuerpo = $cuerpo;
    }

     /**
     * @return String $cuerpo
     */
    public function getcuerpo(){
        return $this->cuerpo;
    }


       /**
     * @param String $asunto
     */
    public function setAsunto($asunto){
        $this->asunto = $asunto;
    }

     /**
     * @return String $asunto
     */
    public function getAsunto(){
        return $this->asunto;
    }


    /**
     * @param String $adjunto
     */
    public function setAdjunto($adjunto){
        $this->adjunto = $adjunto;
    }

     /**
     * @return String $adjunto
     */
    public function getAdjunto(){
        return $this->adjunto;
    }

    /**
     * @param String $name
     */
    public function setName($name){
        $this->name = $name;
    }

     /**
     * @return String $name
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param String $tipo
     */
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

     /**
     * @return String $tipo
     */
    public function getTipo(){
        return $this->tipo;
    }

}
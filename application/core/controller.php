<?php

/**
 * Class Controller
   Created by Group 1 - SIT715 Assignment3
*/

class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * @var null Model
     */
    //public $model = null;

    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */
    function __construct()
    {
        $this->openDatabaseConnection();
        //$this->loadModel(false);
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {

        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);


        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

   public function loadModel($model)
    {
       if($model){

            //require APP . '/core/model.php';
           require APP . '/model/'.$model.'.php';

            // create new "model" (and pass the database connection)
           return  new $model($this->db);
       }else{
        return false;
       }
    }
    
    
    public function loadPdfHelper(){
    
        return new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    
    }
   
}

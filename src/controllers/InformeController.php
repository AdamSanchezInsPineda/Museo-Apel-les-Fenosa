<?php

    class InformeController extends Controller{

        protected $exposicio;
        protected $objeto;

        public function __construct()
        {
            parent::__construct();
            $this->exposicio = new Exposicio();
            $this->objeto = new Objeto();
        }

        public function index($registroN){
            $this->checkRole(['admin', 'tecnic', 'convidat']);
                
            $this->render('objects/informes/informepdf', ['cont' => [$registroN, $this->objeto->fitxesMostrar($registroN)]]);
            exit;

        }

        public function basic($registroN){
            $this->checkRole(['admin', 'tecnic', 'convidat']);
                
            $this->render('objects/informes/informeBasicapdf', ['cont' => [$registroN, $this->objeto->fitxesMostrar($registroN)]]);
            exit;         
        }

        public function llibre(){
            $this->checkRole(['admin', 'tecnic', 'convidat']);
            
            $this->render('objects/informes/llibreRegistre', ['cont' => [$this->objeto->generarLlibre()]]);
            exit;

        }
        public function prestec($registroN){
            $this->checkRole(['admin', 'tecnic', 'convidat']);
            
            $this->render('objects/informes/formulariPrestec', ['cont' => [$registroN, $this->objeto->fitxesMostrar($registroN)]]);
            exit;

        }
    }
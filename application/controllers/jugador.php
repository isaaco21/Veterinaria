<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jugador extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('jugador_model');
  }

  function index(){
    $data = array();
    $data['jugadores'] = $this->jugador_model->listarJugadores();
    $tmp = $this->jugador_model->listarJugadores();
    $this->load->view('Jugador/Principal',$data);
  }

  function guardar(){
    if ($_POST) {
      $this->jugador_model->guardarJugador($_POST);
      $this->load->view('Jugador/Mensaje');
    }
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jugador_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function guardarJugador($jugador){
    $this->db->insert('jugadores',$jugador);
  }

  function listarJugadores(){
    $query = $this->db->get('jugadores');
    return $query->result();
  }

}

<?php

    if( ! defined('BASEPATH') )exit('Script de acesso direto não aceito');

    class Usuarios extends CI_Controller
    {
        public function novo()
        {
            $usuario = array(
                "nome_usuario" => $this->input->post("nome"),
                "email_usuario"=> $this->input->post("email"),
                "senha"=> md5($this->input->post("senha"))
            );

            $this->load->model("usuarios_model");
            $this->usuarios_model->salva($usuario);
            $this->load->template("usuarios/novo");
        }
    }
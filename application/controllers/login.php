<?php

    if( ! defined('BASEPATH') )exit('Script de acesso direto não aceito');

    class Login extends CI_Controller
    {
        public function autenticar()
        {
            $this->load->model("usuarios_model");
            $email   = $this->input->post("email");
            $senha   = $this->input->post("senha");
            $usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);

            if($usuario){
                $this->session->set_userdata( array("usuario_logado" => $usuario) );
                $this->session->set_flashdata("success", "Usuário logado com sucesso!");                
            } else {
                $this->session->set_flashdata("danger", "Usuário ou senha inválida");                
            }
           
           redirect("/");
        }

        public function logout()
        {
            $this->session->unset_userdata("usuario_logado");
            $this->session->set_flashdata("success", "Usuário deslogado com sucesso!");
            redirect("/");
        }
    }
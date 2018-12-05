<?php

    class Usuarios_Model extends CI_Model
    {
        public function salva($usuario)
        {
            $this->db->insert("usuarios", $usuario);
        }

        public function buscaPorEmailESenha($email, $senha)
        {
            $email = $this->input->post("email");
            $senha = $this->input->post("senha");
            $this->db->where("email_usuario", $email);
            $this->db->where("senha", md5($senha));
            $usuario = $this->db->get("usuarios")->row_array();
            return $usuario;
        }
    }
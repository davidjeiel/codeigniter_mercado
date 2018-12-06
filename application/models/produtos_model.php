<?php

    class Produtos_model extends CI_Model
    {
        public function buscaTodos()
        {
            return $this->db->get("produtos")->result_array(); 
        }

        public function buscaDisponiveis()
        {
            return $this->db->get_where("produtos", 
                array(
                    "vendido" => 0
                )
            )->result_array();
        }

        public function buscaVendidos()
        {
            $id = $usuario['id_usuario'];
            $this->db->where("vendido", true);
            $this->db->where("usuario_id", $id);
            return $this->db->get("produtos")->result_array();
        }

        public function salva($produto)
        {
            $this->db->insert("produtos", $produto);
        }

        public function busca($id)
        {
            return $this->db->get_where("produtos", 
            array(
                "id_produto" => $id
            ))->row_array();
        }
    }
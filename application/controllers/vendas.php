<?php

    if( ! defined('BASEPATH') )exit('Script de acesso direto não aceito');

    class Vendas extends CI_Controller
    {
        public function nova()
        {   	
            autoriza();
            $this->load->helper(array("date"));
            
            $usuario = $this->session->userdata("usuario_logado");
            $this->load->model("vendas_model");
            $venda = array(
                 "produto_id"     => $this->input->post("produto_id"),
                 "comprador_id"   => $usuario['id_usuario'],
                 "data_de_entrega"=> dataPtBrParaMysql( $this->input->post("data_de_entrega") )
            );
            $this->vendas_model->salva($venda);
            $this->session->set_flashdata("success", "Pedido de compra efetuado com sucesso!");
            redirect("/");            
        }

        public function index()
        {
            autoriza();
            $usuario = $this->session->userdata("usuario_logado");
            $this->load->model("produtos_model");
            $produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
            $dados = array("produtosVendidos" => $produtosVendidos);
            $this->load->template("vendas/index", $dados);            
        }
    }
<?php

    class Produtos extends  CI_Controller
    {
        public function index()
        {           
            $this->load->model("produtos_model");            
            $produtos = $this->produtos_model->buscaDisponiveis();         
            $dados    = array( "produtos" => $produtos );
            $this->load->helper(array("url","currency"));
            $this->load->view("produtos/index.php", $dados);
        }

        public function formulario()
        {
            $this->load->view('produtos/formulario');
        }

        public function novo()
        {
            $this->load->library("form_validation"); 
            $this->form_validation->set_rules("nome", "nome", "required|min_length[5]|callback_sem_a_palavra_melhor");
            $this->form_validation->set_rules("descricao", "descricao", "required|min_length[5]");
            $this->form_validation->set_rules("preco", "preco", "required");
            $this->form_validation->set_error_delimiters("<br/><p class='alert alert-danger'>", "</p>");
            $validacao = $this->form_validation->run();
            if ($validacao) {
                $usuarioLogado = $this->session->userdata("usuario_logado");
                $produto = array(
                    "nome"      => $this->input->post("nome"),
                    "descricao" => $this->input->post("descricao"),
                    "preco"     => $this->input->post("preco"),
                    "usuario_id"=> $usuarioLogado['id_usuario']
                );
                $this->load->model("produtos_model");
                $this->produtos_model->salva($produto);
                $this->session->set_flashdata("success", "Produto salvo com sucesso");
                redirect("/");
            } else {
                $this->load->view("produtos/formulario");
            }
        }

        public function mostra($id)
        {
            $this->load->model("produtos_model");
            $produto = $this->produtos_model->busca($id);
            $dados = array("produto" => $produto);
            $this->load->helper("typography");
            $this->load->view("produtos/mostra", $dados);
        }

        public function sem_a_palavra_melhor($nome_produto)
        {
            $posicao = strpos($nome_produto, "melhor");
            if( $posicao != FALSE ){
                return TRUE;
            }else{
                $this->form_validation->set_message("sem_a_palavra_melhor", "O campo '%s' não pode conter a palavra 'melhor'");
                return FALSE;
            }
            
        }
    }
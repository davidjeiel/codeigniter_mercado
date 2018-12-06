<?php

    function autoriza()
    {
        $ci = get_instance();
         $usuario_logado = $ci->session->userdata("usuario_logado");
         if( !$usuario_logado )
         {
            $ci->session->set_flashdata("danger", "É necessário login para acesso à página desejada.");
            redirect("/");
         }
    }
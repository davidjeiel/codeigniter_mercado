<?php if( ! defined('BASEPATH') )exit('Script de acesso direto não aceito');

    class MY_Loader extends CI_Loader
    {
        public function template( $nome, $dados  )
        {
            $this->view( 'cabecalho.php' );
            $this->view(  $nome, $dados  );
            $this->view( 'rodape.php'    );
        }
    }
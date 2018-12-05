<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <?php  
            if ($this->session->flashdata("success")) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('success');
            } else if($this->session->flashdata("danger")) 
            {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('danger');
            }
            echo '</div>';
        ?>       
        <div class="container" style="padding-top: 20px;">     
            <div class="panel panel-default">            
                <div class="panel-heading">
                    <h1 align="center">Produtos</h1>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <tr class="active" align="center">
                            <td>Nome</td>
                            <td>Descrição</td>
                            <td>Preço</td>
                        </tr>
                        <?php foreach($produtos as $produto): ?>
                            <tr>
                                <td align="center"><?= anchor("produtos/{$produto['id_produto']}", $produto['nome']) ?></td>
                                <td align="center"><?= character_limiter( html_escape( $produto['descricao'], 10 ) );  ?></td>
                                <td align="center"><?= numeroEmReais($produto['preco']) ; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <center>
        <?php if( $this->session->userdata("usuario_logado") ): ?>
            <div class="container">
                <?= anchor( 'produtos/formulario', 'Novo Produto', array('class'=>'btn btn-primary')) ?>    
                <?= anchor( 'login/logout', 'Logout', array('class'=>'btn btn-primary')) ?>
            </div>
        <?php else: ?>
        </center>
            <div class="container">            
                <h1>Login</h1>
                <div>
                    <?php 
                        echo form_open("login/autenticar");

                            echo form_label("email");
                            echo form_input(array(
                                "name" => "email",
                                "id"   => "email",
                                "class"=> "form-control",
                                "maxlength"=>"255"
                            ));

                            echo form_label("Senha", "senha");
                            echo form_password(array(
                                "name"     => "senha",
                                "id"       => "senha",
                                "class"    => "form-control",
                                "maxlength"=> "255"
                            ));

                            echo "<br/>";
                            echo form_button(array(
                                "class"  => "btn btn-success",
                                "content"=> "Login",
                                "type"   => "submit"                           
                            ));

                        echo form_close();
                    ?>
                </div>
            </div>
            <div class="container">
                <h1>Cadastro</h1>
                <div>
                    <?php 
                        echo form_open("usuarios/novo");
                        
                            echo form_label("nome");
                            echo form_input(array(
                                "name"     => "nome",
                                "id"       => "nome",
                                "class"    => "form-control",
                                "maxlength"=> "255"
                            ));

                            echo form_label("email", "email");
                            echo form_input(array(
                                "name"     => "email",
                                "id"       => "email",
                                "class"    => "form-control",
                                "maxlength"=> "255"
                            ));

                            echo form_label("Senha", "senha");
                            echo form_password(array(
                                "name"     => "senha",
                                "id"       => "senha",
                                "class"    => "form-control",
                                "maxlength"=> "255"
                            ));
                            
                            echo "<br/>";
                            echo form_button(array(
                                "class"  => "btn btn-primary",
                                "content"=> "Cadastrar",
                                "type"   => "submit"                           
                            ));

                        echo form_close();
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>  
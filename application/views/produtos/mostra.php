<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container" style="padding-top:25px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1 class="panel-title">Detalhes</h1>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?= "<li class='list-group-item active'>".$produto['nome']."</li>" ?>
                        <?= "<li class='list-group-item'>".$produto['preco']."</li>" ?>
                        <?= "<li class='list-group-item'>".auto_typography( html_escape($produto['descricao'] ))."</li>" ?>
                    </ul>
                </div>
            </div>
            <h3>Compre agora mesmo!</h3>
            <?php 
                echo form_open('vendas/nova');
                echo form_hidden("produto_id", $produto['id_produto']);
                echo form_input(array(
                    "name"  => "data_de_entrega",
                    "class" => "form-control",
                    "id"    => "data_de_entrega",
                    "maxlength" => "255",
                    "value" => "" ,
                    "type"  => "date"
                ));
                echo "<br/>"; 
                echo form_button(array(
                    "class"  => "btn btn-primary",
                    "content"=> "Comprar",
                    "type"   => "submit"
                ));
            ?>
        </div>
    </body>
</html>
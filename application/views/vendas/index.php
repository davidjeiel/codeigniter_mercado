<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
</head>
<div class="container">
    <div class="page-header">
        <h2>Minhas vendas</h2>
    </div>
    <table class="table table-hover table-bordered">
        <tr class="active">
            <td>Produto </td>
        </tr>
        <?php foreach ($produtosVendidos as $produto): ?>
            <tr>
                <td>
                    <?= $produto['nome'] ?>               
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="container">
    <table class="table table-hover table-bordered">
        <tr class="active">
            <td>Produto</td>
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
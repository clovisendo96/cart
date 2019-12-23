<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

    <style>
        .imgProduct img{
            width: 90px;
        }
    </style>

    <div class="container">

        <?php include 'menu.php'; ?>

        <div class="page-header">
            <h1>Nossos Produtos</h1>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product->getId();?></td>
                    <td class="imgProduct"><img src=<?php echo $product->getImage(); ?> /></td>
                    <td><?php echo $product->getName();?></td>
                    <td>R$ <?php echo number_format($product->getPrice(), 2, ',', '.');?></td>
                    <td>
                        <form action="index.php?page=cart&action=add" method="post">
                            <input name="id" type="hidden" value="<?php echo $product->getId()?>"/>
                            <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>

</body>
</html>
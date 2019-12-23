<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

    <script>
        function updateCartQtd(){
            document.getElementById("cart").submit();
        }
    </script>

    <style>
        .imgProduct img{
            width: 90px;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button {  
            opacity: 1;
        }
    </style>

<div class="container">

    <?php include 'menu.php'; ?>

    <div class="page-header">
        <h1>Carrinho</h1>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Imagem</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
            <th>Gerenciar</th>
        </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5"></td>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($cartItems as $item) : ?>
            <tr>
                <td><?php echo $item->getProduct()->getId()?></td>
                <td class="imgProduct"><img src=<?php echo $item->getProduct()->getImage() ?> /></td>
                <td><?php echo $item->getProduct()->getName()?></td>
                <td>
                    <form action="index.php?page=cart&action=update" method="post" id="cart">
                        <input name="id" type="hidden" value="<?php echo $item->getProduct()->getId()?>" />
                        <input size="2" type="number" name="quantity" value="<?php echo $item->getQuantity()?>" onchange="updateCartQtd()" style="width:75px;" />
                    </form>
                </td>
                <td>R$ <?php echo number_format($item->getProduct()->getPrice(), 2, ',', '.')?></td>
                <td>R$ <?php echo number_format($item->getSubTotal(), 2, ',', '.')?></td>
                <td>
                     <a href="index.php?page=cart&action=delete&id=<?php echo $item->getProduct()->getId()?>" class="btn btn-danger">Remover</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary">Continuar comprando</a>
    <b style="float: right;">Subtotal da compra: R$ <?php echo number_format($cartTotal, 2, ',', '.')?></b>

</div>

</body>
</html>
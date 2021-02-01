<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo usuário</a>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>ACOES</th>
</tr>
<?php foreach($usuarios as $usuario): ?>
<tr>
    <td><?=$usuario['id'];?></td>
    <td><?=$usuario['nome'];?></td>
    <td><?=$usuario['email'];?></td>
    <td>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">

        <img src="<?=$base;?>/assets/images/document.png" alt="">
            
        </a>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Está Certo disso')">
            
        <img src="<?=$base;?>/assets/images/trash.png" alt="">
         </a>
    </td>
</tr>

<?php endforeach ?>
</table>

<?php $render('footer'); ?>
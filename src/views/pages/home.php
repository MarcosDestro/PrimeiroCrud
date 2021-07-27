<?php $render('header')?>

<a href="<?=$base?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php
    //Para cada variavel, crie uma linha com os dados recebidos
    foreach($usuarios as $user):?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$user['id'];?>/editar">
                    <img src="<?=$base;?>/assets/images/input.png" height="30px">
                </a>
                <a href="<?=$base;?>/usuario/<?=$user['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img src="<?=$base;?>/assets/images/delete.png" height="30px">
                </a>
            </td>
        </tr>

    <?php endforeach?>

</table>

<?php $render('footer')?>
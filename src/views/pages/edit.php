<?php $render('header')?>

<h2>Editar usuário</h2>
<h3>
<?php
    if(isset($_SESSION['flash'])){
        $flash = $_SESSION['flash'];
        echo $flash;
        $_SESSION['flash'] = '';
    }
?>
</h3>
<form method="POST" action="<?=$base?>/usuario/<?=$usuario['id'];?>/editar">
<label>
    Nome: <br>
    <input type="text" name="name" value="<?=$usuario['name'];?>">
</label><br><br>
<label>
    E-mail: <br>
    <input type="email" name="email" value="<?=$usuario['email'];?>">
</label><br><br>

<input type="submit" value="Salvar">

</form>

<?php $render('footer')?>
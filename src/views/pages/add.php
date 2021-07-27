<?php $render('header')?>

<h2>Adicionar novo usuário</h2>
<h3>
<?php
    if(isset($_SESSION['flash'])){
        $flash = $_SESSION['flash'];
        echo $flash;
        $_SESSION['flash'] = '';
    }
?>
</h3>
<form method="POST" action="<?=$base?>/novo">
<label>
    Nome: <br>
    <input type="text" name="name">
</label><br><br>
<label>
    E-mail: <br>
    <input type="email" name="email">
</label><br><br>

<input type="submit" value="Adicionar">

</form>

<?php $render('footer')?>
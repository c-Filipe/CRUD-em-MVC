<?php $render('header'); ?>

<h2> Adicionar novo Usuario  </h2>

<form method="POST" action="<?=$base?>/usuario/<?=$usuario['id'];?>/editar">
    <div class="form-group">
        <label for="name">
            Nome:
        </label>
        <input type="text" class="form-control" name='name' value="<?=$usuario['nome']?>">
        <br/><br/>
    </div>
    <div class="form-group">
        <label for="email">
            Email:
        </label>
        <input type="email" class="form-control" name='email' value="<?=$usuario['email']?>" >
    </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
 

</form>

<?php $render('footer'); ?>
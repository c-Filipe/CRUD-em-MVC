<?php $render('header'); ?>

<h2> Adicionar novo Usuario  </h2>

<form method="POST" action="<?=$base?>/novo">
    <div class="form-group">
        <label for="name">
            Nome:
        </label>
        <input type="text" class="form-control" name='name'>
        <br/><br/>
    </div>
    <div class="form-group">
        <label for="email">
            Email:
        </label>
        <input type="email" class="form-control" name='email'>
    </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
 

</form>

<?php $render('footer'); ?>
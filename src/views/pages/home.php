<?php $render('header'); ?>

<div class="jumbotron">
  <h1 class="display-4">CRUD SIMPLES</h1>
  <p class="lead">Este é um CRUD simples em MVC.Desenvolvido com intuito de aprender e praticar meus conhecimentos.</p>

</div>


    <table class="table" border="1" width="100%" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">AÇÕES</th>
            </tr>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?=$usuario['id'];?> </td>
                    <td><?=$usuario['nome'];?> </td>
                    <td><?=$usuario['email'];?></td>
                    <td>
                        <a href='<?=$base?>/usuario/<?=$usuario['id']?>/editar'><button type="button" class="btn btn-secondary">EDITAR</button> <a>
                        <a href='<?=$base?>/usuario/<?=$usuario['id']?>/excluir'><button type="button" class="btn btn-danger" 
                        onclick="return confirm('Tem certeza que deseja excluir esse usuário ?')">EXCLUIR</button> <a>  
                    </td>
                </tr>
            <?php endforeach ?>    
        </thead>
    </table>
    <a href='<?=$base;?>/novo'><h1> Novo usuário</h1> </a>

<?php $render('footer'); ?>
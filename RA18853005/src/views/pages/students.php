<?php $render('header');?>
<div style="text-align: center;">
<h1 class="display-1">Alunos</h1>
<a class="btn btn-primary" href="<?=$base;?>/students/add" role="button">NOVO ALUNO</a>
</div><br>
<div class="container text-center"> 
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nome do Aluno</th>
      <th scope="col">Senha</th>
      <th scope="col">Email</th>
      <th scope="col">Celular</th>
      <th scope="col">Curso</th>
      <th scope="col">Status</th>
      <th scope="col">Cadastro</th>
      <th scope="col">Ultima Edição</th>
      <th scope="col" colspan="2">Ações</th>
    </tr>
  </thead>
<tbody>
<?php foreach($students as $student): ?>
    <tr>
      <th><?=$student['id']?></th>
      <td><?=$student['name']?></td>
      <td><?=$student['password']?></td>
      <td><?=$student['email']?></td>
      <td><?=$student['phone']?></td>
      <td><?=$student['nameCourse']?></td>
      <td><?=$student['status']?></td>
      <td><?=$student['created_at']?></td>
      <td><?=$student['updated_at']?></td>
      <td><a class="btn btn-primary" href="<?=$base?>/student/<?=$student['id'];?>/edit" role="button">Editar</a></td>
      <td><a class="btn btn-danger" href="<?=$base?>/student/<?=$student['id'];?>/del" role="button" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>
    </tr>  
<?php endforeach;?>
</tbody>
</table>
</div>
<?php $render('footer'); ?>
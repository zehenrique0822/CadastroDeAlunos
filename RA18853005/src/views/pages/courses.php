<?php $render('header');?>
<div style="text-align: center;">
<h1 class="display-1">Cursos</h1>
<a class="btn btn-primary" href="<?=$base;?>/courses/add" role="button">NOVO CURSO</a>
</div><br>
<div class="container text-center"> 
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nome do Curso</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data de Inicio</th>
      <th scope="col">Data de Finalização</th>
      <th scope="col">Status</th>
      <th scope="col">Cadastro</th>
      <th scope="col">Ultima Edição</th>
      <th scope="col" colspan="2">Ações</th>
    </tr>
  </thead>
<tbody>
<?php foreach($courses as $course): ?>
    <tr>
      <th><?=$course['id']?></th>
      <td><?=$course['nameCourse']?></td>
      <td><?=$course['description']?></td>
      <td><?=$course['dateStart']?></td>
      <td><?=$course['dateFinish']?></td>
      <td><?=$course['status']?></td>
      <td><?=$course['created_at']?></td>
      <td><?=$course['updated_at']?></td>
      <td><a class="btn btn-primary" href="<?=$base?>/course/<?=$course['id'];?>/edit" role="button">Editar</a></td>
      <td><a class="btn btn-danger" href="<?=$base?>/course/<?=$course['id'];?>/del" role="button" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>
    </tr>  
<?php endforeach;?>
</tbody>
</table>
</div>
<?php $render('footer'); ?>
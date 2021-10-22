<?php $render('header');?>
<div style="text-align: center;">
    <h4 class="display-4">Editar Cadastro de Aluno</h4>
</div>
<div class="container">
    <div>
        <form method="POST">
            <label class="form-label" required>Nome do Aluno:</label>
            <input name="name" value="<?=$students['name'];?>" class="form-control">        
            <label class="form-label">Email:</label>
            <input type="email" value="<?=$students['email'];?>" name="email" class="form-control" required></input>
            <label class="form-label" required>Senha:</label>
            <input name="password" value="<?=$students['password'];?>" class="form-control"> 
            <label class="form-label" required>Telefone:</label>
            <input name="phone" value="<?=$students['phone'];?>" class="form-control"><br> 
            <label class="form-label">Curso:</label>
            <select name="course" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">                      
            <?php 
             if(!empty($courses)):
             foreach($courses as $course):?>  
                <option <?=($students['idCourse']==$course['id'])?'selected':''?> value="<?=$course['id'];?>"><?=$course['nameCourse'];?></option>
            <?php 
             endforeach;
             endif;
             ?>
            </select><br>
            <label class="form-label">Status:</label>            
            <select name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected value="<?=$students['status'];?>"><?=$students['status'];?></option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
            </select>                              
        </div>
        <center><button type="submit" class="btn btn-primary" style="font-size: 25px;">Salvar</button></center>
        </form>
    </div>
</div>
<?php $render('footer'); ?>
<?php $render('header');?>
<div style="text-align: center;">
    <h4 class="display-4">Adicionar Novo Aluno</h4>
</div>
<div class="container">
    <div>
        <form method="POST">
            <label class="form-label" required>Nome do Aluno:</label>
            <input name="name" class="form-control" required>        
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required></input>
            <label class="form-label" required>Senha:</label>
            <input name="password" class="form-control" required> 
            <label class="form-label" required>Telefone:</label>
            <input name="phone" class="form-control"><br> 
            <label class="form-label">Curso:</label>
            <select name="course" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                 <option selected></option>      
            <?php foreach($courses as $course):?>  
                <option value="<?=$course['id'];?>"><?=$course['nameCourse'];?></option>
            <?php endforeach;?>
            </select><br>
            <label class="form-label">Status:</label>            
            <select name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                <option selected></option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
            </select>                    
        </div>
        <center><button type="submit" class="btn btn-primary" style="font-size: 25px;">Salvar</button></center>
        </form>
    </div>
</div>
<?php $render('footer'); ?>
<?php $render('header'); ?>
<div style="text-align: center;">
    <h4 class="display-4">Editar Curso</h4>
</div>
<div class="container">
    <div>
        <form method="POST">
            <label class="form-label">Nome do Curso:</label>
            <input name="nameCourse" value="<?=$course['nameCourse']?>" class="form-control" required>        
            <label class="form-label">Descrição:</label>
            <textarea name="description" class="form-control" required><?=$course['description']?></textarea>
            <label class="form-label">Data de Inicio:</label>
            <input type="date" name="dateStart" value="<?=$course['dateStart']?>" class="form-control" required>
            <label class="form-label">Data de Finalização:</label>
            <input type="date" name="dateFinish" value="<?=$course['dateFinish']?>" class="form-control" required><br>
            <label class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="<?=$course['status']?>" selected><?=$course['status']?></option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
            </select>  
        </div><br>
        <center><button type="submit" class="btn btn-primary" style="font-size: 25px;">Salvar</button></center>
        </form>
    </div>
</div>
<?php $render('footer'); ?>
<!-- Cria a parte de editar as informações que estão no banco de dados -->
<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6p-4">
            <?= form_open("Livro/salvar") ?>
                <input type="hidden" name="id" id="id" value="<?= $livro['id'] ?>">
                <div class="row p-2">
                    <div class="col-2">
                        <label for="disponivel">Disponivel</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="disponivel" id="disponivel" class="form-control" value="<?= $livro['disponivel'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="status">Status</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="status" id="status" class="form-control" value="<?= $livro['status'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="obra">Obra</label>
                    </div>
                    <div class="col-10">
                    <select class="form-control" id="id_obra" name="id_obra">
                        <?php foreach($listaObra as $obra) : ?>
                        <option selected hidden><?=$obra['titulo']?></option>
                            <option value="<?=$obra['id']?>"><?=$obra['titulo']?></option>
                            <?php endforeach ?>
                      </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-group w-100" role="group">
                            <?= anchor("livro/index/", "Cancelar", ["class"=>"btn btn-dark"]) ?>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>           
            <?= form_close() ?> 
        </div>  
    </div>
</div>
<div class="container mt-5">
    <?=form_open('obra/salvar')?>
    <input type="hidden" id='id' name='id' value='<?=$obra['id']?>'>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Titulo</label>
        </div>
        <div class="col-10">
            <input value='<?=$obra['titulo']?>' class='form-control' name='titulo' id='titulo' type="text">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="categoria">Categoria</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$obra['categoria']?>' type="text" id='categoria' name='categoria'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="isbn">ISBN</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$obra['isbn']?>' type="text" id='isbn' name='isbn'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="ano_publicacao">Ano</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$obra['ano_publicacao']?>' type="text" id='ano_publicacao' name='ano_publicacao'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="editora">Editora</label>
        </div>
        <div class="col-10">
            <input disabled class='form-control' value='<?=$obra['id_editora']?>' type="text" id='id_editora' name='id_editora'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="autores">Autores</label>
        </div>
        <div class="col-10">
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Adicionar...
            </button>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Obra/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModalexcluir">
                    Excluir
                </button>
            </div>
        </div>
    </div>
    <?=form_close()?>
    </div>
    <div class="col-3"></div>
    </div>
</div>

    <!-- Modal -->
    <?=form_open('Obra/excluir')?>
    <input value='<?=$obra['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <div class="modal fade" id="exampleModalexcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Você tem certeza que deseja excluir: <br>Titulo: <?=$obra['titulo']?><br>Categoria: <?=$obra['categoria']?><br>Ano: <?=$obra['ano_publicacao']?><br>ISBN: <?=$obra['isbn']?><br> Editora: <?=$obra['id_editora']?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        </div>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Obra/adicionarAutor")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Autores</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <select class='form-control' name="id_autor" id="id_autor" required>
                        <option>Selecione...</option>
                        <?php foreach($listaAutores as $autor) : ?>
                            <option value="<?=$autor['id']?>"><?=$autor['nome']?></option>
                        <?php endforeach ?>   
                    </select>
                </div>         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
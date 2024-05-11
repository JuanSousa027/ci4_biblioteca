<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ObraModel;
use App\Models\EditoraModel;
use App\Models\AutorModel;


class Obra extends BaseController
{
    private $editoraModel;
    private $obraModel;
    private $autorModel;

    public function __construct(){
        $this->editoraModel = new EditoraModel();
        $this->obraModel = new ObraModel();
        $this->autorModel = new AutorModel();
    }
    public function index()
    {
        $obras = $this->obraModel->findAll();
        $editoras = $this->editoraModel->findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('obra/index',['listaObras'=>$obras,'listaEditoras'=>$editoras]);
        echo view('_partials/footer');
    }
    public function cadastrar(){
        $this->obraModel->save($this->request->getPost());
        return redirect()->to('Obra/index');
    }
    public function editar($id){
        $dados = $this->obraModel->find($id);
        $dadosEditora = $this->editoraModel->findAll();
        $dadosAutor = $this->autorModel->findAll();
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('obra/edit',['obra' => $dados, 'listaEditoras' => $dadosEditora,'listaAutores' => $dadosAutor]);
        echo view('_partials/footer');
    }

    public function salvar(){
        $obra = $this->request->getPost();
        $this->obraModel->save($obra);
        return redirect()->to('Obra/index');
    }

    public function excluir(){
        $obra = $this->request->getPost();
        $this->obraModel->delete($obra);
        return redirect()->to('Obra/index');
    }
}

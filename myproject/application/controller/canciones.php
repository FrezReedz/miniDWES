<?php

class Canciones extends Controller
{
    public function index(){
        $titulo = "Canciones";
        require APP . 'view/_templates/header.php';
        require APP . 'view/canciones/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function listar(){
        $canciones = $this->model->getAllSongs();
        require APP . 'view/_templates/header.php';
        require APP . 'view/canciones/listar.php';
        require APP . 'view/_templates/footer.php';
    }

    public function ver($id = 0){
        $id = (int) $id;
        if($id == 0){
            header("Location: /canciones/listar");
        } else {
            $cancion = $this->model->getSong($id);
            require APP . 'view/_templates/header.php';
            require APP . 'view/canciones/ver.php';
            require APP . 'view/_templates/footer.php';
        }
    }
}
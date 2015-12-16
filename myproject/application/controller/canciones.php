<?php

class Canciones extends Controller
{
    public function index(){
        $this->view->render("index",
            array("titulo" => 'Canciones!!!'));
    }

    public function listar(){
        $canciones = $this->model->getAllSongs();
        $this->view->render("listar", array(
            'canciones' => $canciones,
            'titulo' => 'Listado de Canciones'
        ));
    }

    public function ver($id = 0){
        $id = (int) $id;
        if($id == 0){
            header("Location: /canciones/listar");
        } else {
            $cancion = $this->model->getSong($id);
            $this->view->render("ver", array(
                'cancion' => $cancion,
                'titulo' => 'Canción'
            ));
        }
    }
}
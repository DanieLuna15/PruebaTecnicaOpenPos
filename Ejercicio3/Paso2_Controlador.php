2: Configurar el controlador

<?php namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\RESTful\ResourceController;

class Usuarios extends ResourceController
{
    public function listarUsuarios()
    {
        $model = new UsuarioModel();
        $usuarios = $model->getUsuarios();
        return $this->respond($usuarios);
    }
}


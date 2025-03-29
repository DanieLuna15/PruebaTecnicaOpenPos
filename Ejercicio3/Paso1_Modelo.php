Ejercicio 3 - CodeIgniter (Controlador y Modelo)
Problema:
Crea un controlador en CodeIgniter llamado Usuarios con una función
listarUsuarios() que obtenga todos los usuarios desde la base de datos y los devuelva
en formato JSON.
Modelo:
Debe haber un modelo UsuarioModel con una función getUsuarios() para obtener la
lista de usuarios desde la base de datos.
Ruta esperada:
GET /usuarios/listar → Devuelve todos los usuarios en formato JSON.

1: Crear el Modelo Usuario

<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';        
    protected $primaryKey = 'id';              
    protected $allowedFields = ['nombre', 'email', 'password']; 


    public function getUsuarios()
    {
        return $this->findAll();
    }
}

<?php namespace App\Models;

use CodeIgniter\Model;

class Pengguna1Model extends Model
{
    //table name
    protected $table = "pengguna1";

    //allowed fields
    protected $allowedFields = [
    
        'email',
        'nama',
        'verifikasi',
        'isi'
    ];

    public function getPengguna1()
    {
        return $this->findAll();
    }
}

?>
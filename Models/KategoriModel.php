<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    //table name
    protected $table = "kategori";

    //allowed fields
    protected $allowedFields = [
    
        'nama_kategori',
        'status',
        'isi'
    ];

    public function getKategori()
    {
        return $this->findAll();
    }
}

?>
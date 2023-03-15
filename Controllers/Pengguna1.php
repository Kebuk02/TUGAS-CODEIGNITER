<?php
namespace App\Controllers;
use App\Models\Pengguna1Model;

class Pengguna1 extends BaseController
{
    /**
     * index function
     */
    public function index ()
    {
        //model initialize
        $Pengguna1s = new Pengguna1Model ();
        $pager = \Config\Services::pager();

        $data = array(
            'pengguna1s' => $Pengguna1s->paginate(2, 'pengguna1'),
            'pager' => $Pengguna1s->pager
        );

        return view('pengguna1', $data);
    }
}

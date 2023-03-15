<?php
namespace App\Controllers;
use App\Models\DaerahModel;

class Daerah extends BaseController
{
    /**
     * index function
     */
    public function index ()
    {
        //model initialize
        $Daerahs = new DaerahModel ();
        $pager = \Config\Services::pager();

        $data = array(
            'daerahs' => $Daerahs->paginate(2, 'daerah'),
            'pager' => $Daerahs->pager
        );

        return view('daerah', $data);
    }
}

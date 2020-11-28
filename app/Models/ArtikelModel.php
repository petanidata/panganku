<?php namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table      = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $useTimestamps = false;
    public function getArtikel($id_artikel=false)
    {
     if ($id_artikel == false){
         return $this->join('user','user.id_user=artikel.id_user')
         ->get()->getResultArray();
     } 
     return $this->join('user','user.id_user=artikel.id_user')
    ->where(['id_artikel' => $id_artikel])->first();
    }
}
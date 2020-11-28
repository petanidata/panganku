<?php namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table      = 'resep';
    protected $primaryKey = 'id_resep';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user','judul','porsi','lama_memasak','bahan','tutorial','gambar_banner','gambar_tutorial'];
    public function getResep($id_resep = false)
    {
     if ($id_resep == false){
         return $this->join('user','user.id_user=resep.id_user')
         ->get()->getResultArray();
    }
    return $this->join('user','user.id_user=resep.id_user')
    ->where(['id_resep' => $id_resep])->first();
    }

}
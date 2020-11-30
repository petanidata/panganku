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
         return $this->join('user','user.id_user=resep.id_user')->findAll();
    }
    return $this->join('user','user.id_user=resep.id_user')->where(['id_resep' => $id_resep])->first();
    }

}
// public function getKomentar($id_resep = false)
// {
//     if ($id_resep == false){
//         return $this->join('user','user.id_user=komentar.id_user')->findAll();
//    }
//    //return $this->Where(['id_komentar' => $id_komentar])->first()
//     return $this->join('user','user.id_user=komentar.id_user')->getWhere(['id_resep' => $id_resep])->getResultArray();
// }
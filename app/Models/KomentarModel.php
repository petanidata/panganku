<?php namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table      = 'komentar';
    protected $primaryKey = 'id_komentar';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user','id_resep','komentar','gambar'];
    public function getKomentar($id_resep)
    {
        return $this->join('user','user.id_user=komentar.id_user')
        ->getWhere(['id_resep' => $id_resep])->getResultArray();
    }
    /*public function getKomentar($id_resep)
    {
        return $this->join('user','user.id_user=komentar.id_user')
        ->getWhere(['id_resep' => $id_resep])->getResultArray();
    }*/
}
<?php namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table      = 'komentar';
    protected $primaryKey = 'id_komentar';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user','id_resep','komentar','gambar'];
    public function getKomentarbyid($id_komentar = false)
    {
        if ($id_komentar == false){
            return $this->findAll();
       }
       return $this->Where(['id_komentar' => $id_komentar])->first();
    }
    public function getKomentar($id_resep = false)
    {
        if ($id_resep == false){
            return $this->join('user','user.id_user=komentar.id_user')->findAll();
       }
       //return $this->Where(['id_komentar' => $id_komentar])->first()
        return $this->join('user','user.id_user=komentar.id_user')->getWhere(['id_resep' => $id_resep])->getResultArray();
    }
    public function getKomentarUserResep($id_komentar = false)
    {
        if ($id_komentar == false){
            return $this->join('user','user.id_user=komentar.id_user')->join('resep','resep.id_resep=komentar.id_resep','inner')->findAll();
       }
       //return $this->Where(['id_komentar' => $id_komentar])->first()
        return $this->join('user','user.id_user=komentar.id_user','inner')->join('resep','resep.id_resep=komentar.id_resep','inner')->getWhere(['id_komentar' => $id_komentar])->getResultArray();
    }

    /*public function getKomentar($id_resep)
    {
        return $this->join('user','user.id_user=komentar.id_user')
        ->getWhere(['id_resep' => $id_resep])->getResultArray();
    }*/

    
}
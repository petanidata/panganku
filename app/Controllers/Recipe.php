<?php namespace App\Controllers;
use App\Models\ResepModel;
use App\Models\KomentarModel;
class Recipe extends BaseController
{
	protected $artikelModel;
	public function __construct()
	{
		$this->resepModel = new ResepModel();
		$this->komentarModel = new KomentarModel();
	}
	public function index()
	{
		$title = [
			'title' => 'Resep | Panganku'
		];
		//$resep = $this->resepModel->findAll();
		$data = [
			'resep' => $this->resepModel->getResep()
		];
		//dd($data);
		echo view('header_v',$title);
		echo view('recipe/recipe_v',$data);
		echo view('footer_v');
	}
	public function detail($id_resep)
	{
		$title =  ['title' => 'Detail Resep | Panganku'];
		$data = [
			'resep' => $this->resepModel->getResep($id_resep)
		];
		$komentar = [
			'komentar' => $this->komentarModel->getKomentar($id_resep)
		];
		//dd($data);
		//dd($komentar);
		echo view('header_v',$title);
		echo view('recipe/detail_v',$data);
		echo view('recipe/komentar_v',$komentar);
		echo view('footer_v');
	}
	public function create()
	{
		$title =  ['title' => 'Buat Resep | Panganku'];
		
		echo view('header_v',$title);
		echo view('recipe/create_v');
		echo view('footer_v');
	}


	//--------------------------------------------------------------------

}

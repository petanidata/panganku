<?php namespace App\Controllers;
use App\Models\ArtikelModel;
class Article extends BaseController
{
	protected $artikelModel;
	public function __construct()
	{
		$this->artikelModel= new ArtikelModel();
	}
	public function index()
	{
		
		//$artikel = $this->artikelModel->findAll();
		//dd($artikel);
		$data = [
			'artikel' => $this->artikelModel->getArtikel()
			
		];

		$title = [
			'title' => 'Artikel | Panganku'
		];
		echo view('header_v',$title);
		echo view('article/article_v',$data);
		echo view('footer_v');
	}

	public function detail($id_artikel)
	{
		$data = [
			'artikel' => $this->artikelModel->getArtikel($id_artikel)
		];
		$title = ['title' => 'Detail Artikel | Panganku'];
		//dd($data);
		echo view('header_v',$title);
		echo view('article/detail_v',$data);
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}

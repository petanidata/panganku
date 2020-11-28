<?php namespace App\Controllers;
use App\Models\ResepModel;
use App\Models\KomentarModel;
use CodeIgniter\Exceptions\PageNotFoundException;
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
		if (empty($data['resep'])){
			throw new PageNotFoundException('Resep tidak ditemukan');
		}
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
	public function save()
	{
		//dd($this->request->getVar());
		$this->ResepModel->save([
			'judul' => $this->request->getVar('judul'),
			'porsi' => $this->request->getVar('porsi'),
			'lama_memasak' => $this->request->getVar('lama_memasak'),
			'bahan' => $this->request->getVar('bahan'),
			'tutorial' => $this->request->getVar('tutorial'),
			'gambar_banner' => $this->request->getVar('gambar_banner'),
			'gambar_tutorial' => $this->request->getVar('gambar_tutorial'),
		]);
		return redirect()->to(base_url('/recipe'));
	}


	//--------------------------------------------------------------------

}

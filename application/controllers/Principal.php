<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

function __construct(){
	parent::__construct();
}

	public function index()
	{
		$data['title'] = "Mãos de Luz | Página Principal";
		$data['description'] = "Elaborar e executar projetos sociais, identificar e priorizar ações caritativas, promover e divulgar o evangelho de Jesus";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/home');
		$this->load->view('commons/footer');
	}

	public function Institucional()
	{
		$data['title'] = "Mãos de Luz | Institucional";
		$data['description'] = "Informações sobre o Grupo Cristão Mãos de Luz.";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/institucional');
		$this->load->view('commons/footer');
	}

	public function Noticias()
	{
		$data['title'] = "Mãos de Luz | Notícias";
		$data['description'] = "Notícias sobre os trabalhos do Grupo Crisstão Mãos de Luz.";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/noticias');
		$this->load->view('commons/footer');
	}

	public function VivenciaCrista()
	{
		$data['title'] = "Mãos de Luz | Vivência Cristã";
		$data['description'] = "Prover auxílio material e espiritual";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/vivenciaCrista');
		$this->load->view('commons/footer');
	}

	public function CaravanaEvangelho()
	{
		$data['title'] = "Mãos de Luz | Caravana do Evangelho";
		$data['description'] = "Acolher e prover auxílio espiritual";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/caravanaEvangelho');
		$this->load->view('commons/footer');
	}

	public function Dignidade()
	{
		$data['title'] = "Mãos de Luz | Dignidade";
		$data['description'] = "Realizar pequenas benfeitorias";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/dignidade');
		$this->load->view('commons/footer');
	}

	public function EnsinandoPescar()
	{
		$data['title'] = "Mãos de Luz | Ensinando a Pescar";
		$data['description'] = "Ofertar a pessoas desempregadas ou em situação de risco  cursos de curta duração  para treinamento de mão de obra";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/ensinandoPescar');
		$this->load->view('commons/footer');
	}

	public function Galeria()
	{
		$data['title'] = "Mãos de Luz | Galeria";
		$data['description'] = "Galeria de imagens do Grupo Cristão Mãos de Luz";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/galeria');
		$this->load->view('commons/footer');
	}

	public function Doacao()
	{
		$data['title'] = "Mãos de Luz | Doação";
		$data['description'] = "Faça a sua doação e colabore para os trabalhos do Grupo Crisstão Mãos de Luz.";

		$this->load->view('commons/header',$data);
		$this->load->view('pages/doacao');
		$this->load->view('commons/footer');
	}

}
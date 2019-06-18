<?php

namespace App\controllers;
use App\controllers\Controller;
use App\models\classes\Produtos;

class ControllerSite extends Controller
{

	public function pageHome()
	{
		$array_css = ['home.css']; // Array que é percorrido no layouts/header.php da view.
		$array_js  = ['home.js'];  // Array que é percorrido no layouts/footer.php da view.
		$title     = 'Início';     // Informação que é printada no layouts/header.php da view.
		$view      = 'home';       // View que é para ser renderizada.

		$this->setCss($array_css);
		$this->setJs($array_js);
		$this->renderSite($view, $title);
	}

	// Funções de API.
	// Para requisições AJAX.
	public function getProduto()
	{
		$Produtos = new Produtos;
		$dados = $Produtos->buscarProduto();
		unset($Produtos);

		echo json_encode($dados);
	}
}
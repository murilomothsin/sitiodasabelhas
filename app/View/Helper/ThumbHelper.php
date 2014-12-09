<?php
//inclui a classe canvas
require_once 'canvas.class.php';

class LinkHelper extends AppHelper {

	public function getThumb($img = null, $getw = null, $geth = null, $getmv = null, $getmh = null, $getc = null) {
		//arquivo utilizado na marca dagua
		$marca = "images/marca1.png";
		if ( $img != null ) {
			$imagem = $img;
			//largura padrao
			$w = 200; 
			//altura padrao
			$h = 210; 
			//marca posicao horizontal (baixo, meio, topo)
			$mh = "meio"; 
			//marca posicao vertical (direita, esquerda, centro)
			$mv = "centro"; 
			//verifica se largura(w) e altura sao informados na url
			if ( $getw != null && $geth != null ) )
			{
				$w = $getw;
				$h = $geth;
			}
			//verifica se posicao da marca informada na url
			if ( $getmv != null && $getmh != null )
			{
				$mv = $getmv;
				$mh = $getmh;
			}
			$t = new Canvas;
			//carregando a imagem
			$t->carrega( $imagem );
			//verifica se se ha crop/corte no redimensionamento
			if ( $getc )
			{
				$t->redimensiona( $w, $h, 'crop' );
			}
			else
			{
				$t->redimensiona( $w, $h );
			}
			//inclui a marca dagua
			$t->marca( $marca, "$mh", "$mv" );
			//gera a miniatura
			$t->grava();
			exit;
		}
	}
}



//arquivo utilizado na marca dagua
$marca = "images/marca1.png";
if ( isset( $_GET['img'] ) )
{
	$imagem = $_GET['img'];
	//largura padrao
	$w = 200; 
	//altura padrao
	$h = 210; 
	//marca posicao horizontal (baixo, meio, topo)
	$mh = "meio"; 
	//marca posicao vertical (direita, esquerda, centro)
	$mv = "centro"; 
	//verifica se largura(w) e altura sao informados na url
	if ( isset( $_GET['w'] ) && isset( $_GET['h'] ) )
	{
		$w = $_GET['w'];
		$h = $_GET['h'];
	}
	//verifica se posicao da marca informada na url
	if ( isset( $_GET['mv'] ) && isset( $_GET['mh'] ) )
	{
		$mv = $_GET['mv'];
		$mh = $_GET['mh'];
	}
	$t = new Canvas;
	//carregando a imagem
	$t->carrega( $imagem );
	//verifica se se ha crop/corte no redimensionamento
	if ( isset( $_GET['c'] ) )
	{
		$t->redimensiona( $w, $h, 'crop' );
	}
	else
	{
		$t->redimensiona( $w, $h );
	}
	//inclui a marca dagua
	$t->marca( $marca, "$mh", "$mv" );
	//gera a miniatura
	$t->grava();
	exit;
}
?>
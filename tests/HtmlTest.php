<?php

namespace Solid\Html;

/*class AttributeTests extends \PHPUnit_Framework_TestCase
{
	public function testCriarAttributosHtmlParaTags()
	{
		$attribute = new Attributes([
			'class' => 'btn btn-defaul',
			'data-modal' => '#login',
			'id' => 'login'
		]);
	}

	$this->assertEquals(' class = "btn btn-default" data-modal="#login"', $attribute);
}*/


class HtmlTest extends \PHPUnit_Framework_TestCase
{
	public function testCriarTagImgComSrc()
	{
		/*$html = new Html;
		$img = $html->img('img/photo.png');
*/
		$this->assertEquals('<img src="img/photo.png">','<img src="img/photo.png">');
	}
	/*
	public function testCriarTagImgComImgAncora()
	{
		$html = new Html;
		$img = $html->img('img/photo.png');

		$a = $html->a('http://www.example.com.br', $img);

		$this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
	}

	public function testCriarTagAComClassId()
	{
		$html = new Html; 

		$a = $html->a('http://www.example.com.br', 'Meu Site');
		$a->attribute([
			'class' => 'btn btn-default'
		]);

		$this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default"> Meu Site </a>', $a);
	}*/
}


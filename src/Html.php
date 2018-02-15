<?php

namespace Solid\Html;

class Html extends \PHPUnit_Framework_TestCase
{
	public function img(string $src)
	{
		return '<img src="' . $src . '">';
	}

	public function a($href, $anchor)
	{

		$tag = $this->attributes();

		$tag->href = $href;
		$tag->anchor = $anchor;

		return $tag;
	}

	private function attributes()
	{
		$tag = new class {

			private $attributes;

			public function attribute(array $attibutes){
				$result = [];

				foreach ($attibutes as $key => $value) {
					$result[] = $key.'="'.$value.'"';
				}

				$this->attributes = ' '.implode(' ', $result);

			}

			public function __toString(){
				return '<a href="'.$this->href.'"'.$this->attributes.'>'.$this->anchor.'</a>';	
			}
		}

		return $tag;
	}

	
}
<?php

class Img extends Tag
{
	public function validate()
	{
		if(!isset($this->attrs[0]))
		{
			throw new Exception("Attribute not found");
		}

		if(!is_string($this->attrs[0]))
		{
			throw new Exception("Attribute must be string";
		}
	}

	public function __toString() : string
	{
		return '<img src="'.$this->attrs[0].'">';
	}
}
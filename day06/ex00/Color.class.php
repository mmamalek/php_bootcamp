<?php

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = FALSE;

    public function __construct($rgb)
    {
		if (isset($rgb['rgb']))
		{}
		else
		{
			$this->red = $rgb['red'];
			$this->green = $rgb['green'];
			$this->blue = $rgb['blue'];
		}
		if ($this->verbose)
			echo $this->__toString()." Constracted.\n";
	}

	public function __destruct()
	{
		if ($this->verbose)
			echo $this->__toString()." disstracted.\n";
	}
	public static function doc()
	{
		if (file_exists('Color.doc.txt'))
		{
			$docs = file_get_contents('Color.doc.txt');
			echo $docs;
		}
	}
	public function __toString()
	{
		return "Color( red: $this->red, green: $this->green, blue: $this->blue)";
	}
}

$f = Array();
$f['red'] = 9;
$f['green'] = 20;
$f['blue'] = 36;
$dog = new Color($f);


echo $dog->red;
echo $dog->green;
echo $dog->blue;
echo $dog;
Color::doc();
?>
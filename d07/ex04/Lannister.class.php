<?php

class Lannister
{
	public function sleepWith($name)
	{
		if (is_a($name, 'Lannister'))
		 	print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
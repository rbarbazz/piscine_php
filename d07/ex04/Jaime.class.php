<?php

class Jaime extends Lannister
{
	public function sleepWith($name)
	{
		if ($name instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		elseif (is_a($name, 'Lannister'))
		 	print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
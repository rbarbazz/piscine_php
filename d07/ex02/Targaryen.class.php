<?php

class Targaryen
{
	protected function resistsFire()
	{
		return False;
	}

	public function getBurned()
	{
		if (static::resistsFire())
			return ("emerges naked but unharmed");
		else
			return ("burns alive");
	}
}

?>
<?php

class UnholyFactory
{
	private $_fighters;

	public function __constructor()
	{
		$this->_fighters = [];
	}

	private function get_real_name($str)
	{
		switch ($str)
		{
			case "Footsoldier" :
				return ("foot soldier");
			break;

			case "Archer" :
				return ("archer");
			break;

			case "Assassin" :
				return ("assassin");
			break;

			case "Llama" :
				return ("llama");
			break;

			case "CrippledSoldier" :
				return ("crippled soldier");
			break;
		}
	}

	public function absorb($type)
	{
		if (isset($this->_fighters))
		{
			foreach ($this->_fighters as $value)
			{
				if (get_class($type) == get_class($value))
				{
					print("(Factory already absorbed a fighter of type ".$this->get_real_name(get_class($type)).")".PHP_EOL);
					return ;
				}
			}
		}
		if (is_a($type, Fighter))
		{
			$this->_fighters[]= $type;
			print("(Factory absorbed a fighter of type ".$this->get_real_name(get_class($type)).")".PHP_EOL);
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
		}
	}

	public function fabricate($fighters_name)
	{
		foreach ($this->_fighters as $value)
		{
			if ($this->get_real_name(get_class($value)) == $fighters_name)
				{
					print ("(Factory fabricates a fighter of type ".$fighters_name.")".PHP_EOL);
					return ($value);
				}
		}
		print ("(Factory hasn't absorbed any fighter of type ".$fighters_name.")".PHP_EOL);
		return (NULL);
	}
}

 ?>
<?php
	class NightsWatch
	{
		static private $fighters = array();

		public function recruit($person)
		{
			if (is_a($person, IFighter))
				$this->fighters[] = $person;
		}
		public function fight()
		{
			foreach ($this->fighters as $key => $value)
			{
				$value->fight();
			}
		}
	}
 ?>
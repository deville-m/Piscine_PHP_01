<?php
	function ft_is_sort($tab)
	{
		$tmp = $tmp2 = $tab;
		$inc = $dec = true;
		sort($tmp);
		rsort($tmp2);

		foreach ($tab as $key => $value) {
			if ($tmp[$key] != $value)
				$inc = false;
			if ($tmp2[$key] != $value)
				$dec = false;
			if (!$dec && !$inc)
				return (0);
		}
		return (1);
	}
?>
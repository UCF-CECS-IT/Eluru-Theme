<?php

class Eluru_Menu_Walker extends Walker_Nav_Menu  {

	public function start_el(&$output, $item, $depth=0, $args=[], $id=0)
	{
		var_dump($item);

		$output .= "<li class='" .  implode(" ", $item->classes ?? []) . "'>";

		if ($item->url && $item->url != '#') {
			$output .= '<a href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}

		$output .= $item->title;

		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}

}

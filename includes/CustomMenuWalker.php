<?php
class CustomMenuWalker extends Walker_Nav_Menu
{
    private $item_number = 0;
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)

    {
        $this->item_number++;
        $output .= '<a href="' . $item->url . '" class="flex justify-center font-primary-normal w-2/6 bg-primary-0 color-primary-100 border-gray-500 border py-2.5 hover:border-white">';

        if ($item->url && $item->url != '#') {
            $output .= '<div class="lg:text-sm sm:text-lg">';
        } else {
            $output .= '<span>';
        }


        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            if ($this->item_number === 1)
            {
                $output .= '<i class="fal fa-calendar fa-xs p-1 ml-1"></i>';
            }
            if ($this->item_number === 2)
            {
                $output .= '<i class="fal fa-info-circle fa-xs p-1 ml-1"></i>';
            }
            if ($this->item_number === 3)
            {
                $output .= '<i class="fal fa-ticket fa-xs p-1 ml-1" style="transform: rotate(160deg);"></i>';
            }
            $output .= '</div>';
        } else {
            $output .= '</span>';
        }

    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</a>{$n}";
	}
}

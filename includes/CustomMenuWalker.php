<?php
class CustomMenuWalker extends Walker_Nav_Menu
{
    private $item_number = 0;
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)

    {
        $this->item_number++;
        $output .= '<a href="' . $item->url . '" class="flex justify-center font-primary-normal w-2/6 bg-primary-100 color-primary-0 border-gray-500 border py-2.5 hover:border-white">';

        if ($item->url && $item->url != '#') {
            $output .= '<div class="lg:text-sm sm:text-lg">';
        } else {
            $output .= '<span>';
        }


        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            if ($this->item_number === 1)
            {
                $output .= '<i class="fal fa-info-circle fa-sm p-1 ml-1"></i>';
            }
            if ($this->item_number === 2)
            {
                $output .= '<i class="fal fa-ticket fa-xs p-1 ml-1" style="transform: rotate(160deg);"></i>';
            }
            if ($this->item_number === 3)
            {
                $output .= '<i class="fal fa-user fa-xs p-1 ml-1"></i>';
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

class CustomMenuWalker_2 extends Walker_Nav_Menu
{
    private $item_number = 0;
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)

    {
        $this->item_number++;
        $output .= '<a href="' . $item->url . '">';

        if ($item->url && $item->url != '#') {
            $output .= '<div class="color-primary-100 my-4">';
            $output .= '<span class="menu-change-font text-4xl">';
        } else {
            $output .= '<span>';
        }


        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</span>';
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

class CustomMenuWalker_3 extends Walker_Nav_Menu
{
    private $item_number = 0;
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)

    {
        $this->item_number++;

        
        $output .= '<a href="' . $item->url . '" class="my-3 block">';


        $output .= $item->title;

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

class CustomMenuSocials extends Walker_Nav_Menu
{
    private $item_number = 0;
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)

    {
        $this->item_number++;
        $output .= '<a href="' . $item->url . '"">';

        if ($item->url && $item->url != '#') {
            $output .= '<div class="color-primary-100 border-transparent border hover:border-white">';
        } else {
            $output .= '<span>';
        }



        if ($item->url && $item->url != '#') {
            if ($this->item_number === 1)
            {
                $output .= '<i class="fab fa-facebook fa-md mx-4 my-2"></i>';
            }
            if ($this->item_number === 2)
            {
                $output .= '<i class="fab fa-twitter fa-md mx-4 my-2"></i>';
            }
            if ($this->item_number === 3)
            {
                $output .= '<i class="fab fa-youtube fa-md mx-4 my-2"></i>';
            }
            if ($this->item_number === 4)
            {
                $output .= '<i class="fab fa-instagram fa-md mx-4 my-2"></i>';
            }
            if ($this->item_number === 5)
            {
                $output .= '<i class="fab fa-tiktok fa-md mx-4 my-2"></i>';
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


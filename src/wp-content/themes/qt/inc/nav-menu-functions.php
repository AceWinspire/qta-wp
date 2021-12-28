<?php

// Custom Main Nav Walker Menu.

// Register menus in wordpress admin
class Menu
{
	private function actionAfterSetup($function)
	{
		add_action('after_setup_theme', function () use ($function) {
			$function();
		});
	}

	public function addNavMenus($locations = array())
	{
		$this->actionAfterSetup(function () use ($locations) {
			register_nav_menus($locations);
		});
	}
}

$nav = new Menu;

// adding menus in wordpress admin
$nav->addNavMenus([
	'menu-1' => 'TopNavigation',
	'menu-2' => 'Footer Links -1',
]);

// Main Top Bar menu f
class Topbar_Menu_Walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$class_names = '';
		$value       = '';
		$classes   = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = (0 === $depth) ? 'nav-item' : '';
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = 'class="item-' . esc_attr($class_names) . '"';
		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
		$output .= '<li' . $id . $value . $class_names . '>';
		$inner_attributes = '';
		$attributes       = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes      .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes      .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes      .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . ' class="nav-link btn-outline-primary rounded-pill px-3">';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	function end_el(&$output, $item, $depth = 0, $args = array())
	{
		$output .= "</li>\n";
	}
}

// The Top Menu design
function td_top_nav()
{
?>
	<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
		<div class="container d-flex justify-content-between align-items-center">
			<a class="navbar-brand h1" href="<?php echo esc_url(home_url()); ?>">
				<i class='bx bx-buildings bx-sm text-dark'></i>
				<span class="text-dark h4">Purple</span> <span class="text-primary h4">Buzz</span>
			</a>
			<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
				<div class="flex-fill mx-xl-5 mb-2">
					<?php
					wp_nav_menu(array(
						'container'			=> 'ul',

						'menu_id'			=> 'menu-1',
						'menu_class'		=> 'nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark',
						'depth'				=> 0,
						'fallback_cb'		=> false,
						'walker'			=> new Topbar_Menu_Walker()
					));
					?>
				</div>
				<div class="navbar align-self-center d-flex">
					<a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
					<a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
					<a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
				</div>
			</div>
		</div>
	</nav>
<?php
}

// The Footer menu adding class one level simple menu
function footer_menu_1()
{
	wp_nav_menu(array(
		'container'			=> 'ul',
		'menu_id'			=> 'menu-2',
		'menu_class'		=> 'list-unstyled text-light light-300',
		'depth'				=> 0,
		'fallback_cb'		=> false
	));
}

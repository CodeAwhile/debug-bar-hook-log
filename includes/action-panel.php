<?php

class Debug_Bar_Action_Panel extends Debug_Bar_Panel {
	public function init() {
		$this->title( 'Action Log' );
		$this->set_visible( true );
	}

	public function render() {

		$hooks = Action_Log::$actions;
		include Debug_Bar_Hook_Log::plugin_dir( 'views/render-hooks.php' );
		/*echo '<ul>';
		foreach ( Actionz::$actions as $action ) {
			$name = array_shift( $action );
			echo "<li>$name - " . count( $action ) . "</li>";
		}
		echo '</ul>';*/
		/*
		echo "<pre>";
		echo esc_html( print_r( Actionz::$actions, true ) );
		echo "</pre>";*/
	}
}

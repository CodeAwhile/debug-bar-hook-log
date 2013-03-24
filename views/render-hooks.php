<div class="render-hooks">
	<div class="filters">
		<p>Remove the following hooks from the list</p>
		<?php foreach ( $filter_groups as $key => $values ) : ?>
			<p><input type="checkbox" class="render-hooks-filter" value="<?php echo $key; ?>" /> <?php echo $key . ' (' . implode(', ', array_merge( $values['exact'], $values['regex'] ) ) , ')'; ?></p>
		<?php endforeach; ?>
        Search: <input class="render-hooks-search" />
	</div>
	<div class="hooks">
		<ul>
		<?php foreach ( $hooks as $hook_info ) : ?>
			<li class="hook <?php echo implode( $hook_info['groups'], ' ' ); ?>" data-hookname="<?php echo esc_attr( $hook_info['name'] ); ?>">
				<div class="hook-title"><?php echo $hook_info['name']; ?></div>
				<pre class="hook-args"><?php echo esc_html( print_r( $hook_info['args'], true ) ); ?></pre>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>

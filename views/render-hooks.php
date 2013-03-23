<div class="render-hooks">
	<div class="filters">
		<p>Remove the following hooks from the list</p>
		<?php foreach ( Action_Log::$ignore_hooks as $key => $values ) : ?>
			<p><input type="checkbox" class="render-hooks-filter" value="<?php echo $key; ?>" /> <?php echo $key . ' (' . implode(', ', array_merge( $values['exact'], $values['regex'] ) ) , ')'; ?></p>
		<?php endforeach; ?>
	</div>
	<div class="hooks">
		<ul>
		<?php foreach ( $hooks as $hook_info ) : ?>
			<li class="hook <?php echo implode( $hook_info['groups'], ' ' ); ?>">
				<div class="hook-title"><?php echo $hook_info['name']; ?></div>
				<pre class="hook-args"><?php print_r( $hook_info['args'] ); ?></pre>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>

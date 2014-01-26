<?php
/**
 * li3_flash_message plugin for Lithium: the most rad php framework.
 *
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

?> 
<div class="alert flash-message<?php if(!empty($class)): ?> <?=$class; ?><?php endif; ?>">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?=$message; ?>
</div>
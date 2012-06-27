<p><?php echo $this->html->link('Zaloguj', 'User::login'); ?></p>

<h2>User List</h2>

<p><?php echo $this->html->link('Sign Up', 'User::signup'); ?></p>

<?php if($users->count()) { ?>
<ul>
	<?php foreach($users as $user) { ?>
	<li><?php echo $h($user->name); ?></li>
	<?php } ?>
</ul>


<p><?php echo $this->html->link('Żarło', 'User::signup'); ?></p>

			Menu User
				<?php echo $this->html->link('Index user', 'User::index'); ?> 
				<?php echo $this->html->link('Dodaj user', 'User::signup'); ?> 
				<?php echo $this->html->link('Login', 'User::login'); ?>
				<?php echo $this->html->link('UserHistoryData', 'UserHistoryData::index'); ?>
				<?php echo $this->html->link('Dodaj dane historyczne :P ', 'UserHistoryData::add'); ?>
			<br>
			<br> Uwaga: co dodać: 
	</br> Dodać co zjadlem według daty : / dodać co zjadłem example : dziś !


<?php } ?>

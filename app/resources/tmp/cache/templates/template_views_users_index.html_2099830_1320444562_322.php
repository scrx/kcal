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
<?php } ?>

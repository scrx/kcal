<p><?=$this->html->link('Zaloguj', 'User::login')?></p>

<h2>User List</h2>

<p><?=$this->html->link('Sign Up', 'User::signup')?></p>

<?php if($users->count()) { ?>
<ul>
	<?php foreach($users as $user) { ?>
	<li><?=$user->username?></li>
	<?php } ?>
</ul>


<p><?=$this->html->link('Żarło', 'User::signup')?></p>

			Menu User
				<?=$this->html->link('Index user', 'User::index')?> 
				<?=$this->html->link('Dodaj user', 'User::add')?> 
				<?=$this->html->link('Login', 'User::login')?>
				<?=$this->html->link('UserHistoryData', 'UserHistoryData::index')?>
				<?=$this->html->link('Dodaj dane historyczne :P ', 'UserHistoryData::add')?>
			<br>
			<br> Uwaga: co dodać: 
	</br> Dodać co zjadlem według daty : / dodać co zjadłem example : dziś !


<?php } ?>
<?php

$data = member_connected();

foreach($data as $infos_u) {
    
    echo "<div class='suc'>Welcome ".$infos_u['n_name'],"</div>";
}

if(!isset($_SESSION['n_email'])) {
    
    Header("location:index.php?page=login");
    
}




?>

<div class="info">

	<?php
	foreach($data as $infos_u) {

	}
	?>

	<div class="menuinfo">
		<img class="avatarimg" src="avatar/<?php echo $infos_u['avatar'] ?>">
		<br />
		<a class="avatch" href="index.php?page=update_avatar">Change Profile Picture</a>
		<li><p><strong>First Name : </strong><?php echo $infos_u['n_name']?></p></li>
		<li><p><strong>Last Name : </strong><?php echo $infos_u['n_famname']?></p></li>
		<li><p><strong>Email : </strong><?php echo $infos_u['n_email']?></p></li>
		<li><p><strong>Sex : </strong><?php echo $infos_u['n_sex'] ?></p></li>
		<li><p><strong>Birthday : </strong><?php echo $infos_u['birthday'];?></p></li>
		<li><p><strong>Country : </strong><?php echo $infos_u['country'];?></p></li>
	</div>

</div>
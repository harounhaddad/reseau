<?php
include "include/member.function.php";
include "member.php";

if(isset($_POST['update'])) {
    
    $n_name = htmlentities(trim($_POST['n_name']));
    $n_famname = htmlentities(trim($_POST['n_famname']));
    $n_email = htmlentities(trim($_POST['n_email']));
    $n_password = htmlentities(trim($_POST['n_password']));
    $password_confirm = htmlentities(trim($_POST['password_confirm']));
    $birthday = htmlentities(trim($_POST['birthday']));
    $country = htmlentities(trim($_POST['country']));
    $n_sex = htmlentities(trim($_POST['n_sex']));
    update_info_member($n_name,$n_famname,$n_email,$n_password, $password_confirm,$n_sex,$birthday,$country);
    Header("Location:index.php?page=member");
   }
?>

<?php

foreach($data as $infos_u) {

?>

<div class="re">
    <form action="" method="POST">
        <h2>Update your informations</h2>
        <div class="form_group">
            <input type="text" name="n_name" value='<?php echo $infos_u['n_name'] ?>'>
        </div>

        <div class="form_group">
            <input type="text" name="n_famname" value='<?php echo $infos_u['n_famname'] ?>'>
        </div>

        <div class="form_group">
            <input type="email" name="n_email" value='<?php echo $infos_u['n_email'] ?>'>
        </div>

        <div class="form_group">
            <input type="password" name="n_password" placeholder="Password">
        </div>
        
        <div class="form_group">
            <input type="password" name="password_confirm" placeholder="Password Confirm">
        </div>
        
        <div class="form_group">
            <input type="text" name="n_sex" value='<?php echo $infos_u['n_sex'] ?>'>
        </div>

        <div class="form_group">
            <input type="text" name="birthday" value='<?php echo $infos_u['birthday'] ?>'>
        </div>

        <div class="form_group">
            <input type="text" name="country" placeholder="Country" value='<?php echo $infos_u['country'] ?>'>
        </div>

        <div class="form_group">
            <input type="submit" name="update" value="Update">
        </div>
    </form>
</div>
<?php
}
?>

?>
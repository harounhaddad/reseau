<?php
function member_connected() {
    
    $data = array();
    $n_email = $_SESSION['n_email'];
    $query = mysql_query("SELECT * FROM users WHERE n_email='$n_email'");
    
    while($rows = mysql_fetch_assoc($query)) {
        $data[] = $rows;
        
    }
    
    return $data;
    
}
?>
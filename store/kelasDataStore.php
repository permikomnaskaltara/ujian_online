<?php
    $root = "../";
    include $root."includes/php/initial.php";    
    include $root."includes/php/classUtama.php";
        
    //DATABASE CONNECTION
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect(true);
    
    $_limit        = 10;
    $id_subjurusan = $_POST["id_subjurusan"]; 
    $query         = mysql_escape_string(isset($_POST["query"])?$_POST["query"]:"");
    
    $sql = "SELECT A.id, A.kode, A.nama FROM kelas AS A WHERE A.id_subjurusan='$id_subjurusan' " . (strlen($query)>0?" AND (A.kode LIKE '%$query%' OR A.nama LIKE '%$query%')":"");
    $db->mysql_query($sql, $rs_num, $rs);
    foreach($rs as $key => $value) {
        $data[$key] = array(
            "display" => $value["nama"],
            "value" => $value["nama"],
            "data" => $value
        ); 
    }
    
    $db->mysql_close();
    die(json_encode($data));
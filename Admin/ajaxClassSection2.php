<?php

include '../Includes/dbcon.php';

    $cid = intval($_GET['cid']);//

        $queryss=mysqli_query($conn,"select * from tblsection where classId=".$cid."");                        
        $countt = mysqli_num_rows($queryss);

        echo '
        <select required name="sectionId" class="form-control mb-3">';
        echo'<option value="">--Select Section--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['Id'].'" >'.$row['section'].'</option>';
        }
        echo '</select>';
?>


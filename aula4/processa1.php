<?php
    $nuno= $_GET['cxn1'];
    $ndos= $_GET['cxn2'];
    $ntres= $_GET['cxn3'];
    $media = ($nuno + $ndos + $ntres)/3;
    echo "media: $media";

?>
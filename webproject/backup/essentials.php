<?php
// ESSENTIAL
function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "<script> 
        window.location.href='adminindex.php';
        </script>";
    }

    session_regenerate_id(true);
}
function redirect($url)
{
    echo "
    <script>window.location.href='$url';</script>";
}
function alertMsg($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show" role="alert">
        <strong class = "me-3">$msg</strong>        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
alert;
}
?>
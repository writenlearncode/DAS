<?php
include_once '../../UI/layouts/adminmenu.php';
include_once '../../UI/layouts/body.php';
include_once '../../UI/layouts/header.php';
include_once '../../UI/layouts/footer.php';
include_once '../../UI/layouts/HTMLHelper.php';

echo beginHtml("Upload Questions");
echo headerbar();
echo tutormenu();
echo startcolumn2();
?>
<form method="POST" action="" enctype="multipart/form-data">
    <p>Upload Questions : <input type ="file" name = "UploadFileName"></p><br />
    <input type = "submit" name = "Submit" value = "Press THIS to upload Questions">
</form>
<?php 
echo endcolumn2();
echo footer();
echo endHtml();
?>
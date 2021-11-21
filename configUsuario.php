<?php

session_start();
include "connection.php";
include "plantillaHtml.php";
?>

<div class="cambioAvatar">
    <h4>Para cambiar de avatar introduce la URL</h4>
    <form action="cambioAvatar.php" class="formAvatar">
    <input type="text" class="formAvatar">
    </form>
</div>


</body>
Please send a request with parameter "a" using different HTTP methods
<br>
<?php
error_reporting(0);
$flag[GET] = "moectf{GET}";
$flag[POST] = "moectf{POST}";
if(isset($_GET[a]))echo $flag[GET];
if(isset($_POST[a]))echo $flag[POST];
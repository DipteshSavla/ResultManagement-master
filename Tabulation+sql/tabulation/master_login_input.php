
<?php
include_once 'readsetup.php';
userexist();

echo "
<head>
<link rel='stylesheet' type='text/css' href='css/master_menu.css' media='screen'/> 
</head>    
<body>
";

echo "
<div class='master_menu'>
<table width='100%'><tr><td align='center'>
<a href='subcrdmaster.php' align='center'>Goto Content management</a>
</td></tr>
<br/>
<br/>
<tr><td align='center'>
<a href='master_useradd.php'>Register a new user</a>
</td></tr></table>
</div>
</body>
";

?>

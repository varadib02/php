<?php 

require_once('../model/User.php');

header('content-type: application/json');
$user = new User('alma@korte.hu', '1234', 'JakAb', 'gipsz', 33);

//print 'A user neve: ' . $user->getName() . '<br />';
//print 'A user joga: ' . $user->getLevel() . '<br />';
print '{"name": "' . $user->getName() . '", "level": "' . $user->getLevel() . '"}';

?>
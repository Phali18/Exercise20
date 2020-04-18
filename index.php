<?php

require_once 'library/member.php'; 
use library\Member;

$member1 = new Member(1, 'Sam', 'Smith','08/08/1990' , 'samsmith@gmail.com');
//echo $member1->checkfirstname();
//echo $member1->updatefirstname('Samantha');
echo $member1->searchfirstname('Samantha');

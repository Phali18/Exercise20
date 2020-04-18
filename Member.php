<?php

namespace library;
//first line of code - data type of attributes for userid
class Member {
    private $userid;
    private $firstname;
    private $lastname;
    private $dob;
    private $email;
  
    public function __construct($userid, $firstname, $lastname,$dob, $email)
{
    $this->userid=$userid;
    $this->firstname=$firstname;
    $this->lastname=$lastname;
    $this->dob=$dob;
    $this->email=$email;
}

public function getfirstname (){
    return $this->firstname;
}

public function checkfirstname() {
if(empty($this->firstname))
{die ('NEED A FIRSTNAME!');}
        echo $this->firstname; }

public function updatefirstname($firstname) {
        return $this-> firstname = $firstname;
        }

public function searchfirstname ($firstname) {
 if ($this->firstname !=$firstname)        {
 die($firstname . " doesn't exist");}
 echo $firstname . " exists";
      }
 }

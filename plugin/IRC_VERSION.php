<?php

if($action=="privmsg"){
  if(strtolower($msg)==Chr(1)."version".Chr(1)){
    IRC_PostNotice($usr, Chr(1)."VERSION ".$version.Chr(1));
    IRC_Rejoin($chan);
  }
} 

?>

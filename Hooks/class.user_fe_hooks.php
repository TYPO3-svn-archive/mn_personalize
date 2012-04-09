<?php

class user_intellipops_fehooks {

    function insertPageIncache ($that,$timeOutTime) {
    }
   
   
    function contentPostProc_all (&$params,&$that) {
        
    }
   
    function contentPostProc_cached (&$params,&$that) {
    }

    function contentPostProc_output (&$params) {
        print "test";
    }

}

?>
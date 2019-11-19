<?php
include "Add_page.php";
include "html_page_templet.php";
// based of user input/click add new tages


function create_p_tage($content)
{
    $new_p_tage ="<p>".$content."</p>";
    return $new_p_tage;
}
function create_image_tage($image_url){}
function create_h1_tage($content){}
function create_h2_tage($content){}
function create_h3_tage($content){}
function create_div_tage($content){}
function html_templent(){}

function build_page($instructions)
{
    // create the basic/start of the page
    // send instuctions as json {"h1":"Cool","p":"Hello Wolrd"}
    // will build the page in order if h1 is under a p tage in the instructions. The h1 will be shown under the p tage 
   $new_html_page ="";
   $json = json_decode($instructions);
   foreach($json as $content){
        if($json->h1){
           $new_p_tage = $new_p_tage." ".create_h1_tage($content);
        }elseif($json->p){
           create_p_tage($content);
       }
   }
   save_page($new_html_page);
}

function save_page($new_html_page)
{
    // ?move to/ call add_page.php?
    // save the page($new_html_page as a string) in the database
    // save the page on the file system/project of the front end 
    // ?rederect to new page?
}

?>
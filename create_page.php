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
    // instuctions list/ order of needed tages with content [key,value]-> [p1,"This is in my p tage"]
   $new_page_html = "";
   $new_page_html = html_templent();
    foreach ($content as $key => $value) {
       if(strpos($key,'p')!==false){
           create_p_tage($content);
       }elseif (strpos($key,'div')!==false) {
           create_div_tage($content);
       }elseif(strpos($key,'h1')!==false){
            create_h1_tage($content);
       }elseif(strpos($key,'h2')!==false){
            create_h2_tage($content);
       }elseif(strpos($key,'h3')!==false){
            create_h3_tage($content);
       }elseif(strpos($key,'image')!==false){
            create_image_tage($content);
       }
   }
   save_page()
}

function save_page($new_page_html)
{
    // move to/ call add_page.php
}

?>
<?php
include "Add_page.php";
include "html_page_templet.php";
// based of user input/click add new tages


function create_p_tage($content)
{
    $new_p_tage ="<p>".$content."</p>";
    return $new_p_tage;
}
function create_image_tage($image_url){
    $new_image ="<img src=".$image_url.">";
    return $new_image;
}
function create_h1_tage($content){
    $new_h1 = "<h1>".$content."</h1>";
    return $new_h1;
}
function create_h2_tage($content){
    $new_h2 = "<h2>".$content."</h2>";
    return $new_h2;
}
function create_h3_tage($content){
    $new_h3 ="<h3>".$content."</h3>";
    return $new_h3;
}
function create_div_tage($content){
    $new_div = "<div>".$content."</div>"
    return $new_div;
}
function create_title_tage($content){
    $new_title = "<title>".$content."</titile>";
    return $new_title;
}
function html_templent(){
    return "";
}

function build_page($instructions)
{
    // create the basic/start of the page
    // send instuctions as json {"h1":"Cool","p":"Hello Wolrd"}
    // will build the page in order if h1 is under a p tage in the instructions. The h1 will be shown under the p tage 
   $new_html_page = html_templent();
   $json = json_decode($instructions);
   $content = $json->content;
   $file_name = "";
   foreach($content as $line){
        if($line->p){
            $new_html_page.= create_p_tage($line->p);
        }elseif($line->h1){
            $new_html_page.=create_h1_tage($line->h1);
        }elseif($line->h2){
            $new_html_page.=create_h2_tage($line->h2);
        }elseif($line->h3){
            $new_html_page.=create_h3_tage($line->h3);
        }elseif($line->div){
            $new_html_page.=create_div_tage($line->div);
        }elseif($line->image){
            $new_html_page.=create_image_tage($line->image);
        }elseif($line->file){
            $file_name = $line->file;
        }elseif($line->title){
            $new_html_page.=create_title_tage($line->title);
        }
   }
   save_page($new_html_page,$file_name);
}

function save_page($new_html_page,$file_name)
{
    $myfile = fopen($file_name,"w");
    fwrite($myfile, $new_html_page);
    fclose($myfile);
    header("Loaction: localhost:8080/admin/login.html");
    exit();
}

?>
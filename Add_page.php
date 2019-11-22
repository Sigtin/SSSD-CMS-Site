<!-- h1-3, p, img, div -->
<?php
// read in string/json string of the html of the page
// store strin into page table in db
include 'db_config.php';

$tabel_name = "pages";
if(isset($_POST['page']))
{
    $raw_data = $_POST['page'];
    $page_html = filter_var($raw_data. FILTER_SANITIZE_STRING);
    $query = "INSERT INTO ".$tabel_name."
        set 
        page_content = '".$msqli->real_escape_string($_POST['page'])." '
        ";

    if($msqli->query($query))
    {
        header("Location: ");
        exit();
    }else 
    {
        echo "Database Error: Could not add page.";
    }
    $msqli->close();
}
?>

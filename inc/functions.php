<?php
function generate_menu(array $pages): string{
    $menuItems = ''; 
    foreach($pages as $page_name => $page_url){
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }
    return $menuItems;
}
?>
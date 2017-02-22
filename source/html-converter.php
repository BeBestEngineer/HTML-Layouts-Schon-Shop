<?php

ob_start();

$_GET['page'] = getopt("p:")['p'];


  require 'index.php';


$page_out_buffer_data = ob_get_contents();

ob_end_clean();

file_put_contents('../build/'. $_GET['page'] .'.html', $page_out_buffer_data);

?>
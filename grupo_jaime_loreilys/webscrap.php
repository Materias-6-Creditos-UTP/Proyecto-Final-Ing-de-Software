<?php

include "simple_html_dom.php"; 


function download_file_from_url($url, $path)
{
    $new_file_name = $path;
    $file = fopen ($url, "rb");
    if ($file)
    {
        $newf = fopen ($new_file_name, "wb");
        if($newf)
        while(!feof($file)){
            fwrite($newf, fread($file, 1024 * 8),1024 * 8);

        }
    }
    if ($file){fclose($file);}
    if ($newf){fclose($newf);}
}


function get_all_pdf_links($website_url)
{
    $html = file_get_html($website_url);
    $all_ahref_links = array();
    $link_counter=0;

    //find all links 
    foreach($html->find('a') as $element)
    {
        $all_ahref_links[$link_counter++] = $element->href;
    }

    $pdf_links_list = array();
    $pdf_link_count = 0;
    $total_links = count($all_ahref_links);
    for ($link_counter=0;$link_counter<$total_links;$link_counter++)
    {
        if (strpos($all_ahref_links[$link_counter], '.pdf') !== false)
        {
            $pdf_links_list[$pdf_link_count++] = $all_ahref_links[$link_counter];
        }

    }
    return $pdf_links_list;

}

//change this URL to tour target web 
$target_url = 'https://ocw.mit.edu/courses/mathematics/18-440-probability-and-random-variables-spring-2014/lecture-notes/';
$pdf_links_array = get_all_pdf_links($target_url);

//download all pdf files
$pdf_counter = 0;
for ($pdf_counter=0;$pdf_counter<count($pdf_links_array);$pdf_counter++)
{
    //change here base url to your target 
    $complete_pdf_url = "https://ocw.mit.edu".$pdf_links_array[$pdf_counter];
    $pdf_path_file_names_token = explode("/",$pdf_links_array[$pdf_counter]);
    $pdf_name = "PDF/".$pdf_path_file_names_token[count($pdf_path_file_names_token)-1];
    echo "<br>Downloading from...".$complete_pdf_url."...to...".$pdf_name."...";
    download_file_from_url($complete_pdf_url,$pdf_name);
}
exit;
?> 
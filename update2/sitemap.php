<?php

            $pgnx=explode("/", $_SERVER["REQUEST_URI"]);

            $header2="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
            <sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
            	xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
            	xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9	http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd\">
            ";
            
            $footer2="</sitemapindex>";
            
            $header="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
            <urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
            
            $footer="</urlset>";

            
            if($pgnx[1] == "sitemap.xml"){

    print $header2;

            $result = mysqli_query($link, "SELECT * FROM `manufacture` ORDER BY `title` ASC LIMIT 0, 1000;");
            // Считаем количество полученных записей
            $num_result = mysqli_num_rows($result);
            // Выводим все записи текущей страницы
            for ($i = 0; $i<$num_result; $i++) {
            $row = mysqli_fetch_array($result);
 
                print"
                <sitemap>
                  <loc>https://ева-крым.рф/sitemap-".$row['title'].".xml</loc>
                </sitemap>";
            
            }
            
 
                print"
                <sitemap>
                  <loc>https://ева-крым.рф/sitemap-brands.xml</loc>
                </sitemap>";
            
    print $footer2;
    
            }else{
                
                print $header;
                
                $pgnx[1] = str_replace(".xml", "", $pgnx[1]);
                
               $nx = explode("-", $pgnx[1]); 
               
               if($nx[1] == "brands"){

                    $result = mysqli_query($link, "SELECT * FROM `manufacture` ORDER BY `title` ASC LIMIT 0, 1000;");
                    // Считаем количество полученных записей
                    $num_result = mysqli_num_rows($result);
                    // Выводим все записи текущей страницы
                    for ($i = 0; $i<$num_result; $i++) {
                    $row = mysqli_fetch_array($result);
         
                                print"
                                   <url>
                                      <loc>https://ева-крым.рф/eva-kovriki/model/".str_replace("/suv", "_suv", str_replace(" ", "_", $row['title']))."</loc>
                                      <changefreq>weekly</changefreq>
                                      <priority>0.7</priority>
                                   </url>";
                    
                    }
                   
               }elseif(!empty($nx[1])){
                   
                   
                   	$result = mysqli_query($link, "select * from `manufacture` where `title`='".$nx[1]."'");
	                $man = mysqli_fetch_array($result);
	                
	                if($man['id']){
                   
                        $result = mysqli_query($link, "SELECT * FROM `seria` where `manufacture_id`='".$man['id']."' ORDER BY `id` DESC LIMIT 0, 10000;");
                        // Считаем количество полученных записей
                        $num_result = mysqli_num_rows($result);
                        // Выводим все записи текущей страницы
                        for ($i = 0; $i<$num_result; $i++) {
                        $row = mysqli_fetch_array($result);

                            $result2 = mysqli_query($link, "SELECT * FROM `model` WHERE `seria_id`='".$row['id']."' ORDER BY `id` DESC LIMIT 0, 10000;");
                            // Считаем количество полученных записей
                            $num_result2 = mysqli_num_rows($result2);
                            // Выводим все записи текущей страницы
                            for ($u = 0; $u<$num_result2; $u++) {
                            $row2 = mysqli_fetch_array($result2);
            
                                print"
                                   <url>
                                      <loc>https://ева-крым.рф/eva-kovriki/models/".str_replace("/suv", "_suv", str_replace(" ", "_", $row2['title']))."</loc>
                                      <changefreq>weekly</changefreq>
                                      <priority>0.7</priority>
                                   </url>";
                            
                            }  
                        
                        }  
                    
	                }

                    
                    

                   
               }
               
               print $footer;
                
            }

?>
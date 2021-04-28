<?php
    $page_name = basename($_SERVER['SCRIPT_NAME'], ".php");
    $navLinks = ["home", "about", "resume"];

    function outputNav($navLinks, $page_name) {
        $output = "";
        foreach ($navLinks as $link ) {
          if($link == "Home") {
            $href = "index";
          } else {
            $href = $link;
          }
      
          if($href == $page_name) {
            $theclass = "class='active'";
          } else {
            $theclass = '';
          }
          $output.= "<li><a href='{$href}.php' {$theclass}>". ucfirst($link) ."</a></li>";
        }
        echo $output;
      }

?>

<!DOCTYPE html>

<link
    rel="stylesheet"
    href="1959035.css">    

<html>

    <head>
        <title>1959035 Selfy | <?php if($page_name != "index") { echo ucfirst($page_name);} else {echo "Home";} ?> </title>
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="https://i.imgur.com/CXxS7Ag.png" id="my_logo">
            </div>
            
            <div class="main-nav">
                <nav>
                    <ul>
                        <?php
                            outputNav($navLinks,$page_name);
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
<?php 

/*

* This template for displaying the header

*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_theme_mod('shihab_logo'); ?>" alt="">
            </a>
            </div>
            <div class="col-md-9">
                <ul id="nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="">Download</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Service</a>
                    <ul>
                     <li><a href="">Dropdown Menu</a></li>
                     <li><a href="">Dropdown Menu</a></li>
                     <li><a href="">Dropdown Menu</a>
                         <ul>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                         </ul>
                     </li>
                        <li><a href="">Dropdown Menu</a></li>
                        <li><a href="">Dropdown Menu</a></li>
                        <li><a href="">Dropdown Menu</a></li>
                    </ul>
                    </li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Contact US</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>









<?php wp_footer(); ?>

</body>
</html>
<?php

// The insertHeader() function creates a header bar and navigation menu. The function will accept 4 arguments as parameters: PageTitle (string), Navigation menu items (associative array), Path to CSS file (string), and Path to JS file (string). The function outputs the HTML code for the header.

function insertHeader($pageTitleParam = 'Task Management',
                        $navItemsParam = ['About Us' => '/views/aboutus.php', 'FAQ' => '/views/faq.php', 'Contact Us' => '/views/contactus.php', 'Register' => '/views/register.php', 'Log In' => '/views/login.php'],
                        $cssPathParam = '/style/global.css',
                        $jsPathParam = '') {

    $pageTitle = $pageTitleParam;
    $navItems = $navItemsParam;
    $cssPath = $cssPathParam;
    $jsPath = $jsPathParam;
    $navListItemsString = '';

    // Create the navigation menu list items HTML code
    foreach ($navItems as $linkName => $Uri) {
        $navListItemsString .= "<li><a href=\"$Uri\">$linkName</li>";
    }

    echo <<<HEADER
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="$jsPath"></script>
        <link rel="stylesheet" href="$cssPath" />
        <title>$pageTitle</title>
    </head>
    <header>
        <h1>C4M Project Management App</h1>
            <nav>
                <ul>
                    $navListItemsString
                </ul>
        </nav>
    </header>
    <body>
    HEADER;

}

?>




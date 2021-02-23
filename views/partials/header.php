<?php

// The insertHeader() function creates a header bar and navigation menu. The function will accept 6 arguments as parameters: PageTitle (string), Navigation menu items (associative array), Path to CSS file (string), Path to JS file (string), Path to the Bootstrap CSS file (string), and Path to the Bootstrap JS file (string). If no arguments are supplied, the function will use its own default values. The function outputs the HTML code for the header.

function insertHeader($pageTitleParam = 'Task Management',
                        $navItemsParam = [
                            'About Us' => './aboutus.php',
                            'FAQ' => './faq.php',
                            'Contact Us' => './contactus.php',
                            'Register' => './signup.php',
                            'Log In' => './login.php'
                        ],
                        $cssPathParam = '../style/global.css',
                        $jsPathParam = '',
                        $bootstrapCssPathParam = '../css/bootstrap.min.css',
                        $bootstrapJsPathParam = '../js/bootstrap.min.js') {

    $pageTitle = $pageTitleParam;
    $navItems = $navItemsParam;
    $cssPath = $cssPathParam;
    $jsPath = $jsPathParam;
    $bootstrapCssPath = $bootstrapCssPathParam;
    $bootstrapJsPath = $bootstrapJsPathParam;
    $navListItemsString = '';

    // Create the navigation menu list items HTML code
    foreach ($navItems as $linkName => $Uri) {
        $navListItemsString .= "<li><a href=\"$Uri\">$linkName</a></li>";
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
        <link rel="stylesheet" href="$bootstrapCssPath" />
        <script type="text/javascript" src="$bootstrapJsPath"></script>
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




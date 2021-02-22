<?php

function insertFooter($navItemsParam = ['Privacy Policy' => '/views/privacy.php', 
                                        'Terms and Conditions' => '/views/termsandconditions.php']) {

    $navItems = $navItemsParam;
    $navListItemsString = '';

    // Create the navigation menu list items HTML code
    foreach ($navItems as $linkName => $Uri) {
        $navListItemsString .= "<li><a href=\"$Uri\">$linkName</li>";
    }

    echo <<<FOOTER
    <footer>
        <nav>
            <ul>
                $navListItemsString
            </ul>
        </nav>
        <p>&#169 Copyright 2021, Team C4M.</p>
    </footer>
    </body>
    </html>
    FOOTER;

}

?>


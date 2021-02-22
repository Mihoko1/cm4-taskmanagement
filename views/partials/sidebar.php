<?php

// The insertSidebar() function creates a sidebar and navigation menu plus related elements. The function will accept 1 argument as parameter: Navigation menu items (associative array). If no arguments are supplied, the function will use its own default values. The function outputs the HTML code for the footer.
function insertSidebar($navItemsParam = ['New Project' => '/views/createproject.php', 
                                        'Search Project' => '/views/searchprojects.php']) {

    $navItems = $navItemsParam;
    $navListItemsString = '';

    // Create the navigation menu list items HTML code
    foreach ($navItems as $linkName => $Uri) {
        $navListItemsString .= "<li><a href=\"$Uri\">$linkName</a></li>";
    }

    echo <<<SIDEBAR
    
    <aside>
        <nav>
            <ul>
                $navListItemsString
            </ul>
        </nav>
        <div>
            <p>Todo List Here</p>
        </div>
        <div>
            <p>Put Event Calendar Here</p>
        </div>
    </aside>
    
    SIDEBAR;

}


?>
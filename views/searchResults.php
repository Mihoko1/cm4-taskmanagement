<?php
require_once '../Model/FAQ.php';
require_once '../Model/Database.php';

require("./partials/header.php");
insertHeader();

if( isset($_GET['searchSubmit'])){
    $search = $_GET['search'];

    //var_dump($search);

    try {
        $db = Database::getDb();

        $s = new FAQ();
        $results = $s->getFAQBySearch($search, $db);

    
    } catch (\Exception $e) {
        echo $e;
    }   
}else{
    if( isset($_GET['faq'])){

        $db = Database::getDb();
        $s = new FAQ();

        switch ($_GET['faq']) {
            case 'Top FAQ':  
                $results = $s->getFAQByCategory("1", $db);
                break;

            case 'Account Settings':
                $results = $s->getFAQByCategory("2", $db);
                break;

            case 'Troubleshooting':
                $results = $s->getFAQByCategory("3", $db);
                break;

            case 'Using TEAM C4M Task Management':
                $results = $s->getFAQByCategory("4", $db);
                var_dump($results);
                break;
        }
    }
}

?>

<main class="container faqContainer my-5">

    <div class="my-3"><a href="faq.php">Go back to FAQ</a></div>
    <div class="row">
        <div class="col-md-6">
            <span class="h2">Search Results </span>
            <span> <?php echo count($results); ?> result<?php if(count($results) > 1){ ?>s <?php } ?></span>
        </div>
        <div class="col-md-6">
        <form id="searchForm" action="searchResults.php" method="GET">
            
            <input class="w-75" id="search" type="text" name="search" placeholder="Search">
            <input name="searchSubmit" type="submit" value="Search">
            
        </form>
        </div>
        <div class="my-5">

            <?php foreach($results as $result):?>
            
                <p class="fw-bold h5"><?php echo $result["question"] ?></p>
                <p><?php echo $result["answer"] ?></p>  
                
                <?php if($result !== end($results)):?>
                    <hr/>
                <?php endif; ?>              
            <?php endforeach; ?>  
        </div>
    </div>
</main>

<?php

require("./partials/footer.php");
insertFooter();

?>
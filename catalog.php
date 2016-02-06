<?php 

$pageTitle = "Full Catalog";

    if ($_GET["cat"]) == "books") {

        $pageTitle = "Books";
    }
    else if($_GET["cat"]) == "movies") {

        $pageTitle = "Movies";
    }
//    else if($_GET["cat"]) == "music") {
//
//        $pageTitle = "Music";
//    }


include("include/header.php"); ?>

<div class="section">
    <h1> <?php echo $pageTitle; ?></h1>
</div>

<?php include("include/footer.php"); ?>
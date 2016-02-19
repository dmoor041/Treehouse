

<?php
// Setting Page Title
$pageTitle = "Full Catalog";

$cat = array("books", "movies", "music");
if(isset($_GET["cat"])) {
    if($_GET["cat"]) == "books") {
        $pageTitle = "Books";
    }
    else if($_GET["cat"]) == "movies") {

        $pageTitle = "Movies";
    }
    else if($_GET["cat"]) == "music") {

        $pageTitle = "Music";
   }

}

include("include/header.php"); ?>
<div class="section page">
    <h1> <?php echo $pageTitle; ?></h1>
</div>

<?php include("include/footer.php"); ?>
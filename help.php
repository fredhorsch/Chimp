<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="Styles/help.css">

</head>

<body>

    <!-- Heading bar with menu line -->

    <?php include 'Views/navigationBar.php'; ?>

    <!-- Main Objects for the Webapge -->
    <!-- Social Media Links -->
    <?php include 'Views/mediaIcons.php'; ?>

    <!-- Scroller on the right side of the page -->
    <?php include 'Views/scrollerSide.php'; ?>


    <div class="flexBox-16 helpSearchDIV">

        <div class="howCanText">

            <p id="helpText">How can we help you?</p>

        </div>

        <div class="flexBox-13 searchBox">

            <img class="searchIcon" src="Icons/search.png" alt="Search">

            <p id="searchText">Type your question here...</p>

        </div>

    </div>


    <!-- Footer Page with a fucking nice slogan!! -->
    <!-- I have used require because the webpage has to shut down if the footer cannot be loaded-->

    <?php require 'Views/footer.php'; ?>
    


</body>

</html>
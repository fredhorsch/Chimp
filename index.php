<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="Styles/styles.css">
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title>Chimp</title>

    <script src="JavaScript/script.js"></script>

</head>

<body>

    <!-- Navigation Bar hide and show while Scrolling -->

    <?php include 'Views/navigationBarScroll.php'; ?>

    <!-- First Page of the main page -->

    <div class="flexBox-14 firstPagebox">

        <!-- Webpage intro Homepage -->
        <!-- 1. Page of Homepage -->

        <div class="firstPageboxLeft">
            <!-- Logo for the Webpage -->

            <div class="flexBox-15 divChimpLogo">
                <img id="chimpLogo" src="Icons/Chimp_noback.png" alt="Chimpanzee">
                <a href="">Chimp</a>
            </div>

            <div class="sloganMainPage">

                <h1>Qick and easy<br />Team managing tool</h1>

            </div>

            <div class="firstPageDIVAnimationLeftMobile">
                <img class="chimpOnDeskLeftMobile" src="Objects/Chimp_Desk_Laptop.png" alt="Chimpanzee">
            </div>

            <div class="flexBox-15 fristBoxDownloadBtn">

                <div class="flexBox-3 circleChimp">
                    <img class="downloadIconMainPage" src="Icons/Download_Icon.png" alt="Download">
                </div>

                <a class="freeDownloadMainPage" href="">Free Download</a>

            </div>
        </div>
        <div class="flexBox-3 firstPageboxRight">
            <div class="firstPageDIVAnimation">
                <img class="chimpOnDesk" src="Objects/Chimp_Desk_Laptop.png" alt="Chimpanzee">
            </div>

        </div>
    </div>

    <!-- Main Objects for the Webapge -->
    <!-- Social Media Links -->
    <?php include 'Views/mediaIcons.php'; ?>

    <!-- Scroller on the right side of the page -->
    <?php include 'Views/scrollerSide.php'; ?>

    <!-- Second Page of the main page -->
    <div class="flexBox-2">

        <!-- Left side of the second page -->

        <div class="flexBox-3 leftDIVSecondPage">
            <!-- <div class="leftSideDIVSecondPage"> -->

            <h2 id="textSecondPageFont36">The fastest way to<br />manag your company</h2>

            <h3 id="textSecondPageFont16">Chimp is a user-friendly APP to structure<br />your company from A to B</h3>

            <div class="flexBox-15 secondBoxDownloadBtn">

                <div class="flexBox-3 circleChimp">
                    <img class="downloadIconMainPage" src="Icons/Download_Icon.png" alt="Download">
                </div>

                <a class="freeDownloadMainPage" href="">Download Now</a>

            </div>

            <!-- </div> -->
        </div>

        <div class="flexBox-3 rightDIVSecondPage">
            <div class="rightSideDIVSecondPage">

            </div>
        </div>

    </div>

    <!-- Third Page with a fucking nice slogan!! -->

    <div class="flexBox-3 thirdPageMainDIV">

        <div class="thirdPageSlogan">
            <h2>Just put something here what can be interesting<br />for our users, like an award we won somewhere </h2>
        </div>

    </div>

    <!-- Fourth Page with a fucking nice slogan!! -->


    <div class="fourthPageMainDIV">

        <div class="flexBox-2 DIVBoxBenefitsOfChimp">

            <div class="headingOfPagefour">

                <h2>Benefits of having a Chimp</h2>

            </div>

            <div class="gridBox-1 divOfBenefits">

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

                <div class="blogDivOfBenefits">
                    <img src="Objects/theKingOfChimps.png" alt="">
                </div>

            </div>


        </div>

    </div>



    <!-- Fifth Page with a fucking nice slogan!! -->

    <div class="flexBox-2">

        <div class="fifthPageMainDIV">

            <div class="appleEcoSystemSlogan">

                <h2>Chimp is perfectly fitted for the Apple ECO-System You can use it on Mac OS iPhone IOS Watch OS It works perfectly over all these devices and blabla </h2>

            </div>

            <div class="appleEcoSystemPic">
                <img src="Objects/Apple_device.jpg" alt="Apple">
            </div>

        </div>

    </div>

    <!-- Sexth Page with a fucking nice slogan!! -->

    <div class="flexBox-2">

        <div class="sexthPageMainDIV">


            <div class="ChimpPicSexthPage">
                <img src="Icons/Chimp_Chimp_noback.png" alt="Chimp">
            </div>


            <div class="ChimpSloganSexthPage">

                <h2>Let the Chimp improve the quality in your company and bring everybody more value</h2>

            </div>

        </div>

    </div>


    <!-- Footer Page with a fucking nice slogan!! -->

    <?php include 'Views/footer.php'; ?>


</body>

</html>
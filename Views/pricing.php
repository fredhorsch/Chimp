<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../Styles/pricing.css">

</head>

<body>

    <!-- Heading bar with menu line -->

    <?php include '../Views/navigationBar.php'; ?>

    <!-- Main Objects for the Webapge -->
    <!-- Social Media Links -->
    <?php include '../Views/mediaIcons.php'; ?>

    <!-- Scroller on the right side of the page -->
    <?php include '../Views/scrollerSide.php'; ?>


    <!-- Free or Premium -->
    <div>

        <div class="flexBox-9 firstDIVPricing">
            <div class="flexBox-9 freeOrPremiumPICDiv">

                <img class="freeIMG" src="../Objects/monkey-free.jpeg" alt="Chimpanzee">

                <img class="premiumIMG" src="../Objects/monkeys-premium.jpg" alt="Chimpanzee">

            </div>
        </div>

        <div class="flexBox-9 freeOrPremiumSecondDiv">

            <div class="flexBox-2 freeOrPremiumDiv">

                <div class="flexBox-10 freeOption">

                    <h2>Free</h2>

                    <div class="flexBox-2 sellOptions">

                        <img class="checkBox" src="../Icons/check-blue.png" alt="Check">

                        <p>Basic access</p>

                    </div>

                    <p id="freeOptionFont">Lorem ipsum dolor sit amet,<br />consetetur sadipscing elitr, sed<br />diam nonumy eirmod</p>

                    <div class="flexBox-3 downloadBtnFree">
                        <p id="fontFree">For Free</p>
                    </div>

                </div>


                <div class="flexBox-10 premiumOption">

                    <h2>Premium</h2>

                    <div>
                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="../Icons/check-blue.png" alt="Check">

                            <p>orem ipsum dolor sit amet,<br /> consetetur </p>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="../Icons/check-blue.png" alt="Check">

                            <p>sadipscing elitr, sed</p>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="../Icons/check-blue.png" alt="Check">

                            <p>diam nonumy eirmod</p>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="../Icons/check-blue.png" alt="Check">

                            <p>tempor invidunt ut</p>
                        </div>
                    </div>

                    <div class="flexBox-3 downloadBtnPremium">
                        <p>Get Premium</p>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- Footer Page with a fucking nice slogan!! -->

    <?php include 'footer.php'; ?>


</body>

</html>
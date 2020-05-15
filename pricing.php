<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="Styles/pricing.css">

</head>

<body>

    <!-- Heading bar with menu line -->

    <?php include 'Views/navigationBar.php'; ?>

    <!-- Main Objects for the Webapge -->
    <!-- Social Media Links -->
    <?php include 'Views/mediaIcons.php'; ?>

    <!-- Scroller on the right side of the page -->
    <?php include 'Views/scrollerSide.php'; ?>


    <!-- Free or Premium -->
    <div>

        <div class="flexBox-9 firstDIVPricing">
            <div class="flexBox-9 freeOrPremiumPICDiv">

                <img class="freeIMG" src="Objects/monkey-free.jpeg" alt="Chimpanzee">

                <img class="premiumIMG" src="Objects/monkeys-premium.jpg" alt="Chimpanzee">

            </div>
        </div>

        <div class="flexBox-9 freeOrPremiumSecondDiv">

            <div class="flexBox-2 freeOrPremiumDiv">

                <div class="flexBox-10 freeOption">

                    <h2>Free</h2>

                    <div class="flexBox-2 sellOptions">

                        <img class="checkBox" src="Icons/check-blue.png" alt="Check">

                        <div class="FreeOptionsDIV">
                            <p>Basic access</p>
                        </div>

                    </div>

                    <p id="freeOptionFont">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>

                    <div class="flexBox-3 downloadBtnFree">
                        <p id="fontFree">For Free</p>
                    </div>

                </div>


                <div class="flexBox-10 premiumOption">

                    <h2>Premium</h2>

                    <div>
                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="Icons/check-blue.png" alt="Check">
                            <div class="PremiumOptionsDIV">
                                <p>orem ipsum dolor sit amet, consetetur </p>
                            </div>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="Icons/check-blue.png" alt="Check">
                            <div class="PremiumOptionsDIV">
                                <p>sadipscing elitr, sed</p>
                            </div>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="Icons/check-blue.png" alt="Check">
                            <div class="PremiumOptionsDIV">
                                <p>diam nonumy eirmod</p>
                            </div>
                        </div>

                        <div class="flexBox-2 sellOptions">
                            <img class="checkBox" src="Icons/check-blue.png" alt="Check">
                            <div class="PremiumOptionsDIV">
                                <p>tempor invidunt ut</p>
                            </div>
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
    <!-- I have used require because the webpage has to shut down if the footer cannot be loaded-->

    <?php require 'Views/footer.php'; ?>


</body>

</html>
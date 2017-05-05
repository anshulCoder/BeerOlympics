<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Beer Olympics</title>
    <meta name="description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism." />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Doolally Beer Olympics 2017">
    <meta itemprop="description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism.">
    <meta itemprop="image" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@godoolally">
    <meta name="twitter:title" content="Doolally Beer Olympics 2017">
    <meta name="twitter:description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism.">
    <meta name="twitter:creator" content="@godoolally">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Doolally Beer Olympics 2017" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://beerolympics.in" />
    <meta property="og:image" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg" />
    <meta property="og:description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism." />
	<?php echo $globalStyle; ?>
</head>
<body class="beerHome">
    <main>
        <div class="row" ng-app="beerOlympicApp" ng-controller="validateCtrl">
            <?php
                if(isset($payStatus) && $payStatus === true)
                {
                    ?>
                    <input type="hidden" id="payStatus" value="1"/>
                    <?php
                }
                elseif(isset($payStatus) && $payStatus === false)
                {
                    ?>
                    <input type="hidden" id="payStatus" value="0"/>
                    <?php
                }
                if(isset($payError))
                {
                    ?>
                    <input type="hidden" id="payText" value="<?php echo $payError;?>"/>
                    <?php
                }
                elseif(isset($paySuccess))
                {
                    ?>
                    <input type="hidden" id="payText" value="<?php echo $paySuccess;?>"/>
                    <?php
                }
            ?>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 text-center">
                <br>
                <img class="img-responsive main-logo" alt="Doolally" src="<?php echo base_url();?>asset/images/splashLogo.png"/>
                <img class="img-responsive beer-olympics-logo" alt="Beer Olympics" src="<?php echo base_url();?>asset/images/BO_logo.png"/>
                <p class="common-pink-txt">When</p>
                <p class="common-black-txt">Saturday, May 20th<br>11 AM to 6 PM</p>
                <p class="common-pink-txt">Where</p>
                <p class="common-black-txt">Pune</p>
                <img class="img-responsive pune-bus-logo" alt="Pune Bus" src="<?php echo base_url();?>asset/images/Bus.png"/>
                <br>
                <button type="button" class="btn pmd-ripple-effect btn-danger bus-booking-btn" id="only-book-wagon">
                    <ul class="list-inline">
                        <li>
                            Book a seat on the Doolally Wagon!<br>
                            BOM-PNQ-BOM
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i>
                        </li>
                    </ul>
                </button>
                <!-- Games accordion -->
                <div class="panel-group pmd-accordion" id="accordion7" role="tablist" aria-multiselectable="true" >
                    <div class="panel panel-default games-panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="common-pink-txt custom-collapse-bar" data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7" data-expandable="true">Games <i class="fa fa-caret-down material-icons pmd-accordion-arrow"></i></a>
                            </h4>
                        </div>
                        <div id="collapseOne7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="pmd-card pmd-card-default pmd-card-media-inline pmd-z-depth">
                                            <div class="pmd-card-media">
                                                <!-- Card media image -->
                                                <div class="media-left media-middle">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-circle games-img" src="<?php echo base_url();?>asset/images/chug_icon.png" alt="Placeholder"/>
                                                    </a>
                                                </div>
                                                <!-- Card media heading -->
                                                <div class="media-body">
                                                    <h4 class="common-black-txt"><strong>Chug Relay</strong></h4>
                                                    <p class="text-muted">The main event of the Beer Olympics. It’s pretty simple really, CHUG!! CHUG!! CHUG!! CHUG!!<br><br>

                                                        This is one relay that will test everything - teamwork, endurance and your love for beer.<br>

                                                        Every drop counts - so don’t spill
                                                    </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Win</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Gold - 16 pints</li>
                                                                <li class="list-group-item text-muted">Silver - 12 pints</li>
                                                                <li class="list-group-item text-muted">Bronze - 8 pints</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Drink</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Elims - 2 litres</li>
                                                                <li class="list-group-item text-muted">Finals - 2 litres</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pmd-card pmd-card-default pmd-card-media-inline pmd-z-depth">
                                            <div class="pmd-card-media">
                                                <!-- Card media image -->
                                                <div class="media-left media-middle">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-circle games-img" src="<?php echo base_url();?>asset/images/jenga_icon.png" alt="Placeholder"/>
                                                    </a>
                                                </div>
                                                <!-- Card media heading -->
                                                <div class="media-body">
                                                    <h4 class="common-black-txt"><strong>Jenga</strong></h4>
                                                    <p class="text-muted">
                                                        <br>Steady your hands, it is Jenga time. The underlying principle here is DUI (Deftness Under Influence).<br><br>
                                                        The classic 54-block tower with a deliciously evil twist, beer Jenga tests your physical and mental skills.
                                                    </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Win</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Gold - 16 pints</li>
                                                                <li class="list-group-item text-muted">Silver - 12 pints</li>
                                                                <li class="list-group-item text-muted">Bronze - 8 pints</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Drink</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Elims - 2.4 litres</li>
                                                                <li class="list-group-item text-muted">Finals - 2.4 litres</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pmd-card pmd-card-default pmd-card-media-inline pmd-z-depth">
                                            <div class="pmd-card-media">
                                                <!-- Card media image -->
                                                <div class="media-left media-middle">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-circle games-img" src="<?php echo base_url();?>asset/images/beer_pong.png" alt="Placeholder"/>
                                                    </a>
                                                </div>
                                                <!-- Card media heading -->
                                                <div class="media-body">
                                                    <h4 class="common-black-txt"><strong>Beer Pong</strong></h4>
                                                    <p class="text-muted">
                                                        Beer filled cups arranged in a triangular shape at either end of a table; the objective of the game is simple: throw the ping pong balls, drink fast, shoot straight.<br><br>
                                                        Easier said than done, since you’re seeing everything in triplicate.
                                                    </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Win</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Gold - 16 pints</li>
                                                                <li class="list-group-item text-muted">Silver - 12 pints</li>
                                                                <li class="list-group-item text-muted">Bronze - 8 pints</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Drink</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Elims - 2.4 litres</li>
                                                                <li class="list-group-item text-muted">Finals - 2.4 litres</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pmd-card pmd-card-default pmd-card-media-inline pmd-z-depth">
                                            <div class="pmd-card-media">
                                                <!-- Card media image -->
                                                <div class="media-left media-middle">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-circle games-img" src="<?php echo base_url();?>asset/images/fletter_icon.png" alt="Placeholder"/>
                                                    </a>
                                                </div>
                                                <!-- Card media heading -->
                                                <div class="media-body">
                                                    <h4 class="common-black-txt"><strong>Fletter</strong></h4>
                                                    <p class="text-muted">
                                                        Each player keeps throwing a letter down and calling out ONLY 4 letter words from the lot. The objective of the game, is to get maximum points. Easy? Not when you are slurring already.<br>
                                                        Remember that, calling out anything less than a four-lettered word gets you Flettered = Penalised!
                                                    </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Win</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Gold - 16 pints</li>
                                                                <li class="list-group-item text-muted">Silver - 12 pints</li>
                                                                <li class="list-group-item text-muted">Bronze - 8 pints</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Drink</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Elims - 2.4 litres</li>
                                                                <li class="list-group-item text-muted">Finals - 2.4 litres</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pmd-card pmd-card-default pmd-card-media-inline pmd-z-depth">
                                            <div class="pmd-card-media">
                                                <!-- Card media image -->
                                                <div class="media-left media-middle">
                                                    <a href="javascript:void(0);">
                                                        <img class="img-circle games-img" src="<?php echo base_url();?>asset/images/darts_icon.png" alt="Placeholder"/>
                                                    </a>
                                                </div>
                                                <!-- Card media heading -->
                                                <div class="media-body">
                                                    <h4 class="common-black-txt"><strong>Darts</strong></h4>
                                                    <p class="text-muted">
                                                        Test your dart throwing skills in this slightly Doolally version of your favourite pub pastime. Collect points based on your aim, stack up seconds with a quick chug.<br><br>
                                                        You will need speed, precision and some serious chugging skills. Drink, aim, shoot!
                                                    </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Win</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Gold - 16 pints</li>
                                                                <li class="list-group-item text-muted">Silver - 12 pints</li>
                                                                <li class="list-group-item text-muted">Bronze - 8 pints</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="my-NoMargin common-black-txt"><strong>Your Team Will Drink</strong></h4>
                                                            <ul class="list-group pmd-list pmd-card-list">
                                                                <li class="list-group-item text-muted">Elims - 1.6 litres</li>
                                                                <li class="list-group-item text-muted">Finals - 1.6 litres</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prizes Accordion -->
                <div class="panel-group pmd-accordion" id="prizes-accordion" role="tablist" aria-multiselectable="true" >
                    <div class="panel panel-default games-panel">
                        <div class="panel-heading" role="tab" id="prizesOne">
                            <h4 class="panel-title">
                                <a class="common-pink-txt custom-collapse-bar" data-toggle="collapse" data-parent="#prizes-accordion" href="#prize-form" aria-expanded="false" aria-controls="prize-form" data-expandable="true">Grand Prizes <i class="fa fa-caret-down material-icons pmd-accordion-arrow"></i></a>
                            </h4>
                        </div>
                        <div id="prize-form" class="panel-collapse collapse" role="tabpanel" aria-labelledby="prizesOne">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-inline">
                                        <li>
                                            <div class="trophy-wrapper">
                                                <img class="img-responsive my-trophy-img" alt="Silver" src="<?php echo base_url();?>asset/images/trophy_silver.png"/>
                                                <h4 class="bolder-black">Silver</h4>
                                                <!--<p class="text-muted">15 Pints</p>-->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="trophy-wrapper">
                                                <img class="img-responsive my-trophy-img" alt="Gold" src="<?php echo base_url();?>asset/images/trophy_gold.png"/>
                                                <h4 class="bolder-black">Gold</h4>
                                                <!--<p class="text-muted">20 Pints</p>-->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="trophy-wrapper">
                                                <img class="img-responsive my-trophy-img" alt="Bronze" src="<?php echo base_url();?>asset/images/trophy_bronze.png"/>
                                                <h4 class="bolder-black">Bronze</h4>
                                                <!--<p class="text-muted">10 Pints</p>-->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <p>Beer worth Rs 50,000 up for grabs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form name="captainForm" id="captainForm" ng-model="captainForm" method="post" action="<?php echo base_url();?>submitBeerForm" novalidate>
                    <!-- Team Register Accordion -->
                    <div class="panel-group pmd-accordion" id="register-accordion" role="tablist" aria-multiselectable="true" >
                        <div class="panel panel-default games-panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="common-pink-txt custom-collapse-bar" data-toggle="collapse" data-parent="#register-accordion" href="#reg-form" aria-expanded="false" aria-controls="reg-form" data-expandable="true">Register Team <i class="fa fa-caret-down material-icons pmd-accordion-arrow"></i></a>
                                </h4>
                            </div>
                            <div id="reg-form" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <h4 class="bolder-black">Registration Fee:</h4>
                                <p class="text-muted">Rs. 8000 for a team of 4.</p>
                                <h4 class="bolder-black">What’s Included:</h4>
                                <ul class="list-inline included-list">
                                    <li>
                                        <img class="img-responsive included-images" alt="T-Shirt" src="<?php echo base_url();?>asset/images/tshirt.png"/>
                                        <p class="text-muted">T-Shirt</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="Id Card" src="<?php echo base_url();?>asset/images/id_card.png"/>
                                        <p class="text-muted">Id Card</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="5 Games" src="<?php echo base_url();?>asset/images/games.png"/>
                                        <p class="text-muted">5 Games</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="Prizes" src="<?php echo base_url();?>asset/images/prizes.png"/>
                                        <p class="text-muted">Prizes</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="Snack Box" src="<?php echo base_url();?>asset/images/snacks.png"/>
                                        <p class="text-muted">Snack Box</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="Bag" src="<?php echo base_url();?>asset/images/bag.png"/>
                                        <p class="text-muted">Bag</p>
                                    </li>
                                    <li>
                                        <img class="img-responsive included-images" alt="Beer" src="<?php echo base_url();?>asset/images/beer.png"/>
                                        <p class="text-muted">Beer</p>
                                    </li>
                                </ul>
                                <h4 class="bolder-black">Captain's Details</h4>
                                <div class="row">
                                    <div class="col-sm-2 col-xs-0"></div>
                                    <div class="col-sm-8 col-xs-12">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.teamName.$invalid && captainForm.teamName.$touched}">
                                            <label for="teamName" class="control-label">Team Name</label>
                                            <input type="text" id="teamName" name="teamName" tabindex="1"
                                                   placeholder="Team Name" ng-model="teamName" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-0"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capName.$invalid && captainForm.capName.$touched}">
                                            <label for="capName" class="control-label">Captain's Name</label>
                                            <input type="text" id="capName" name="capName" tabindex="2"
                                                   placeholder="Full Name" ng-model="capName" class="form-control" pattern="[a-zA-Z\s]+" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capEmail.$invalid && captainForm.capEmail.$touched}">
                                            <label for="capEmail" class="control-label">Email</label>
                                            <input type="email" id="capEmail" name="capEmail" tabindex="4"
                                                   placeholder="name@example.com" ng-model="capEmail" class="form-control" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capCity.$invalid && captainForm.capCity.$touched}">
                                            <label for="capCity" class="control-label">City</label>
                                            <input type="text" id="capCity" name="capCity" tabindex="6"
                                                   placeholder="Your City" ng-model="capCity" class="form-control" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capTshirt.$invalid && captainForm.capTshirt.$touched}">
                                            <label for="capTshirt" class="control-label">T-Shirt size</label>
                                            <select name="capTshirt" id="capTshirt" tabindex="8" ng-model="capTshirt" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="36 S">36 S</option>
                                                <option value="38 M">38 M</option>
                                                <option value="40 L">40 L</option>
                                                <option value="42 XL">42 XL</option>
                                                <option value="44 XXL">44 XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capAge.$invalid && captainForm.capAge.$touched}">
                                            <label for="capAge" class="control-label">Age</label>
                                            <input type="number" id="capAge" name="capAge" tabindex="3"
                                                   min="21" max="99" placeholder="Age (must be above 21)" ng-model="capAge" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="captainForm.capAge.$invalid && captainForm.capAge.$touched">Age Must be Above 21</p>-->
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capMob.$invalid && captainForm.capMob.$touched}">
                                            <label for="capMob" class="control-label">Mobile Number</label>
                                            <input type="number" id="capMob" name="capMob" tabindex="5"
                                                   ng-minlength="10" ng-maxlength="10" placeholder="10-Digit mobile number" ng-model="capMob" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="(captainForm.capMob.$error.minlength || captainForm.capMob.$error.maxlength) && captainForm.capMob.$dirty">
                                                Valid 10 Digit Mobile Number Required
                                            </p>-->
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.capZip.$invalid && captainForm.capZip.$touched}">
                                            <label for="capZip" class="control-label">Zip</label>
                                            <input type="number" id="capZip" name="capZip" tabindex="7"
                                                   ng-minlength="6" ng-maxlength="6" placeholder="6-Digit pin code" ng-model="capZip" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="(captainForm.capZip.$error.minlength || captainForm.capZip.$error.maxlength) && captainForm.capZip.$dirty">
                                                Enter Valid 6 digit Pin Code
                                            </p>-->
                                        </div>
                                        <div class="form-group wagon-check">
                                            <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                                <input type="checkbox" id="ifBusRequiredCap" name="ifBusRequiredCap" value="1" ng-model="ifBusRequiredCap"
                                                       ng-disabled="captainForm.capName.$invalid" ng-change="addToTotal(ifBusRequiredCap)" />
                                                <span>Include Doolally Wagon Ticket</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="bolder-black">Beer Athlete #1</h4>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athName1.$invalid && captainForm.athName1.$touched}">
                                            <label for="athName1" class="control-label">Name</label>
                                            <input type="text" id="athName1" name="athName1" tabindex="9"
                                                   placeholder="Full Name" ng-model="athName1" pattern="[a-zA-Z\s]+" class="form-control" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athTshirt1.$invalid && captainForm.athTshirt1.$touched}">
                                            <label for="athTshirt1" class="control-label">T-Shirt size</label>
                                            <select name="athTshirt1" id="athTshirt1" tabindex="11" ng-model="athTshirt1" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="36 S">36 S</option>
                                                <option value="38 M">38 M</option>
                                                <option value="40 L">40 L</option>
                                                <option value="42 XL">42 XL</option>
                                                <option value="44 XXL">44 XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athAge1.$invalid && captainForm.athAge1.$touched}">
                                            <label for="athAge1" class="control-label">Age</label>
                                            <input type="number" id="athAge1" min="21" max="99" name="athAge1" tabindex="10"
                                                   placeholder="Age (must be above 21)" ng-model="athAge1" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="captainForm.athAge1.$invalid && captainForm.athAge1.$touched">Age Must be Above 21</p>-->
                                        </div>
                                        <div class="form-group wagon-check">
                                            <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                                <input type="checkbox" id="ifBusRequired1" name="ifBusRequired1" ng-model="ifBusRequired1" value="1"
                                                       ng-disabled="captainForm.athName1.$invalid" ng-change="addToTotal(ifBusRequired1)"/>
                                                <span>Include Doolally Wagon Ticket</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="bolder-black">Beer Athlete #2</h4>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athName2.$invalid && captainForm.athName2.$touched}">
                                            <label for="athName2" class="control-label">Name</label>
                                            <input type="text" id="athName2" name="athName2" tabindex="12"
                                                   placeholder="Full Name" ng-model="athName2" pattern="[a-zA-Z\s]+" class="form-control" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athTshirt2.$invalid && captainForm.athTshirt2.$touched}">
                                            <label for="athTshirt2" class="control-label">T-Shirt size</label>
                                            <select name="athTshirt2" id="athTshirt2" tabindex="14" ng-model="athTshirt2" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="36 S">36 S</option>
                                                <option value="38 M">38 M</option>
                                                <option value="40 L">40 L</option>
                                                <option value="42 XL">42 XL</option>
                                                <option value="44 XXL">44 XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athAge2.$invalid && captainForm.athAge2.$touched}">
                                            <label for="athAge2" class="control-label">Age</label>
                                            <input type="number" id="athAge2" min="21" max="99" name="athAge2" tabindex="13"
                                                   placeholder="Age (must be above 21)" ng-model="athAge2" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="captainForm.athAge2.$invalid && captainForm.athAge2.$touched">Age Must be Above 21</p>-->
                                        </div>
                                        <div class="form-group wagon-check">
                                            <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                                <input type="checkbox" id="ifBusRequired2" name="ifBusRequired2" ng-model="ifBusRequired2" value="1"
                                                       ng-disabled="captainForm.athName2.$invalid" ng-change="addToTotal(ifBusRequired2)"/>
                                                <span>Include Doolally Wagon Ticket</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="bolder-black">Beer Athlete #3</h4>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athName3.$invalid && captainForm.athName3.$touched}">
                                            <label for="athName3" class="control-label">Name</label>
                                            <input type="text" id="athName3" name="athName3" tabindex="15"
                                                   placeholder="Full Name" ng-model="athName3" pattern="[a-zA-Z\s]+" class="form-control" required/>
                                        </div>
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athTshirt3.$invalid && captainForm.athTshirt3.$touched}">
                                            <label for="athTshirt3" class="control-label">T-Shirt size</label>
                                            <select name="athTshirt3" id="athTshirt3" tabindex="17" ng-model="athTshirt3" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="36 S">36 S</option>
                                                <option value="38 M">38 M</option>
                                                <option value="40 L">40 L</option>
                                                <option value="42 XL">42 XL</option>
                                                <option value="44 XXL">44 XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 text-left">
                                        <div class="form-group" ng-class="{ 'has-error' : captainForm.athAge3.$invalid && captainForm.athAge3.$touched}">
                                            <label for="athAge3" class="control-label">Age</label>
                                            <input type="number" id="athAge3" min="21" max="99" name="athAge3" tabindex="16"
                                                   placeholder="Age (must be above 21)" ng-model="athAge3" class="form-control" required/>
                                            <!--<p class="help-block" ng-show="captainForm.athAge3.$invalid && captainForm.athAge3.$touched">Age Must be Above 21</p>-->
                                        </div>
                                        <div class="form-group wagon-check">
                                            <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                                <input type="checkbox" id="ifBusRequired3" name="ifBusRequired3" ng-model="ifBusRequired3" value="1"
                                                       ng-disabled="captainForm.athName3.$invalid" ng-change="addToTotal(ifBusRequired3)"/>
                                                <span>Include Doolally Wagon Ticket</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="finalAmt" id="finalAmt" value="8000"/>
                        </div>
                    </div>
                    <input type="hidden" name="couponCode" id="couponCode" value=""/>
                </form>
                <!-- Wagon Accordion -->
                <div class="panel-group pmd-accordion" id="wagon-accordion" role="tablist" aria-multiselectable="true" >
                    <div class="panel panel-default games-panel">
                        <div class="panel-heading" role="tab" id="wagonOne">
                            <h4 class="panel-title">
                                <a class="common-pink-txt custom-collapse-bar" data-toggle="collapse" data-parent="#wagon-accordion" href="#wagon-form" aria-expanded="false" aria-controls="wagon-form" data-expandable="true">Doolally Wagon <i class="fa fa-caret-down material-icons pmd-accordion-arrow"></i></a>
                            </h4>
                        </div>
                        <div id="wagon-form" class="panel-collapse collapse" role="tabpanel" aria-labelledby="wagonOne">
                            <form name="busForm" id="busForm" ng-model="busForm" method="post" action="<?php echo base_url();?>submitBusForm" novalidate>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="common-black-txt">
                                            You can book a seat on the Doolally Wagon, (AC Bus) for yourself, teammates, cheerleaders or friends.
                                            We want to make sure everyone makes it home safe, so you can keep playing beer games with us!<br><br>

                                            Bus schedule for Saturday, May 20<br>
                                            Departure time & Place: 6.30 am, Doolally Taproom, Bandra<br>
                                            Arrival time & Place: 11 am, 1st Brewhouse, Corinthians, Pune<br><br>

                                            Return journey schedule (same day)<br>
                                            Departure time & Place: 8 pm, 1st Brewhouse, Corinthians, Pune<br>
                                            Arrival time & Place: 12 midnight, Doolally Taproom, Bandra<br>

                                        </p>
                                        <img class="img-responsive pune-bus-small-logo" alt="Pune Bus" src="<?php echo base_url();?>asset/images/Bus.png"/>
                                        <h4 class="bolder-black">Route: Mumbai - Pune - Mumbai<br>
                                            Cost per seat : Rs 800
                                        </h4>
                                        <!-- Want Wagon check -->
                                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" tabindex="18" id="ifBusRequired" name="ifBusRequired" value="1" ng-model="ifBusRequired"
                                                   ng-disabled="(captainForm.teamName.$dirty && captainForm.teamName.$valid && !ifBusRequired) || (captainForm.capName.$dirty && captainForm.capName.$valid && !ifBusRequired) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid && !ifBusRequired) ||
                                        (captainForm.capCity.$dirty && captainForm.capCity.$valid && !ifBusRequired) || (captainForm.capAge.$dirty && captainForm.capAge.$valid && !ifBusRequired) ||
                                        (captainForm.capMob.$dirty && captainForm.capMob.$valid && !ifBusRequired) || (captainForm.capZip.$dirty && captainForm.capZip.$valid && !ifBusRequired) ||
                                        (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid && !ifBusRequired) || (captainForm.athName1.$dirty && captainForm.athName1.$valid && !ifBusRequired) ||
                                        (captainForm.athAge1.$dirty && captainForm.athAge1.$valid && !ifBusRequired) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid && !ifBusRequired) ||
                                        (captainForm.athName2.$dirty && captainForm.athName2.$valid && !ifBusRequired) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid && !ifBusRequired) ||
                                        (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid && !ifBusRequired) || (captainForm.athName3.$dirty && captainForm.athName3.$valid && !ifBusRequired) ||
                                        (captainForm.athAge3.$dirty && captainForm.athAge3.$valid && !ifBusRequired) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid && !ifBusRequired)"/>
                                            <span>Only Bus Registration (Non-Athlete)</span>
                                        </label>
                                        <div class="row" ng-show="ifBusRequired">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group text-left" ng-class="{ 'has-error' : busForm.busBookerName.$invalid && busForm.busBookerName.$touched}">
                                                    <label for="busBookerName" class="control-label">Name</label>
                                                    <input type="text" tabindex="19" id="busBookerName" pattern="[a-zA-Z\s]+" name="busBookerName" ng-model="busBookerName" placeholder="Full Name" class="form-control" required/>
                                                </div>
                                                <div class="form-group text-left" ng-class="{ 'has-error' : busForm.busBookerMobile.$invalid && busForm.busBookerMobile.$touched}">
                                                    <label for="busBookerMobile" class="control-label">Mobile Number</label>
                                                    <input type="number" tabindex="21" id="busBookerMobile" ng-minlength="10" ng-maxlength="10" name="busBookerMobile" ng-model="busBookerMobile" placeholder="10-digit Mobile Number" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group text-left" ng-class="{ 'has-error' : busForm.busBookerEmail.$invalid && busForm.busBookerEmail.$touched}">
                                                    <label for="busBookerEmail" class="control-label">Email</label>
                                                    <input type="email" tabindex="20" id="busBookerEmail" name="busBookerEmail" ng-model="busBookerEmail" placeholder="name@example.com" class="form-control" required/>
                                                </div>
                                                <div class="form-group text-left">
                                                    <label for="busBookerSeats" class="control-label">Seats</label>
                                                    <input type="number" tabindex="22" id="busBookerSeats" name="busBookerSeats" ng-model="busBookerSeats" min="1" ng-keyup="calWagonPrice()" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Accordion -->
                <div class="panel-group pmd-accordion" id="order-accordion" role="tablist" aria-multiselectable="true"
                ng-show="(busForm.busBookerSeats.$dirty && busForm.busBookerSeats.$valid) || (captainForm.teamName.$dirty && captainForm.teamName.$valid && !ifBusRequired) || (captainForm.capName.$dirty && captainForm.capName.$valid && !ifBusRequired) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid && !ifBusRequired) ||
                                        (captainForm.capCity.$dirty && captainForm.capCity.$valid && !ifBusRequired) || (captainForm.capAge.$dirty && captainForm.capAge.$valid && !ifBusRequired) ||
                                        (captainForm.capMob.$dirty && captainForm.capMob.$valid && !ifBusRequired) || (captainForm.capZip.$dirty && captainForm.capZip.$valid && !ifBusRequired) ||
                                        (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid && !ifBusRequired) || (captainForm.athName1.$dirty && captainForm.athName1.$valid && !ifBusRequired) ||
                                        (captainForm.athAge1.$dirty && captainForm.athAge1.$valid && !ifBusRequired) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid && !ifBusRequired) ||
                                        (captainForm.athName2.$dirty && captainForm.athName2.$valid && !ifBusRequired) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid && !ifBusRequired) ||
                                        (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid && !ifBusRequired) || (captainForm.athName3.$dirty && captainForm.athName3.$valid && !ifBusRequired) ||
                                        (captainForm.athAge3.$dirty && captainForm.athAge3.$valid && !ifBusRequired) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid && !ifBusRequired)">
                    <div class="panel panel-default games-panel">
                        <div class="panel-heading" role="tab" id="orderOne">
                            <h4 class="panel-title">
                                <a class="common-pink-txt custom-collapse-bar" data-toggle="collapse" data-parent="#order-accordion" href="#order-form" aria-expanded="true" aria-controls="prize-form" data-expandable="true">
                                    <div class="order-summary-divider">
                                      <span>
                                        Order Summary <i class="fa fa-caret-down material-icons pmd-accordion-arrow"></i>
                                      </span>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id="order-form" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="prizesOne">
                            <div class="row text-left">
                                <!-- Team Header -->
                                <div class="team-summary" ng-hide="ifBusRequired">
                                    <div class="col-xs-12 my-marginDown">
                                        <div class="alert-success order-header">
                                            <ul class="list-inline">
                                                <li>
                                                    <i class="sum_team"></i>
                                                </li>
                                                <li>
                                                    <h3 class="bolder-black my-NoMargin">Team Tickets</h3>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 my-marginDown" ng-show="(captainForm.teamName.$dirty && captainForm.teamName.$valid) || (captainForm.capName.$dirty && captainForm.capName.$valid) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid) ||
                                        (captainForm.capCity.$dirty && captainForm.capCity.$valid) || (captainForm.capAge.$dirty && captainForm.capAge.$valid) ||
                                        (captainForm.capMob.$dirty && captainForm.capMob.$valid) || (captainForm.capZip.$dirty && captainForm.capZip.$valid) ||
                                        (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid) || (captainForm.athName1.$dirty && captainForm.athName1.$valid) ||
                                        (captainForm.athAge1.$dirty && captainForm.athAge1.$valid) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid) ||
                                        (captainForm.athName2.$dirty && captainForm.athName2.$valid) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid) ||
                                        (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid) || (captainForm.athName3.$dirty && captainForm.athName3.$valid) ||
                                        (captainForm.athAge3.$dirty && captainForm.athAge3.$valid) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid)">
                                        <div class="pull-left">
                                            <span class="text-muted" id="team-subtotal">Team of Four (1 x Rs. 8000)</span>
                                        </div>
                                        <div class="pull-right">
                                            <span class="pink-color" id="final-team-total">Rs. 8000</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 my-marginDown">
                                        <div class="pull-left hide coupon-panel">
                                <span class="text-muted"><span id="coupon-details">Coupon (50% off)</span> <div class="pmd-chip pmd-chip-no-icon"><span class="only-coupon">BOXXXX</span> <a class="pmd-chip-action remove-coupon" href="javascript:void(0);">
                                                <i class="fa fa-times"></i></a></div></span>
                                        </div>
                                        <div class="pull-right">
                                            <span class="pink-color" id="coupon-discount"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 my-marginDown">
                                        <div class="pull-left">
                                            <span class="text-muted" id="team-wagon-details"></span>
                                        </div>
                                        <div class="pull-right">
                                            <span class="pink-color" id="team-wagon-price"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Wagon Header -->
                                <div class="wagon-summary" ng-hide="(captainForm.teamName.$dirty && captainForm.teamName.$valid && !ifBusRequired) || (captainForm.capName.$dirty && captainForm.capName.$valid && !ifBusRequired) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid && !ifBusRequired) ||
                                        (captainForm.capCity.$dirty && captainForm.capCity.$valid && !ifBusRequired) || (captainForm.capAge.$dirty && captainForm.capAge.$valid && !ifBusRequired) ||
                                        (captainForm.capMob.$dirty && captainForm.capMob.$valid && !ifBusRequired) || (captainForm.capZip.$dirty && captainForm.capZip.$valid && !ifBusRequired) ||
                                        (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid && !ifBusRequired) || (captainForm.athName1.$dirty && captainForm.athName1.$valid && !ifBusRequired) ||
                                        (captainForm.athAge1.$dirty && captainForm.athAge1.$valid && !ifBusRequired) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid && !ifBusRequired) ||
                                        (captainForm.athName2.$dirty && captainForm.athName2.$valid && !ifBusRequired) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid && !ifBusRequired) ||
                                        (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid && !ifBusRequired) || (captainForm.athName3.$dirty && captainForm.athName3.$valid && !ifBusRequired) ||
                                        (captainForm.athAge3.$dirty && captainForm.athAge3.$valid && !ifBusRequired) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid && !ifBusRequired)">
                                    <div class="col-xs-12 my-marginDown">
                                        <div class="alert-success order-header">
                                            <ul class="list-inline">
                                                <li>
                                                    <i class="sum_bus"></i>
                                                </li>
                                                <li>
                                                    <h3 class="bolder-black my-NoMargin">Wagon Tickets</h3>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 my-marginDown" ng-hide="!ifBusRequired">
                                        <div class="pull-left">
                                            <span class="text-muted" id="bus-subtotal"></span>
                                        </div>
                                        <div class="pull-right">
                                            <span class="pink-color" id="final-bus-total"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total Header -->
                                <div class="col-xs-12 my-marginDown">
                                    <div class="alert-success order-header">
                                        <ul class="list-inline">
                                            <li>
                                                <i class="sum_total"></i>
                                            </li>
                                            <li>
                                                <h3 class="bolder-black my-NoMargin">Total</h3>
                                            </li>
                                            <li class="pull-right">
                                                <span class="pink-color" id="final-total"
                                                      ng-show="(ifBusRequired && busForm.busBookerSeats.$valid) || (captainForm.teamName.$dirty && captainForm.teamName.$valid) || (captainForm.capName.$dirty && captainForm.capName.$valid) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid) ||
                                                            (captainForm.capCity.$dirty && captainForm.capCity.$valid) || (captainForm.capAge.$dirty && captainForm.capAge.$valid) ||
                                                            (captainForm.capMob.$dirty && captainForm.capMob.$valid) || (captainForm.capZip.$dirty && captainForm.capZip.$valid) ||
                                                            (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid) || (captainForm.athName1.$dirty && captainForm.athName1.$valid) ||
                                                            (captainForm.athAge1.$dirty && captainForm.athAge1.$valid) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid) ||
                                                            (captainForm.athName2.$dirty && captainForm.athName2.$valid) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid) ||
                                                            (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid) || (captainForm.athName3.$dirty && captainForm.athName3.$valid) ||
                                                            (captainForm.athAge3.$dirty && captainForm.athAge3.$valid) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid)">
                                                    Rs. 8000
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="col-xs-12 my-marginDown">

                                </div>-->
                            </div>
                            <ul class="list-inline" id="coupon-field" ng-form="couponForm" ng-show="(captainForm.teamName.$dirty && captainForm.teamName.$valid) || (captainForm.capName.$dirty && captainForm.capName.$valid) || (captainForm.capEmail.$dirty && captainForm.capEmail.$valid) ||
                                        (captainForm.capCity.$dirty && captainForm.capCity.$valid) || (captainForm.capAge.$dirty && captainForm.capAge.$valid) ||
                                        (captainForm.capMob.$dirty && captainForm.capMob.$valid) || (captainForm.capZip.$dirty && captainForm.capZip.$valid) ||
                                        (captainForm.capTshirt.$dirty && captainForm.capTshirt.$valid) || (captainForm.athName1.$dirty && captainForm.athName1.$valid) ||
                                        (captainForm.athAge1.$dirty && captainForm.athAge1.$valid) || (captainForm.athTshirt1.$dirty && captainForm.athTshirt1.$valid) ||
                                        (captainForm.athName2.$dirty && captainForm.athName2.$valid) || (captainForm.athAge2.$dirty && captainForm.athAge2.$valid) ||
                                        (captainForm.athTshirt2.$dirty && captainForm.athTshirt2.$valid) || (captainForm.athName3.$dirty && captainForm.athName3.$valid) ||
                                        (captainForm.athAge3.$dirty && captainForm.athAge3.$valid) || (captainForm.athTshirt3.$dirty && captainForm.athTshirt3.$valid)">
                                <li>
                                    <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                        <input type="checkbox" id="couponCheck" name="couponCheck" value="1" ng-model="couponCheck">
                                        <span>Have Coupon?</span>
                                    </label>
                                </li>
                                <li ng-show="couponCheck">
                                    <input type="text" id="couponC" name="couponC" placeholder="Coupon Code" ng-model="couponC" class="form-control">
                                </li>
                                <li ng-show="couponCheck">
                                    <button type="button" class="btn pmd-ripple-effect btn-danger bus-booking-btn" ng-click="checkCoupon()">
                                        Check
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--<div class="order-summary-divider">
                  <span>
                    Order Summary
                  </span>
                </div>-->
                <br>
                <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                    <input type="checkbox" tabindex="23" id="tncCheck" name="tncCheck" value="1" ng-model="tncCheck" required>
                    <span>I have read and agree to the <a style="cursor:pointer;" class="common-pink-txt beer-tnc">Terms & Conditions</a></span>
                </label>
                <br><br>
                <button type="button" tabindex="24" class="btn pmd-ripple-effect btn-danger bus-booking-btn"
                        ng-disabled="(captainForm.$invalid) && (!ifBusRequired)" ng-click="calcAndPay()">
                    Complete Registration
                </button>
                <br><br>
                <p class="common-pink-txt">Contact Us</p>
                <div class="row">
                    <div class="col-sm-2 col-xs-0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <h4 class="bolder-black">Phone</h4>
                        <p class="text-muted"><a href="tel:+919820570311" style="color:inherit">+91 9820570311</a></p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h4 class="bolder-black">Email</h4>
                        <p class="text-muted"><a href="mailto:events@brewcraftsindia.com" style="color:inherit">events@brewcraftsindia.com</a></p>
                    </div>
                    <div class="col-sm-2 col-xs-0"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-0"></div>

        </div>
        <!-- Alerts -->
        <button type="button" data-duration="5000"  data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-message="Oh snap! Change a few things up and try submitting again." data-type="error" class="btn pmd-ripple-effect btn-danger pmd-z-depth pmd-alert-toggle hide" id="error-alert"></button>
        <div class="progress hide">
            <div class="indeterminate"></div>
        </div>

        <!-- alert Modal-->
        <div tabindex="-1" class="modal fade" id="alert-dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="pmd-card-title-text common-pink-txt"></h2>
                    </div>
                    <div class="modal-body"></div>
                    <div class="pmd-modal-action text-right">
                        <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default bus-booking-btn" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <button data-target="#alert-dialog" data-toggle="modal" id="alert-modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth hide" type="button">Alert without title bar</button>
    </main>
</body>
<?php echo $globalJs; ?>

</html>
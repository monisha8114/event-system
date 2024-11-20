<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>

        <!-- Inline CSS -->
        <style>
            /* Basic Reset */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
            }

            h1 {
                font-size: 2.5em;
                color: #333;
                margin-bottom: 20px;
            }

            .content {
                padding: 20px;
            }

            .container {
                width: 90%;
                max-width: 1200px;
                margin: 30px auto;
            }

            .col-md-12 {
                text-align: center;
            }

            .row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 30px;
            }

            .subcontent {
                padding: 15px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                text-align: left;
            }

            .subcontent h1 {
                color: #007bff;
            }

            .subcontent p {
                font-size: 1.1em;
                color: #555;
            }

            .customline {
                border: 1px solid #007bff;
                width: 30%;
                margin: 20px 0;
            }

            .btn-lg {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 1.1em;
                cursor: pointer;
                border-radius: 5px;
            }

            .btn-lg:hover {
                background-color: #0056b3;
            }

            .img-responsive {
                max-width: 100%;
                height: auto;
                border-radius: 8px;
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
                position: fixed;
                width: 100%;
                bottom: 0;
            }
        </style>

        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
            
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            <p><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Birthday</h1><!--title-->
                            <p><!--content-->
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Urban Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/fashion2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Fashion</h1><!--title-->
                            <p><!--content-->
                            Fast becoming the go-to location for fashion events, PR gatherings, and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Meeting</h1><!--title-->
                            <p><!--content-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

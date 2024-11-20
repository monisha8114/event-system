<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <style>
            /* General Body Styling */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }
            .content {
                padding: 20px 0;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 15px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                margin: 20px 0;
                color: #333;
            }
            /* Event Section Styling */
            .row {
                margin-bottom: 40px;
            }
            .date {
                text-align: center;
                font-size: 18px;
                color: #555;
            }
            .date .month {
                font-size: 22px;
                font-weight: bold;
                color: #007bff;
            }
            .date .day {
                font-size: 28px;
                font-weight: bold;
                color: #333;
            }
            .line {
                border: 0;
                border-top: 3px solid #ddd;
                margin: 10px auto;
                width: 50%;
            }
            .img-responsive {
                max-width: 100%;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .subcontent {
                padding-left: 20px;
            }
            .subcontent h1.title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
                color: #007bff;
            }
            .subcontent p {
                margin: 5px 0;
                color: #666;
            }
            .customline2 {
                border: 0;
                border-top: 2px solid #007bff;
                margin: 10px 0;
            }
            .btn {
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 4px;
                text-transform: uppercase;
                font-size: 14px;
                cursor: pointer;
                text-decoration: none;
            }
            .btn:hover {
                background-color: #0056b3;
            }
            .btn-default {
                background-color: #6c757d;
            }
            .btn-default:hover {
                background-color: #5a6268;
            }
            hr {
                border: 0;
                border-top: 1px solid #ddd;
                margin: 20px 0;
            }
        </style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content-->
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <h1>What's On</h1>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1">
                            <span class="month">JAN</span><br>
                            <hr class="line">
                            <span class="day">20</span>
                        </div>
                        <div class="col-md-5">
                            <img src="images/bdayevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Joe's 21st</h1>
                            <p class="location">
                                UrbanXchange Private Dining Room, The Rocks 12 Argyle Street
                            </p>
                            <p class="definition">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2">
                            <button type="button" class="btn btn-default btn-lg">
                                View Details <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1">
                            <span class="month">APR</span><br>
                            <hr class="line">
                            <span class="day">20</span>
                        </div>
                        <div class="col-md-5">
                            <img src="images/fashevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Dress to Impress</h1>
                            <p class="location">
                                Ananas Bar & Brasserie, The Rocks 18 Argyle Street
                            </p>
                            <p class="definition">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2">
                            <button type="button" class="btn btn-default btn-lg">
                                View Details <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Additional rows omitted for brevity -->
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content-->
    </body>
</html>

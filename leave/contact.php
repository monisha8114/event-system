<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        
        <style>
            /* General body styling */
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                margin: 0;
                padding: 0;
            }

            /* Header styling */
            header {
                background-color: #007bff;
                color: white;
                padding: 10px 0;
                text-align: center;
            }

            /* Contact section styling */
            .contacts h1 {
                font-size: 1.8rem;
                margin-bottom: 20px;
            }

            .contacts p {
                font-size: 1rem;
                line-height: 1.6;
            }

            .contacts span {
                margin-right: 10px;
            }

            /* Form styling */
            .form-group {
                margin-bottom: 20px;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                border-radius: 4px;
            }

            .btn {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #0056b3;
            }

            /* Container styling */
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }

            hr {
                border: 1px solid #ddd;
                margin: 30px 0;
            }
        </style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
            
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Amol Pardhi</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: mayaeventplanner@yahoo.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/mayaeventplanner<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

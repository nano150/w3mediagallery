<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>PHP Media` Gallery Demo</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
        <link rel='stylesheet' href='css/app.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/photobox.css' type='text/css'>
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
        <!-- JavaScripts -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/jquery.photobox.js'></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>

        <div class="container">
            <h1>MEDIA GALLERY DEMO, V1.0</h1>
            <div class="row">
                <hr>
            </div>
           


            <!-- Upload Media Starts -->
            <div class="row">
                <hr>
                <h3>ADD MORE MEDIA TO COLLECTION</h3>
                <div id="upload_button_group">
                    <a href="javascript:void(0)" class="button" id="upload_button">From My Computer</a>
                    <a href="javascript:void(0)" class="button button-blue" id="upload_button_URL">From YouTube URL</a>
                </div>
                <form id="upload_form" name="upload_form" method="post" action="media_upload.php" enctype="multipart/form-data">
                    <input type="file" id="upload_media" name="upload_media"  style="display:none">
                     <a href="javascript:void(0)" class="button" id="upload_button_URL_save">Save</a>
                </form>
                <form id="upload_form_url" name="upload_form_url" method="post" action="media_upload.php"  style="display:none">
                    <input class="text-field" name="youtube_url" id="youtube_url" type="text" placeholder="Please enter YouTube URL">

                    <a href="javascript:void(0)" class="button" id="upload_button_URL_save">Save</a>
                    <a href="javascript:void(0)" class="button button-blue" id="upload_button_URL_cancel">Cancel</a>
                </form>
            </div>
            <!-- Upload Media Ends -->

            <br>
        </div>
    </body>
</html>
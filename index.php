<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> Quotes </title>

        <!-- Bootstrap Cosmo Theme -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom CSS files -->
        <link href="layout.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="vertical-center">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                
                <?php
                    // grab the json of the quote api
                    $json = file_get_contents("http://api.forismatic.com/api/1.0/?method=getQuote&format=json&lang=en");

                    // decode the json data into an object
                    $object = json_decode($json);
                
                    // echo the data with html
                    echo '<h2><b> Random Quote </b></h2>
                          <h2> "'.$object->quoteText.'" </h2>
                          <h3> - '.$object->quoteAuthor.' </h3>';
                ?>
                
            </div>
        </div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
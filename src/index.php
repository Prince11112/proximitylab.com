<?php
    $activePage = $_GET['page'];
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Proximity Lab │ Human-centered Experience Design, User Interface and Product Launch</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.min.css">
        <?php
            if (!$activePage) echo '<link rel="stylesheet" href="css/home.css">';

            if ($activePage == 'solidworks') echo '<link rel="stylesheet" href="css/solidworks.css">';
            if ($activePage == 'mosaic') echo '<link rel="stylesheet" href="css/mosaic.css">';
            if ($activePage == 'rootinsight') echo '<link rel="stylesheet" href="css/rootinsight.css">';
            if ($activePage == 'adobe') echo '<link rel="stylesheet" href="css/adobe.css">';
            if ($activePage == 'eagle') echo '<link rel="stylesheet" href="css/eagle.css">';
            if ($activePage == 'philips') echo '<link rel="stylesheet" href="css/philips.css">';
            if ($activePage == 'scribe') echo '<link rel="stylesheet" href="css/scribe.css">';
            if ($activePage == 'minum') echo '<link rel="stylesheet" href="css/minum.css">';
            if ($activePage == 'icovia') echo '<link rel="stylesheet" href="css/icovia.css">';


            if ($activePage == 'scheduleme') echo '<link rel="stylesheet" href="css/scheduleme.css">';
            if ($activePage == 'songbird') echo '<link rel="stylesheet" href="css/songbird.css">';
            if ($activePage == 'about') echo '<link rel="stylesheet" href="css/about.css">';
            if ($activePage == 'work') echo '<link rel="stylesheet" href="css/work.css">';
            if ($activePage == 'nye') echo '<link rel="stylesheet" href="css/nye.css">';
            if ($activePage == 'wagz') echo '<link rel="stylesheet" href="css/wagz.css">';
            if ($activePage == 'amadeus') echo '<link rel="stylesheet" href="css/amadeus.css">';
        ?>
    </head>
    <body id="waypoint" class="animated fadeIn">
      <?php include('includes/navigation.php'); ?>
        <?php
            switch ($activePage) {
                case 'solidworks':
                  include('includes/pages/solidworks.php');
                  break;
                case 'mosaic':
                  include('includes/pages/mosaic.php');
                  break;
                case 'rootinsight':
                  include('includes/pages/rootinsight.php');
                  break;
                case 'adobe':
                  include('includes/pages/adobe.php');
                  break;
                case 'eagle':
                  include('includes/pages/eagle.php');
                  break;
                case 'philips':
                  include('includes/pages/philips.php');
                  break;
                case 'minum':
                  include('includes/pages/minum.php');
                  break;
                case 'icovia':
                  include('includes/pages/icovia.php');
                  break;
                  case 'scribe':
                    include('includes/pages/scribe.php');
                    break;





                case 'scheduleme':
                  include('includes/pages/scheduleme.php');
                  break;
                case 'songbird':
                  include('includes/pages/songbird.php');
                  break;
                case 'amadeus':
                    include('includes/pages/amadeus.php');
                    break;
                case 'wagz':
                    include('includes/pages/wagz.php');
                    break;
                case 'nye':
                    include('includes/pages/nye.php');
                    break;
                case 'work':
                    include('includes/pages/work.php');
                    break;
                case 'about':
                    include('includes/pages/about.php');
                    break;
                default:
                    include('includes/pages/home.php');
            }
        ?>

        <?php include('includes/footer.php'); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="/js/jquery.waypoints.min.js"></script>
        <!-- <script type="text/javascript" src="/js/libgif.js"></script> -->
        <!-- <script>
          if ('registerElement' in document
            && 'createShadowRoot' in HTMLElement.prototype
            && 'import' in document.createElement('link')
            && 'content' in document.createElement('template')) {
            // We're using a browser with native WC support!
          } else {
            document.write('<script src="https:\/\/cdnjs.cloudflare.com/ajax/libs/polymer/0.3.4/platform.js"><\/script>')
          }
        </script>
        <link rel="import" href="/includes/x-gif.html"> -->
        <script src="custom.js"></script>
    </body>
</html>

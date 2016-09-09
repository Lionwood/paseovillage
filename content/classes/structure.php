<?php 
date_default_timezone_set('America/Phoenix');

class Structure {

    public function header() {
        $header = '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Paseo Village - Peoria, AZ - A Viewpoint Senior Care Community</title>
                <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans|Ubuntu" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="css/main.css">
            </head>
            <body>';

        return $header;
    }

    public function footer() {
        $footer = '
            <footer>Stay Tuned! Our website will be here soon!</footer>
            <div class="copyright">&copy; '.date('Y').' Paseo Village. A Viewpoint Senior Care Community. All Rights Reserved.</div>
            </body>
        </html>';

        return $footer;
    }

}
?>
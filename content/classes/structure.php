<?php 

class Structure {

    private $header = '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Paseo Village - Phoenix, AZ - A Viewpoint Senior Care Community</title>
                <link rel="stylesheet" type="text/css" href="css/main.css">
            </head>
            <body>';

    private $footer = '
            <footer>This is the Footer.</footer>
            <div class="copyright">&copy;<?=date("Y")?> Paseo Village. A Viewpoint Senior Care Community. All Rights Reserved.</div>
            </body>
        </html>';

    public function header() {
        return $this->header;
    }

    public function footer() {
        return $this->footer;
    }
}

?>
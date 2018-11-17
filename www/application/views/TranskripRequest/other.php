<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
            .background {
                background-color: black;
                color: white;
            }

            .content {
                background-color: coral;
                padding: 30px 30px 30px 30px;
            }

            .btn:hover {
                color: yellow;
            }
        </style>
    </head>
    <body>
        <div style = 'display:flex; position:absolute; top:0; bottom:0; right:0; left:0;' class="text-center background">
            <div style = 'margin:auto;' class="content"> 
                <h1 style="margin-top: 0px">Earn <span style="color: red;">$$$</span> Quickly!</h1>
                <form method="post" action="/TranskripRequest/other">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" />
                    <input type="hidden" name="requestType" value="DPS_ID">
                    <input type="hidden" name="requestUsage" value="tes">
                    <button type="submit" class="btn btn-primary">CLICK NOW</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    $directorio = 'img';
    $imgs = glob("img/*.jpg");
    print json_encode($imgs);

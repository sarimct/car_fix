<?php

return array(
    'pdf' => array(
        'enabled' => true,
//        'binary' => '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe"',
        'binary' => base_path('storage/app/wkhtmltopdf.exe'),
        'options' => array(),
    ),
    'image' => array(
        'enabled' => true,
//        'binary' => '"C:\Program Files\wkhtmltopdf\bin\wkhtmltoimage.exe"',
        'binary' => base_path('storage/app/wkhtmltoimage.exe'),
        'options' => array(),
    ),
);
<?php
// 非常规宽度加价
$widthArr = 
Array
(
    Array(
        'minwidth' => 1.8,
        'maxwidth' => 1.999,
        'price' => 100
    ),

    Array(
        'minwidth' => 2.0,
        'maxwidth' => 2.099,
        'price' => 80
    ),

    Array(
        'minwidth' => 2.1,
        'maxwidth' => 2.8,
        'price' => 50
    ),

    Array(
        'minwidth' => 2.801,
        'maxwidth' => 3.101,
        'price' => 70
    ),

    Array(
        'minwidth' => 3.009,
        'maxwidth' => 3.201,
        'price' => 100
    )

);

// 非常规长度加价
$lengthArr = Array
(
    Array(
        'minlength' => 0,
        'maxlength' => 5.999,
        'price' => 100,
        'extraprice' => 50
    ),

    Array(
        'minlength' => 6.000,
        'maxlength' => 12.5,
        'price' => 50,
        'extraprice' => 30
    ),

    Array(
        'minlength' => 12.50,
        'maxlength' => 15,
        'price' => 100,
        'extraprice' => 50
    )
);

// z项性能要求加价
$zFunctionArr = Array
(
    Array(
        'zfunction' => 'Z15',
        'price' => 200,
    ),

    Array(
        'zfunction' => 'Z25',
        'price' => 300,
    ),

    Array(
        'zfunction' => 'Z35',
        'price' => 400,
    )
);

// 探伤加价
$probeArr = Array
(
    Array(
        'level' => 1,
        'price' => 200
    ),

    Array(
       'level' => 2,
       'price' => 150
    ),

    Array(
       'level' => 3,
       'price' => 100
    )
)
?>
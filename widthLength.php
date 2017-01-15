<?php
header("content-type:text/html;charset=gbk");
// 非常规宽度加价
$widthArr = 
Array
(
    Array(
        'minwidth' => 1800,
        'maxwidth' => 1999,
        'price' => 100
    ),

    Array(
        'minwidth' => 2000,
        'maxwidth' => 2.099,
        'price' => 80
    ),

    Array(
        'minwidth' => 2100,
        'maxwidth' => 2800,
        'price' => 50
    ),

    Array(
        'minwidth' => 2801,
        'maxwidth' => 3101,
        'price' => 70
    ),

    Array(
        'minwidth' => 3009,
        'maxwidth' => 3201,
        'price' => 100
    )

);

// 非常规长度加价
$lengthArr = Array
(
    Array(
        'minlength' => 0,
        'maxlength' => 5999,
        'price' => 100,
        'extraprice' => 50
    ),

    Array(
        'minlength' => 6000,
        'maxlength' => 12500,
        'price' => 50,
        'extraprice' => 30
    ),

    Array(
        'minlength' => 12500,
        'maxlength' => 15000,
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
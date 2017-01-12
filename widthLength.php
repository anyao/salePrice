<?php
// 非常规宽度加价
$width = 
Array
(
    [0] => Array
        (
            ['minwidth'] => 1.8,
            ['maxwidth'] => 1.999,
            ['price'] => 100
        ),

    [1] => Array
        (
            ['minwidth'] => 2.0,
            ['maxwidth'] => 2.099,
            ['price'] => 80
        ),

    [2] => Array
        (
            ['minwidth'] => 2.1,
            ['maxwidth'] => 2.8,
            ['price'] => 50
        ),

    [3] => Array
        (
            ['minwidth'] => 2.801,
            ['maxwidth'] => 3.101,
            ['price'] => 70
        ),

    [4] => Array
        (
            ['minwidth'] => 3.009,
            ['maxwidth'] => 3.201,
            ['price'] => 100
        )

);

// 非常规长度加价
$length = Array
(
    [0] => Array
        (
            ['minlength'] => '',
            ['maxlength'] => 5.999,
            ['price'] => 100,
            ['extraprice'] => 50
        ),

    [1] => Array
        (
            ['minlength'] => 6.000,
            ['maxlength'] => 12.5,
            ['price'] => 50,
            ['extraprice'] => 30
        ),

    [2] => Array
        (
            ['minlength'] => 12.50,
            ['maxlength'] => 15,
            ['price'] => 100,
            ['extraprice'] => 50
        )
);

// z项性能要求加价
$zFunction = Array
(
    [0] => Array
        (
            ['zfunction'] => Z15,
            ['price'] => 200,
        ),

    [1] => Array
        (
            ['zfunction'] => Z25,
            ['price'] => 300,
        ),

    [2] => Array
        (
            ['zfunction'] => Z35,
            ['price'] => 400,
        )
);

// 探伤加价
$probe = Array
(
    [0] => Array
        (
            ['level'] => 1,
            ['price'] => 200
        ),

    [1] => Array
        (
            ['level'] => 2,
            ['price'] => 150
        ),

    [2] => Array
        (
            ['level'] => 3,
            ['price'] => 100
        )
)
?>
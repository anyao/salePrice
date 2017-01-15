<?php  
header("content-type:text/html;charset=gbk");
// 中普宽厚板价格---中厚板产品基价
// 基价
$BasePrice = 1800;
$thickArr = 
Array
(
    0 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    1 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    2 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    3 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    4 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    5 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    6 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 490
    ),

    7 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    8 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    9 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    10 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    11 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 600
    ),

    12 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 610
    ),

    13 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 570
    ),

    14 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    15 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 780
    ),

    16 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    17 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    18 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    19 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    20 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 660
    ),

    21 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 720
    ),

    22 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    23 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    24 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 650
    ),

    25 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 710
    ),

    26 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 400
    ),

    27 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    28 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    29 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    30 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    31 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    32 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    33 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 490
    ),

    34 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    35 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    36 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    37 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    38 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 600
    ),

    39 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 610
    ),

    40 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 570
    ),

    41 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    42 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 780
    ),

    43 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    44 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 630
    ),

    45 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    46 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    47 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 660
    ),

    48 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 720
    ),

    49 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    50 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    51 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 650
    ),

    52 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 8.00,
        'maxthick' => 9.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 710
    ),

    53 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    54 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    55 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    56 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    57 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    58 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    59 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    60 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    61 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    62 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    63 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    64 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    65 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    66 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    67 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    68 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 680
    ),

    69 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    70 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    71 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    72 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    73 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 560
    ),

    74 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 620
    ),

    75 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    76 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    77 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    78 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 610
    ),

    79 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 300
    ),

    80 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    81 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    82 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    83 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    84 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    85 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    86 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    87 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    88 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    89 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    90 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    91 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    92 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    93 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    94 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    95 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 680
    ),

    96 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    97 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    98 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    99 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    100 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 560
    ),

    101 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 620
    ),

    102 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    103 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    104 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    105 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 10.00,
        'maxthick' => 11.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 610
    ),

    106 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    107 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    108 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    109 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 260
    ),

    110 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    111 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    112 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    113 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    114 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    115 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    116 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    117 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    118 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    119 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 370
    ),

    120 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    121 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    122 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    123 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    124 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    125 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    126 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    127 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 520
    ),

    128 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 130
    ),

    129 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    130 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    131 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    132 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 200
    ),

    133 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    134 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    135 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    136 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 260
    ),

    137 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    138 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    139 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    140 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    141 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    142 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    143 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    144 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    145 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    146 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 370
    ),

    147 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    148 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    149 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    150 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    151 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 280
    ),

    152 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    153 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    154 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 520
    ),

    155 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 130
    ),

    156 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    157 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    158 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 12.00,
        'maxthick' => 13.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    159 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 0
    ),

    160 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 0
    ),

    161 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    162 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    163 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    164 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    165 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    166 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    167 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    168 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    169 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    170 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    171 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    172 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    173 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    174 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    175 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    176 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    177 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    178 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    179 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    180 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    181 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 50
    ),

    182 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    183 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 370
    ),

    184 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    185 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    186 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 0
    ),

    187 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 0
    ),

    188 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    189 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 180
    ),

    190 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    191 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 120
    ),

    192 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    193 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    194 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    195 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    196 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    197 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    198 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    199 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    200 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    201 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    202 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    203 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    204 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    205 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    206 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    207 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    208 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 50
    ),

    209 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    210 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 370
    ),

    211 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 14.00,
        'maxthick' => 25.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    212 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    213 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    214 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    215 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    216 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    217 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    218 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 240
    ),

    219 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    220 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    221 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    222 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    223 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    224 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    225 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    226 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    227 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    228 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    229 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    230 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    231 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    232 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    233 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    234 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    235 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 260
    ),

    236 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    237 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    238 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    239 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    240 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    241 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    242 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    243 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    244 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    245 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 240
    ),

    246 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    247 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    248 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    249 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    250 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    251 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    252 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    253 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    254 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    255 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    256 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    257 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    258 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    259 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    260 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    261 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 80
    ),

    262 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 260
    ),

    263 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    264 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 26.00,
        'maxthick' => 30.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    265 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    266 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    267 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    268 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    269 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    270 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    271 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 240
    ),

    272 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    273 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    274 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    275 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    276 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    277 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    278 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    279 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    280 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    281 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    282 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    283 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    284 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    285 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    286 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    287 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 130
    ),

    288 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    289 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    290 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 30
    ),

    291 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    292 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    293 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    294 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    295 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 240
    ),

    296 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    297 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    298 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    299 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    300 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    301 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    302 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 320
    ),

    303 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    304 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    305 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    306 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    307 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 230
    ),

    308 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    309 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    310 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    311 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 130
    ),

    312 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    313 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 90
    ),

    314 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 90
    ),

    315 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    316 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    317 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    318 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    319 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    320 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    321 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    322 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    323 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    324 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    325 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    326 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    327 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    328 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    329 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    330 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    331 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    332 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    333 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    334 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    335 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    336 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    337 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 90
    ),

    338 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 90
    ),

    339 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    340 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    341 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    342 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    343 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 300
    ),

    344 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    345 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    346 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    347 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    348 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    349 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    350 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    351 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    352 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    353 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    354 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    355 => Array
    (
        'name' => '中厚板锅炉容器钢Q245R',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 290
    ),

    356 => Array
    (
        'name' => '中厚板锅炉容器钢Q345R',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    357 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    358 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    359 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 200
    ),

    360 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 380
    ),

    361 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    362 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    363 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    364 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    365 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    366 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    367 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    368 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    369 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    370 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    371 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    372 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    373 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    374 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    375 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    376 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 650
    ),

    377 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    378 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    379 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    380 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 150
    ),

    381 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    382 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    383 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    384 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    385 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 360
    ),

    386 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    387 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    388 => Array
    (
        'name' => '中厚板高强钢Q390B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    389 => Array
    (
        'name' => '中厚板高强钢Q390C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    390 => Array
    (
        'name' => '中厚板高强钢Q420B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 470
    ),

    391 => Array
    (
        'name' => '中厚板高强钢Q420C',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    392 => Array
    (
        'name' => '中厚板桥梁钢Q345qC',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 440
    ),

    393 => Array
    (
        'name' => '中厚板桥梁钢Q345qD',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 500
    ),

    394 => Array
    (
        'name' => '中厚板桥梁钢Q345qE',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 650
    ),

    395 => Array
    (
        'name' => '中厚板管线钢L245',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 350
    ),

    396 => Array
    (
        'name' => '中厚板管线钢L245M',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 550
    ),

    397 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    398 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    399 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 250
    ),

    400 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    401 => Array
    (
        'name' => '中厚板高建钢Q345GJB',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 530
    ),

    402 => Array
    (
        'name' => '中厚板高建钢Q345GJC',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    403 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 250
    ),

    404 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 430
    ),

    405 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    406 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 490
    ),

    407 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 310
    ),

    408 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 490
    ),

    409 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    410 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    411 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    412 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    413 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    414 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    415 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    416 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    417 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 560
    ),

    418 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    419 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 210
    ),

    420 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    421 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    422 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    423 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 330
    ),

    424 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 420
    ),

    425 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    426 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 560
    ),

    427 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    428 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    429 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    430 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    431 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    432 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    433 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    434 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 540
    ),

    435 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 620
    ),

    436 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    437 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 270
    ),

    438 => Array
    (
        'name' => '中厚板普碳钢Q235C',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    439 => Array
    (
        'name' => '中厚板普碳钢Q235D',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 450
    ),

    440 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    441 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 390
    ),

    442 => Array
    (
        'name' => '中厚板低合金钢Q345C',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 480
    ),

    443 => Array
    (
        'name' => '中厚板低合金钢Q345D',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 540
    ),

    444 => Array
    (
        'name' => '中厚板低合金钢Q345E',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 620
    ),

    445 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 60
    ),

    446 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    447 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 180
    ),

    448 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 26.01,
        'maxthick' => 60.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 0
    ),

    449 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 61.00,
        'maxthick' => 100.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 80
    ),

    450 => Array
    (
        'name' => '中厚板普碳钢Q235A',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    451 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 60
    ),

    452 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    453 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 180
    ),

    454 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 26.01,
        'maxthick' => 60.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 0
    ),

    455 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 61.00,
        'maxthick' => 100.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 80
    ),

    456 => Array
    (
        'name' => '中厚板普碳钢Q235B',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    457 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 180
    ),

    458 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 240
    ),

    459 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 300
    ),

    460 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 26.01,
        'maxthick' => 60.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    461 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 61.00,
        'maxthick' => 100.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 200
    ),

    462 => Array
    (
        'name' => '中厚板低合金钢Q345A',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 240
    ),

    463 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 180
    ),

    464 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 51.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 240
    ),

    465 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 300
    ),

    466 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 26.01,
        'maxthick' => 60.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    467 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 61.00,
        'maxthick' => 100.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 200
    ),

    468 => Array
    (
        'name' => '中厚板低合金钢Q345B',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 240
    ),

    469 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    470 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    471 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 110
    ),

    472 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 51.00,
        'maxthick' => 70.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 170
    ),

    473 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 230
    ),

    474 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 26.01,
        'maxthick' => 60.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 50
    ),

    475 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 61.00,
        'maxthick' => 100.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 110
    ),

    476 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 170
    ),

    477 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 410
    ),

    478 => Array
    (
        'name' => '中厚板普碳钢SS400',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 510
    ),

    479 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    480 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '两切',
        'guarantee' => '保性能',
        'price' => 690
    ),

    481 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 41.00,
        'maxthick' => 50.99,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 290
    ),

    482 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 51.00,
        'maxthick' => 70.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 350
    ),

    483 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 71.00,
        'maxthick' => 100.00,
        'edge' => '四切',
        'guarantee' => '不保性能',
        'price' => 410
    ),

    484 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 26.01,
        'maxthick' => 60.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 230
    ),

    485 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 61.00,
        'maxthick' => 100.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 290
    ),

    486 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 101.00,
        'maxthick' => 200.00,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 350
    ),

    487 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 71.00,
        'maxthick' => 100.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 590
    ),

    488 => Array
    (
        'name' => '中厚板低合金钢SM490A',
        'minthick' => 101.00,
        'maxthick' => 120.00,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 690
    ),

    489 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 400
    ),

    490 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 41.00,
        'maxthick' => 51.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    491 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 520
    ),

    492 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 520
    ),

    493 => Array
    (
        'name' => '中厚板高强钢Q460C',
        'minthick' => 71.00,
        'maxthick' => 100.01,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    494 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 31.00,
        'maxthick' => 40.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 460
    ),

    495 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 41.00,
        'maxthick' => 51.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 520
    ),

    496 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 51.00,
        'maxthick' => 60.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    497 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 61.00,
        'maxthick' => 70.99,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 580
    ),

    498 => Array
    (
        'name' => '中厚板高强钢Q460D',
        'minthick' => 71.00,
        'maxthick' => 100.01,
        'edge' => '四切',
        'guarantee' => '保性能',
        'price' => 640
    ),

    499 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 31.00,
        'maxthick' => 100.99,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 120
    ),

    500 => Array
    (
        'name' => '中厚板优质碳钢45#',
        'minthick' => 101.00,
        'maxthick' => 200,
        'edge' => '毛边',
        'guarantee' => '不保性能',
        'price' => 150
    ),


);

?>
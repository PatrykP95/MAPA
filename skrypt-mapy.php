<?php 

//http://stat.gov.pl/statystyka-regionalna/rankingi-statystyczne/ludnosc-wedlug-wojewodztw/
$province = array(
    'zachodniopomorskie' => array(
        'people' => 1715431,
        'man' =>    835069,
        'woman' =>  880362
    ),
    'swietokrzyskie' => array(
        'people' => 1263176,
        'man' =>    616670,
        'woman' =>  646506
    ),
    'slaskie' => array(
        'people' => 4585924,
        'man' =>    2212717,     
        'woman' =>  2373207
    ),
    'mazowieckie' => array(
        'people' => 5334511,
        'man' =>    2552091,     
        'woman' =>  2782420
    ),
    'warminskomazurskie' => array(
        'people' => 1443967,
        'man' =>    706988,
        'woman' =>  736979
    ),
    'pomorskie' => array(
        'people' => 2302077,
        'man' =>    1121987,
        'woman' =>  1180090
    ),
    'podlaskie' => array(
        'people' => 1191918,
        'man' => 581164,
        'woman' => 610754
    ),
    'podkarpackie' => array(
        'people' => 2129187,
        'man' =>    1042683,
        'woman' =>  1086504
    ),
    'opolskie' => array(
        'people' => 1000858,
        'man' =>    484182,
        'woman' =>  516676
    ),
    'lubuskie' => array(
        'people' => 1020307,
        'man' =>    496666,
        'woman' =>  523641
    ),
    'lubelskie' => array(
        'people' => 2147746,
        'man' =>    1040990,
        'woman' =>  1106756
    ),
    'dolnoslaskie' => array(
        'people' => 2908457,
        'man' => 1398554,
        'woman' => 1509903
    ),
    'lodzkie' => array(
        'people' => 2504136,
        'man' =>    1193418,    
        'woman' =>  1310718
    ),
    'malopolskie' => array(
        'people' => 3368336,
        'man' =>    1634266,
        'woman' =>  1734070
    ),

    'kujawskopomorskie' => array(
        'people' => 2089992,
        'man' =>    1012878,
        'woman' =>  1077114
    ),
    'wielkopolskie' => array(
        'people' => 3472579,
        'man' =>    1689486,
        'woman' =>  1783093
    ),
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$_POST['id'] przekazaliśmy w właściwości data AJAX
    if (isset($_POST['id']) && array_key_exists($_POST['id'], $province)) {
        echo json_encode($province[$_POST['id']]);
    }
}
?>
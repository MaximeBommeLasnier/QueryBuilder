<?php
    require('../QueryBuilder.php');
    $br = '<br>';

    /* SELECT FROM */
    $db = new SQLBUILDER();
    $sqli = $db
        ->select()
        ->from('table')
        ->sql();

    /* INSERT */    

    $db = new SQLBUILDER();
    $sqli = $db
        ->insert('users', ['name' => 'Maxime', 'age' => '20'])
        ->sql();

    /* AND, OR ... */

    $db = new SQLBUILDER();
    $sqli = $db
        ->select()
        ->from('table')
        ->where('name = name')
        ->and('id = id')
        ->sql();

    /* GROUP BY */

    $db = new SQLBUILDER();
    $sqli = $db
        ->select()
        ->from('table')
        ->groupby('product')
        ->sql();
?>
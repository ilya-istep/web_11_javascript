<?php

    include_once 'DB.php';

    $db = new DB();

    $nameObj = $db->select('users');

    $nameObj = $db->select('users');

    $name = $nameObj[0]['name'];

    // echo "<pre>";
    // print_r($db->select('users'));
    // echo "</pre>";

    echo "<pre>";
    print_r($db->select('orders'));
    echo "</pre>";

?>

    <table>
        <tr>
            <td>
                <p><?php echo $name; ?></p>
            </td>
        </tr>
    </table>




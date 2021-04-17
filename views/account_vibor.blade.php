@extends('account_layout');

@section('content')
    <!--        <table class="center">-->
    <!--            <tr>-->
    <!--                <th>Номер телефона</th>-->
    <!--                <th>Номер заказа</th>-->
    <!--                <th>Количество</th>-->
    <!--                <th>Активность</th>-->
    <!--            </tr>-->
    <!--            --><?php
    //
    //
    //            $connect = '../connect.php';
    //            $product = mysqli_query($connect,"SELECT `Номер телефона`,`Номер заказа`,`Количество`,`Активность`
    //                                                FROM `Заказ`
    //                                                INNER JOIN `Phone`pl
    //                                                ON (`Phone` = pl.`Phone`)
    //                                                WHERE pl.`Phone` = $_SESSION[phone]");
    //            $product = mysqli_fetch_all($product);
    //            foreach ($product as $produc ) {
    //            ?>
    <!--            <tr>-->
    <!--                <td>--><?//= $produc[0] ?><!--</td>-->
    <!--                <td>--><?//= $produc[1] ?><!--</td>-->
    <!--                <td>--><?//= $produc[2] ?><!--</td>-->
    <!--                <td>--><?//= $produc[3] ?><!--</td>-->
    <!--            </tr>-->
    <!--            --><?php
    //            }
    //            ?>
    <!--        </table>-->
@endsection

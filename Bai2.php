<html>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <body class="bt2">
    <?php

    function placeOrder() {
        echo "<h2>Thank you for your order</h2>";
    }
    
    if(isset($_POST['order'])) {
    placeOrder();
}
    $shop = array (
        ' THỜI TRANG NAM ' => array (
            'sp1' => array (
                'img' => '<img src="https://tse3.mm.bing.net/th?id=OIP.FQXPPrvtVLw3ijnxnJiy5gHaHa&pid=Api&P=0" style="with:230px; height: 350px"/>',
                'item_name' => "Áo polo nam đẹp",
                'code' => "PM123",
                'price' => '140.000 ₫'
            ),
            'sp2' => array (
                'img' => '<img src="https://tse4.mm.bing.net/th?id=OIP.4hSCdZCyYcRK2TlXuS_WWgHaHa&pid=Api&P=0" style="with:250px; height: 350px"/>',
                'item_name' => "Quần short nam",
                'code' => "PM1DSFS3",
                'price' => '50.000 ₫'
            ),
            'sp3' => array (
                'img' => '<img src="https://tse4.mm.bing.net/th?id=OIP.JrsfmONLWAc6gXKnW39FzwHaJR&pid=Api&P=0" style="with:250px; height: 350px"/>',
                'item_name' => "Quần tây nam",
                'code' => "PM13FD3",
                'price' => '90.000 ₫'
            ),

        ),
        ' THỜI TRANG NỮ ' => array (
            'sp1' => array (
                'img' => '<img src="https://tse2.mm.bing.net/th?id=OIP.fq_9qHeT1ZXePc2FSz6z7AHaHa&pid=Api&P=0" style="with:250px; height: 350px"/>',
                'item_name' => "Set combo nữ tính",
                'code' => "PM2DFR3",
                'price' => '90.000 ₫'
            ),
            'sp2' => array (
                'img' => '<img src="https://tse1.mm.bing.net/th?id=OIP.li-SMe_k6-AoY7EXgnB2SwHaHa&pid=Api&P=0" style="with:250px; height: 350px"/>',
                'item_name' => "Khoác gió",
                'code' => "PMFGD23",
                'price' => '240.000 ₫'
            ),
            'sp3' => array (
                'img' => '<img src="https://tse2.mm.bing.net/th?id=OIP.ZARu1KSkL9HS0vTyq16y8AHaHa&pid=Api&P=0" style="with:250px; height: 350px"/>',
                'item_name' => "Bộ quần áo đá banh",
                'code' => "PM1DVSV",
                'price' => '140.000 ₫'
            ),
        )
    );
    ?>
        

        <div class="container">
            <div class="content">
                <?php
                    foreach ($shop as $k => $v) {
                        ?>
                        <h2><?php echo $k?></h2>
                        <ul class ="item">
                            <?php
                            foreach ($v as $k1 => $v1) {
                                ?>
                                <li>
                                    <p><?php echo  $v1['img'] ?></p>
                                    <p><?php echo  $v1['item_name'] ?></p>
                                    <p><?php echo  $v1['code'] ?></p>

                                    <p ><?php echo  $v1['price'] ?></p>
                                    <form method="post">
                                        <button name="order" type="submit" class="btn btn-primary">Đặt mua</button>
                                    </form>
                                </li>
                            <?php }
                            ?>
                        </ul>
                        <?php
                    }
                ?>
            </div>
        </div>
    </body>

</html>
<?php

$arr1 = [
    0 => [
        'id' => 0,
        'name' => 'Нет'
    ],
    1 => [
        'id' => 1,
        'name' => 'Да'
    ],
];

$arr2 = [
    0 => [
        0 => [
            'id' => 0,
            'name' => 'One.One',
            'price' =>     $list = file("list1.csv"); //файд в качестве разделителя точка с запятой.
        //построим из xml в html
    echo "<table border=1>";
            foreach($list as $v){
                $c = explode(";",$v); //разбиваем строку по разделителю
                   echo "<tr>";
                        for($i=0;$i<count($c);$i++){
                            echo "<td>$c[$i]</td>";
                        }
                echo "</tr>";
            }
    echo "</table>";
        ],
    ],
];
print_r($_POST['key']);
 if (isset($_POST[$key])==$arr1[0]) 
	 $form->addElement('text', 'txt_name', 'Название подраздела:', array('style' => 'width: 300px'));
if (isset($_GET['ajax'])) {
    echo json_encode(['success' => true, 'products' => ((isset($arr2[$_POST['category']])) ? $arr2[$_POST['category']] : [])]);
    exit();
}

?>

<html>
    <head>
        <title>Test</title>
        <style>
            body > div {
                width: 300px;
                padding: 20px;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
        <div>
            <p>
                Price <span data-id='price'>-</span> rub.
            </p>
            <p>
                Category
                <select data-id='categories'>
                    <option value="">- Выбрать категорию -</option>
                    <?php
                        foreach ($arr1 as $key => $value) {
                            ?>
                            <option value="<?php echo $value['id'];?>"><?php echo $value['name']; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </p>
            <p>
                Product
                <select data-id='products'>
                    <option value="">- Выбрать категорию -</option>
                </select>
            </p>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-id="categories"]').change(function(){
                    $.ajax({
                            url: "?ajax",
                            type: "POST",
                            data: ({
                                category: $(this).val()
                            }),
                            dataType: "json",
                            success: function(result){
                                if (!result.success) {
                                    alert('bad');
                                    return;
                                }
                                $('[data-id="products"]').html( 
                                    (result.products.length > 0) ? 
                                    result.products.map(function(product){
                                        return '<option value="'+product.id+'" data-price="'+product.price+'">'+product.name+'</option>'
                                    }) : '<option value="">- no products -</option>'
                                );
                                calcPrice();
                            }
                        });
                });

                $('[data-id="products"]').change(function(){
                    calcPrice();
                });

                calcPrice();
            });

            function calcPrice() {
                var priceBlock = $('[data-id="price"]');
                priceBlock.html( $('[data-id="products"] > option:selected').attr('data-price') || 0 );
            }
        </script>
    </body>
</html>
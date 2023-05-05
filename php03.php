<?php
$name ="山田";
if ($name == "山田"){
    echo "私は山田です";
}
else{
    echo "私は山田ではありません";
}
$total =10000;
echo $total;

for ($i = 0; $i <= 10000; $i++){
    $total +=$i;
}
echo $total;
$fruits =array ("桃","柿","梨","林檎","葡萄");
foreach($fruits as $fruit){
    echo"好きなフルーツは".$fruit;
    echo"\n";
}
$i =1;
for($i =1; $i<=100; $i++)
    if ($i % 5 ==0){
        echo $i;
        echo "\n";
    }










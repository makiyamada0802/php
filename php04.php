 <?php
//1.引数に数値をして実行すると、数値を２倍にして返す関数を作成してください

function times2($num){
　  return $num * 2;
　}
echo times2(5).
　
　
　//2.$aと＄bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください
function sumab($a,$b){
　    return $a + $b;
　}
echo sumb(2,5);
　
　
　
　//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function product($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr);$i++){
        $result *= $arr[$i]
    }
    return $result;
}
echo product(arr(1,3,5,7,9));


function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
      if(max_number < $a){
        max_number = $a;  
      }
  }

  return $max_number;
}
echo max_array($arr(6,2,3,10,5));

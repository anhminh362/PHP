<?php
//1. Tính n!
echo "<b><u>Bai 1</u> :</b> ";
$n=5;
$j=1;
for ($i=1;$i<=$n;$i++){
    $j=$j*$i;
}
echo "$n!=$j";
echo "<br><br>";

//2 Cho 2 số ab, các số chia hết cho 3 trong (a,b)
echo "<b><u>Bai 2</u> :</b> ";
$a=1;
$b=7;
$c=array();
for ($i=$a+1;$i<$b;$i++){
    if($i%3==0){
        $c[]=$i;
    }
}
if($c==[]){
    echo "Khong co so chia het cho 3 trong khoang ($a,$b)";
}
else{
    echo"Cac so chia het cho 3 trong khoang ($a,$b) la: ";
    for ($j=0;$j<sizeof($c);$j++){
        echo $c[$j].",";
    }
}

echo "<br><br>";

//3 Kiem tra so nguyen to
echo "<b><u>Bai 3</u> :</b> ";
function nguyento($n){
    $check=true;
$b=round($n/2);
if($n<2){
    echo "Nhap so lon hon 1:";
}
else{
    for ($i=2;$i<=$b;$i++){
        if($n%$i==0){
            $check=false; break;
        }
    };
    if($check){
        echo "So $n la so nguyen to";
    }
    else{
        echo "So $n khong phai la so nguyen to vi $n chia het cho $i";
    }
}
}
nguyento(3);
echo "<br><br>";

//4 Cho n. Tinh tong: 1+4+7+10+...+k(k<=n)
echo "<b><u>Bai 4</u> :</b> ";
$n=9;
$sum=0;
if($n<1){
    echo" Nhap so lon hon 1";
}
else{
    for ($i=1;$i<=$n;$i=$i+3){
        $sum+=$i;
    }
    echo "Tong la $sum";
}
echo "<br><br>";

//5 Cho n. Tinh tong cac chu so cua n 
echo "<b><u>Bai 5</u> :</b> ";
//Cach 1:
// settype($n,"string");
// for($i=0;$i<strlen($n);$i++){
//     $j=$n[$i];
//     settype($j,"integer");
//     $sum=$sum+$j;
// }
// echo "Tong la $sum";
// echo "<br><br>";

//Cach 2:
$a=1509;
$k=1;
$n=$a%$k;
$sum=$m=$n;

while($n!=$a){
    $k=10*$k;
    $n=$a%$k;
    $check=($n-$m)*10/$k;
    $sum=$sum+$check;
    $m=$n;
}
echo "Tong cac chu so cua so $a: $sum";

echo "<br><br>";
//6 Cho cdai, crong cua hcn. Vẽ hcn theo dau *
echo "<b><u>Bai 6</u> :</b><br> ";
$a=5;
$b=3;
for($i=0;$i<$b;$i++){
    for($j=0;$j<$a;$j++){
        echo "*";
    }
    echo"<br>";
};
echo "<br><br>";

//7 cho a. Viet chương trình in bang cuu chương cua a.
echo "<b><u>Bai 7</u> :</b><br> ";
$number=1;
if($number>0&&$number<=10){
    for ($i=1;$i<=9;$i++){
        echo "$number x $i = ".($i*$number)." <br>";
    }
    echo "$number x $i= ".($i*$number)." <br>";
}
else{
    echo"Nhap so trong khoang tu 1 den 10";
}
echo "<br><br>";
//8 Cho a,b. Tìm UCLN,BCNN
echo "<b><u>Bai 8</u> :</b><br> ";
$a=9;
$b=12;
for ($i=1;$i<=$a;$i++){
        if($a%$i==0){
            if($b%$i==0){
                $UCLN=$i;
            };
    }
};
echo "Uoc chung lon nhat cua $a va $b la: ".$UCLN;
echo "<br><br>";
$a=6;
$b=4;
for ($i=1;$i<=$b;$i++){
    $check=$a*$i;
    if($check%$b==0){
        $BCNN=$check;break; 
    }
}
echo "Boi chung nho nhat cua $a va $b la: ".$BCNN;
echo "<br><br>";
?>
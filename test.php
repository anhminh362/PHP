<?php
//Hằng
// define ('Max',10);
// define('Max',5);
// echo Max;

//Biến
// $a=0;
// $b=1;
// $a = $b;
// echo $a;

//Cộng chuỗi
// $fullname = "Anh Minh";
// echo "Xin chao, {$fullname}!";

//Thêm thẻ
// $n = 10;
// $sum = 0;
// for($i=0;$i<=$n;$i++){
//     echo $i . "<br>";
// }

// $num='abc';
// echo ++$num;


// $s="Em bao anh di di <br> Sao anh khong o lai? <br> Em bao anh: dung doi!<br>";
// echo $s;

// echo 'Testing'.(1+2).'45';
// echo (123=='123');-> True

// $a=6;$b=2;
// echo("Tong: $a+$b=".($a+$b)."<br>");
// echo("Tích: $a x $b=".($a*$b)."<br>");
// // echo("Tich: ".$a."x".$b."=".($a*$b)."<br>");
// echo("Thương: $a/$b=".($a/$b)."<br>");
// echo("Hieu: $a-$b=".($a-$b)."<br>");


//1.  a chia het cho 10?
function check($a){
    // $a = readline('Enter a number: ');
    if ($a%10==0){
        $b="$a chia het cho 10";
    }
    else{
        $b="$a khong chia het cho 10";
    }
    return $b;
}
echo check(21);
echo "<br><br>";
//2 Cho 5 số a,b,c,d,e. Tìm số lớn nhất và bé nhất

$number=array(2,1,7,4,6);
$min=$number[0];
$max=$number[0];
for ($i = 0; $i < sizeof($number); $i++) {
    if ($min>$number[$i]){
        $min=$number[$i];
    }
    if($max<$number[$i]){
        $max=$number[$i];
    }
  }
echo " min: $min and max: $max <br><br>";

//3 Giải phương trình bậc 2: ax^2+bx+c=0;a!=0
$a=9;$b=1;$c=5;
$a=4;$b=-2;$c=-6;
if($a==0){
    echo "Nhap lai a";
}
else{
    $denta=pow($b,2)-4*$a*$c; 
if ($denta<0){
    echo "Phuong trinh vo nghiem<br><br>";
}
elseif ($denta==0){
    $n=-$b/(2*$a);
    echo "Phuong trinh co nghiem kep $n<br><br>";
}
else{
    $n1=(-$b+sqrt($denta))/(2*$a);
    $n2=(-$b-sqrt($denta))/(2*$a);
    echo "Phuong trinh co nghiem n1= $n1 va n2= $n2<br><br>";
}
}

//4 Cho 3 cạnh của một tam giác, ktra tính hợp lệ của 3 cạnh và cho biết đó là tam giác gì?(Đều, cân, thường)
$a=3;$b=3;$c=2;
$a=9;$b=15;$c=12;
$a=5;$b=5;$c=7;
if(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)&&$a>0&&$b>0&&$c>0){
    if($a==$b&&$b==$c){
        echo "Day la tam giac deu";
    }
    elseif((($a * $a + $b * $b == $c * $c) && ($a == $b)) ||
    (($a * $a + $c * $c == $b * $b) && ($a == $c)) ||
    (($b * $b + $c * $c == $a * $a) && ($b == $c))){
        echo "Day la tam giac vuong can";
    }
    else if (($a == $b) || ($a == $c) || ($b == $c)){
        echo "Day la tam giac can";
    }
    elseif (($a * $a == $b * $b + $c * $c) ||
    ($b * $b == $a * $a + $c * $c) ||
    ($c * $c == $a * $a + $b * $b)){
        echo "Day la tam giac vuong";
    }
    else{
        echo "Day la tam giac thuong";
    }
}
else{
 echo "Khong the tao thanh tam giac";
}

echo "<br><br>";
//1. Nhập tháng-> số ngày trong tháng?
echo "<b><u>Bai 1</u> :</b> ";
$month=2;$year=2000;
if($month==2){
    if($year%400==0 || $year % 4 == 0 && $year % 100 != 0){
        $date=29;
    }
    else{$date=28;}
    echo "thang $month nam $year co $date ngay";
}
else{
    switch($month){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $date=31;break;
        case 4:
        case 6:
        case 9:
        case 11:
            $date=30;break;
    };
    echo "thang $month co $date ngay";
}
echo "<br><br>";

//2. Nhập ngày (gồm ngày, tháng, năm), ktra tính hợp lệ của ngày vừa nhập

//3. Nhập ngày bất kì->hôm sau là ngày mấy
echo "<b><u>Bai 3</u> :</b> ";
$day=array(4,11,1700);
// echo $day[0]."<br>";
if(1<= $day[1]&& $day[1] <=12&&$day[2]>0){
    $check=true;
    switch($day[1]){
        case 1: case 3: case 5: case 7: case 8: case 10: 
            if ($day[0]==31){
                $day[0]=1; $day[1]++;
            }
            else if($day[0]<31&&$day[0]>0){
                $day[0]++;
            }
            else {$check=false;};break;
        case 4: case 6: case 9: case 11: 
            if($day[0]==30){
            $day[0]=1;$day[1]++;
            }
            elseif ($day[0]<30&&$day[0]>0){
                $day[0]++; 
            }
            else {$check=false;
            };break;
        case 12:
            if($day[0]==31){
                $day[0]=1;$day[1]=1;$day[2]++;
            }
            elseif($day[0]<31&&$day[0]>0){
                $day[0]++; 
            }
            else {$check=false;};break;
        case 2: 
            if($day[2]%400==0 || $day[2] % 4 == 0 && $day[2] % 100 != 0){
                if($day[0]==29){
                    $day[0]=1;$day[1]++;
                }
                elseif($day[0]<=28&&$day[0]>0){
                    $day[0]++;
                }
                else{$check=false; }
            }
            elseif($day[0]==28){
                $day[0]=1;$day[1]++;
            }
            elseif($day[0]<28&&$day[0]>0){
                $day[0]++; 
            }
            else {$check=false;
            };break;
        
    }
    if($check==false){
        echo"Ngay khong hop le";
    }
    else{echo "ngay tiep theo la $day[0]/$day[1]/$day[2]";}
}
else {
    echo "Thang khong hop le";
}

echo "<br><br>";

//4 Nhập điểm trung bình của SV,cho biết SV đó xếp loại gì,(XS:>=9.0;Giỏi:8-9;Khá:7-8;TB:5-7;Yếu-kém:0-5)
echo "<b><u>Bai 4</u> :</b> ";
$score=7.94;
$score=round($score,1);
// settype($score,"integer");
// echo round($score,1);
echo "Học sinh có số điểm $score xếp loại ";
switch ($score<5.0){
    case 1: echo "Yếu- Kém";break;
    case 0: 
        if ($score<7.0){
            echo "Trung bình";
        }
        else if ($score<8.0){
            echo "Khá";
        }
        else if ($score<9.0){
            echo "Giỏi";
        }
        else{
            echo "Xuất sắc";
        }; break;
};

echo "<br><br>";
// $a = readline('Enter a string: ');
// echo $a;
?>



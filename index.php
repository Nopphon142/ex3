<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบ Condition กลุ่มคำสั่ง if</h1>
    <?php
    echo "<h2>คำสั่ง if</h2>";
    $x = 5;
    $y = 8;

    
    if ($x < $y) {
        echo "\$x = $x <br>";
        echo "\$y = $y <br>";
        
        if ($x < $y) {
            echo "คำในตัวแปร x น้อยกว่าค่าในตัวแปร y<br>";
        } else {
            echo "ค่าในตัวแปร y น้อยกว่าค่าในตัวแปร x<br>";
        }
    }
    echo "--------------------------";
    echo "<h2> Short hand if </h2>";
    $score = 50;
    if ($score >= 50 ) echo"ขอเเสดงความยินดีคุณสอบผ่าน ";
    $result = $score>=50 ?"ได้เกรด P":"ได้เกรด F";
    echo "<br>";
    echo "ผลการเรียนของคุณ".$result;
    echo "<br>";
    echo "----------------";
    echo "<h2> Switch Case </h2>";
    echo "<br>";
    $pet = 'Dog';
    switch ($pet) {
        case 'Cat':
            echo "คุณชอบนอนเหมือนเเมว <br>";
            break;
        case 'Dog':
            echo "คุณเท่าเหมือนสุนัข <br>";
            break;
        case 'Bird':
            echo "คุณพูดมากเหมือนนก <br>";
            break;
        
        default:
            echo "คุณเป็นมนษย์ introvert <br>";
            break;
    }
    ?>
</body>
</html  
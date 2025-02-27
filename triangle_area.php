<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
    <style>
        /* ตั้งค่าพื้นฐาน */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #0099ff, #0044cc);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        /* กล่องผลลัพธ์ */
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
            color: #0044cc;
        }

        h2 {
            color: #007bff;
        }

        .result p {
            font-size: 18px;
            margin: 10px 0;
            color: #003d80;
        }

        /* ปุ่มลิงก์ */
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 15px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ผลการคำนวณพื้นที่รูปสามเหลี่ยม</h2>
        <div class="result">
            <?php
                $height = $_POST['height'];  // รับค่าความสูงสามเหลี่ยม
                $width = $_POST['width'];   // รับค่าความยาวฐานจากฟอร์มที่ส่งมา
                $area = 0.5 * $height * $width;
                echo "<p>รูปสามเหลี่ยมที่มี <strong>ความสูง</strong> $height และ <strong>ความยาวฐาน</strong> $width</p>";
                echo "<p><strong>พื้นที่:</strong> $area ตารางหน่วย</p>";
            ?>
        </div>
        <div class="actions">
            <a href="triangle_area_form.php" class="btn">กลับไปหน้าแรก</a>
        </div>
        <?php
        function triangleArea($h,$w){
            $a = 0.5 * $h * $w; //คำนวณพื้นที่ 1/2*ฐ*ส
            return $a;
        }
        ?>
    </div>
</body>
</html>
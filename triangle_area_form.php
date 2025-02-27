<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</title>
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

        /* กล่องคำนวณ */
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 350px;
            color: #0044cc;
        }

        h2, h3 {
            color: #007bff;
        }

        /* จัดสไตล์ฟอร์ม */
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            text-align: left;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            width: 100%;
        }

        .buttons {
            margin-top: 10px;
        }

        input[type="submit"], input[type="reset"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="reset"] {
            background: #0056b3;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        input[type="reset"]:hover {
            background: #003d80;
        }

        /* ตารางแสดงผล */
        table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #007bff;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #007bff;
            color: white;
        }

        td {
            background: #e3f2fd;
            color: #0044cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</h2>
        <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
        <form action="triangle_area.php" method="post" class="form">
            <label for="height">ความสูง :</label>
            <input type="text" name="height" id="height" required>
            
            <label for="width">ความยาวฐาน :</label>
            <input type="text" name="width" id="width" required>
            
            <div class="buttons">
                <input type="submit" value="คำนวณ">
                <input type="reset" value="รีเซ็ต">
            </div>
        </form>

        <h3>ผลลัพธ์</h3>
        <table>
            <tr>
                <th>ความสูง (cm)</th>
                <th>ความยาวฐาน (cm)</th>
                <th>พื้นที่ (cm²)</th>
            </tr>
            <tr>
                <td>10</td>
                <td>5</td>
                <td>25</td>
            </tr>
        </table>
    </div>
</body>
</html>
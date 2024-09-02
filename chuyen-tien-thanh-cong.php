<!DOCTYPE html>
<html lang="en" id="full-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo - Chuyển khoản thành công</title>
    <style>
       body {
    margin: 0px;
    font-family: Arial, sans-serif;
}

.background {
    background: url('https://i.imgur.com/JalLCy6.jpeg') no-repeat center center fixed;
    background-size: contain;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.content {
    position: relative;
    width: 360px; /* Chiều rộng của nội dung */
    height: 812px; /* Chiều cao của nội dung */
    /* Các thuộc tính khác cho nội dung */
}

        .amount {
            position: absolute;
            top: 210px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 25px;
            font-weight: 500;
            color: #132dc0;
            white-space: nowrap;
        }
        .time {
            position: absolute;
            top: 247px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 13px;
            color: #666666;
        }
        .name {
            position: absolute;
            top: 327px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            font-weight: bold;
            color: #2b2828;
            white-space: nowrap;
            text-align: center;
        }
        .bank, .transaction {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 13px;
            font-weight: 400;
            color: #2c2c2c;
            white-space: nowrap;
            text-align: center;
        }
        .bank {
            top: 357px;
        }
        .transaction {
            top: 387px;
        }
        .logo-container {
            position: absolute;
            top: 344px;
            left: 60px;
        }
        .logo {
            width: 36px;
            height: auto;
            top: -15px;
            left: 9px;
        }
        .captureBtn {
    position: absolute;
    bottom: 10px; /* Cách bottom của nút button so với bottom của .background */
    right: 10px; /* Cách right của nút button so với right của .background */
    padding: 10px 20px;
    opacity: 0; 
    cursor: pointer;
}


.captureBtn:hover {
    background-color: #0056b3;
}
 #captureArea {
        padding: 10px;
        border: 1px solid #000;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
.amount {
    color: rgba(19, 45, 192, 0.9);
}
.time {
    color: rgba(102, 102, 102, 0.9); 
}
.name {
    color: rgba(43, 40, 40, 0.9); 
}
.bank, .transaction {
    color: rgba(44, 44, 44, 0.9);
}
.logo {
    filter: blur(0.5px); 
}

    </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>
   <div id="captureArea">
        <div class="background">
    <div class="content">
        <div class="logo-container">
            <img src="https://i.imgur.com/gcG0TMd.png" alt="Logo" class="logo">
        </div>
        <div class="details-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $account = htmlspecialchars($_POST['account']);
                $amount = htmlspecialchars($_POST['amount']);
                $date = htmlspecialchars($_POST['date']);
                $name = htmlspecialchars($_POST['name']);
                $content = htmlspecialchars($_POST['content']);
                echo "<div class='amount'>$amount VND</div>";
                echo "<div class='time'>$date</div>";
                echo "<div class='name'>$name</div>";
                echo "<div class='bank'>MBBank (MB) - $account </div>";
                echo "<div class='transaction'>$content</div>";
            }
            ?>
        </div>
    </div>
</div>
    <button class="captureBtn" id="captureBtn">Chụp màn hình và tải về</button>
<script>
    document.getElementById('captureBtn').addEventListener('click', function() {
      html2canvas(document.querySelector('#captureArea'), {useCORS: true}).then(canvas => {
        let link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'fake-bill-mbbank.png';
        link.click();
      });
    });
  </script>
   
</body>
</html>

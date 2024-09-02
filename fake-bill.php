<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Bill Chuyển Tiền</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1c1f2b;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .header {
            background-color: #111123;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }
        .header-title h1 {
            color: #00bcd4;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }
        .menu {
            display: flex;
        }
        .menu ul {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }
        .menu ul li {
            margin-right: 20px;
        }
        .menu ul li a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 10px;
            transition: background-color 0.6s ease, color 0.6s ease, transform 0.6s ease;
        }
        .menu ul li a:hover {
            background-color: #00bcd4;
            color: #111123;
            transform: scale(1.1);
        }
        .form-container {
            background-color: #222437;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            margin: 20px auto;
        }
        .form-container h2 {
            color: #00bcd4;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            color: #dddddd;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #333344;
            background-color: #1c1f2b;
            border-radius: 5px;
            font-size: 14px;
            color: #dddddd;
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            background-color: #00bcd4;
            color: #ffffff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0097a7;
        }
        .form-group .note {
            font-size: 12px;
            color: #aaaaaa;
        }
        .footer {
            background-color: #151533;
            padding: 10px;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
            z-index: 1000;
            border-top: 1px solid #333344;
        }
        .footer p {
            margin: 0;
            color: #dddddd;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-title">
            <img src="https://i.imgur.com/0meN659.jpeg" alt="Logo" width="220" height="50">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="form-container">
        <h2>Fake chuyển tiền Mbbank: <span style="color: #00bcd4;">MB Bank</span></h2>
        <form method="post" action="test.php">
            <div class="form-group">
                <label for="account">Số tài khoản:</label>
                <input type="text" id="account" name="account" placeholder="13xxx365" required>
            </div>
            <div class="form-group">
                <label for="amount">Số tiền:</label>
                <input type="text" id="amount" name="amount" placeholder="Ví dụ: +150,000" required>
            </div>
            <div class="form-group">
                <label for="date">Thời gian chuyển tiền:</label>
                <input type="text" id="date" name="date" placeholder="Ví dụ: 20:28 - 16/06/2024" required>
            </div>
            <div class="form-group">
                <label for="name">Tên người nhận:</label>
                <input type="text" id="name" name="name" placeholder="Ví dụ: NGUYEN GIA BAO" required>
            </div>
            <div class="form-group">
                <label for="content">Nội dung chuyển khoản:</label>
                <textarea id="content" name="content" placeholder="Nhập nội dung CK" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Tạo bill chuyển khoản">
            </div>
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Vnznight.net - All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector('form');
            form.addEventListener('submit', function (event) {
                // Không cần ngăn chặn mặc định, chỉ cần để form submit
                this.action = 'chuyen-tien-thanh-cong.php';
                this.submit();
            });
        });
    </script>
</body>
</html>

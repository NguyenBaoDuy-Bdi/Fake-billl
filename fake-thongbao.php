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
            background-color: #1c1f2b; /* Background color for the whole page */
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
            background-color: #222437; /* Dark blue background for the form */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            margin: 20px auto; /* Center the form and add some margin */
        }
        .form-container h2 {
            color: #00bcd4; /* Cyan color for the title */
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
            background-color: #1c1f2b; /* Dark input background */
            border-radius: 5px;
            font-size: 14px;
            color: #dddddd; /* Light text color */
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            background-color: #00bcd4; /* Blue submit button */
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
    position: fixed; /* Sửa từ "sticky" thành "fixed" để footer luôn nằm ở dưới trang */
    bottom: 0;
    z-index: 1000; /* Đặt z-index cao hơn để footer hiển thị trên cùng */
    border-top: 1px solid #333344; /* Xóa viền dưới cùng của footer */
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
        <h2>Fake Thông Báo Nhận Tiền Mbbank: <span style="color: #00bcd4;">MB Bank</span></h2>
        <form method="post">
            <div class="form-group">
                <label for="account">Số tài khoản:</label>
                <input type="text" id="account" name="account" placeholder="13xxx365" required>
            </div>
            <div class="form-group">
                <label for="amount">Số tiền:</label>
                <input type="text" id="v" name="amount" placeholder="Ví dụ: +150,000" required>
            </div>
            <div class="form-group">
                <label for="date">Thời gian chuyển tiền:</label>
                <input type="text" id="date" name="date" value="Ví dụ: 27/05/24 10:55" required>
            </div>
            <div class="form-group">
                <label for="sodu">Số dư:</label>
                <input type="text" id="sodu" name="sodu" placeholder="Ví dụ: 2,000,949" required>
            </div>
            <div class="form-group">
                <label for="content">Nội dung chuyển khoản</label>
                <textarea id="content" name="content" placeholder="Nhập nội dung CK" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="theme">Chọn Theme:</label>
                <select id="theme" name="theme">
                    <option value="theme1">Theme Android</option>
                    <option value="theme2">Theme Iphone</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Fake thông báo chuyển khoản">
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
            event.preventDefault(); // Ngăn chặn form submit mặc định
            const formData = new FormData(this);
            const theme = formData.get('theme'); // Lấy giá trị theme từ form
            // Chọn action tương ứng dựa trên theme
            if (theme === 'theme1') {
                this.action = './android/fake-bank-android.php';
            } else if (theme === 'theme2') {
                this.action = './iphone/fake-bank-iphone.php';
            }
            this.submit(); // Gửi form
        });
    });
    </script>
</body>
</html>

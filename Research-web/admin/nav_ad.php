<style>
body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.navbar {
    background-color: #0e2ddb;
    color: #fff;
    padding: 10px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    text-decoration: none;
    color: #fff;
    font-size: 24px;
    display: flex;
    align-items: center;
}

.logo i {
    margin-right: 5px;
}

.nav-links {
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.user-actions {
    display: flex;
    align-items: center;
}

.login-button{
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 10px 20px;
    border-radius: 5px;
    margin-left: 20px;
}
.signup-button{
    text-decoration: none;
    color: #fff;
    background-color: #00ff15;
    padding: 10px 20px;
    border-radius: 5px;
    margin-left: 20px;
}


.fa-code {
    font-size: 32px;
    margin-right: 5px;
}


.footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.footer .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-logo img {
    max-width: 100px; 
    height: auto;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li {
    margin-bottom: 10px;
}

.footer-links ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

</style>
<body>
<nav class="navbar">
        <div class="container">
            <a href="#" class="logo">
                <i class=""><img src="img/5.png" alt="" width="280px" height="110px"></i> 
                 
            </a>
            <ul class="nav-links">
                <li><a href="index.php"><i class="fas fa-home"></i> หน้าแรก</a></li>
                <li><a href="index.php?P=1&S=1"><i class="fas fa-info-circle"></i> เกี่ยวกับเรา</a></li>
                <li><a href="#"><i class="fas fa-sign-in-alt"></i> คู่มือการเข้าสู่ระบบ</a></li>
                <li><a href="#"><i class="fas fa-exclamation-circle"></i> แจ้งปัญหา/ติดต่อทีมงาน</a></li>
            </ul>
            <div class="user-actions">
                <a href="#" class="login-button"><i class="fas fa-sign-in-alt"></i> Login</a>
                <a href="#" class="signup-button"><i class="fas fa-user-plus"></i> Signup</a>
            </div>
        </div>
    </nav>



    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="#" class="logo">
                        <img src="img/3.1.png" alt="Your Logo">
                    </a><br>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#">หน้าแรก</a></li>
                        <li><a href="#">เกี่ยวกับเรา</a></li>
                        <li><a href="#">คู่มือการเข้าสู่ระบบ</a></li>
                        <li><a href="#">แจ้งปัญหา/ติดต่อทีมงาน</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-social">

            </div>
        </div>
    </footer>
</body>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/views/signup/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="content">
        <div class="introduce">
            <div class="introduce-content">
                <p class="tips animate__animated animate__slideInLeft">
                    Enter your personal details and start journey with us
                </p>
            </div>

        </div>
        <div class="form-wrapper animate__animated animate__slideInRight">
            <div class="login-form">
                <h1>注册</h1>
                <span class="login-tips">
                    Measure the performance of cryptos,get big profits!
                </span>
                <div class="other-login">
                    
                    <i class="fab fa-bitcoin" style="margin-right: 1rem;"></i><span>使用 Web3钱包 注册（维护中）</span>
                </div>
                <div class="divider">
                    <span class="line"></span>
                    <span class="divider-text">或者 用电子邮件注册</span>
                    <span class="line"></span>
                </div>
                <form class="form" method="post" action="register">
                    <div class="input-wrapper">
                        <span class="input-tips">昵称</span>
                        <input type="text" class="ipt" placeholder="输入姓名或昵称" name="nickname" required>
                    </div>
                    <div class="input-wrapper">
                        <span class="input-tips">邮箱</span>
                        <input type="text" class="ipt" placeholder="输入电子邮箱" name="account" required>
                    </div>
                    <div class="input-wrapper">
                        <span class="input-tips">密码</span>
                        <input type="password" class="ipt" placeholder="输入账号密码" name="password">
                    </div>
                    <div class="other-setting">
                    </div>
                    <button type="submit" class="btn">注册</button>
                </form>
                <span class="register"><a href="login">已经有账号了？前往登录</a></span>
            </div>
        </div>
    </div>
</body>

</html>
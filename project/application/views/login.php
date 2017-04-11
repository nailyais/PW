<title>User Login</title>
<link href="<?php echo base_url('assets/');?>login.css" rel="stylesheet">
<style>
    body {
        align:center;
    }
</style>
<title>Secure Area</title>

</head>
<body>
    <div id="kotak">
        <div id="atas">
            User Login<br>
        </div>
        <div id="bawah">
            <form action="http://localhost/project/login/proses" method="post">
                
                <input name="username" placeholder="Username .." type="text" id="userid" size="20" maxlength="20" class="masuk" />
                
                <input name="password" placeholder="Password .." type="password" id="password" size="20" maxlength="20" class="masuk" />
                
                
                
                
                <input id="tombol" name="submit" type="submit" value="Login" /><br><br><br>
                
                
                
            </form>
        </div>
    </div>
</body>
</html>
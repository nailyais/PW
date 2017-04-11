<title>Admin Login</title>
<link href="<?php echo base_url('assets/');?>login.css" rel="stylesheet">
<style>
    body {
        align:center;
    }
</style>
<title>Private Area</title>

</head>
<body>
    <div id="kotak">
        <div id="atas">
            Administrator Login<br>
        </div>
        <div id="bawah">
            <form action="http://localhost/PWPW/project/admin/login" method="post">
                
                <input name="username" placeholder="Username .." type="text" id="userid" size="20" maxlength="20" class="masuk" />
                
                <input name="password" placeholder="Password .." type="password" id="password" size="20" maxlength="20" class="masuk" />
                
                
                
                
                <input id="tombol" name="btnLogin" type="submit" value="Login" /><br><br><br>
                
                
                
            </form>
        </div>
    </div>
</body>
</html>
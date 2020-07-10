<html>
<head>
    <title>注册</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
    <script>
        function verification() {
            var box=usernamever();
            return box;
        }
        function usernamever() {
            var box=false;
            var username=document.getElementById("username");//获取用户名
            if(username==""){
                document.getElementById("checktext1").innerHTML("*用户名不能为空");
                box=false;
            }else{
                var patt=/\w{8,11}/;
                if(patt.test(username)){
                    box=true;
                }else {
                    document.getElementById("checktext1").innerHTML("*用户名为8到11位，且只能为大小写字母与数字");
                    box=true;
                }
            }
            return box;
        }
        // function passwordver() {
        //     var box=false;
        //     var password=document.getElementById("password");//获取密码
        //     if(password==""){
        //         document.getElementById("checktext2").innerHTML("*密码不能为空");
        //         box=false;
        //     }else{
        //         var patt=/^[A-Za-z_]\S{7,15}/;
        //         if (patt.test(password)){
        //             box=true;
        //         }else{
        //             document.getElementById("checktext2").innerHTML("*密码必须在8到16位之间，且首字符必须是字母或者下划线");
        //             box=false;
        //         }
        //     }
        //     return box;
        // }
        // function repasswordver() {
        //     var box=false;
        //     var repassword=document.getElementById("repassword");//获取密码
        //     if(repassword==""){
        //         document.getElementById("checktext3").innerHTML("*密码不能为空");
        //         box=false;
        //     }else{
        //         if (repassword==document.getElementById("password")){
        //             box=true;
        //         }else{
        //             document.getElementById("checktext3").innerHTML("*两次密码不一致");
        //             box=false;
        //         }
        //     }
        //     return box;
        // }
    </script>
</head>
<?php

    class User{
        var $id;
        var $username;
        var $password;


        public function __construct()
        {}

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->username;
        }

        /**
         * @param mixed $username
         */
        public function setUsername($username)
        {
            $this->username = $username;
        }

        /**
         * @return mixed
         */



        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

    }
?>

<body>
    <form method="post" action="mysql_conn.php" onsubmit="return verification()">
        用户名：<input type="text" id="username" name="username" onclick="usernamever()"><span id="checktext1" class="error"></span><br>

        <input type="button" value="注册" onclick="verification()">
    </form>

</body>

</html>

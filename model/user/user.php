<?php
        function loadall_user(){
            $sql = "SELECT * from user order by id desc";
            $listdanhmuc=pdo_query($sql);
            return $listdanhmuc;
        }

        function insert_user($username, $pass, $name, $email, $phone, $address, $role ){
            $sql="insert into user(username, pass, name, email, phone, address, role ) 
            values('$username', '$pass', '$name', '$email', '$phone', '$address', '$role' )";
            pdo_execute($sql);
        }

        function check_user($username, $pass){
            $sql="select * from user where username='".$username."' AND pass='".$pass."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function check_email($email){
            $sql="select * from user where email='".$email."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function update_user($id,$username, $pass, $name, $email, $phone, $address ){
            $sql="update user set username='".$username."', pass='".$pass."', name='".$name."', email='".$email."', phone='".$phone."', address='".$address."' where id =".$id;
            pdo_execute($sql);
        }

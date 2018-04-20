<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();
        $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':password' => $user->getPassword()
        ));
        
        return $stmt->errorInfo();
    }

        public static function update($user) {
            $db = Database::getConnection();
    
            $stmt = $db->prepare('UPDATE users set password=:password where username=username');
            $stmt->execute(array(
              ':username' => $user->getUsername(),
              ':password' => $user->getPassword()
            ));
            return mysql_error($stmt);
            
        }


    public static function verify($user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
                ':username' => $user->getUsername()
        ));

        $rows = $stmt->fetchAll();

        $user_db_password = $rows[0]['password'];

        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }

}
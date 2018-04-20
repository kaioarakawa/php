<?php
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    if ($_POST['senha'] == $_POST['senha_confirmada']) {
        $user->setUsername($_POST['usuario']);
        $user->setPassword($_POST['senha']);
    } else {
        echo 'Senhas não conferem';        
    }

    $return = UserDAO::add($user);
    
    if (!$return) {
        FlashMessage::setMessage('Usuário cadastrado com sucesso.', FlashMessage::OK);
        header('Location: /index.php');
    } else if( $return[2]== "Duplicate entry '$_POST[usuario]' for key 'username'"){
        FlashMessage::setMessage('Nome de usuario já cadastrado, porfavor tente novamente.', FlashMessage::ERROR);
        header('Location: /sign_up.php');
    }else{
        FlashMessage::setMessage('Ocorreu um problema ao cadastrar o usuário.', FlashMessage::ERROR);
        header('Location: /sign_up.php');
    }


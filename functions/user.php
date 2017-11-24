<?php

    function uploadImage($image, $name)
    {
        // $extension = basename($image['name']);
        // $from = $image['tmp_name'];
        $uploadTo = "assets/avatar/";

        // if ($image['size'] > 0 AND $image['size'] < 500000 ) {
            // if ( pathinfo($image) == jpg | pathinfo($image) == jpeg | pathinfo($image) == png){
             return move_uploaded_file($image["tmp_name"], $uploadTo);
            // }
        // }
    }

    function comment($id_user, $comment, $postid)
    {
        global $conn;
        $_SQL = "INSERT INTO comments(id_user, comment, id_post) VALUES($id_user, '$comment', $postid)";
        return mysqli_query($conn,$_SQL);
    }

    function deletePost($idpost){
        global $conn;
        $_SQL = "DELETE FROM posts WHERE id= $idpost";
        return mysqli_query($conn, $_SQL);
    }

    function postUpdate($id, $post)
    {
        global $conn;
        $post = mysqli_real_escape_string($conn, htmlentities($post));

        $_SQL = "INSERT INTO posts (id_user, post) VALUES ($id , '$post')";

         mysqli_query($conn, $_SQL);
    }

    function exist ($table, $field, $id)
    {
        global $conn;
        $_SQL = "SELECT $field FROM $table WHERE id = $id";
        $row  = mysqli_fetch_array(mysqli_query($conn, $_SQL));
        if (!empty($row[$field])) return true; else return false;
    }

    // Membuat fungsi untuk method $_POST[]
    function post($data)
    {
        if ( !empty(trim($data)) && isset($_POST[$data]) ){
            return $_POST[$data];
        } else {
            return false;
        }
    }

    // Membuat fungsi Penginisialisasi Session
    function setSession($sessionName, $sessionValue)
    {
        if ( !empty(trim($sessionName)) && !empty(trim($sessionValue)) ) {
            return $_SESSION[$sessionName] = $sessionValue;
        }
    }

    function selectCount($table, $field, $value)
    {
        global $conn;
            $value = mysqli_real_escape_string($conn, $value);
            $_SQL = "SELECT * FROM $table WHERE $field = '$value'";
            return mysqli_num_rows(mysqli_query($conn, $_SQL));


    }

    function selectOneWhere($table, $field, $value, $fetch)
    {
        global $conn;
            $value = mysqli_real_escape_string($conn, $value);
            $_SQL = "SELECT * FROM $table WHERE $field = '$value'";
            $result = mysqli_fetch_array(mysqli_query($conn, $_SQL));
            return $result[$fetch];
    }

    function getSession ($sessionName)
    {
        if ( isset( $_SESSION[$sessionName] ) ){
            return $_SESSION[$sessionName];
        }
    }

    function updateProfile( $email, $fullname, $hobby, $bio, $website, $instagram, $id){
        global $conn;
            $fullname = mysqli_real_escape_string($conn, htmlentities($fullname));
            $hobby = mysqli_real_escape_string($conn, htmlentities($hobby));
            $email = mysqli_real_escape_string($conn, htmlentities($email));
            $bio = mysqli_real_escape_string($conn, htmlentities($bio));
            $website = mysqli_real_escape_string($conn, htmlentities($website));
            $instagram = mysqli_real_escape_string($conn, htmlentities($instagram));
        $_SQL = "UPDATE users
                 SET name = '$fullname',email = '$email',website = '$website', hobby = '$hobby', bio = '$bio', instagram = '$instagram'
                 WHERE id = $id";

        return mysqli_query($conn, $_SQL);

    }

    function updatePassword($id, $password, $oldpassword)
    {
        global $conn;

            $password = password_hash($password, PASSWORD_DEFAULT);
            $dbPassword = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"))['password'];
            // die($oldpassword);
            if (password_verify($oldpassword, $dbPassword)){
                $_SQL = "UPDATE users SET password = '$password' WHERE id = $id";
                return mysqli_query($conn, $_SQL);
            } else {
                return false;
            }
    }
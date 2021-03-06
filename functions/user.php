<?php

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
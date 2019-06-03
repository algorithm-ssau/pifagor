<?php

// if (version_compare(PHP_VERSION, '7.0.0','>=')) include_once 'mysql.php';

class DataBase {

    function connect () {
        $connect = mysql_connect(DB_HOST, DB_USER, DB_USER_PASS) or die(mysql_error());
    	if (!$connect) {
            die (mysql_errno().' '.mysql_error().' Ошибка подключения.');
        }
    	mysql_query('SET NAMES utf8');
    	mysql_select_db(DB_NAME) or die(mysql_error());
    	return $connect;
    }

    function debug ($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    function getSubjects () {
        $query = "SELECT * FROM `subjects` WHERE 1";
        $result = mysql_query($query);
        while ($subject = mysql_fetch_assoc($result)) {
            $subjects[$subject['id']] = $subject['name'];
        }
        return $subjects;
    }

    function getSections () {
        $query = "SELECT * FROM `sections` WHERE 1";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $results[] = $row;
        }
        return $results;
    }

    function getTask ($id_subjects, $id_sections) {
        $query = "SELECT `id`, `question`, `answer` FROM `tasks` WHERE `id_subjects` = {$id_subjects} and `id_sections` = {$id_sections}";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $results[] = $row;
        }
        return $results;
    }

}

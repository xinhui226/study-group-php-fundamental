<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=study_group_php_fundamental', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'cD4FYhCb9HPk9bc0' // instruction: change this to your database password
    );
}
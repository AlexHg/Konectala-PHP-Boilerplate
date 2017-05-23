<?php 
class Config{
    const appTitle = "";
    const author = "";
    const baseUrl = "localhost/futbol/admin";
    const database = array(
        'host' => "localhost",
        'user' => "root",
        "pass" => "",
        "db" => "torneos"
    );
    const roles = array(
        1 => 'Admin',
        2 => 'Editor',
        3 => 'Analyst',
        4 => 'User'  
    );
}

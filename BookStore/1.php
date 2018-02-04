<?php

//create and open the book storage
$Book_Storage = 'Book_Storage.json';
//open Book Storage
$Book_Storage_get = file_get_contents('Book_Storage.json');

//create a book and add to storage
function createBook($author, $bookName) {
    $bookCreate = ['Author' => $author,
        'name' => $bookName];
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


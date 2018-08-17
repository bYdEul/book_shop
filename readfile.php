<?php
    $con = mysqli_connect("192.168.3.9","root","123456") or die("failed to connect");
    mysqli_select_db($con,"book") or die("failed to read mysql");
   


    $myfile = file_get_contents("/Users/bkb/kernel/php/hello.txt");
    $book_array = explode("\n",$myfile);
    var_dump($book_array);
    foreach($book_array as $value){
        if ($value == '') {
            continue;
        }
        $buf = preg_replace('/\s+/','|',$value);    
        $book = explode("|",$buf);
        var_dump($book);
         $book_name = $book[0];
         $book_author = $book[1];
         $book_img = $book[2];

        $sql = "insert into book(book_name,book_author,book_img) values ('$book_name','$book_author','$book_img')";
        mysqli_query($con,'set names utf8');
        if($con->query($sql)){
            echo "insert is OK";
        }else{
            echo "insert is die";
        }
    }
    

   

    // die("over");
    // while(!feof($myfile)){
    //     $buf = fgets($myfile);
    //     $buf = str_replace(' ','|',$buf);
    // }
    // echo fread($myfile);
?>
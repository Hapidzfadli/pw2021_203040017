<?php 

//Date
   //echo date("l, d-M-Y");
   //Melihat Format http://php.net/manual/en/function

//Time
    //UNIX Timestamp
    //echo time();


    // echo date("d M Y", time()+60*60*24*8);


//mktime
    //membuat detik sendiri
    //mktime(0,0,0,0,0,0)
    // jam , menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,08,7,2002));
    

// strtotime
    // echo date("l", strtotime("21 jan 2002"))

//Untuk di pelajari sendiri

//String
    //strlen() // Menghitung panjang string
    // $str = 'abcdef';
    // echo strlen($str); // 6


    //strcmp() membandingkan dua buah string dan akan menghasilkan sebuah bilangan bulat (int)
    // $var1 = "Hello";
    // $var2 = "hello";
    // if (strcmp($var1, $var2) !== 0) {
    // echo '$var1 is not equal to $var2 in a case sensitive string comparison';
    // }
    // $data=strcmp("qwertyuiop","qwerty");
    // echo $data; // hasil 4 karena kita menambahkan uiop pada data pertama
    
    //explode() //memecah sebuah string menjadi array, atau dengan kata lain mengkonversi string menjadi array.
    // Example 1
    // $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    // $pieces = explode(" ", $pizza);
    // echo $pieces[0]; // piece1
    // print("<br>");
    // echo $pieces[1]; // piece2
    // print("<br>");

    // Example 2
    // $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    // list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
    // echo $user;  print("<br>");// foo
    // echo $pass; // *

    //Example #2
    // $input1 = "hello";
    // $input2 = "hello,there";
    // $input3 = ',';
    // var_dump( explode( ',', $input1 ) );print("<br>");
    // var_dump( explode( ',', $input2 ) );print("<br>");
    // var_dump( explode( ',', $input3 ) );print("<br>");
    
    //Example #3

    $str = 'one|two|three|four';

    // positive limit
    print_r(explode('|', $str, 3)); print("<br>");

    // negative limit (since PHP 5.1)
    print_r(explode('|', $str, -1));

    //htmlspecialchars()

//utility
    // var_dump()
    // isset()
    // empty()
    // die()
    // sleep()

    
?>
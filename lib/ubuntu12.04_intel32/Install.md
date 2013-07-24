Temple Installation Guide for Ubuntu 12.04 LTS 32-bit
=====================================================

Copy the temple.so file to your php modules directory (found at `/usr/lib/php5/20090626+lfs` by default).
Add the following line to your php.ini file: `extension temple.so` (located at `/etc/php5/cli/php.ini`).
Restart your apache2 service using `sudo service apache2 restart`.
Done

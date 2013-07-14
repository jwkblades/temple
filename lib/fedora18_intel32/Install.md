Temple Installation Guide for Fedora 18 32-bit
==============================================

Copy the temple.so file to your php modules directory (found at `/usr/lib/php/modules/` by default).
Add the following line to your php.ini file: `extension temple.so` (located at `/etc/php.ini`).
Restart your httpd service using `sudo service httpd restart`.
Done

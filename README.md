# QR Code Generator

# Generate QR Code using

1. Google Infographics API: https://developers.google.com/chart/infographics/docs/qr_codes

2. Javascript

3. PHP

# Specs

Cakephp 2

Docker ( docker compose 2 )

mysql 5.5 ( not used )

## Setup

# Installation (Windows using Docker Toolbox)
    * Install Oracle VirtualBox 6.0.10 ( https://www.oracle.com/technetwork/server-storage/virtualbox/downloads/index.html )
    * Install DockerToolbox 18.09.3. In installation setup, make sure to uncheck VirtualBox.
    * Restart
    * Open Docker Quick Start Terminal
    * Execute cd /c/Users/<your-work-dir>
    * Clone repository to /c/Users/<your-work-dir>/qrcode_mockapp
    * Execute cd qrcode_mockapp
    * Open Oracle VM Virtualbox
    * Click default machine on machine selection panel
    * Click Shared Folders on the main panel
    * Click add new shared folder icon
    * Set C:\Users\<your-work-dir>\qrcode_mockapp as the folder path
    * Set qrcode_mockapp as folder name
    * Check Auto-Mount
    * Check Make Permanent
    * Save then close
    * In line 19 of docker-compose.yaml, modify the mount volumes dir from .:/var/www/html/ to /qrcode_mockapp:/var/www/html/  ( need to modify because the current mount volume settings is for mac )
    * Execute docker-machine restart
    * Execute docker-compose up -d --build
    * Execute cp app/config/database.php.default app/config/database.php
    * You can access the project in your browser:
    * 192.168.99.100/ (main app)
    * 192.168.99.100:4100/ (phpmyadmin)

# Installation (Mac)
    * Install Docker for Mac ( https://docs.docker.com/docker-for-mac/install/ ) 
    * cd to project's directory
    * Execute `$ docker-compose build` to build the app's image
    * After the building is done we can start services by executing `$ docker-compose up -d`
    * Execute `cp app/config/database.php.default app/config/database.php`
    * Stop the service by `$ docker-compose down`
    * You can access the project in your browser:
    * localhost (main app)
    * localhost:4100 (phpmyadmin)




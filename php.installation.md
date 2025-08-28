PHP Installation and Server Setup Guide
macOS
Step 1: Install Homebrew

Homebrew is a package manager for macOS.
Open Terminal and run:

/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

Step 2: Install PHP
brew install php

Step 3: Check PHP Version
php -v

Step 4: Locate php.ini
php --ini

Step 5: Start PHP Server

Navigate to your project folder and run:

php -S localhost:8000


Open http://localhost:8000
 in a browser.

Windows
Step 1: Download PHP

Go to https://windows.php.net/download
 and download the Thread Safe ZIP package (x64 if 64-bit Windows).

Step 2: Extract Files

Extract PHP to C:\php.

Inside that folder, rename php.ini-development to php.ini.

Step 3: Add PHP to PATH

Open Environment Variables in Windows.

Edit the Path variable.

Add C:\php.

Step 4: Verify Installation

Open Command Prompt and run:

php -v

Step 5: Start PHP Server

Go to your project folder and run:

php -S localhost:8000


Open http://localhost:8000
 in a browser.
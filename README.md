<img src="https://media.giphy.com/media/33KNW6bBorFzqdyLSP/giphy.gif" alt= "aminated GIF of the Zodiac sign Scorpio" />

# Zodiac signs

This site is about all the existing Zodiac signs. You can read and learn about all of them. Link to site: http://jenniferandersson.com/.

# Installation
1. Clone the repository The-Elephpant-in-the-room from my GitHub:https://github.com/JennAnd/The-Elephpant-in-the-room.
2. Start a localhost server from your command line to view my prject: php -S localhost:8000
3. Add /index.php at the end of the URL. Now you have access.



# Code Review

Code review written by [Amanda Hultén](https://github.com/amandahulten).

1. `about.php:7-17` - Since you already have a ´header.php´ where you store all your header information and then use require to include the information in this file, you don't need to repeat it here. 
2. `functions.php:5&11` - When you use `declare(strict_types=1);` you also need to declare strict types on the functions, ex ´function getPageName(string $name) : string´.
3. `functions.php:5-8` - Don't forget to use ´return´ in all functions instead of ´echo´.
4. `TIP` - To navigate easier on your website, you could add a home-button on your "More about"-pages. 
5. `TIP` - To get a better overview of your files, you could add all the php-files to a folder (except the php-files that are pages on your website, ex. index.php).

# Testers

Tested by the following people:

1. Hanna Rosenberg
2. Johanna Jönsson

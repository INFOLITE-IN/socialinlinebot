Contributing 
-------------

First, [fork](https://github.com/kaviyarasan-1997/socialinlinebot/fork) this repository, checkout it locally and then install project dependencies with Composer - `composer install`.

Now make all your changes and test them.

To test the changes you will obviously need a bot, assuming you already have one - put the token and bot username in `.env` file for local development.

The easiest way to test your changes is to run the bot with `getUpdates` method - use `php bin/console loop` command.

Make sure your code is following PSR-2 coding standard - run [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) with `composer check-code` command.

Now when all seems to be good push you changes to a new branch in your fork and then [create a pull request](https://github.com/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT/compare) explaining all the changes.

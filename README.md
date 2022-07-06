# SOCIAL INLINE GAME BOT
<IMG src="https://telegra.ph/file/b89ae19627f5395468182.png">

[![Build Status](https://travis-ci.org/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT.svg?branch=master)](https://travis-ci.org/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT) [![License](https://img.shields.io/github/license/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT.svg)](https://github.com/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT/blob/master/LICENSE) [![Telegram](https://img.shields.io/badge/Telegram-%40inlinegamesbot-blue.svg)](https://telegram.me/SOCIAL_GAME_BOT)

A Telegram bot that provides real-time multiplayer games that can be played in any chat.

 [BOT-SUPPORT](https://telegram.me/social_mechanic).

#### Currently available games:

- Tic-Tac-Toe
- Tic-Tac-Four 
- Elephant XO 
- Connect Four
- Rock-Paper-Scissors
- Rock-Paper-Scissors-Lizard-Spock 
- Russian Roulette
- Checkers
- Pool Checkers


### Support & Updates 🎑
<a href="https://t.me/tamil_chat_group_1"><img src="https://img.shields.io/badge/Join-Group%20Support-blue.svg?style=for-the-badge&logo=Telegram"></a> <a href="https://t.me/social_mechanic"><img src="https://img.shields.io/badge/Join-Updates%20Channel-blue.svg?style=for-the-badge&logo=Telegram"></a>

## Deploying

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/SOCIAL-MECHANIC-1997/SOCIAL-INLINE-GAME-BOT)

Assuming everything was entered correctly the deploy process should run the following commands automatically and your bot should be instantly working:
- `php bin/console install` - install database schema
- `php bin/console set` - set the webhook

If it doesn't you will have to open your app's console and run them manually.

If you have verified Heroku account you will also want to add **Heroku Scheduler** addon and set up a hourly task to run the following command to clean up expired games from the database:
- `php bin/console cron`

## Note on translations

Translations support is implemented but it is not used mainly because translated text would be displayed to both players - this could be problematic in "gaming" groups - people setting language that other player can't understand!

## CREATED BY
  - [SOCIAL MECHANIC](https://t.me/social_mechanic_1997)
  - [Follow My Github Account](https://github.com/SOCIAL-MECHANIC-1997)

## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) for more information.

## License

See [LICENSE](LICENSE).

<p align="center"><img width="400" src="https://github.com/zacksmash/fortify-uikit/raw/master/fortify-uikit-image.png"></p>

# Introduction

**Fokit** is a Laravel Fortify UI preset, built with UIkit with a slight opinionative modern touch.

- [Requirements](#requirements)
- [Installation](#installation)

<a name="requirements"></a>

## Requirements

This package requires [*FortifyUI*](https://github.com/zacksmash/fortify-ui). Please, install that first before installing **Fokit**.

<a name="installation"></a>
## Installation

To get started, you'll need to install **Fokit** using Composer.

```bash
composer require bonge-ian/fokit
```

Next, you'll need to run the install command:

```bash
php artisan fortify:fokit
```

This command will publish **Fokit's** views and resources to your project.

- All `auth` views
- a `BladeComponentServiceProvider.php` file
- a `webpack.mix.js` file, tuned for UIkit
- a `package.json` file, for required NPM modules
- a slightly opinionated `.editorconfig` file
- a `.gitignore` file
- a new route for `user/profile`
- register `App\Providers\BladeComponentServiceProvider` in your application (`config/app.php`)

You may require to register `BladeComponentServiceProvider` in your `config/app.php` if the Fokit command doesnt register it.

```bash
App\Providers\BladeComponentServiceProvider::class,
```

<p align="center"><img  src="https://github.com/bonge-ian/fokit/raw/master/fokit-ui-screenshot.png"></p>

## Credits

I give credit and thanks to [Zack Warren](https://github.com/zacksmash) for his awesome work in [*FortifyUI*](https://github.com/zacksmash/fortify-ui) and [*FortifyUIKit*](https://github.com/zacksmash/fortify-uikit) that has made it possible for the creation of this preset.

You may also checkout [*FortifyUIKit*](https://github.com/zacksmash/fortify-uikit).

## License

**Fokit** is open-sourced software licensed under the [MIT license](LICENSE.md).

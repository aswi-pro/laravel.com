# நிறுவுதல் 

- [Composer ஐ நிறுவுதல்](#install-composer)
- [Laravel  ஐ நிறுவுதல்](#install-laravel)
- [Server தேவைப்பாடுகள்](#server-requirements)

<a name="install-composer"></a>
## Composer ஐ நிறுவுதல்

Laravel தனது சார்பு (Dependencies) மென்பொருள் முகாமையினை [Composer](http://getcomposer.org) ஊடாக மேற்கொள்கின்றது. ஆகவே லராவேல் இனை பயன்படுத்த முன்னர்  கொம்போசர் இனை உங்களின் கணினியில் நிறுவுதல் அவசியம் ஆகும்.

<a name="install-laravel"></a>
## Laravel  ஐ நிறுவுதல்

### லராவேல் நிறுவி இனை பயன்படுத்தல்

லராவேல் நிறுவியை முதலில் கொம்போசர் ஊடாக தரவிறக்கி நிறுவ வேண்டும்.

	composer global require "laravel/installer=~1.1"

உங்களுடைய கணினியின் PATH மாறியில் `~/.composer/vendor/bin` உள்ளடக்கப்பட்டுளதா என்பதை உறுதி செய்க. இதன் மூலம் `laravel` நிறுவியினை இலகுவாக எந்த ஒரு Directory Path இலிருந்தும் CLI ஊடாக இயக்க முடியும்.

லராவேல் நிறுவி நிறுவப்பட்டதன் பின், `laravel new` கட்டளையினூடாக இலகுவாக ஒரு புதிய லராவேல் நிறுவலை குறிப்பிட்ட directory இனுள் மேற்கொள்ள முடியும். உதாரணமாக,`laravel new blog` கட்டளை `blog` எனும் directory இனுள்  புதிய லராவேல் நிறுவலை தேவையான சார்பு மென்பொருட்களுடன் நிறுவும். இது கொம்போசர் ஊடான நிறுவலை விட மிக வேகமானது:

	laravel new blog

### Composer இனை பயன்படுத்தி நிறுவுதல்

கொம்போசரின் `create-project` கட்டளையை terminal இல் பிறப்பிப்பதன் ஊடாகவும் லராவேல் இனை நிறுவ முடியும்:

	composer create-project laravel/laravel --prefer-dist

### சாரக்கட்டு

லராவேல் புதிய நிறுவலானது, பயனர் பதிவு செய்தல் மற்றும் புகுபதிகை கூறுகளுடன் கிடைக்கப்பெறுகின்றது. இக் கூறுகள் அவசியமற்று இருப்பின் `fresh` Artisan கட்டளையை பயன்படுத்தி நீக்க முடியும்:

	php artisan fresh

<a name="server-requirements"></a>
## Server தேவைப்பாடுகள்

லராவேல் கட்டமைப்பனது சில முன் தேவைப்பாடுகளை கணினியில் வேண்டி நிற்கின்றது:

- PHP >= 5.4
- Mcrypt PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

PHP 5.5 இல் சில இயங்குதளங்களில் PHP JSON extension நீங்களாக நிறுவ வேண்டி இருக்கும். உதாரணமாக, Ubuntu இயங்குதளத்தில் `apt-get install php5-json` கட்டளை ஊடாக இதனை நிறுவலாம்.

<a name="configuration"></a>
## லராவேல் கட்டமைப்பு

லராவேல் நிறுவியதன் பின்னர், முதலாவதாக application key வளங்க வேண்டும். கொம்பொசர் மூலம் நிறுவி இருந்தால் இது தானாகவே `key:generate` கட்டளை ஆல் வளங்கப்பட்டு இருக்கும்.

இது 32 எழுத்துக்களைக் கொண்டிருக்கும். இதனை `.env` file இனுள் set செய்ய வேண்டும். **இந்த Key வழங்கப்படாதவிடத்து Session மற்றும் குறியாக்கம் என்பன பாதுகாப்பற்றதாக இருக்கும்!**

Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the `config/app.php` file and its documentation. It contains several options such as `timezone` and `locale` that you may wish to change according to your application.

Once Laravel is installed, you should also [configure your local environment](/docs/5.0/configuration#environment-configuration).

> **Note:** You should never have the `app.debug` configuration option set to `true` for a production application.

<a name="permissions"></a>
### Permissions

Laravel may require some permissions to be configured: folders within `storage` and `vendor` require write access by the web server.

<a name="pretty-urls"></a>
## Pretty URLs

### Apache

The framework ships with a `public/.htaccess` file that is used to allow URLs without `index.php`. If you use Apache to serve your Laravel application, be sure to enable the `mod_rewrite` module.

If the `.htaccess` file that ships with Laravel does not work with your Apache installation, try this one:

	Options +FollowSymLinks
	RewriteEngine On

	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^ index.php [L]

### Nginx

On Nginx, the following directive in your site configuration will allow "pretty" URLs:

	location / {
		try_files $uri $uri/ /index.php?$query_string;
	}

Of course, when using [Homestead](/docs/5.0/homestead), pretty URLs will be configured automatically.

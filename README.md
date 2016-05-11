Codeception Config Helper
=========================

This is a general Codeception helper that allows you to retrieve and use values from your YAML config in your tests. The original use case was to retrieve site login details from the config file instead of hardcoding them in test suites. 

# Installation
* Copy the `ConfigHelper.php` file into `tests/_support/Helper/`
* Update your suite YAML file to enable the module (See example below)

# Usage 
* Add config values to your config file as required, e.g.

```YML
class_name: AcceptanceTester
modules:
    enabled:
        - PhpBrowser:
            url: 'http://<your-test-site>/'
        - \Helper\Acceptance
        - \Helper\ConfigHelper:
            login_username: username
            login_password: password
```

* Access the values from your test scripts, e.g.

```php
$I->fillField('signin[username]', $I->getConfig('login_username'));
```

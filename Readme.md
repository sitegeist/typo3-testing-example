This a basic extension to show how easy it can be to implement a running testing environment. For this solution you don't need a special IDE to configure. And as this solution also don't depend on a given server environment (even if ddev is preconfigured for your convinience) it should work for pretty much every developer in your team. You should be able to train everybody to run `commposer test` from shell.

* If you attended the "automated testing" session during TYPO3 Camp Berlin 2019, you'll find the slides here: https://www.slideshare.net/JanHelke/start-testing-your-extension-now

If you have questions, that might be a sign, that the given documentation is not as bullet proof as I thought. Just file a ticket and I try to fix this.

How to start
============

1. Clone the repository
2. Start the ddev containers using `ddev start`
3. Enter the ddec containers bash using `ddev ssh`
4. Do a `composer install`
5. Run all tests using `composer test`

What is happening here?
-----------------------

We have three interesting components:

* The extension `testing_exeample` itself, that contains all the classes and tests. 
* The `composer.json` file, containing all dependencies as well as some scripts to make test running easy.
  * composer lint: Run every linter
  * composer lint:editorconfig: Lints all files and checks the format against the `.editorconfig`. This is mostly about the correct indentations (tabs or spaces and how much of each), nothing covered in the PSR.
  * composer lint:php: Runs linting only on all PHP files. Needed for use in your CI, because you want you're CI only to check but not to modify (fix) your code.
  * composer fix:php: Fixes the PHP files according to `Build/Testing/.php_cs.php`. Nice if you know, what happening here and if you're trusting automatism's. If not, run only the linter and fix the code by hand.
  * composer test: Runs the all linters and tests.
  * composer test:php: Runs only the tests.
  * composer test:php-static: Runs only the static code analysis provided by `phpstan/phpstan` together with `saschaegerer/phpstan-typo3`.
  * composer test:php-unit: Runs only the unit tests.
  * composer test:php-function: Runs only the functional tests.
* The folder `Build/Testing` contains all configuration stuff. `UnitTests.xml` and `FunctionalTests.xml` configure those two kinds of tests. `phpstan.neon` is the configuration for the static code analysis. `.php_cs.php` finally is the configuration for the code style fixer / linter.

Faq
===

What's ddev? / I don't have ddev
-------------------------------

ddev is an open source tool that makes it dead simple to get local PHP development environments up and running within minutes. If you don't use ddev right know, you're advised to reconsider this decision. Check out https://github.com/drud/ddev for more information.

If you still don't use ddev, you can just clone this repository to you local or remote developing environment. After that run `composer install` and `composer test`

What's the BE admins login credentials?
---------------------------------------

During the installation, no BE user was created. Simply because no one is needed.

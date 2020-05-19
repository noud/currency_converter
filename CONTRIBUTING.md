# How to contribute

I'm really glad you're reading this, because we need volunteer developers to help this project come to fruition.

## Testing

Please write tests for new code you create.

## Submitting changes

Please send a [GitHub Pull Request to currency_converter](https://github.com/noud/currency_converter/pull/new/master) with a clear list of what you've done (read more [About pull requests](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/about-pull-requests)). Please follow our coding conventions (below) and make sure all of your commits are atomic (one feature per commit).

Always write a clear log message for your commits. One-line messages are fine for small changes, but bigger changes should look like this:

    $ git commit -m "A brief summary of the commit
    > 
    > A paragraph describing what changed and its impact."

## Coding conventions

Start reading the code and you'll get the hang of it. The code is optimized for readability:

  * Laravel
    * The class namespace declaration must be on the same line as ```<?php```.
    * A class' opening ```{``` must be on the same line as the class name.
    * Functions and control structures must use Allman style braces.
    * Indent with tabs, align with spaces.
  * [PHP-FIG](https://www.php-fig.org)
    * [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
    * [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md)

Thanks,
Noud de Brouwer
# NesoHost👾 (WIP) [![StyleCI](https://github.styleci.io/repos/177443149/shield?branch=master)](https://github.styleci.io/repos/177443149?branch=master)

NesoHost is a micro local image hosting powered by Laravel.
It's a still Work in Progress, but already have ability to upload images.

[![Image: rOocFV6t6HLlveFBxrl1Flycdwc7L3](https://storage.macsch15.pl/images/rOocFV6t6HLlveFBxrl1Flycdwc7L3.png)](https://storage.macsch15.pl/images/rOocFV6t6HLlveFBxrl1Flycdwc7L3.png)

[![Image: VcLXKs4ss9EAzwZpulZU5kS1uSV4Zh](https://storage.macsch15.pl/images/VcLXKs4ss9EAzwZpulZU5kS1uSV4Zh.png)](https://storage.macsch15.pl/images/VcLXKs4ss9EAzwZpulZU5kS1uSV4Zh.png)

In a future:

* User Accounts with simple gallery
* Password Protected Images
* Delete images

And more...

## Installation

Install dependencies

``
$ composer install
``

Configure database connection in *.env* and run migrations

``
$ php artisan migrate
``

Set *APP_URL* in *.env* to your site URL.

That's all. For now.

## MIT Licence

Copyright (c) 2019 Maciej Schmidt

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

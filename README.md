Welcome to URLResolver.php
====================================================

This is a fork of URL Resolver by Matt Wright and contributors that works with composer and conforms to psr-4.

URLResolver.php is a PHP class that attempts to resolve URLs to a final,
canonical link. On the web today, link shorteners, tracking codes and more can
result in many different links that ultimately point to the same resource.
By following HTTP redirects and parsing web pages for open graph and canonical
URLs, URLResolver.php attempts to solve this issue.

## Patterns Recognized

- Follows 301, 302, and 303 redirects found in HTTP headers
- Follows [Open Graph] URL &lt;meta&gt; tags found in web page &lt;head&gt;
- Follows [Canonical] URL &lt;link&gt; tags found in web page &lt;head&gt;
- Aborts download quickly if content type is not an HTML page

I am open to additional suggestions for improvement.

## Usage

Resolving a URL can be as easy as:

``` 
	use Resolver\URLResolver ;

	$resolver = new URLResolver();

	$resolver->isDebugMode(true);
	$resolver->setMaxRedirects(10);
	$resolver->setCookieJar('/mycookie.cookie');
	$resolver->setUserAgent('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
	$resolver->resolveURL('http://t.co/Hb6cX2JyGM');

``` 

[curl]: http://php.net/manual/en/book.curl.php
[PHP Simple HTML DOM Parser]: http://simplehtmldom.sourceforge.net/
[Open Graph]: https://developers.facebook.com/docs/opengraph/
[Canonical]: http://www.google.com/support/webmasters/bin/answer.py?answer=139394
[HTTP status code]: http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
[HTTP header]: http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
[MIT License]: http://en.wikipedia.org/wiki/MIT_License

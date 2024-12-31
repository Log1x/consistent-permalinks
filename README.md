# Consistent Permalinks

![Latest Stable Version](https://img.shields.io/packagist/v/log1x/consistent-permalinks.svg?style=flat-square)
![Total Downloads](https://img.shields.io/packagist/dt/log1x/consistent-permalinks.svg?style=flat-square)
![Build Status](https://img.shields.io/github/actions/workflow/status/log1x/consistent-permalinks/main.yml?branch=main&style=flat-square)

Consistent Permalinks is a lightweight WordPress plugin that improves URL consistency by automatically redirecting valid paths containing uppercase characters to their proper lowercase equivalent.

Consider these two URLs that point to the same page but differ in casing:

- **URL 1:** `https://wordpress.com/blog/2024/11/12/wordpress-6-7/`
- **URL 2:** `https://wordpress.com/blog/2024/11/12/WORDPRESS-6-7/`

Despite post slugs always being lowercase, WordPress will load the page with either URL as-is relying solely on the defined [`rel="canonical"`](https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls) `link` element for users and search engines to determine the original version of the URL.

This plugin instead redirects such mismatched URLs to their intended canonical lowercase version while preserving query parameters, enhancing user experience and potentially improving SEO.

## Requirements

- [PHP](https://secure.php.net/manual/en/install.php) >= 8.0

## Installation

### Composer

Install via Composer:

```bash
$ composer require log1x/consistent-permalinks
```

### Manual

Download the [latest release](https://github.com/Log1x/consistent-permalinks/releases/latest) `.zip` and install into `wp-content/plugins`.

## Bug Reports

If you discover a bug in Consistent Permalinks, please [open an issue](https://github.com/Log1x/consistent-permalinks/issues).

## Contributing

Contributing whether it be through PRs, reporting an issue, or suggesting an idea is encouraged and appreciated.

## License

Consistent Permalinks is provided under the [MIT License](LICENSE.md).

# Laravel Nepali Date Converter

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Latest Version](https://img.shields.io/github/v/release/nctpvtltd/laravel-nepali-date-converter)](https://github.com/nctpvtltd/laravel-nepali-date-converter/releases)
[![PHP Version](https://img.shields.io/packagist/php-v/nctpvtltd/laravel-nepali-date-converter)](https://www.php.net/)

A simple Laravel package to convert between Gregorian (AD) dates and Nepali Bikram Sambat (BS) dates.  
Ideal for Laravel applications targeting Nepali users or needing Nepali calendar support.

---

## ✅ Features

- Convert AD → BS (Gregorian to Nepali) and BS → AD (Nepali to Gregorian) dates  
- Works with Laravel and optionally Carbon  
- Configurable via a config file for custom date formats  
- Lightweight and production-ready  

---

## 📦 Requirements

- PHP 8.x or higher  
- Laravel (any supported version)  

---

## ⚡ Installation

Install via Composer:

```bash
composer require nctpvtltd/laravel-nepali-date-converter
```

## 🛠 Usage

Convert AD to BS:

```bash
use NepaliDateConverter\Facades\NepaliDateConverter;

$adDate = '2025-12-03';
$bsDate = NepaliDateConverter::engToNep($adDate);

echo $bsDate; // Output: "2082-08-17"
```
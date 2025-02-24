# Shortcode: Year or years

Provides a WordPress shortcode to display the current year, and optionally a start year.

Commonly used for copyright notices.

## Installation

```bash
composer require lukasbesch/shortcode-year-or-years
```

Alternatively download the latest release from GitHub and install it into the plugins directory.

## Usage

### Show current year
    [year_or_years]
    // 2025

### Show current year and a start year

    [year_or_years from="2019"]
    // 2019–2025

The start year will only be displayed if it is lower than the current year:

    [year_or_years from="2025"]
    // 2025

Optionally specify a custom separator:

    [year_or_years from="1984" separator=" until "]
    // 1984 until 2025

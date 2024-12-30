<h1 align="center">Scrollify - Scroll Progress Bar Indicator</h1>

<p align="center">
  A modern, lightweight scroll progress indicator for web pages<br>based on 
  <a href="https://github.com/emmanpbarrameda/scrollify-js" target="_blank">
    <u>Scrollify JS</u>
  </a>
</p>

<p align="center">
  <img alt="Made by" src="https://img.shields.io/badge/MADE_BY-EMMAN_P_BARRAMEDA-1877F2?style=for-the-badge&labelColor=FFFFFF"/>
  <img alt="Open Source" src="https://img.shields.io/badge/OPEN_SOURCE-FE7D37?style=for-the-badge&logo=git&logoColor=white"/>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
</p>

<p align="center">
  <img src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Femmanpbarrameda%2Fscrollify-php&count_bg=%233D7CC8&title_bg=%23555555&icon=github.svg&icon_color=%23FFFFFF&title=visitors&edge_flat=true"/>
  <img src="https://img.shields.io/github/followers/emmanpbarrameda.svg?style=social&label=Follow"/>
  <img src="https://img.shields.io/github/license/emmanpbarrameda/scrollify-php.svg?style=flat-square"/>
</p>

<p align="center">
  <img src="https://raw.githubusercontent.com/emmanpbarrameda/scrollify-js/main/preview/preview.gif" width="500" alt="Preview"/>
</p>

<p align="center">
  <a href="https://codepen.io/emmanpbarrameda/pen/emOGzYJ" target="_blank">
    <strong>🔴 Live Demo on CodePen</strong>
  </a>
  <br>
  <a href="https://github.com/emmanpbarrameda/scrollify-js" target="_blank">
    <strong>Looking for CSS-JS Version?</strong>
  </a>
</p>

## ✨ Features

- Sleek and modern scroll progress indicator
- Fully customizable appearance (height, colors, position)
- Smooth animation effects
- Lightweight with no dependencies
- Easy integration with any website

## 🚀 Installation

### 1. Download the `scrollify_php.php` File

First, download the `scrollify_php.php` file from the following GitHub repository:

- [Download scrollify_php.php](https://github.com/emmanpbarrameda/scrollify-php/blob/main/scrollify_php.php)

This PHP file will handle the inclusion of necessary resources for the scroll progress bar.

Next, `place the scrollify_php.php in your project directory.`

### 2. Include Required Asset Files

Next, download the required CSS and JS files for the scroll progress bar from the CDN:

- **CSS**: [https://cdn.jsdelivr.net/gh/emmanpbarrameda/scrollify-js@latest/scrollify-scrollprogress-indicator.css](https://cdn.jsdelivr.net/gh/emmanpbarrameda/scrollify-php@latest/scrollify-scrollprogress-indicator.css)
- **JS**: [https://cdn.jsdelivr.net/gh/emmanpbarrameda/scrollify-js@latest/scrollify-scrollprogress-indicator.js](https://cdn.jsdelivr.net/gh/emmanpbarrameda/scrollify-php@latest/scrollify-scrollprogress-indicator.js)

**Note:** Download these files manually on this github repo, or by using the provided links. 

Next, place them in your project directory under: e.g.,; `assets/css/` and `assets/js/` folders.

### 3. Include in Your PHP Blade Files

In your PHP Blade files, include the `scrollify_php.php` using the following PHP code:

```php
<?php include 'scrollify_php.php'; ?>
```

This will include the necessary CSS and JS files for the scroll progress bar to function properly.

## 💻 Usage Example on your PHP Blade File

```html
<!DOCTYPE html>
<html>
<head>
    <title>My Website with Scrollify - PHP</title>
</head>
<body>
    <!-- Progress Bar -->
     <?php include_once 'scrollify_php.php'; ?>

    <!-- Your content here -->

</body>
</html>
```

## 🎨 Customization

You can customize the progress bar using the following data attributes, located on `scrollify_php.php` file

| Attribute       | Description                       | Default Value                                 |
|-----------------|-----------------------------------|-----------------------------------------------|
| `data-height`   | Height of the progress bar        | `4px`                                         |
| `data-background` | Background color/gradient         | `linear-gradient(to left, #B374F8, #4da3ff)`  |
| `data-z-index`  | Stack order of the bar            | `10000`                                       |
| `data-top`      | Top position of the bar           | `0px`                                         |


## 🤝 Contributing

Want to contribute? That's great! You can:
1. Fork the [repository](https://github.com/emmanpbarrameda/scrollify-php)
2. Create a feature branch (`git checkout -b feature/NewFeature`)
3. Push your changes (`git push origin feature/NewFeature`)
4. Open a Pull Request

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 💪 Support the Project

If you find this project helpful, consider:

- ⭐ Starring the repository on GitHub
- 🐦 Sharing it on [Twitter](https://twitter.com/)
- ☕ Supporting via [PayPal](https://paypal.me/emmanpbarrameda)

## 👤 Get in touch

<table width="100%" align="center">
  <tr>
    <td align="center">
      <a href="https://emmanpbarrameda.github.io">
        <strong>Visit My Portfolio</strong>
        <br />
        <img src="https://avatars.githubusercontent.com/u/67356375?v=4" alt="Profile Image" width="180" style="border-radius: 50%;" />
      </a>
      <br />
      <p>Check out <a href="https://emmanpbarrameda.github.io" target="_blank">my portfolio</a> to learn more about me!</p>
      <a href="https://github.com/emmanpbarrameda" target="_blank"><img src="https://img.shields.io/github/followers/emmanpbarrameda.svg?style=social&label=Follow on GitHub&maxAge=2592000" alt="GitHub Followers" /></a>
    </td>
    <td align="center">
      <a href="https://emmanpbarrameda.github.io">
        <img src="https://i.imgur.com/HXUaVAA.png" alt="Cover Image"/>
      </a>
    </td>
  </tr>
</table>

<p align="center">
  <a href="https://emmanpbarrameda.github.io" target="_blank"><img src="https://img.shields.io/badge/My Portfolio-%20-blue?style=for-the-badge&logo=web"></a>
  &nbsp;&nbsp;
  <a href="mailto:emmanuelbarrameda1@gmail.com" target="_blank"><img src="https://img.shields.io/badge/Email-%20-red?style=for-the-badge&logo=gmail"></a>
  &nbsp;&nbsp;
  <a href="https://facebook.com/emmanpbarrameda/" target="_blank"><img src="https://img.shields.io/badge/Facebook-%20-blue?style=for-the-badge&logo=facebook"></a>
  &nbsp;&nbsp;
  <a href="https://t.me/emmanpbarrameda/" target="_blank"><img src="https://img.shields.io/badge/Telegram-%20-blue?style=for-the-badge&logo=telegram"></a>
  &nbsp;&nbsp;
  <a href="https://linkedin.com/in/emmanpbarrameda/" target="_blank"><img src="https://img.shields.io/badge/LinkedIn-%20-blue?style=for-the-badge&logo=linkedin"></a>
  &nbsp;&nbsp;
  <a href="https://github.com/emmanpbarrameda/" target="_blank"><img src="https://img.shields.io/badge/GitHub-%20-black?style=for-the-badge&logo=github"></a>
</p>

------------

<p align="center">Made with ❤️ by <a href="https://emmanpbarrameda.github.io">emmanpbarrameda</a></p>
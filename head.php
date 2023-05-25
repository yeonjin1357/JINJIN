<!DOCTYPE html>
<html lang="ko">

<?php
define('ROOT', 'https://jinjin98.com/');
define('WORKS', 'https://jinjin98.com/works/');
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L424CKVQ50"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-L424CKVQ50');
  </script>
  <!-- Google tag (gtag.js) -->

  <!-- 네이버 웹마스터 도구 -->
  <meta name="naver-site-verification" content="090f1eaa2a523ba88da9eecfffafd75ed6ddf22a" />
  <!-- 네이버 웹마스터 도구 -->

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo ROOT?>img/assets/favicon.ico" type="image/x-icon" />
  <!-- 오픈그래프 태그, 소셜 미디어로 공유될 때 우선적으로 활용 -->
  <meta name="description" content="JINJIN : 웹 퍼블리셔 포트폴리오" />
  <meta name="keywords" content="JINJIN, 웹퍼블리셔, 포트폴리오, 웹퍼블리셔 포트폴리오, 프론트엔트 개발자 포트폴리오, 프론트엔트 개발" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="JINJIN" />
  <meta property="og:site_name" content="JINJIN" />
  <meta property="og:description" content="JINJIN : 웹 퍼블리셔 포트폴리오" />
  <meta property="og:image" content="<?php echo ROOT?>img/assets/cover.jpg" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <link rel="stylesheet" href="<?php echo ROOT?>style/reset.css" />
  <link rel="stylesheet" href="<?php echo ROOT?>style/font.css" />
  <link rel="stylesheet" href="<?php echo ROOT?>style/common.css" />
  <link rel="stylesheet" href="<?php echo ROOT?>style/header.css" />
  <link rel="stylesheet" href="<?php echo ROOT?>style/tail.css" />
  <link rel="stylesheet" href="<?php echo ROOT?>style/main.css" />
  <?php if (basename($_SERVER['PHP_SELF']) != 'index.php'): ?>
  <link rel="stylesheet" href="<?php echo ROOT?>style/works.css" />
  <?php endif; ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.2.0.js"></script>

  <title>JINJIN</title>
</head>

<body>

  <header>
    <div class="header-wrap">
      <div class="dark-mode">
        <svg class="light-icon" role="img" viewBox="0 0 24 24" aria-labelledby="color-scheme-light" style="user-select: auto;">
          <path
            d="M12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0-4a1 1 0 0 1-1-1V1a1 1 0 0 1 2 0v2a1 1 0 0 1-1 1zm0 20a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zM5.64 6.64a.997.997 0 0 1-.707-.293l-1.42-1.42a.999.999 0 1 1 1.414-1.414l1.42 1.42A.999.999 0 0 1 5.64 6.64zm14.139 14.139a.997.997 0 0 1-.707-.293l-1.42-1.42a.999.999 0 1 1 1.414-1.414l1.42 1.42a.999.999 0 0 1-.707 1.707zM3 13H1a1 1 0 1 1 0-2h2a1 1 0 0 1 0 2zm20 0h-2a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2zM4.22 20.779a.999.999 0 0 1-.707-1.707l1.42-1.42a.999.999 0 1 1 1.414 1.414l-1.42 1.42a.993.993 0 0 1-.707.293zM18.359 6.64a.999.999 0 0 1-.707-1.707l1.42-1.42a.999.999 0 1 1 1.414 1.414l-1.42 1.42a.997.997 0 0 1-.707.293z"
            style="user-select: auto;"></path>
        </svg>
        <svg class="dark-icon" role="img" viewBox="0 0 24 24" aria-labelledby="color-scheme-dark" style="user-select: auto;">
          <path
            d="M12.048 21.963c-.308 0-.618-.015-.93-.043-2.66-.246-5.064-1.513-6.771-3.567s-2.512-4.651-2.266-7.311a10.004 10.004 0 0 1 9.038-9.038 1 1 0 0 1 .896 1.589 6.008 6.008 0 0 0 1.258 8.392c2.078 1.536 5.055 1.536 7.133 0a1 1 0 0 1 1.591.896 9.951 9.951 0 0 1-9.949 9.082zM9.315 4.438a8.006 8.006 0 0 0-5.244 6.787 7.954 7.954 0 0 0 1.813 5.849 7.95 7.95 0 0 0 5.417 2.854 7.95 7.95 0 0 0 8.266-5.243 8.01 8.01 0 0 1-2.729.476 7.946 7.946 0 0 1-4.755-1.565C9.174 11.443 8.145 7.68 9.315 4.438z"
            style="user-select: auto;"></path>
        </svg>
      </div>
      <ul class="quick">
        <?php if (basename($_SERVER['PHP_SELF']) != 'index.php'): ?>
        <li>
          <a href="<?php echo ROOT ?>" target="_self" class="home">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Home</title>
              <path d="M15.98 2.442H8.02L0 10.46h2.275l6.882-6.88 6.881 6.881H24l-8.02-8.018m-.492 9.348L9.157 5.459 4.01 10.605v4.987a1.33 1.33 0 0 0 1.329 1.329h6.077l4.637 4.637v-4.637h2.598a1.33 1.33 0 0 0 1.33-1.33V11.79h-4.494Z" />
            </svg>
          </a>
        </li>
        <?php endif; ?>
        <li>
          <a href="https://github.com/yeonjin1357" target="_blank" class="github">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>GitHub</title>
              <path
                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://mail.google.com/mail/u/0/?fs=1&to=yeonjin19980125@gmail.com&tf=cm" target="_blank" class="gmail">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Gmail</title>
              <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://velog.io/@yeonjin1357" target="_blank" class="velog">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Velog</title>
              <path
                d="M3 0C1.338 0 0 1.338 0 3v18c0 1.662 1.338 3 3 3h18c1.662 0 3-1.338 3-3V3c0-1.662-1.338-3-3-3H3Zm6.883 6.25c.63 0 1.005.3 1.125.9l1.463 8.303c.465-.615.846-1.133 1.146-1.553.465-.66.893-1.418 1.283-2.273.405-.855.608-1.62.608-2.295 0-.405-.113-.727-.338-.967-.21-.255-.608-.577-1.193-.967.6-.765 1.35-1.148 2.25-1.148.48 0 .878.143 1.193.428.33.285.494.704.494 1.26 0 .93-.39 2.093-1.17 3.488-.765 1.38-2.241 3.457-4.431 6.232l-2.227.156-1.711-9.628h-2.25V7.24c.6-.195 1.305-.406 2.115-.63.81-.24 1.358-.36 1.643-.36Z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </header>
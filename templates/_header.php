<?php
$pageTitle = $pageTitle ?? '';

$homePageStyle = $homePageStyle ?? '';
$aboutPageStyle = $aboutPageStyle ?? '';
$listPageStyle = $listPageStyle ?? '';
$contactPageStyle = $contactPageStyle ?? '';
$sitemapPageStyle = $sitemapPageStyle ?? '';
?>

<!doctype html>
<html lang="en">
<head>
    <title>EVOTE MOVIE - <?= $pageTitle ?></title>
    <meta charset="utf-8">
    <style>
        @import "/css/basic.css";
        @import "/css/nav.css";
        @import "/css/footer.css";
    </style>
</head>
<body>

<header>
    <img src="/images/logo.gif" alt="logo">
</header>

<nav>
    <ul>
        <li>
            <a href="/" class="<?= $homePageStyle ?>">Home</a>
        </li>

        <li>
            <a href="/?action=about" class="<?= $aboutPageStyle ?>">About Us</a>
        </li>

        <li>
            <a href="/?action=list" class="<?= $listPageStyle ?>">Movie ratings</a>
        </li>

        <li>
            <a href="/?action=contact" class="<?= $contactPageStyle ?>">Contact Us</a>
        </li>

        <li>
            <a href="/?action=sitemap" class="<?= $sitemapPageStyle ?>">Site Map</a>
        </li>
    </ul>
</nav>

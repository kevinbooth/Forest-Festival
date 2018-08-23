<?php
/**
 * The homepage header and navigation
 *
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/wp-content/themes/forest-festival/styles/styles.min.css">

	
</head>

<body>
    <header class="header header--mobile">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <div class="header__mobile-content">
                        <a href="/" class="header__logo">
                            <img src="/wp-content/themes/forest-festival/images/logo.png" width="40" height="40"/>
                        </a>
                        <div class="header__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header header--desktop">
        <div class="container">
            <div class="row">
                <div class="two columns">
                    <img src="/wp-content/themes/forest-festival/images/logo.png" />
                </div>
                <div class="ten columns"> 

                </div>
            </div>
        </div>
    </header>
    <div class="section section--hero">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="hero__copy">affordable, rubust web development by kevin booth</div>
                </div>
                <div class="six columns">
                    <div class="hero__loader-wrapper">
                        <div class="hero__loader"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--services">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <div class="content__sign-container">
                        <div class="content__sign">services</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <svg height="100" width="100">
                        <circle cx="50" cy="50" r="40" stroke-width="3" fill="#40b782" class="content__circle" />
                        <text x="50%" y="50%" text-anchor="middle" dy=".3em" class="content__circle-text" >html</text>
                    </svg>
                </div>
                <div class="four columns">
                    <svg height="100" width="100">
                        <circle cx="50" cy="50" r="40" stroke-width="3" fill="#40b782" class="content__circle" />
                        <text x="50%" y="50%" text-anchor="middle" dy=".3em" class="content__circle-text" >cms</text>
                    </svg>
                </div>
                <div class="four columns">
                    <svg height="100" width="100">
                        <circle cx="50" cy="50" r="40" stroke-width="3" fill="#40b782" class="content__circle" />
                        <text x="50%" y="50%" text-anchor="middle" dy=".3em" class="content__circle-text" >email</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
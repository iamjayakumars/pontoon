<?php
header("X-Content-Security-Policy: allow *; options inline-script");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
    <title>Pontoon</title>
    <meta name="description" content="Live web localization tool">
    <meta name="author" content="Mozilla">
    
    <!-- Place favicon.ico in the root of domain and delete these reference -->
    <link rel="shortcut icon" href="client/www/favicon.ico">

    <link rel="stylesheet" href="client/www/style.css" />
    <link rel="stylesheet" href="client/lib/css/pontoon.css" />
  </head>
  
  <body id="pontoon">
	<!-- Frontpage -->
    <section id="intro">
      <h1 id="title">Pontoon</h1>

      <form>
        <input name="url" class="url" type="text" placeholder="Type URL and press Enter" />
        <!-- Locale selector -->
        <div class="locale select">
          <div class="button confirm">
            <span class="flag"></span>
            <span class="language"></span>
          </div>
          <div class="button selector">
            <span class="handle"> &#9652;</span>
          </div>
          <ul class="menu">
            <li class="add"><span>Add language</span></li>
            <li><span class="flag de"></span><span class="language">Deutsch</span></li>
            <li><span class="flag fr"></span><span class="language">Français</span></li>
            <li><span class="flag hr"></span><span class="language">Hrvatski</span></li>
            <li><span class="flag pl"></span><span class="language">Polski</span></li>
            <li><span class="flag sl"></span><span class="language">Slovenščina</span></li>
          </ul>
        </div>
      </form>

      <nav>
        <ul class="links">
          <li><a id="test-pilot" href="?url=projects/testpilot&locale=de" title="Web client">Demo</a></li>
          <li><a href="https://wiki.mozilla.org/L10n:Pontoon" target="_blank" title="Learn">Wiki</a></li>
          <li><a href="https://github.com/mathjazz/pontoon" target="_blank" title="Hack">GitHub</a></li>
          <li><a href="https://twitter.com/#!/mozillapontoon" target="_blank" title="Follow">Twitter</a></li>
        </ul>
      </nav>

      <noscript>
        <p>In order to use Pontoon, please <a href="http://www.activatejavascript.org/" target="_blank">enable JavaScript</a>.</p>
      </noscript>
    </section>
    
	<!-- Main UI -->
    <aside id="main">

      <header>
        <hr id="drag">
        <span id="logo">Pontoon</span>
        <input class="url" type="text" />

        <!-- Locale selector -->
        <div class="locale select">
          <div class="button confirm">
            <span class="flag"></span>
            <span class="language"></span>
          </div>
          <div class="button selector">
            <span class="handle"> &#9652;</span>
          </div>
          <ul class="menu">
            <li class="add"><span>Add language</span></li>
            <li><span class="flag de"></span><span class="language">Deutsch</span></li>
            <li><span class="flag fr"></span><span class="language">Français</span></li>
            <li><span class="flag hr"></span><span class="language">Hrvatski</span></li>
            <li><span class="flag pl"></span><span class="language">Polski</span></li>
            <li><span class="flag sl"></span><span class="language">Slovenščina</span></li>
          </ul>
        </div>
        
        <span class="vertical-separator"></span>

        <!-- Progress indicator -->
        <div id="progress"><span></span></div>
        <span id="progress-value"></span>
        
        <div class="right">

          <div id="authentication" class="select">
            <div class="button selector">
              <span class="author">Sign in</span>
              <span> &#9652;</span>
            </div>
            
            <!-- Authentication -->
            <div id="authentication-menu" class="menu">
              <section class="full">
                <h2>Full access</h2>
                <form>
                  <input id="email" type="text" placeholder="Email" />
                  <input id="password" type="password" placeholder="Password" />
                  <div class="wrapper sign-in">
                    <a class="toggle" href="#forgot">Forgot password?</a>
                    <div class="button">Sign in</div>
                  </div>
                  <div class="wrapper send-password">
                    <a class="toggle" href="#authentication-wrapper">Back to sign in</a>
                    <div class="button">Send password</div>
                  </div>
                </form>
              </section>
              <section class="restricted">
                <h2>Suggestions only</h2>
                <input id="nickname" type="text" placeholder="Enter your name" />
                <div class="go button">Go</div>
                <a class="facebook" href="#facebook"></a>
                <a class="twitter" href="#twitter"></a>
                <a class="google" href="#google"></a>
                <a class="openid" href="#openid"></a>
              </section>
            </div>
            
            <!-- Save and Export -->
            <ul id="save-menu">
              <li class="sign-out">Sign out</li>
              <li class="server">Save to server</li>
              <li class="html">Export as HTML</li>
              <li class="po">Export as PO</li>
            </ul>
          </div>

          <button id="switch"></button>
        </div>

      </header>

      <!-- Strings placeholder -->
      <div id="entitylist"></div>
    </aside>

	<!-- Website placeholder + iframe fix: prevent iframes from capturing the mousemove events during a drag -->
    <iframe id="source"></iframe>
    <div id="iframe-cover"></div>
    	
	<!-- Javascript at the bottom for fast page loading -->
    
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="client/lib/js/jquery-1.6.2.min.js"%3E%3C/script%3E'))</script>
    
    <script type="text/javascript" src="client/lib/js/jquery.translate-core.js"></script>
    <script type="text/javascript" src="client/lib/js/jquery.editableText.js"></script>
    <script type="text/javascript" src="client/lib/js/pontoon.js"></script>
    <script type="text/javascript" src="client/www/script.js"></script>

  </body>
</html>
<!DOCTYPE html>
<html class=" js pointerevents" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <meta name="theme-color" content="#FF264E" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">

    <meta property="og:title" content="Tim Grillmeier">
    <meta property="og:description" content="Senior Developer, Digital IA/CX Consultant & Jam Baron based in Brisbane, Australia">
    <meta property="og:image" content="img/tim_grillmeier_brisbane_developer.png">
    <meta property="og:url" content="https://timgrillmeier.com">
    <meta name="twitter:card" content="summary_large_image">

    <title tabindex="1">Tim Grillmeier</title>
    <script>
      
    </script>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">
    <style>
      /* BLACK      -     #000000 */
      /* OFF-BLACK  -     #121112 */
      /* MID-GREY   -     #888888 */
      /* OFF-WHITE  -     #F8F8F8 */
      /* WHITE      -     #FFFFFF */

      .bg-black { background: #000; }
      .bg-off-black { background: #121112; }
      .bg-mid-grey { background: #888888; }
      .bg-off-white { background: #F8F8F8; }
      .bg-white { background: #FFF; }

      body {
        background: #121112;
        color: #FFFFFF;
        font-family: 'Heebo', sans-serif;
      }

      .box {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .box div {
        width: 100%;
        box-sizing: border-box;
        max-width: 800px;
        padding: 60px;
      }

      /* Light mode */
      @media (prefers-color-scheme: light) {
        body {
          background: #F8F8F8;
          color: #121112;
        }
      }

      /* Dark mode */
      @media (prefers-color-scheme: dark) {
        body {
          background: #121112;
          color: #FFFFFF;
        }
      }

      .color-grey { color: #888888; }

      h1 {
        font-weight: 500;
        font-size: 42px;
        line-height: 56px;
      }

      p {
        font-size: 18px;
        font-weight: 500;
        line-height: 32px;
      }

      p.block-large {
        padding: 16px 0;
      }

      p .text-small {
        font-size: 14px;
        pointer-events: none;
      }

      .button {
        height: 32px;
        display: inline-block;
        box-sizing: border-box;
        background: transparent;
        background-color: transparent;
        padding: 0 0 0 6px;
        cursor: pointer;
        border: 2px solid #888;
        color: #888;
        border-radius: 3px;
        outline: none !important;
        text-decoration: none !important;
        vertical-align: middle;
      }

      .button.margin-after {
        margin-right: 26px;
      }

      .button.margin-before {
        margin-left: 26px;
      }

      .button span {
        display: inline-block;
        line-height: 28px;
        min-width: 18px; 
        margin: 0 12px 0 0;
        font-size: 14px;
        pointer-events: none;
        vertical-align: top;
      }

      .button i,
      .button img,
      .button svg {
        display: inline-block;
        width: 18px;
        height: 23px;
        margin: 0 6px 0 0;
        pointer-events: none;
        /*fill: transparent !important;*/
        stroke: transparent !important;
        stroke-width: 0px !important;
        vertical-align: middle;
        color: #888;
      }

      @media screen and (max-width: 768px) {
        .tablet-block {
          display: block;
        }

        .tablet-no-margin {
          margin: 0 0 0 0 !important;
        }

        h1 {
          font-weight: 500;
          font-size: 36px;
          line-height: 50px;
        }
      }

      @media screen and (max-width: 500px) {
        h1 {
          font-weight: 500;
          font-size: 30px;
          line-height: 44px;
        }

        .box div {
          padding: 60px 16px;
        }
      }


      /* Orange button styles */
      .button-orange {
        color: #FF6903;
        border-color: #FF6903;
      }

      .button-orange svg {
        fill: #FF6903;
        stroke: #FF6903;
      }


      /* Blood orange button styles */
      .button-blood-orange {
        color: #FF521D;
        border-color: #FF521D;
      }

      .button-blood-orange svg {
        fill: #FF521D;
        stroke: #FF521D;
      }


      /* Red button styles */
      .button-red {
        color: #FF3939;
        border-color: #FF3939;
      }

      .button-red svg {
        fill: #FF3939;
        stroke: #FF3939;
      }


      /* Hot Pink button styles */
      .button-hot-pink {
        color: #FF264E;
        border-color: #FF264E;
      }

      .button-hot-pink svg {
        fill: #FF264E;
        stroke: #FF264E;
      }


      /* Pink button styles */
      .button-pink {
        color: #FF165F;
        border-color: #FF165F;
      }

      .button-pink svg {
        fill: #FF165F;
        stroke: #FF165F;
      }


      /* Fuchsia button styles */
      .button-fuchsia {
        color: #FC2181;
        border-color: #FC2181;
      }

      .button-fuchsia svg {
        fill: #FC2181;
        stroke: #FC2181;
      }

    </style>
  </head>
  <body contenteditable="false">

    <div class="box">
      <div>
        <h1>Tim Grillmeier</h1>
        <p class="color-grey">[tɪm grɪl ˈmaɪə] noun</p>
        <p>
          Senior developer, digital IA/CX consultant, speaker, entreprenuer, and deep thinker based in Brisbane, Australia. Created circa 1990. Can often be found streaming or making preserves.
        </p>
        <p class="block-large">
          <span class="text-small tablet-block">Stalking options:</span>
          <a href="https://www.linkedin.com/in/timgrillmeier/" class="button button-blood-orange margin-before tablet-no-margin" alt="Tim Grillmeier on LinkedIn" target="blank">
            <?php require('img/linkedin.svg'); ?>
          </a>
          <a href="https://www.instagram.com/timgrillmeier/" class="button button-red margin-before" alt="Tim Grillmeier on Instagram" target="blank">
            <?php require('img/instagram.svg'); ?>
          </a>
          <a href="https://twitter.com/timgrillmeier" class="button button-hot-pink margin-before" alt="Tim Grillmeier on Twitter" target="blank">
            <?php require('img/twitter.svg'); ?>
          </a>
          <a href="https://github.com/timgrillmeier" class="button button-pink margin-before" alt="Tim Grillmeier on GitHub" target="blank">
            <?php require('img/github.svg'); ?>
          </a>
        </p>
      </div>
    </div>

  </body>
</html>
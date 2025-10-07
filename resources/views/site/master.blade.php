<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" {!! theme()->printHtmlAttributes('html') !!}
{{ theme()->printHtmlClasses('html') }}>

<head>

  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="manifest" href="{{ asset('assets/site/img/logo_favicon.png') }}">

  <title>@yield('title', 'Birtes Mühendislik')</title>
  @yield('meta_tags')



  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/site/img/logo_favicon.png') }}">
  <link rel="manifest" href="{{ asset('assets/site/img/logo_favicon.png') }}">



  <!-- birtes web -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-- for carousel here -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <!-- Optional theme (for nav buttons/dots) -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">





  @include('site.layouts.css')
  @yield('styles')

  <style>
    .page-loader-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 2000;
    }

    .loader-content {
      text-align: center;
    }

    .loader-logo {
      width: 50px;
      height: auto;
      animation: loader-rotate 1.5s linear infinite;
    }



    /* scroll tot top */

    .scroll-to-top-btn {
    display: none; /* hide by default */
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
    background-color: #333; /* change color */
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 20px;
    opacity: 0.7;
    transition: opacity 0.3s, background-color 0.3s;
  }

  .scroll-to-top-btn:hover {
    opacity: 1;
    background-color: #555;
  }
    /* end of scroll to top */

    /* Floating Action Buttons */
    .floating-action-buttons {
      position: fixed;
      bottom: 30px;
      left: 30px;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .fab-button {
      display: flex;
      align-items: center;
      padding: 12px 16px;
      border-radius: 25px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 14px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      min-width: 140px;
      position: relative;
      overflow: hidden;
    }

    .fab-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
      text-decoration: none;
      color: white;
    }

    .call-button {
      background-color: #dc3545;
      border-radius: 25px 25px 25px 5px;
    }

    .call-button:hover {
      background-color: #c82333;
    }

    .whatsapp-button {
      background-color: #25d366;
      border-radius: 25px 25px 25px 5px;
    }

    .whatsapp-button:hover {
      background-color: #20c05a;
    }

    .fab-text {
      margin-right: 8px;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .fab-icon {
      width: 18px;
      height: 18px;
      flex-shrink: 0;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
      .floating-action-buttons {
        bottom: 20px;
        left: 20px;
        gap: 8px;
      }

      .fab-button {
        min-width: 120px;
        padding: 10px 14px;
        font-size: 13px;
      }

      .fab-text {
        font-size: 13px;
      }

      .fab-icon {
        width: 16px;
        height: 16px;
      }
    }

    @media (max-width: 480px) {
      .floating-action-buttons {
        bottom: 15px;
        left: 15px;
        gap: 6px;
      }

      .fab-button {
        min-width: 100px;
        padding: 8px 12px;
        font-size: 12px;
      }

      .fab-text {
        font-size: 12px;
        margin-right: 6px;
      }

      .fab-icon {
        width: 14px;
        height: 14px;
      }
    }
    /* End Floating Action Buttons */
  </style>




</head>

<body>
  <!-- main-area -->

  <div id="page-loader" class="page-loader-overlay">
    <div class="loader-content">
      <img src="{{ asset('assets/site/img/logo_favicon.png') }}" alt="Logo" class="loader-logo">
    </div>
  </div>


  <!-- scroll to top -->

  <button id="btn-scroll-to-top" class="scroll-to-top-btn" title="Back to Top">
    ↑
  </button>

  <!-- end of scroll to top -->

  <!-- Floating Action Buttons -->
  <div class="floating-action-buttons">
    <a href="tel:+905423064367" class="fab-button call-button" title="Hemen Ara">
      <span class="fab-text">Hemen Ara</span>
      <svg class="fab-icon" viewBox="0 0 24 24" fill="currentColor">
        <path fill="currentColor" fill-rule="evenodd" d="M4.718 3.092c1.226-1.291 3.254-1.05 4.268.384l1.26 1.784c.811 1.147.743 2.74-.225 3.76l-.245.257a.25.25 0 0 0-.002.006c-.013.036-.045.152-.013.372c.067.455.418 1.381 1.846 2.884c1.432 1.508 2.3 1.863 2.703 1.929a.608.608 0 0 0 .294-.007l.408-.43c.874-.92 2.236-1.101 3.335-.469l1.91 1.1c1.633.94 2.013 3.239.708 4.613l-1.42 1.495c-.443.467-1.048.866-1.795.94c-1.824.18-6.049-.055-10.478-4.719c-4.134-4.351-4.919-8.136-5.018-9.985l.666-.036l-.666.036c-.049-.914.358-1.697.894-2.262zm3.043 1.25c-.512-.724-1.433-.768-1.956-.217l-1.57 1.652c-.33.35-.505.75-.483 1.149c.08 1.51.731 4.952 4.607 9.032c4.064 4.28 7.809 4.4 9.244 4.259c.283-.028.575-.186.854-.48l1.42-1.495c.614-.646.453-1.808-.368-2.28l-1.91-1.1c-.513-.295-1.114-.204-1.499.202l-.456.48l-.527-.501c.527.5.527.501.526.502l-.001.001l-.003.004l-.007.006l-.014.014a1.007 1.007 0 0 1-.136.112c-.08.056-.186.119-.321.172c-.276.109-.64.167-1.091.094c-.878-.142-2.028-.773-3.55-2.376c-1.528-1.608-2.113-2.807-2.243-3.7c-.067-.454-.014-.817.084-1.092a1.591 1.591 0 0 1 .23-.427l.03-.037l.014-.015l.006-.007l.003-.003l.002-.001s0-.002.533.503l-.532-.505l.287-.302c.445-.469.51-1.263.088-1.86z"/>
      </svg>
    </a>
    
    <a href="https://wa.me/905423064367" target="_blank" class="fab-button whatsapp-button" title="WhatsApp">
      <span class="fab-text">WhatsApp</span>
      <svg class="fab-icon" viewBox="0 0 24 24" fill="currentColor">
        <path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
      </svg>
    </a>
  </div>
  <!-- End Floating Action Buttons -->



  <!-- svg to use everywhere -->

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="hand-heart" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M16 3.23Q17.065 2 18.7 2c.91 0 1.67.33 2.3 1s.96 1.43 1 2.3c0 .7-.33 1.51-1 2.46s-1.32 1.74-1.97 2.39q-.975.96-3.03 2.85q-2.085-1.89-3.06-2.85c-.975-.96-1.31-1.44-1.97-2.39S10 6 10 5.3c0-.91.32-1.67.97-2.3s1.43-.96 2.34-1c1.07 0 1.96.41 2.69 1.23M22 19v1l-8 2.5l-7-1.94V22H1V11h7.97l6.16 2.3A2.89 2.89 0 0 1 17 16h2c1.66 0 3 1.34 3 3M5 20v-7H3v7zm14.9-1.43c-.16-.33-.51-.57-.9-.57h-5.35c-.54 0-1.07-.08-1.58-.25l-2.38-.79l.63-1.9l2.38.79c.3.1 2.3.15 2.3.15c0-.37-.23-.7-.57-.83L8.61 13H7v5.5l6.97 1.91z" />
    </symbol>
    <symbol id="shield-check" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M21 11c0 5.55-3.84 10.74-9 12c-5.16-1.26-9-6.45-9-12V5l9-4l9 4zm-9 10c3.75-1 7-5.46 7-9.78V6.3l-7-3.12L5 6.3v4.92C5 15.54 8.25 20 12 21m-2-4l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9" />
    </symbol>
    <symbol id="emoticon-happy" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M20 12a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8a8 8 0 0 0 8-8m2 0a10 10 0 0 1-10 10A10 10 0 0 1 2 12A10 10 0 0 1 12 2a10 10 0 0 1 10 10M10 9.5c0 .8-.7 1.5-1.5 1.5S7 10.3 7 9.5S7.7 8 8.5 8s1.5.7 1.5 1.5m7 0c0 .8-.7 1.5-1.5 1.5S14 10.3 14 9.5S14.7 8 15.5 8s1.5.7 1.5 1.5m-5 7.73c-1.75 0-3.29-.73-4.19-1.81L9.23 14c.45.72 1.52 1.23 2.77 1.23s2.32-.51 2.77-1.23l1.42 1.42c-.9 1.08-2.44 1.81-4.19 1.81" />
    </symbol>
    <symbol id="tick" viewBox="0 0 24 24">
      <path fill="currentColor" d="M21 7L9 19l-5.5-5.5l1.41-1.41L9 16.17L19.59 5.59z" />
    </symbol>
    <symbol id="tee-pipe" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M25 115v154h30V115zm432 0v154h30V115zM73 128v128h103.8l40-53.4l14.4 10.8l-39.2 52.3V439h128V265.7l-39.2-52.3l14.4-10.8l40 53.4H439V128zm23 23h320v18H96zm119 137h18v128h-18zm-36 169v30h154v-30z" />
    </symbol>
    <symbol id="install-option" viewBox="0 0 24 24">
      <path fill="none" stroke="currentColor" stroke-width="2"
        d="M12 6v10zm0-5c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12S5.925 1 12 1Zm5 11l-5 5l-5-5" />
    </symbol>
    <symbol id="water" viewBox="0 0 48 48">
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
        d="M9 29a5 5 0 0 0 5-5a5 5 0 0 0 10 0a5 5 0 0 0 10 0a5 5 0 0 0 10 0c0 11.046-8.954 20-20 20S4 35.046 4 24a5 5 0 0 0 5 5m19-16a4 4 0 0 1-8 0c0-2.21 4-9 4-9s4 6.79 4 9" />
    </symbol>
    <symbol id="toilet" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M9 22h8v-2.5c2.41-1.63 4-4.38 4-7.5V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v8H3c0 3.09 2 6 6 7.5zm-3.71-8h13.42A7.02 7.02 0 0 1 15 18.33V20h-4v-1.67C9 18 5.86 15.91 5.29 14M15 4h4v8h-4zm1 1v3h2V5z" />
    </symbol>
    <symbol id="gas" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M17.66 11.2c-.23-.3-.51-.56-.77-.82c-.67-.6-1.43-1.03-2.07-1.66C13.33 7.26 13 4.85 13.95 3c-.95.23-1.78.75-2.49 1.32c-2.59 2.08-3.61 5.75-2.39 8.9c.04.1.08.2.08.33c0 .22-.15.42-.35.5c-.23.1-.47.04-.66-.12a.6.6 0 0 1-.14-.17c-1.13-1.43-1.31-3.48-.55-5.12C5.78 10 4.87 12.3 5 14.47c.06.5.12 1 .29 1.5c.14.6.41 1.2.71 1.73c1.08 1.73 2.95 2.97 4.96 3.22c2.14.27 4.43-.12 6.07-1.6c1.83-1.66 2.47-4.32 1.53-6.6l-.13-.26c-.21-.46-.77-1.26-.77-1.26m-3.16 6.3c-.28.24-.74.5-1.1.6c-1.12.4-2.24-.16-2.9-.82c1.19-.28 1.9-1.16 2.11-2.05c.17-.8-.15-1.46-.28-2.23c-.12-.74-.1-1.37.17-2.06c.19.38.39.76.63 1.06c.77 1 1.98 1.44 2.24 2.8c.04.14.06.28.06.43c.03.82-.33 1.72-.93 2.27" />
    </symbol>
    <symbol id="water-heater" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M7.775 10.65q0 1.125.55 2.05t1.425 1.5q-.25-.35-.387-.75t-.138-.85q0-.575.213-1.075t.612-.875L12 8.725l1.975 1.925q.4.375.6.875t.2 1.075q0 .45-.137.85t-.388.75q.875-.575 1.425-1.5t.55-2.05q0-1.175-.625-2.2t-1.675-1.6l-.325.425q-.125.125-.275.212T13 7.576q-.325 0-.55-.225t-.225-.55v-2l-.7.4q-.7.4-1.525 1.163t-1.525 1.85t-.7 2.437m4.225.175l-.925.9q-.2.2-.275.413t-.075.462q0 .525.375.888t.9.362t.9-.362t.375-.888q0-.275-.075-.475t-.275-.4zM6 22q-.825 0-1.412-.587T4 20V6q0-1.65 1.175-2.825T8 2h8q1.65 0 2.825 1.175T20 6v14q0 .825-.587 1.413T18 22zm3-5q.825 0 1.238-.5T12 16t1.8.5t1.2.5t1.2-.5T18 16V6q0-.825-.587-1.412T16 4H8q-.825 0-1.412.588T6 6v10q1.35 0 1.763.5T9 17" />
    </symbol>
    <symbol id="plumbing" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M19.275 9.175L15.75 5.65l-2.125 2.1l-2.125-2.1l2.825-2.85q.3-.3.675-.437t.75-.138q.4 0 .763.138t.637.437l2.125 2.125q.45.425.663.988t.212 1.137t-.212 1.125t-.663 1M5.5 13.775q-.45-.45-.45-1.062t.45-1.063l2.45-2.475l2.125 2.125L7.6 13.775q-.425.45-1.037.45t-1.063-.45M4.425 21.2q-.275-.3-.425-.662t-.15-.763t.138-.762t.437-.663L11.5 11.3L8.325 8.1q-.45-.425-.45-1.037T8.325 6q.425-.45 1.05-.45T10.45 6l3.175 3.175L15.05 7.75l2.8 2.85q.3.3.3.7t-.3.7t-.7.3t-.7-.3l-9.2 9.2q-.3.3-.663.438t-.737.137t-.75-.15t-.675-.425" />
    </symbol>
    <symbol id="plumber" viewBox="0 0 50 50">
      <path fill="currentColor"
        d="M45.971 44.396c0-1.994-3.638-7.567-3.638-7.567s-3.693 5.573-3.693 7.567c0 1.99 1.642 3.604 3.666 3.604c2.023 0 3.665-1.614 3.665-3.604M19.666 13.171h-7.331V5.944h1.999V2H1v3.944h2v11.17c0 2.904 2.388 5.257 5.333 5.257h11.333v1.972h4.001V11.201h-4.001zm27.332 16.428v-11.17c0-2.903-2.387-5.257-5.329-5.257H30.334v-1.97h-4.001v13.143h4.001v-1.973h7.332v7.227h-1.997v3.944H49v-3.944z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="send" viewBox="0 0 24 24">
      <g fill="none">
        <path
          d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
        <path fill="currentColor"
          d="m21.433 4.861l-6 15.5a1 1 0 0 1-1.624.362l-3.382-3.235l-2.074 2.073a.5.5 0 0 1-.853-.354v-4.519L2.309 9.723a1 1 0 0 1 .442-1.691l17.5-4.5a1 1 0 0 1 1.181 1.329ZM19 6.001L8.032 13.152l1.735 1.66L19 6Z" />
      </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 16 16">
      <path fill="currentColor"
        d="M7 7v7H0V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9C2.3 6 3.1 7 3.1 7zm9 0v7H9V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9c-.4 1.2.4 2.2.4 2.2z" />
    </symbol>
    <symbol id="play" viewBox="0 0 24 24">
      <path fill="currentColor" d="M8 5v14l11-7z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>

    <symbol id="location" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M3.25 10.143C3.25 5.244 7.155 1.25 12 1.25c4.845 0 8.75 3.994 8.75 8.893c0 2.365-.674 4.905-1.866 7.099c-1.19 2.191-2.928 4.095-5.103 5.112a4.2 4.2 0 0 1-3.562 0c-2.175-1.017-3.913-2.92-5.103-5.112c-1.192-2.194-1.866-4.734-1.866-7.099M12 2.75c-3.992 0-7.25 3.297-7.25 7.393c0 2.097.603 4.392 1.684 6.383c1.082 1.993 2.612 3.624 4.42 4.469a2.7 2.7 0 0 0 2.291 0c1.809-.845 3.339-2.476 4.421-4.469c1.081-1.99 1.684-4.286 1.684-6.383c0-4.096-3.258-7.393-7.25-7.393m0 5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M8.25 10a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol id="phone" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M4.718 3.092c1.226-1.291 3.254-1.05 4.268.384l1.26 1.784c.811 1.147.743 2.74-.225 3.76l-.245.257a.25.25 0 0 0-.002.006c-.013.036-.045.152-.013.372c.067.455.418 1.381 1.846 2.884c1.432 1.508 2.3 1.863 2.703 1.929a.608.608 0 0 0 .294-.007l.408-.43c.874-.92 2.236-1.101 3.335-.469l1.91 1.1c1.633.94 2.013 3.239.708 4.613l-1.42 1.495c-.443.467-1.048.866-1.795.94c-1.824.18-6.049-.055-10.478-4.719c-4.134-4.351-4.919-8.136-5.018-9.985l.666-.036l-.666.036c-.049-.914.358-1.697.894-2.262zm3.043 1.25c-.512-.724-1.433-.768-1.956-.217l-1.57 1.652c-.33.35-.505.75-.483 1.149c.08 1.51.731 4.952 4.607 9.032c4.064 4.28 7.809 4.4 9.244 4.259c.283-.028.575-.186.854-.48l1.42-1.495c.614-.646.453-1.808-.368-2.28l-1.91-1.1c-.513-.295-1.114-.204-1.499.202l-.456.48l-.527-.501c.527.5.527.501.526.502l-.001.001l-.003.004l-.007.006l-.014.014a1.007 1.007 0 0 1-.136.112c-.08.056-.186.119-.321.172c-.276.109-.64.167-1.091.094c-.878-.142-2.028-.773-3.55-2.376c-1.528-1.608-2.113-2.807-2.243-3.7c-.067-.454-.014-.817.084-1.092a1.591 1.591 0 0 1 .23-.427l.03-.037l.014-.015l.006-.007l.003-.003l.002-.001s0-.002.533.503l-.532-.505l.287-.302c.445-.469.51-1.263.088-1.86z"
        clip-rule="evenodd" />
      <path fill="currentColor"
        d="M13.26 1.88a.751.751 0 0 1 .861-.62c.025.005.107.02.15.03c.085.018.204.048.352.09c.297.087.712.23 1.21.458c.996.457 2.321 1.256 3.697 2.631c1.376 1.376 2.175 2.702 2.632 3.698c.228.498.37.912.457 1.21a5.727 5.727 0 0 1 .113.454l.005.031a.765.765 0 0 1-.617.878a.75.75 0 0 1-.86-.617a2.82 2.82 0 0 0-.081-.327a7.395 7.395 0 0 0-.38-1.004c-.39-.85-1.092-2.024-2.33-3.262c-1.237-1.238-2.411-1.939-3.262-2.329a7.394 7.394 0 0 0-1.003-.38a5.749 5.749 0 0 0-.318-.08a.759.759 0 0 1-.626-.861" />
      <path fill="currentColor" fill-rule="evenodd"
        d="M13.486 5.33a.75.75 0 0 1 .927-.516l-.206.721l.207-.72h.002l.004.001l.007.002l.02.007a2.995 2.995 0 0 1 .233.089c.146.062.345.158.59.303c.49.29 1.157.77 1.942 1.556c.785.785 1.267 1.453 1.556 1.942c.145.245.241.444.304.59a2.968 2.968 0 0 1 .089.233l.006.02l.002.008l.001.003v.002l-.72.207l.721-.206a.75.75 0 0 1-1.44.422l-.003-.01a3.67 3.67 0 0 0-.25-.504c-.224-.377-.626-.947-1.326-1.647c-.7-.7-1.27-1.102-1.646-1.325a3.674 3.674 0 0 0-.504-.25l-.01-.004a.75.75 0 0 1-.506-.925"
        clip-rule="evenodd" />
    </symbol>
    <symbol id="email" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M9.944 3.25h4.112c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238c.748.749 1.08 1.698 1.238 2.87c.153 1.14.153 2.595.153 4.433v.112c0 1.838 0 3.294-.153 4.433c-.158 1.172-.49 2.121-1.238 2.87c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153H9.944c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433v-.112c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c1.14-.153 2.595-.153 4.433-.153M5.71 4.89c-1.006.135-1.586.389-2.01.812c-.422.423-.676 1.003-.811 2.009c-.138 1.028-.14 2.382-.14 4.289c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008c.423.423 1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h4c1.907 0 3.262-.002 4.29-.14c1.005-.135 1.585-.389 2.008-.812c.423-.423.677-1.003.812-2.009c.138-1.028.14-2.382.14-4.289c0-1.907-.002-3.261-.14-4.29c-.135-1.005-.389-1.585-.812-2.008c-.423-.423-1.003-.677-2.009-.812c-1.027-.138-2.382-.14-4.289-.14h-4c-1.907 0-3.261.002-4.29.14m-.287 2.63a.75.75 0 0 1 1.056-.096L8.64 9.223c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455c.345 0 .704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 1 1 .96 1.153l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693c-.741 0-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1-.096-1.057"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="clock" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12M12 7.25a.75.75 0 0 1 .75.75v3.69l2.28 2.28a.75.75 0 1 1-1.06 1.06l-2.5-2.5a.75.75 0 0 1-.22-.53V8a.75.75 0 0 1 .75-.75"
        clip-rule="evenodd" />
    </symbol>

    <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-back-circle" viewBox="0 0 512 512">

      <path fill="currentColor"
        d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208s208-93.13 208-208S370.87 48 256 48m35.31 292.69a16 16 0 1 1-22.62 22.62l-96-96a16 16 0 0 1 0-22.62l96-96a16 16 0 0 1 22.62 22.62L206.63 256Z" />
    </symbol>


    <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-forward-circle" viewBox="0 0 512 512">

      <path fill="currentColor"
        d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256m257.37 0l-84.68-84.69a16 16 0 0 1 22.62-22.62l96 96a16 16 0 0 1 0 22.62l-96 96a16 16 0 0 1-22.62-22.62Z" />

    </symbol>


    <symbol xmlns="http://www.w3.org/2000/svg" id="star" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M394 480a16 16 0 0 1-9.39-3L256 383.76L127.39 477a16 16 0 0 1-24.55-18.08L153 310.35L23 221.2a16 16 0 0 1 9-29.2h160.38l48.4-148.95a16 16 0 0 1 30.44 0l48.4 149H480a16 16 0 0 1 9.05 29.2L359 310.35l50.13 148.53A16 16 0 0 1 394 480" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32Zm-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43Zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3M97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-down" viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 16 16">
      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
    </symbol>
    
    <!-- Air/Ventilation icon -->
    <symbol id="air" viewBox="0 0 24 24">
      <path fill="currentColor" d="M14.5 17c0 1.65-1.35 3-3 3s-3-1.35-3-3h2c0 .55.45 1 1 1s1-.45 1-1s-.45-1-1-1H2v-2h9.5c2.21 0 4-1.79 4-4s-1.79-4-4-4H2V7h9.5c1.65 0 3 1.35 3 3h-2c0-.55-.45-1-1-1s-1 .45-1 1s.45 1 1 1H22v2h-7.5c-2.21 0-4 1.79-4 4z"/>
    </symbol>
    
    <!-- Fire icon -->
    <symbol id="fire" viewBox="0 0 24 24">
      <path fill="currentColor" d="M17.66 11.2C17.43 10.9 17.15 10.64 16.89 10.38C16.22 9.78 15.46 9.35 14.82 8.72C13.33 7.26 13 4.85 13.95 3C12.95 3.23 12.12 3.75 11.41 4.32C8.82 6.4 7.8 10.07 9.01 13.22C9.05 13.32 9.09 13.42 9.09 13.55C9.09 13.77 8.94 13.97 8.72 14.05C8.49 14.15 8.25 14.09 8.11 13.92C8.11 13.9 8.09 13.88 8.08 13.86C6.95 12.43 6.77 10.38 7.51 8.75C5.78 10 4.87 12.3 5 14.47C5.06 14.97 5.12 15.47 5.29 15.97C5.46 16.57 5.73 17.17 6.03 17.7C7.11 19.43 8.98 20.67 10.99 20.92C13.13 21.19 15.42 20.8 17.06 19.2C18.89 17.54 19.53 14.82 18.6 12.4L17.66 11.2M14.5 17.5C14.22 17.74 13.76 18 13.4 18.1C12.28 18.5 11.16 17.94 10.5 16.82C11.69 17.1 12.4 16.16 12.61 15.05C12.78 14.25 12.46 13.46 12.28 12.73C12.1 12 12.15 11.37 12.32 10.69C12.51 9.38 12.9 8.76 13.63 8.06C13.9 7.82 14.36 7.56 14.72 7.46C15.84 7.06 16.96 7.62 17.62 8.74C16.43 8.46 15.72 9.4 15.51 10.51C15.34 11.31 15.66 12.1 15.84 12.83C16.02 13.56 15.97 14.19 15.8 14.87C15.61 16.18 15.22 16.8 14.5 17.5Z"/>
    </symbol>
    
    <!-- Insulation icon -->
    <symbol id="insulation" viewBox="0 0 24 24">
      <path fill="currentColor" d="M12 2L2 7L12 12L22 7L12 2M2 17L12 22L22 17M2 12L12 17L22 12M12 4.5L6.5 7L12 9.5L17.5 7L12 4.5M12 14.5L6.5 17L12 19.5L17.5 17L12 14.5M12 9.5L6.5 12L12 14.5L17.5 12L12 9.5Z"/>
    </symbol>
    
    <!-- Electric icon -->
    <symbol id="electric" viewBox="0 0 24 24">
      <path fill="currentColor" d="M7 2V13H10V22L17 10H13L17 2H7M9 4H15L12.5 9H15L11 20V15H9L12.5 9H9V4Z"/>
    </symbol>
    
    <!-- Mechanical icon -->
    <symbol id="mechanical" viewBox="0 0 24 24">
      <path fill="currentColor" d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2M21 9V7L15 1H5C3.89 1 3 1.89 3 3V21C3 22.11 3.89 23 5 23H19C20.11 23 21 22.11 21 21V9M19 9H14V4H5V21H19V9M12 8C13.1 8 14 8.9 14 10S13.1 12 12 12S10 11.1 10 10S10.9 8 12 8M12 14C13.1 14 14 14.9 14 16S13.1 18 12 18S10 17.1 10 16S10.9 14 12 14M12 20C13.1 20 14 20.9 14 22S13.1 24 12 24S10 23.1 10 22S10.9 20 12 20Z"/>
    </symbol>
  </svg>
  <!-- end of svg to use everywhere -->



  @include('site.layouts.header')
  @yield('content')

  @include('site.layouts.footer')

  

  @include('site.layouts.js')
  @yield('scripts')

  <script>
    // Floating Action Buttons functionality
    document.addEventListener('DOMContentLoaded', function() {
      // Add entrance animation for floating buttons
      const fabButtons = document.querySelector('.floating-action-buttons');
      if (fabButtons) {
        fabButtons.style.opacity = '0';
        fabButtons.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
          fabButtons.style.transition = 'all 0.5s ease';
          fabButtons.style.opacity = '1';
          fabButtons.style.transform = 'translateY(0)';
        }, 1000);
      }

      // Add click animation to buttons
      const buttons = document.querySelectorAll('.fab-button');
      buttons.forEach(button => {
        button.addEventListener('click', function(e) {
          // Create ripple effect
          const ripple = document.createElement('span');
          const rect = this.getBoundingClientRect();
          const size = Math.max(rect.width, rect.height);
          const x = e.clientX - rect.left - size / 2;
          const y = e.clientY - rect.top - size / 2;
          
          ripple.style.width = ripple.style.height = size + 'px';
          ripple.style.left = x + 'px';
          ripple.style.top = y + 'px';
          ripple.classList.add('ripple');
          
          this.appendChild(ripple);
          
          setTimeout(() => {
            ripple.remove();
          }, 600);
        });
      });

      // Hide buttons on scroll down, show on scroll up
      let lastScrollTop = 0;
      const fabContainer = document.querySelector('.floating-action-buttons');
      
      window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (fabContainer) {
          if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            fabContainer.style.transform = 'translateY(100px)';
            fabContainer.style.opacity = '0.7';
          } else {
            // Scrolling up
            fabContainer.style.transform = 'translateY(0)';
            fabContainer.style.opacity = '1';
          }
        }
        
        lastScrollTop = scrollTop;
      });
    });

    // Add ripple effect CSS
    const style = document.createElement('style');
    style.textContent = `
      .fab-button {
        position: relative;
        overflow: hidden;
      }
      
      .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
      }
      
      @keyframes ripple-animation {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  </script>


</body>

</html>
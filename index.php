<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CECyTEQ</title>
  </head>
  <body>
    <header class="contenedor">
      <nav class="contenedor__navegacion">
        <a href="#">
          <img
            class="navegacion__logo"
            src="img/logocecyteq.png"
            alt="logo CECyTEQ"
          />
        </a>
      </nav>
    </header>
    <main class="contenido">
      <fieldset class="contenido__fieldset">
        <form action="php/login.php" class="fieldset__form" method="post">
          <div class="form__elements">
            <label for="uname">
              <?xml version="1.0" ?><!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
              <svg
                enable-background="new 0 0 32 32"
                height="32px"
                id="Layer_1"
                version="1.1"
                viewBox="0 0 32 32"
                width="32px"
                xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <g>
                  <polyline
                    fill="none"
                    points="   649,137.999 675,137.999 675,155.999 661,155.999  "
                    stroke="#FFFFFF"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                  />
                  <polyline
                    fill="none"
                    points="   653,155.999 649,155.999 649,141.999  "
                    stroke="#FFFFFF"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                  />
                  <polyline
                    fill="none"
                    points="   661,156 653,162 653,156  "
                    stroke="#FFFFFF"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-miterlimit="10"
                    stroke-width="2"
                  />
                </g>
                <path
                  d="M21.947,16.332C23.219,14.915,24,13.049,24,11c0-4.411-3.589-8-8-8s-8,3.589-8,8s3.589,8,8,8  c1.555,0,3.003-0.453,4.233-1.224c4.35,1.639,7.345,5.62,7.726,10.224H4.042c0.259-3.099,1.713-5.989,4.078-8.051  c0.417-0.363,0.46-0.994,0.097-1.411c-0.362-0.416-0.994-0.46-1.411-0.097C3.751,21.103,2,24.951,2,29c0,0.553,0.448,1,1,1h26  c0.553,0,1-0.447,1-1C30,23.514,26.82,18.615,21.947,16.332z M10,11c0-3.309,2.691-6,6-6s6,2.691,6,6s-2.691,6-6,6S10,14.309,10,11z  "
                />
              </svg>
              <b>Username</b></label
            >
            <input
              type="text"
              placeholder="Enter Username"
              name="uname"
              id="uname"
              required
            />
          </div>
          <div class="form__elements">
            <label class="elements_label" for="pswd">
              <?xml version="1.0" ?><svg
                height="32px"
                id="svg8"
                version="1.1"
                viewBox="0 0 24 24"
                width="32px"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:cc="http://creativecommons.org/ns#"
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg"
              >
                <defs id="defs2" />
                <g
                  id="g2055"
                  style="display: inline"
                  transform="translate(0,-290.65)"
                >
                  <path
                    d="m 12,292.65 c -2.7527,0 -5,2.2473 -5,5 v 3 c -1.8835539,0 -3,1.45947 -3,2.83203 v 6.33399 C 4,311.36838 5.28161,312.65 6.83398,312.65 H 17.16602 C 18.71839,312.65 20,311.36838 20,309.81602 v -6.33399 C 20,301.92966 18.71839,300.65 17.16602,300.65 H 9 v -3 c 0,-1.6793 1.3207,-3 3,-3 1.6793,0 3,1.3207 3,3 0,0.55228 0.44772,1 1,1 0.55228,0 1,-0.44772 1,-1 0,-2.7527 -2.2473,-5 -5,-5 z m -5.16602,10 h 10.33204 c 0.47896,0 0.83398,0.35306 0.83398,0.83203 v 6.33399 c 0,0.47895 -0.35502,0.83398 -0.83398,0.83398 H 6.83398 C 6.35502,310.65 6,310.29497 6,309.81602 v -6.33399 C 6,303.00306 6.35502,302.65 6.83398,302.65 Z"
                    id="path2045"
                    style="
                      color: #000000;
                      font-style: normal;
                      font-variant: normal;
                      font-weight: normal;
                      font-stretch: normal;
                      font-size: medium;
                      line-height: normal;
                      font-family: sans-serif;
                      font-variant-ligatures: normal;
                      font-variant-position: normal;
                      font-variant-caps: normal;
                      font-variant-numeric: normal;
                      font-variant-alternates: normal;
                      font-variant-east-asian: normal;
                      font-feature-settings: normal;
                      font-variation-settings: normal;
                      text-indent: 0;
                      text-align: start;
                      text-decoration: none;
                      text-decoration-line: none;
                      text-decoration-style: solid;
                      text-decoration-color: #000000;
                      letter-spacing: normal;
                      word-spacing: normal;
                      text-transform: none;
                      writing-mode: lr-tb;
                      direction: ltr;
                      text-orientation: mixed;
                      dominant-baseline: auto;
                      baseline-shift: baseline;
                      text-anchor: start;
                      white-space: normal;
                      shape-padding: 0;
                      shape-margin: 0;
                      inline-size: 0;
                      clip-rule: nonzero;
                      display: inline;
                      overflow: visible;
                      visibility: visible;
                      opacity: 1;
                      isolation: auto;
                      mix-blend-mode: normal;
                      color-interpolation: sRGB;
                      color-interpolation-filters: linearRGB;
                      solid-color: #000000;
                      solid-opacity: 1;
                      vector-effect: none;
                      fill: #000000;
                      fill-opacity: 1;
                      fill-rule: nonzero;
                      stroke: none;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-miterlimit: 4;
                      stroke-dasharray: none;
                      stroke-dashoffset: 0;
                      stroke-opacity: 1;
                      color-rendering: auto;
                      image-rendering: auto;
                      shape-rendering: auto;
                      text-rendering: auto;
                      enable-background: accumulate;
                      stop-color: #000000;
                      stop-opacity: 1;
                    "
                  />
                </g>
              </svg>
              <b>Password</b></label
            >
            <input
              type="password"
              placeholder="Enter Password"
              name="pswd"
              id="pswd"
              required
            />
          </div>
          <div class="form__elements">
            <button type="submit" value="Submit">
              Submit
            </button>
          </div>
        </form>
      </fieldset>
    </main>
    <footer>
      <p class="centrado">Delgadillo Montoya Jafet Aldahir - 2024</p>
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('recycle-symbol.png') }}" type="image/x-icon">
        <title>Reusable code</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <p class="h1 text-center">Mes bouts de code réutilisable</p>
        <div class="container stack-separated py5" style="--gap:6">
            <div>
                <div class="h1 mb2">Couleurs</div>
                <div class="hstack">
                    <div>
                        <span style="font-size: 0.8em;">color-dark</span>
                        <div style="width: 70px;height: 70px;background:var(--color-dark);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">color</span>
                        <div style="width: 70px;height: 70px;background:var(--color);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">color-light</span>
                        <div style="width: 70px;height: 70px;background:var(--color-light);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">color-inversed</span>
                        <div style="width: 70px;height: 70px;background:var(--color-inversed);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">contrast</span>
                        <div style="width: 70px;height: 70px;background:var(--contrast);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">contrast25</span>
                        <div style="width: 70px;height: 70px;background:var(--contrast25);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">red</span>
                        <div style="width: 70px;height: 70px;background:var(--red);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">green</span>
                        <div style="width: 70px;height: 70px;background:var(--green);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">yellow</span>
                        <div style="width: 70px;height: 70px;background:var(--yellow);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">color-transparent</span>
                        <div style="width: 70px;height: 70px;background:var(--color-transparent);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">border</span>
                        <div style="width: 70px;height: 70px;background:var(--border);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">border-light</span>
                        <div style="width: 70px;height: 70px;background:var(--border-light);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">background</span>
                        <div style="width: 70px;height: 70px;background:var(--background);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">background-light</span>
                        <div style="width: 70px;height: 70px;background:var(--background-light);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">shadow</span>
                        <div style="width: 70px;height: 70px;background:var(--shadow);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">play</span>
                        <div style="width: 70px;height: 70px;background:var(--play);"></div>
                    </div>
                    <div>
                        <span style="font-size: 0.8em;">card-footer</span>
                        <div style="width: 70px;height: 70px;background:var(--card-footer);"></div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="h1">Alerts</h1>
                <alert-message type="info">
                    <strong>Ceci est un exemple alert-message[type=info]</strong><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias assumenda blanditiis delectus.
                    </p>    
                </alert-message>
                <alert-message type="success">
                    <strong>Ceci est un exemple alert-message[type=success]</strong><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias assumenda blanditiis delectus.
                    </p>
                </alert-message>
                <alert-message type="danger">
                    <strong>Ceci est un exemple alert-message[type=danger]</strong><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias assumenda blanditiis delectus.
                    </p>
                </alert-message>
                <alert-floating type="danger" duration="3">Ceci est un message flotant</alert-floating>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Cette page n'existe pas</title>
    <meta name="description" content="LaGazetteTulliste | L'info prés de chez vous.">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/img/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="/static/img/icons/favicon.ico">
</head>
<body>
<div title="404">404</div>
<div class="button">
    <button onclick="window.location.href = '/'">Page d'accueil</button>
</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Fira+Mono:400');

    body{
        display: flex;
        flex-direction: column;
        width: 100vw;
        height: 100vh;
        align-items: center;
        justify-content: center;
        margin: 0;
        background: #131313;
        color: #fff;
        font-size: 96px;
        font-family: 'Fira Mono', monospace;
        letter-spacing: -7px;
    }

    div{
        animation: glitch 1s linear infinite;
    }

    @keyframes glitch{
        2%,64%{
            transform: translate(2px,0) skew(0deg);
        }
        4%,60%{
            transform: translate(-2px,0) skew(0deg);
        }
        62%{
            transform: translate(0,0) skew(5deg);
        }
    }

    div:before,
    div:after{
        content: attr(title);
        position: absolute;
        left: 0;
    }

    div:before{
        animation: glitchTop 1s linear infinite;
        clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
    }

    @keyframes glitchTop{
        2%,64%{
            transform: translate(2px,-2px);
        }
        4%,60%{
            transform: translate(-2px,2px);
        }
        62%{
            transform: translate(13px,-1px) skew(-13deg);
        }
    }

    div:after{
        animation: glitchBotom 1.5s linear infinite;
        clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
        -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
    }

    @keyframes glitchBotom{
        2%,64%{
            transform: translate(-2px,0);
        }
        4%,60%{
            transform: translate(-2px,0);
        }
        62%{
            transform: translate(-22px,5px) skew(21deg);
        }
    }

    button {
        align-items: center;
        background-color: #cbdcf7;
        border: 2px solid #111;
        border-radius: 8px;
        box-sizing: border-box;
        color: #111;
        cursor: pointer;
        display: flex;
        font-family: Inter,sans-serif;
        font-size: 20px;
        height: 48px;
        justify-content: center;
        line-height: 24px;
        max-width: 100%;
        padding: 0 25px;
        position: relative;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        margin-top: 20px;
    }

    button:after {
        background-color: #f7f8fa;
        border-radius: 8px;
        content: "";
        display: block;
        height: 48px;
        left: 0;
        width: 100%;
        position: absolute;
        top: -2px;
        transform: translate(8px, 8px);
        transition: transform .2s ease-out;
        z-index: -1;
    }

    button:hover:after {
        transform: translate(0, 0);
    }

    button:active {
        background-color: #cbdcf7;
        outline: 0;
    }

    button:hover {
        outline: 0;
    }

    @media (min-width: 768px) {
        button {
            padding: 0 40px;
        }
    }
</style>
</body>
</html>
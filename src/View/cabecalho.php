<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-black: #1F1F1F;
            --yellow: #E5C100;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: var(--bg-black);
        }

        .banner {
            position: relative;
            z-index: 5;
            width: 100%;
            height: 100vh;
        }
        .banner .bg-image {
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url("https://www.felps.com.br/wp-content/uploads/2020/03/Como-Manter-Seu-Sal%C3%A3o-Funcionando-Em-Meio-Ao-V%C3%ADrus-Covid-19-2-1024x608.jpg") no-repeat;
            background-size: cover;
            opacity: .4;
            width: 100%;
            height: 100%;

        }

        .logo-title {
            margin: 0 auto;
            padding-top: 25vh;
        }

        .cards {
            margin-top: 12.5vh;
            display: grid;
            grid-gap: 30px;
            grid-template-columns: repeat(auto-fit, minmax(20%, 1fr));
            justify-content: center;
            justify-items: center;
            padding: 30px;
        }

        .card-parent {
            border: .5px solid #E5C100;
            background: #E5C100;
            display: flex;
            flex-direction: column;
            width: 20%;
            height: 25vh;
            border-radius: .6rem;
        }

        .card-parent__image{
            align-items: center;
            border-top-left-radius: .6rem;
            border-top-right-radius: .6rem;
            display: flex;
            flex: 5;
            justify-content: center;
            overflow: hidden;
        }

        .card-parent__content {
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-around;
            padding: 15px;
        }

        .card-parent__content a{
            text-decoration: none;
            color: var(--bg-black);
            transition: .1s;
        }
        .card-parent__content a:hover{
            border-bottom: 3px solid black;
            color: black;
        }

        .horas{
            height: 100vh;
        }
        .title-yellow {
            color: var(--yellow);
            text-align: center;
            font-weight: bold;
        }

        .title-yellow:after {
            content:'';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--yellow);
            margin: 8px auto;
        }

        .map {
            height: 100vh;
            background: var(--yellow);
        }
        .title-black {
            color: var(--bg-black);
            text-align: center;
            font-weight: bold;
        }

        .title-black:after {
            content:'';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--bg-black);
            margin: 8px auto;
        }


    </style>
    <title>iH@ir</title>
</head>
<body>
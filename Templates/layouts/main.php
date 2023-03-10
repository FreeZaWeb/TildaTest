<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>

    <style>

        *{
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            background: #e7e7e7;
            padding: 0;
            margin: 0;
        }

        .wrapper{
            max-width: 1200px;
            margin: 0 auto;

        }

        main .wrapper{
            margin: 50px auto;
            background: #f7f7f7;
            box-shadow: #121212 0 0 15px -9px;
            padding: 10px 25px;
        }

        .logo{
            font-size: 30px;
            color: white;
            text-decoration: none;
        }

        header, footer{
            background: #3d3d3d;
            padding: 10px 0;
        }

        header .wrapper, footer .wrapper{
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            font-size: 18px;
            padding: 10px 0;

        }


        h2{
            margin-bottom: 30px;
        }

        hr{
            border: 0;
            border-bottom: 1px solid #bbbbbb;
            margin: 40px 0 30px;
        }

        .stepsWrapper{
            background: #ebebeb;
            border-radius: 7px;
        }

        .stepsWrapper p{
            margin: 0;
            padding: 5px;

        }

        .stepsWrapper p span{
            display: inline-block;
            margin: 0;
            padding: 5px;
            border-radius: 4px;
            background: #15abdd;
            min-width: 50px;
            margin-right: 5px;
            text-align: center;
            color: #ffffff;
        }


        .jsonCode{

            display: block;
            padding: 15px;
            background: #2b2b2b;
            color: #ddd;
            font-family: monospace;
        }

        ol li{
            margin-bottom: 10px;
        }

        p{
            line-height: 23px;
        }

        code{
            border-radius: 7px;
            padding: 15px;
        }

        table{
            margin: 30px auto;
            width: 100%;
            border-collapse: collapse;
            border: 0;
        }
        tr{
            border-bottom: 1px solid #ddd;
        }
        td{
            padding: 7px;
            border-left: 1px solid #ddd;
            font-size: 18px;
        }
        tr:last-child{
            border-bottom: 0;
        }
        td:first-child{
            border-left: 0;
        }
        .colSum{
            background: rgb(232,233,247);
            background: linear-gradient(180deg, rgba(232,233,247,1) 15%, rgba(255,255,255,0) 100%);
        }
        .rowSum{
            background: rgb(226,249,234);
            background: linear-gradient(90deg, rgba(226,249,234,1) 50%, rgba(255,255,255,0) 100%);
        }
    </style>

</head>
<body>

<? require(ROOT.'/Templates/blocks/header.php') ?>

<? require(ROOT.'/Templates/blocks/content.php') ?>

<? require(ROOT.'/Templates/blocks/footer.php') ?>


</body>
</html>

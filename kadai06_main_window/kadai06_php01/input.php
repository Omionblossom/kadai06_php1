<html>

<head>
    <meta charset="utf-8">
    <title>Kadai06 input form</title>
    <style>
        /* CSSを書く */
        html{
            color: #78c2c4;
            width: 500px;
            margin-left:auto;
            margin-right:auto;
        }
        form{
            background-color: #81c7d4;
        }
        input{
            background-color: #ffffff;
            border: none; 
            width: 500px;
        }
        #title{
            font-size: 1.5rem;
            width: 100%;
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #name{
            /* 上 | 右 | 下 | 左 */
            font-color: black; 
            margin:5px 0px 5px 0px;
        }
        #date{
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        textarea{
            background-color: white;
            width: 100%;
            border: none;
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #btn{
            border: solid;
            width: 500px;
            
        }
    </style>
</head>

<body>
    <h1>Travel Log : Input form</h1>
    <!-- <img src="/img/giphy.gif"> REGISTER押すと飛び立つ飛行機。今はちょっとやめておく --> 
    <form action="write.php" method="post">
        <input type="text" name="title" id="title" placeholder="trip name"><br>
        <input type="text" name="name" id="name" placeholder="adventurer"><br>
        <input type="date" name="date" id="date" placeholder="departure date">Date of Depature<br>
        <textarea name="detail" id="" cols="30" rows="10"  placeholder="itinerary"></textarea>   
        <!-- text areaの旅程から本当は、緯度経度を取得して返したい -->
        <input type="submit" value="REGISTER" id="btn">
    </form>
</body>
</html>

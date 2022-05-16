<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="idCard.css">-->
    <title>ID Card</title>

    <style>
        *{
    margin: 00px;
    padding: 00px;
    box-sizing: content-box;
    
}

.container {
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #e6ebe0;
    flex-direction: row;
    flex-flow: wrap;

}

.etap {
    font-family: Verdana, Arial, Helvetica, sans-serif;
}

.font{
    height: 375px;
    width: 250px;
    position: relative;
    border-radius: 10px;
}

.top{
    height: 30%;
    width: 100%;
    background-color: #5460AB;
    position: relative;
    z-index: 5;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.bottom{
    height: 70%;
    width: 100%;
    background-color: white;
    position: absolute;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.top img{
    height: 100px;
    width: 100px;
    background-color: #e6ebe0;
    border-radius: 10px;
    position: absolute;
    top:60px;
    left: 75px;
}
.bottom p{
    position: relative;
    top: 70px;
    text-align: center;
    text-transform: capitalize;
    font-weight: bold;
    font-size: 20px;
    text-emphasis: spacing;
}
.bottom .desi{
    font-size:15px;
    color: rgb(84, 84, 84);
    font-weight: normal;
    top: 90px;
}

.bottom .name{
    top: 90px;
}

.bottom .no{
    font-size: 11px;
    font-weight: normal;
}
.barcode img
{
    height: 65px;
    width: 65px;
    text-align: center;
    margin: 5px;
}
.barcode{
    text-align: center;
    position: relative;
    top: 90px;
}

.logoe img {
    height: 35px;
    width: 35px;
    text-align: center;
    margin: 5px;    
    text-align: center;
    position: relative;
    top: 45px;
    left: 100px;
}

.back
{
    height: 375px;
    width: 250px;
    border-radius: 10px;
    background-color: #5460AB;

}
.qr img{
    height: 80px;
    width: 100%;
    margin: 20px;
    background-color: white;
}
.Details {
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 25px;
}


.details-info{
    color: white;
    text-align: left;
    padding: 5px;
    line-height: 20px;
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    line-height: 22px;
}

.logo {
    height: 40px;
    width: 150px;
    padding: 40px;
}

.logo img{
    height: 100%;
    width: 100%;
    color: white ;

}
.padding{
    padding-right: 20px;
}

@media screen and (max-width:400px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }
}
@media screen and (max-width:600px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }

}
    </style>

    <!-- So lets start -->
</head>
<body>
        <div class="container">
            <div class="padding">
                <div class="font">
                    <div></div>
                    <div class="top">
                        <img src="photo/{{$photo}}">
                    </div>
                    <div class="bottom">

                        <p class="name" style="color: #5460AB ;">{{$full_name}} </p>
                        <p class="desi">{{$fonction}}</p>
                        <div class="barcode">
                            <img src="qr sample.png">
                        </div>
                        <br>
                        <div class="etap">
                            <p class="no">54, Avenue Mohamed V - 1002 Tunis</p>
                            <p class="no">contact@etap.com.tn</p>
                            <p class="no">www.etap.com.tn/</p>
                            <p class="no">+216 71 285 300</p>
                        </div>
                        
                    </div>
                    <div class="logoe">
                        <img src="etapv2.png">
                    </div>
                </div>
            </div>

        </div>
</body>
</html>
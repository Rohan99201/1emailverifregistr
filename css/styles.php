<html>
    <head>
        <title></title>
        <style type="text/css">

*{ margin:0; padding:0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}

a{ color: white; text-decoration: none;}


header{
    width: 100%;
    height: 100%;
    background-color: #FA8BFF;
    background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
    position: relative;
    overflow: hidden;

}

header:before{
    content: "";
    width: 520px;
    height: 550px;
    position: absolute;
    left: 0;
    bottom: 0;
    background-image: url('images/584e83206a5ae41a83ddee33.png');
    background-size: 100% 100%;
}
nav{
    width: 100%;
    height: 15vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: absolute;
}

.logo a{
    font-size:1.6rem ;
    text-transform: uppercase;
    font-weight: bold;
}

.menu ul li{
    list-style: none;
    display: inline-block;
    padding: 0 15px;
    
}

.menu ul li a{
    text-transform: capitalize;
}

.active, ul li:hover{
    border-top: 2px solid #2BFF88;
    border-bottom: 2px solid #2BFF88;
}

.contact_btn a{
    background-color: #2BD2FF;
    padding: 12px 26px;
    font-style: 14px;
    font-weight: 500;
    border:1px solid transparent ;
    text-transform: capitalize;
}

.contact_btn a:hover{
    background: linear-gradient(to bottom, #2BD2FF 0%,#2BFF88 100%);
}

.center_content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.center_content h1{
    color: #fff;
    font-size: 50px;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 10px;
    z-index: 1;
}

.center_content h2{
    font-size: 30px;
    font-weight: 500;
    text-align: center;
    color: #fff;
    text-transform: capitalize;
    z-index: 1;
}

.center_content h2:before{
    content: "";
    width: 90px;
    height: auto;
    border: 2px solid #fff;
    position: absolute;
    left: 35px;
    bottom: 0;
    margin-bottom: 15px;
}

.social_network{
    width: 100px;
    height: auto;
    position: absolute;
    right: 0;
    top: 40%;

}

.fa_icons{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #2BD2FF 0%,#2BFF88 100%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.fa_icons:nth-child(even){
    margin: 20px 0;

}

.fa_icons:hover{
    background:linear-gradient(to bottom, #2BFF88 0%,#2BD2FF 100%) ;

}

.grid_sec{
    width: 300px;
    height: 100px;
    position: absolute;
    left:55%;
    bottom: 0;
    overflow: hidden;
}

</style>
</head>
<body>
</body>
</html>
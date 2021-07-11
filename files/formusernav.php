<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
    <style>
*,html{
    margin: 0;
    padding: 0;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}

html{
  /*font-size: 62.5%;*/
  font-size: 100%;
}
.nav{
    max-width: 100%;
    height: 5rem;
    line-height: 5rem;
    /*margin: auto;*/
}

.logo{
    align-self: center;
    position: absolute;
    top: -200;
    left: 0;
    display: inline;
}
.nav ul{
    float: right;
    margin-right: 0rem;
    box-sizing: border-box;
}

.nav ul li{
    list-style-type: none;
    display: inline-block;
    transition: 0.8s all;
    font-weight: 1000;
}

.nav ul li a{
    text-decoration: none;
    color: black;
    padding: 0 1.875rem;
    
}

.nav ul li a:hover{
  color: lightskyblue;
}

.logo{
    align-self: center;
    position: absolute;
    top: -200;
    left: 0;
    display: inline;
}
.contact{
    width: 100%;
    height: 12.5rem;
    background-color: ghostwhite;
    padding: 1.25rem;
    margin-top: 1.875rem;
  }

  .about{
    background-color: grey;
    padding: 0.3125rem 0.9375rem;

  }
  .drp{
      width: 10rem;
  }
  .hide{
      display: none;
      position: absolute;
  }
  .drp:hover > ul{
      display: block;
      z-index: 99;
  }
  .drp ul li{
      display: list-item;
      float: none;
      position: relative;
  }
    </style>
</head>
<body>
    <div class="top">
        <img src="logo.png" alt="Loading" width="200" height="80" class="logo">
        <div class="nav">
            <ul>
                <li><a href="userspage.php">Home</a></li>
                
            </ul>
        </div>
    </div>
    
</body>
</html>
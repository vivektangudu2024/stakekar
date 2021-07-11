<div class="top">
        <img src="logo.png" alt="Loading" width="200" height="80" class="logo">
        <div class="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="hai.php">Find a Ride</a></li>
                <li><a href="signin-signupform1.php">Offer a ride</a></li>
            </ul>
        </div>
    </div>

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
    /*align-self: center;*/
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
  @media screen and (max-width:330px){
html{
  font-size: 35%;
}
.fcontainer{
  width: 35%;
}
.inputs{
  width: 40%;
}
.nav ul{
  float: right;
  margin-right: 0rem;
  box-sizing: border-box;
}
.logo{
align-self: center;
position: absolute;

left: 0;
height: 25px;
width: 40px;
}
.nav ul li a{
text-decoration: none;
color: black;
padding: 0 1.5rem;

}

}
@media screen and (max-width:550px){
html{
  font-size: 45%;
}
.block img{
  height: 140px;
  width: 140px;
  position: relative;
  right: 15vw;
  top: -1vh;
}
.logo{
  align-self: center;
  position: absolute;
  top: -200;
  left: 0;
  height: 40px;
  width: 80px;
}
.fcontainer {
position: relative;
bottom: 0.3125rem;
border-radius: 1.25rem;
box-sizing: border-box;
background: #ecf0f3;
overflow: hidden;
margin: auto;
width: 15rem;
top: 1.25rem;
}
.button1{
position: relative;
left: 60%;
}
}
@media screen and (max-width:290px){
html{
  font-size: 35%;
}
.fcontainer{
  width: 35%;
}
.inputs{
  width: 40%;
}
.nav ul{
  float: right;
  margin-right: 0rem;
  box-sizing: border-box;
}
.logo{
align-self: center;
position: absolute;

left: 0;
height: 25px;
width: 40px;
}
.nav ul li a{
text-decoration: none;
color: black;
padding: 0 1.5rem;

}
.block img{
height: 120px;
width: 120px;
position: relative;
right: 15vw;
top: -1vh;
} 
}

@media screen and (max-width: 1100px) {
html {
  font-size: 75%;
}
.logo{
  align-self: center;
  position: absolute;
  top: -200;
  left: 0;
  height: 50px;
  width: 100px;
}
#main{
width: 100%;
height: 80vh;
background-image: url(pool.png);
background-position: center;
background-repeat: no-repeat;
background-attachment: scroll;
background-size: contain;
padding: 0.1rem 0rem;

}
.block img{
height: 210px;
width: 190px;
position: relative;
right: 15vw;
}
.button1{
position: relative;
left: 250%;
}
}

@media screen and (max-width: 400px) {
html {
  font-size: 45%;
}
.logo{
    align-self: center;
    position: absolute;
    top: -200;
    left: 0;
    height: 40px;
    width: 80px;
}
#main{
  width: 100%;
  height: 80vh;
  background: url(pool.png) center center contain no-repeat fixed;
  padding: 0;
}
.block img{
  height: 120px;
  width: 120px;
  position: relative;
  right: 15vw;
}
.blocklet{
position: absolute;

right: 30vw;
width: 100%;
height: 6.25rem;    
}
.fcontainer {
position: relative;
bottom: 0.3125rem;
border-radius: 1.25rem;
box-sizing: border-box;
background: #ecf0f3;
overflow: visible;
margin: auto;
width: 38rem;
top: 1.25rem;
}
.block{
position: relative;
width: 25rem;
height: 12.5rem;

}
.nav ul{
float: right;
margin-right: 0;
box-sizing: border-box;
}

.autocomplete{
align-items: center;
justify-content: center;
margin-left: 2%;

}
button{
position: relative;
left: 60%;
}
.button{
position: relative;

left: 0rem;
width: fit-content;
height: 6.25rem;
}
}

</style>


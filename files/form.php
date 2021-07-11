
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
        *{
            box-sizing: border-box;
        }

.body {
  margin: 0;
  width: 98vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 770px;
  height: 730px;
  border-radius: 20px;
  padding: auto;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
  overflow: auto;
}

.brand-logo{
    box-sizing: border-box;
    margin-top: 2vh;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  margin-left: 4.5vw;
  box-sizing: border-box;
}

button{
  display: block;
  width: 35%;
  float: left;
  margin: 0rem 2rem;
  margin-left: 5rem;
  padding: auto;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

.autocomplete {
  position: relative;
  display: inline-block;
  font-weight: 300;
  margin: auto;
  padding: 10px 0;
  border-radius: 10px;
  float: left;
  width: 30%;
  margin-right: 5%;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-style: none;
  border-radius: 10px;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  top: 90px;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
  border-radius: 10px;
}

.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
    </style>
</head>
<body>
<div>
  
</div>
  <div class="body">
    <div class="container">
        <div class="brand-logo">
            <img src="1logo.png" alt="" width="200px" height="90px">
        </div>
        <div class="inputs">
            <form autocomplete="off" action="offeraride.php" method="POST" name="myForm">
              <div class="autocomplete" style="width:300px;">
                <label for="myinput">Name : </label>
                <input id="myInput" type="text" name="name" placeholder="Your Name" style="padding-left: -20px;" autofocus required>
              </div>
              
              <div class="autocomplete" style="width:300px;">
                <label for="myinput1">Email : </label>
                <input id="myInput1" type="text" name="email" placeholder="Your Email" required>
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput2">Starting from : </label>
                <input id="myInput2" type="text" name="Pickup" required placeholder="City">
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput3">Leaving to : </label>
                <input id="myInput3" type="text" name="Dropoff" required placeholder="City">
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput4">City : </label>
                <input id="myInput4" type="text" name="city" required placeholder="City">
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput5">Date : </label>
                <input id="myInput5" type="date" name="date" required>
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput6">Time : </label>
                <input id="myInput6" type="time" name="time">
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput7">Capacity : </label>
                <input id="myInput7" type="number" name="capacity" required>
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput8">Cost : </label>
                <input id="myInput8" type="number" name="cost" required placeholder="In Rupees">
              </div>
              <br>
              <div class="autocomplete" style="width: 300px;">
                <label for="myinput9">Mobile : </label>
                <input id="myInput9" type="tel" name="number" placeholder="9876543210" maxlength="10" required>
              </div>
              <button type="submit">Offer</button>
              <button type="submit" onclick="document.location='userspage.php'" style="margin-left: 2rem;">Offer Later</button>
            </form>
            </div>
    </div>
    
    </div>
    <div style="margin-top: -5rem;">
      <?php include("footer.php") ?>
    </div>
    
        <script>
            function autocomplete(inp, arr) {
              var currentFocus;
              inp.addEventListener("input", function(e) {
                  var a, b, i, val = this.value;
                  closeAllLists();
                  if (!val) { return false;}
                  currentFocus = -1;
                  a = document.createElement("DIV");
                  a.setAttribute("id", this.id + "autocomplete-list");
                  a.setAttribute("class", "autocomplete-items");
                  this.parentNode.appendChild(a);
                  for (i = 0; i < arr.length; i++) {
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                      b = document.createElement("DIV");
                      b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                      b.innerHTML += arr[i].substr(val.length);
                      b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                      b.addEventListener("click", function(e) {
                          inp.value = this.getElementsByTagName("input")[0].value;
                          closeAllLists();
                      });
                      a.appendChild(b);
                    }
                  }
              });
              inp.addEventListener("keydown", function(e) {
                  var x = document.getElementById(this.id + "autocomplete-list");
                  if (x) x = x.getElementsByTagName("div");
                  if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(x);
                  } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(x);
                  } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                      if (x) x[currentFocus].click();
                    }
                  }
              });
              function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active");
              }
              function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                  x[i].classList.remove("autocomplete-active");
                }
              }
              function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                  if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                  }
                }
              }
              document.addEventListener("click", function (e) {
                  closeAllLists(e.target);
              });
            }

            var cities = ["Adoni","Amaravati","Anantapur","Chandragiri","Chittoor","Dowlaiswaram","Eluru","Guntur","Kadapa","Kakinada","Kurnool","Machilipatnam",
"Nagarjunakoṇḍa","Rajahmundry","Srikakulam","Tirupati","Vijayawada","Visakhapatnam","Vizianagaram","Yemmiganur","Badami","Ballari","Bangalore","Belgavi","Bhadravati","Bidar","Chikkamagaluru",
"Chitradurga","Davangere","Halebid","Hassan","Hubballi-Dharwad","Kalaburagi","Kolar","Madikeri","Mandya","Mangaluru","Mysore","Raichur","Shivamogga","Shravanabelagola","Shrirangapattana",
"Tumkuru","Balangir","Baleshwar","Baripada","Bhubaneshwar","Brahmapur","Cuttack","Dhenkanal","Keonjhar","Konark","Koraput","Paradip","Phulabani","Puri","Sambalpur","Udayagiri","Ahmadnagar",
"Akola","Amravati","Aurangabad","Bhandara","Bhusawal","Bid","Buldana","Chandrapur","Daulatabad","Dhule","Jalgaon","Kalyan","Karli","Kolhapur","Mahabaleshwar","Malegaon","Matheran","Mumbai","Nagpur",
"Nanded","Nashik","Osmanabad","Pandharpur","Parbhani","Pune","Ratnagiri","Sangli","Satara","Sevagram","Solapur","Thane","Ulhasnagar","Vasai-Virar","Wardha","Yavatmal","Arcot","Chengalpattu","Chennai","Chidambaram",
"Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Kodaikanal","Kumbakonam","Madurai","Mamallapuram","Nagappattinam","Nagercoil","Palayankottai","Pudukkottai","Rajapalaiyam",
"Ramanathapuram","Salem","Thanjavur","Tiruchchirappalli","Tirunelveli","Tiruppur","Tuticorin","Udhagamandalam","Vellore","Hyderabad","Karimnagar","Khammam","Mahbubnagar","Nizamabad","Sangareddi","Warangal",
"Alappuzha","Badagara","Idukki","Kannur","Kochi","Kollam","Kottayam","Kozhikode","Mattancheri","Palakkad","Thalassery","Thiruvananthapuram","Thrissur",
"kanpur","lucknow","varanasi","agra","meerut","ghaziabad","prayagraj","bareilly","aligarh","moradabad","saharanpur","gorakhpur","faizabad","firozabad",
"jhansi","muzzaffarnagar","mathura","budaun","rampur","ayodhya","noida","mirzapur","sambal","sitapur","lakhimpur","mughalsarai","ghonda","ujhani","sultanpur",
"ahmedabad","surat","vadodara","rajkot","jamnagar","gandhinagar","anand","vapi","navasari","junagadh","bharuch","valsad","gonadal","mehsana","dwarika","somnath",
"okha","jaipur","kota","jodhpur","bhiwadi","bikaner","jaiselmer","ajmer","udaipur","alwar","baran","ganganagar","tonk","beawar","pali","jodhpur","sikar","bharatpur",
"indor","bhopal","jabalpur","ujjain","satna","gwaliar","rewa","chhatarpur","neemuch","bhind","amritsar","ludhiana","jalandhar","mohali","batala","bathinda",
"moga","chandigarh","malerkotla","faidkot","sunam","firozpur","khanna","patna","gaya","bhagalpur","muzaffarpur","purnia","darbhanga","arrah","begusarai","kathihar",
"motihari","kolkata","asansol","kharagpur","durgapur","bardhaman","malda city","bagarampur","jangipur","bangaon","haldia","raipur","bhilai","atal nagar","korba","bilaspur",
"raigarh","jammu","kashmir","srinagar","anantnag","dehradun","haridwar","roorkee","rudrapur","kashipur","rishikesh","shimla","dharamsala","solan","mandi","palampur","baddi",
"sundarnagar","hamirpur","bilaspur","nalagarh","nurpur","kangra","santokhgarh","daman","diu","dadra-nagar-havali","silvassa","pudducherry","north-delhi","south-delhi","central-delhi",
"panaji","margao","ponda","valpoi","pernem","mapusa","Guwahati","jorhat","Agartala","Nagaon","Imphal","Bongaigaon","Dimapur","Tinsukia","Shillong","Tezpur","Aizawl","Kohima","Silchar","Gangtok","Dibrugarh","Itanagar",
"Cheepurupalli","Palasa","Srikurmam","Palakonda","Rajam","Kolkata","Kharagpur","Durgapur","Ongole"];
            autocomplete(document.getElementById("myInput2"), cities);
            autocomplete(document.getElementById("myInput3"), cities);
            autocomplete(document.getElementById("myInput4"), cities);
            </script>
            
</body>
</html>
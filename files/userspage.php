<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>User-sTAKEkar</title>
    <link rel="stylesheet" href="styles1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div>
    <?php include("usernav.php") ?>
    </div>
    <div id="main">
        <h1 style="text-align: center; font-weight: 1500; color: aliceblue; margin-top: 0rem; color:blue; opacity: 0.5;">Your ride. Your choice.</h1>
        <div class="fcontainer">
            <div class="inputs">
                <form autocomplete="off" action="userfind.php" method="POST">
                  <div class="autocomplete">
                    <input id="myInput" type="text" name="dep" placeholder="Leaving from...">
                  </div>
                  <div class="autocomplete">
                    <input id="myInput1" type="text" name="dest" placeholder="Going to...">
                  </div>
                  <div class="autocomplete">
                    <input id="myInput2" type="date" name="date">
                  </div>
                  <div class="autocomplete">
                    <button type="submit" class="button1">Find a ride</button>
                  </div> 
                </form>
            </div>
        </div>

    </div>

    <div class="block" style="max-width: 50%;">
        <img src="offer.svg" alt="" style="position: absolute; right: 55%;">
       <div class="blocklet" style="position: absolute; right: 0;">
           <h3 >Driving a car soon?</h3>
           <p>Lets make its least expensive.</p>
           <button class="button" onclick="document.location='form.php'">offer</button>
       </div>
      </div>
    <br><br>
    <div class="middle">
        <br>
        <h1>Go literally anywhere.<br>
            From anywhere.</h1><br>
        <div class="containers">
            <h3> Smart</h3>
            <p>With access to millions of journeys, you<br> 
                can quickly find people nearby travelling your way.</p>
        </div>
        <div class="containers">
            <h3>Simple</h3>
           <p>Enter your exact address to find the perfect ride.<br>
                Choose who you’d like to travel with. And book!</p>
        </div>
        <div class="containers">
            <h3>Seamless </h3>
            <p>Get to your exact destination, without the hassle.<br>
                No queues. No waiting around.</p>
        </div>
      </div>

      <div class="middle">
          <br>
        <h1>3 things you'll love about sTAKEkar</h1><br>
        <div class="containers">
            <h3>Choice</h3>
                    <p>We go everywhere. Literally thousands of destinations.<br>
                         No station required.</p>
        </div>
        <div class="containers">
            <h3>Carpool with confidence</h3>
                      <p>Government ID verification adds<br>
                      another level of security to member profiles.</p>
        </div>
        <div class="containers">
            <h3>Get going faster </h3>
            <p>No need to travel across town,<br>
            catch a ride leaving near you.</p>
        </div>
      </div>
      <?php include("footer.php") ?>
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
"Cheepurupalli","Palasa","Srikurmam","Palakonda","Rajam","Kolkata","Kharagpur","Durgapur"];

    autocomplete(document.getElementById("myInput"), cities);
    autocomplete(document.getElementById("myInput1"), cities);
    </script>
</body>
</html>
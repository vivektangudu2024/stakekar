<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us-sTAKEkar</title>
    <style>
        .body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 400;
            color: lightslategray;
            box-sizing: border-box;
        }
        .body{
            background-color: #f5f4f4;
            margin: auto;
            display: flex;
            justify-content: center;
            overflow: hidden;
        }
        .page{
            background-color: #ffffff;
            width: 60%;
            height: 60rem;
            margin: 5rem;
            padding: 4rem;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
            border-radius: 5%;
        }
        .blog-content ul{
            list-style-type: square;
            line-height: 2rem;
            font-size: large;
            text-align: initial;
            margin-left: 3%;
        }
        .blog-heading{
            margin-top: 4rem;
            margin-bottom: 2rem;
            line-height: 2.3rem;
        }
        .blog-content{
            line-height: 3rem;
        }
    </style>
</head>
<body>
    <div>
        <?php include("nav.php") ?>
    </div>
    
    <div class="body">
        <div class="page">
            <h1 style="color: black; text-align:center;">ABOUT US</h1>
            <div class="blog-heading">
            
            <h2>sTAKEkar at a glance</h2>
            <p style="font-size: large;">sTAKEkar is a trusted community marketplace that connects drivers with empty seats to co-travellers looking for a ride. 
                Over 12 million people use sTAKEkar every quarter creating an entirely new, people-powered network.
                With a dedicated customer service, a state of the art web and mobile platform, and a fast-growing community of users,
                sTAKEkar is making travel social, money-saving and more efficient for millions of members.</p>
            <br>
            </div>
            <div class="blog-content">
                <h2>Company Metrics</h2>
                <ul>
                <li>40 million members</li>
                <li>22 countries</li>
                <li>12 million travellers per quarter</li>
                <li>an estimated INR 2000 crore saved by our car owners every year</li>
                <li>an estimated 1,000,000 tons of CO2 saved</li>
                <li>average car occupancy 2.8 people (vs 1.6 average)</li>
                <li>over 30 million app downloads (iPhone and Android)</li>
                <li>4 Million Facebook fans (all Facebook pages together)</li>
                </ul>
            </div>
        </div>
    </div>
    <div style="margin-top: -6rem;">
        <?php include ("footer.php") ?>
    </div>
</body>
</html>
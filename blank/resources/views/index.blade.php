<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_blank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body{
            height: auto;
        }
        .banner {
            background-image: url("/images/peakpx.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .box {
            width: 12.2%;
            height: 50%;
            border-radius: 120px;
            background-color: #FFC0CB;
            color: white;
            font-size: 2rem;
            border: 4px solid white;
        }
        .mid {
            width: 98vw;
            height: 300px;
            /*Making the container a flexbox*/
            display: flex;
            /*Making equal spaced divs*/
            justify-content: space-between;
        }
    </style>
    <div id="banner" class="banner d-flex container p-1 justify-content-between" style="height:550px;">
        <div>
            <div class="col-md-12 m-3"style="border: 3px solid white; padding:5px;">
                <h2 style="color: white;">&nbsp;&nbsp;___blank</h2>
            </div>
        </div>
        <div class="d-block col-md-8 justify-content-center">
            <div class="col-md-12 d-flex">
                <div class="col-md-4 p-4 text-center">
                    <h5><a style="text-decoration: none; color:white;" href="">Home</a></h5>
                </div>
                <div class="col-md-4 p-4 text-center">
                    <h5><a style="text-decoration: none; color:white;" href="">About Us</a></h5>
                </div>
                <div class="col-md-4 p-4 text-center">
                    <h5><a style="text-decoration: none; color:white;" href="">Contact Us</a></h5>
                </div>
            </div>
            <div class="mt-5" style="height: 300px;
            /* From https://css.glass */
            background: rgba(0, 0, 0, 0.2);
            border-radius: 0px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-top: 3px solid white;
            border-bottom: 3px solid white;
            ">
                <div class="m-2 p-3">
                    <h2 class="text-white">What is Lorem Ipsum?</h2>
                    <p class="text-white"style="text-align: justify;
                     text-justify: inter-word; font-size: 22x;">
                    Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's
                     standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    <div>
                        <button style="background-color:#FFC0CB;" class="btn btn-outline-white btn-dark text-dark">Buy Now</button>
                    </div>
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-center">
                    <select style="border-radius-top-left:20px;" class="form-select" name="" id="">Category
                        <option value="" disabled>Category
                        </option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    <div class="input-group w-60">
                        <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        aria-label="Example input"
                        aria-describedby="button-addon1"
                        />
                        <button style="background-color:#FFC0CB;" class="btn btn-outline-white btn-dark text-dark" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                            Go!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1 m-1 p-2">
            <button type="button" class="btn border border-wh" style="background-color:#FFC0CB;">Login</button>
        </div>
    </div>
    <div class="container mid mt-1 p-3">
        <div class="box">

        </div>
         <div class="box">

        </div>
         <div class="box">

        </div>
         <div class="box">

        </div>
    </div>
        <!-- <div class="r">
            <h1>This is the HOMEPAGE</h1>
        </div> -->

</body>
</html>
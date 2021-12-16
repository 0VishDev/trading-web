<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include('include/link.php') ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        body {
            font-family: Montserrat;
            font-size: 12px;
            text-align: center;
            padding: 50px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        } 

        .count {
          display: block;
          font-size: 24px;
          color: #f2f2f2;
          padding: 0px;
          font-weight: 600;
          width: 335px;
        }

        .container-count {
          
        }
    </style>
    
</head>
    
    <!-- Auto Icreament -->
    <div class="container-count">
        <div class="row">
            <div class="col-sm-12 col-md-3 count-sec">
                <h3>No. Of Users</h3>
                 <span class="count text-centert" style="color:green;">100</span>
            </div>
            <div class="col-sm-12 col-md-3">
                <span class="count ">100</span>
            </div>
            <div class="col-sm-12 col-md-3">
                 <span class="count">100</span>
            </div>
            <div class="col-sm-12 col-md-3">
                  <span class="count">100</span>
            </div>
        </div>
    </div>
        <div class=container-count>
            <span class="count" style="margin-right:30px;">71441670</span>
            <span class="count">2130735</span>
            <span class="count">4523383</span>
            <span class="count">9332313</span>
        </div>
    <!-- End Auto Increment -->
	<body class="goto-here">
	    <?php include('include/header.php')  ?>
            <div class="hero-wrap hero-bread" style="background-image: url('images/slider/contact-us.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact us</span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container-fluid">
            <div class="row d-flex mb-5 contact-info" >
                <div class="w-100"></div>
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p class="text-justify"><span><b>Address:</b></span> 11-1-382 Street no 6 Sithapalmandi Secunderabad </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+91 9490809393</a></p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="mailto:chauhantreding9@gmail.com">slcinternationaltrade@gmail.com</a></p>
                    </div>
                </div>
                
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="send.php" class="bg-white p-5 contact-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder=" Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" placeholder="Mobile No.">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3806.710731561578!2d78.51774081482654!3d17.425664388055704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s11-1-382%20Street%20no%206%20Sithapalmandi%20Secunderabad!5e0!3m2!1sen!2sin!4v1626950195009!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php')  ?>

    <script>
        Number.prototype.format = function(n) {
            var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
            return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
        };

        $('.count').each(function () {
            $(this).prop('counter', 0).animate({
                counter: $(this).text()
            }, {
                duration: 10000,
                easing: 'easeOutExpo',
                step: function (step) {
                    $(this).text('' + step.format());
                }
            });
        });
    </script>
	</body>
</html>
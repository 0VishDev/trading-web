<!DOCTYPE html>
<html>
<head>
	<title>TESTING</title>
	 <?php  include('include/link.php') ?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
</head>
<body>
	<?php include('include/header.php')  ?>

	
	<a  href="about3.mp4" type="btn" class="btn btn-primary btn-md popup-vimeo" style="float:right;">Interview</a>



                <a  type="btn" class="btn btn-success btn-sm "><span class='button'> Hover <br>Me</span>

                     <div class='popup'>
                         <div>hiii</div>
                    </div>
                </a>
    <script>
        $(function() {
            $('.popup-youtube, .popup-vimeo').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>
</body>
</html>
<html lang="en">

<head>
  <title>Jquery - get ip address</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>

  <h1>Your Ip Address : <span class="ip"></span></h1>

  <script type="text/javascript">
    $(document).ready(function() {
      $.getJSON("https://api.ipify.org/?format=json", function(e) {
        $('.ip').text(e.ip);
      });
    });
  </script>
  
  
</body>

</html>
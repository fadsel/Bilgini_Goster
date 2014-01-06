<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mambo.js"></script>
<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->

<script>

</script>
<script>

</script>
</div><!-- CONTAINER -->
<footer style="color: #ffffff" >
    <div style="height: 10px;background-color: #cda11c;"></div>
    <div class="row" style="background-color: #7c2a17;">
<div class="container">
    <p class="navbar-brand pull-right"><span class="pull-right"> <b>©
        <?php
        $date = new DateTime();
        if($date->format('Y')=='2013'){
        echo $date->format('Y')." ";
        }else{
            echo "2013 - ",$date->format('Y')." ";
        }


        ?></b>Bilgini Göster </span><br>
       The difference between <b>Certificate</b> & <b>Knowledge</b>
    </p>
<p style="padding-top: 18px">Privacy Policy | FAQ | Contact Us</p></div>

    </div>
</footer>
    </body>
</html>
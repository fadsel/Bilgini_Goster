
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand pull-left"   href="index.php" style="padding: 5px; "><span><img class="" style="width:23%;" src="./img/logo_round.png" /></span> Bilgini Göster</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li
                class="
            <?php
            if(isset($page_id) && $page_id=="home")
                {
                    echo "active";
                }
            else
                {
                    echo "";
                }?>
                ">
            <a href="index.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modules <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Tasks</a></li>
                    <li><a href="#">Soru Sor</a></li>
                    <li class="divider"></li>
                    <li><a href="#">News Feed</a></li>
                    <li><a href="#">Plagiarism</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Documantasyon</a></li>
                    <li><a href="#">CVs</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="<?php if(isset($page_id) && $page_id=="wiki"){echo "active";}
            else { echo "";}?>"><a href="wiki.php">Wiki</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sosyal Media <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Linked In</a></li>
                    <li class="divider"></li>
                    <li><a href="#">G+</a></li>
                    <li><a href="#">Pin Interest</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<br><br><br><br>

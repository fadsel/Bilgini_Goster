<div class="col-lg-9" id="verticalLine">
    <div class="row">
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>You have <span class="label label-primary">5</span> new Notifications</h4></div>
    </div>

        <div class="row">
        <h2><b>Welcome to your News Feed</b></h2> <hr>
            <br><p class="lead">This is a place where you can find all of your activities for the mean time  , i.e plagiarism , your job offers e.t.c</p>
        </div>




    <br>


    <div class="row">
        <img style="border: 1px solid #ae4928;" src="./img/test/cover.jpg" />
    </div><br>
    <div class="row">
        <h2><b>Pragiarism</b></h2>
        <hr>
        <div class="row"><div class=""><h2>What is it?</h2><p class="lead ">This part lets you compare files and see if their is any relationship in them i.e %Copy</p></div><br>
            <div class="row">

                <div class="pull-right">
                    <button class="btn btn-safi">
                        <i class="glyphicon glyphicon-refresh"></i> Refresh
                    </button>
                    <button class="btn btn-safi">
                        <i class="glyphicon glyphicon-cloud-upload"></i> Add Document
                    </button>
                    <button class="btn btn-safi">
                        <i class="glyphicon glyphicon-filter"></i> Filter
                    </button>
                    <button class="btn btn-safi">
                        <i class="glyphicon glyphicon-tasks"></i> Add Tasks
                    </button>

                    <button class="btn btn-safi">
                        <i class="glyphicon glyphicon-map-marker"></i> Change Deadlines
                    </button>

                    <button class="btn btn-safi"
                            data-toggle="modal" data-target="#myModal">
                        <i class="glyphicon glyphicon-dashboard"></i> Settings
                    </button>

                </div>
            </div><br>
            <i class="pull-right" ><i class="glyphicon glyphicon-eye-open"></i> Click To toggle Document Details</i></div>

        <?php
            $name="Fahad";
            $subject = "Data Structures";
            $marks = "23";
            include('plagiarism_row.php');
        ?>

        <?php
            $name="Abdullah";
            $subject = "Veriler";
            $marks = "34";
            include('plagiarism_row.php');
        ?>

        <?php
            $name="Abromo";
            $subject = "Veriler";
            $marks = "56";
            include('plagiarism_row.php');
        ?>
        <?php
            $name="Ceylan";
            $subject = "Data Structures";
            $marks = "45";
            include('plagiarism_row.php');
        ?>

        <?php
            $name="Bayramov";
            $subject = "Veriler";
            $marks = "44";
            include('plagiarism_row.php');
        ?>

        <?php
            $name="Ali";
            $subject = "Veriler";
            $marks = "34";
            include('plagiarism_row.php');
        ?>

    </div>


<br>



</div><!-- RIGHT COLUMN -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Settings</h3>
            </div>
            <div class="modal-body">
            <div class="row"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
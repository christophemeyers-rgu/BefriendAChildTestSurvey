<?php
/**
 * Created by PhpStorm.
 * User: chukwudiezekwesili
 * Date: 29/03/2016
 * Time: 13:42
 */
//THIS PAGE IS DESTINATION FOR ADMIN WHEN LOGGED IN AND TRYING TO ACCESS INDEX.PHP, AND WHEN CLICKING LINKS LEADING HERE
include 'functions.php';
//If no session exists, admin is sent to index.php
session_start();
if(!isset($_SESSION['ad_email'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Administrator</title>
    <link rel="stylesheet" href="../Chukwudi/cssadminpage/screen.css" type="text/css" media="screen" title="default" />

    <link rel="stylesheet" media="all" type="text/css" href="../Chukwudi/cssadminpage/pro_dropline_ie.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--  jquery core -->
    <script src="../Chukwudi/jsadminpage/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

    <!--  styled select box script version 2 -->
    <script src="../Chukwudi/jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
            $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
        });
    </script>

    <!--  styled select box script version 3 -->
    <script src="../Chukwudi/jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
        });
    </script>

    <!--  styled file upload script -->
    <script src="../Chukwudi/jsadminpage/jquery/jquery.filestyle.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $("input.file_1").filestyle({
                image: "images/forms/upload_file.gif",
                imageheight : 29,
                imagewidth : 78,
                width : 300
            });
        });
    </script>


    <!--  date picker script -->
    <link rel="stylesheet" href="../Chukwudi/cssadminpage/datePicker.css" type="text/css" />
    <script src="../Chukwudi/jsadminpage/jquery/date.js" type="text/javascript"></script>
    <script src="../Chukwudi/jsadminpage/jquery/jquery.datePicker.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        $(function()
        {

// initialise the "Select date" link
            $('#date-pick')
                .datePicker(
                    // associate the link with a date picker
                    {
                        createButton:false,
                        startDate:'01/01/2005',
                        endDate:'31/12/2020'
                    }
                ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );

            var updateSelects = function (selectedDate)
            {
                var selectedDate = new Date(selectedDate);
                $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
                $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
                $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
            }
// listen for when the selects are changed and update the picker
            $('#d, #m, #y')
                .bind(
                    'change',
                    function()
                    {
                        var d = new Date(
                            $('#y').val(),
                            $('#m').val()-1,
                            $('#d').val()
                        );
                        $('#date-pick').dpSetSelected(d.asString());
                    }
                );

// default the position of the selects to today
            var today = new Date();
            updateSelects(today.getTime());

// and update the datePicker to reflect it...
            $('#d').trigger('change');
        });
    </script>



</head>
<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">

    <!-- Start: page-top -->
    <div id="page-top">



        <div class="clear"></div>

    </div>
    <!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class="clear">&nbsp;</div>

<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">
    <!--  start nav-outer -->
    <div class="nav-outer">

        <!-- start nav-right -->
        <div id="nav-right">

            <div class="nav-divider">&nbsp;</div>
            <div class="showhide-account"><img src="../Chukwudi/imagesadminpage/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
            <div class="nav-divider">&nbsp;</div>
            <a href="../Chukwudi/logout.php" id="logout"><img src="../Chukwudi/imagesadminpage/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
            <div class="clear">&nbsp;</div>


        </div>
        <!-- end nav-right -->


        <!--  start nav -->
        <div class="nav">
            <div class="table">

                <ul class="select"><li><a href="../Chukwudi/adminhome.php"><b>Home</b></a>

                    </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>



                <ul class="select"><li><a href="#nogo"><b>User Login Setup</b></a>

                        <div class="select_sub">
                            <ul class="sub">
                                <li><a href="../Chukwudi/createlogin.php">Create User Login</a></li>
                                <li><a href="../Chukwudi/delete-user.php">Delete User Login</a></li>
                            </ul>
                        </div>

                    </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>

                <ul class="select"><li><a href="#nogo"><b>Report</b></a>

                        <div class="select_sub">
                            <ul class="sub">
                                <li><a href="view.php">Full Report</a></li>
                                <li><a href="../Chukwudi/view%20report.php">Survey Query</a></li>
                                <li><a href="#nogo">Delete Report</a></li>

                            </ul>
                        </div>

                    </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>


                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--  start nav -->

    </div>
    <div class="clear"></div>
    <!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
    <!-- start content -->
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Details</th>
            </tr>
            </thead>
            <?php
            include("db_connection.php");

            $id = $_GET['vol_id'];

            //number of submissions
            $sql_submissions = "select submission_id from submissions where vol_id =$id";

            //how much money did you spend?
            $sql_money_sum = "select sum(answer_text_req), `answers`.question_id from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=11";
            $sql_money_min = "select min(answer_text_req), `answers`.question_id from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=11";
            $sql_money_max = "select max(answer_text_req), `answers`.question_id from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=11";
            $sql_money_avg = "select avg(answer_text_req), `answers`.question_id from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=11";

            $output_sum = $db->query($sql_money_sum);
            $output_min = $db->query($sql_money_min);
            $output_max = $db->query($sql_money_max);
            $output_avg = $db->query($sql_money_avg);

            $sum = mysqli_fetch_array($output_sum);
            $min = mysqli_fetch_array($output_min);
            $max = mysqli_fetch_array($output_max);
            $avg = mysqli_fetch_array($output_avg);

            //how much fun did you have today?
            $sql_fun_happy = "select count(answer_text_req) from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=21 and answer_text_req=0";
            $sql_fun_normal = "select count(answer_text_req) from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=21 and answer_text_req=1";
            $sql_fun_sad = "select count(answer_text_req) from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=21 and answer_text_req=2";

            $output_happy = $db->query($sql_fun_happy);
            $output_normal = $db->query($sql_fun_normal);
            $output_sad = $db->query($sql_fun_sad);

            $happy = mysqli_fetch_array($output_happy);
            $normal = mysqli_fetch_array($output_normal);
            $sad = mysqli_fetch_array($output_sad);

            //did you learn anything new?
            $sql_learn_yes = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=31 and answer_text_req=1";
            $sql_learn_no = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=31 and answer_text_req=0";

            $output_learn_yes = $db->query($sql_learn_yes);
            $output_learn_no = $db->query($sql_learn_no);

            $learn_yes = mysqli_fetch_array($output_learn_yes);
            $learn_no = mysqli_fetch_array($output_learn_no);

            //did you eat something healthy?
            $sql_healthy_yes = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=41 and answer_text_req=1";
            $sql_healthy_no = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=41 and answer_text_req=0";

            $output_healthy_yes = $db->query($sql_healthy_yes);
            $output_healthy_no = $db->query($sql_healthy_no);

            $healthy_yes = mysqli_fetch_array($output_healthy_yes);
            $healthy_no = mysqli_fetch_array($output_healthy_no);

            //would you do it again?
            $sql_again_yes = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=51 and answer_text_req=1";
            $sql_again_no = "select answer_text_req from answers, questions where submission_id in (select submission_id from submissions where vol_id =$id) and `answers`.question_id = `questions`.question_id and `answers`.question_id=51 and answer_text_req=0";

            $output_again_yes = $db->query($sql_again_yes);
            $output_again_no = $db->query($sql_again_no);

            $again_yes = mysqli_fetch_array($output_again_yes);
            $again_no = mysqli_fetch_array($ouput_again_no);

            if($db->connect_errno){
                die('Connectfailed['.$db->connect_error.']');
            }

            $results = $db->query($sql);

            if(mysqli_num_rows($results)>0){

                $counter = 0;
                while ($row= mysqli_fetch_array($results))
                {
                    $counter++;

                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td>Total amount of money spent was <?php echo $sum[0]; ?></td>
                        <td>The average spending was <?php echo $avg[0]; ?> <br/>The minimum amount spent was <?php echo $min?> <br/>The maximum amount spent was <?php echo $max?></td>
                    </tr>
                    </tbody>
                    <?php

                }
            }

            ?>
        </table>
    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>

<!-- start footer -->
<div id="footer">
    <!-- <div id="footer-pad">&nbsp;</div> -->
    <!--  start footer-left -->
    <div id="footer-left">
        Copyright 2016 Befriend A Child <a href="">http://www.befriendachild.org.uk/</a>. All rights reserved.</div>
    <!--  end footer-left -->
    <div class="clear">&nbsp;</div>
</div>
<!-- end footer -->

</body>
</html>
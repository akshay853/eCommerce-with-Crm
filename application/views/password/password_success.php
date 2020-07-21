<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .form-gap {
        padding-top: 70px;
    }
</style>
<script type="text/javascript">
    setTimeout(function () {
        window.location.href = '<?php echo $base_url;?>';
    },5000); // 5 seconds



    var seconds = 5;
    function secondPassed() {
        var minutes = Math.round((seconds - 30)/60);
        var remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }
        document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
        if (seconds == 0) {
            clearInterval(countdownTimer);
            document.getElementById('countdown').innerHTML = "Buzz Buzz";
        } else {
            seconds--;
        }
    }

    var countdownTimer = setInterval('secondPassed()', 1000);



    </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="form-gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Reset Done!</h2>
                        <p></p>
                        <br class="panel-body">

                            Password Reset Success</br>
                            You will be redirected to home in  <span id="countdown" class="timer"></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form POST method</title>
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="test.css">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
</head>
<body>

<?php 
/*$myName  = $_POST['name']; 
$myEmail = $_POST['email']; 
$myPhone = $_POST['phone']; 

$myStep  = $_POST['step'];
*/
$myName  = isset($_POST['address']) ? $_POST['address'] : ''; 
$myEmail = isset($_POST['email']) ? $_POST['email'] : ''; 
$myPhone = isset($_POST['phone']) ? $_POST['phone'] : ''; 

$myStep  = isset($_POST['step']) ? $_POST['step'] : 1;

if (!isset($myStep)) { $myStep = 1; }
$myProgrss = 0;
if (isset($myStep) && $myStep == 1) { $myProgrss = 25; }
if ($myStep == 2) { $myProgrss = 50; }
if ($myStep == 3) { $myProgrss = 75; }
if ($myStep == 4) { $myProgrss = 100; }

?>
<div class="pBarContainer">
    <div class="pBar" style="width:<?php echo $myProgrss; ?>%"><?php echo $myProgrss; ?></div>
</div>

<?php 
if ( ($myStep == 1) || (!$myStep) ) { ?>
    
    <div class="container step-one" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
        <h2>We're located in...</h2>
        <input type="text" name="address"class="form-control" placeholder="Enter your address"><br>
        <br>
        <input type="hidden" name="step" value="2">
        <input type="submit">
        <br>
    </form>
    </div>
    
<?php }else if ($myStep == 2) {  ?>
    <div class="container step-two" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
        <input type="text" name="email" class="form-control"  placeholder="Enter your email"><br>
        <br>
        <input type="hidden" name="step" value="3">
        <input type="hidden" name="name" value="<?php echo $_POST['address']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <input type="submit">
        <br>
    </form>
    </div>
<?php }else if ($myStep == 3) {  ?>
    <div class="container step-three" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
        <input type="text" name="phone" class="form-control"  placeholder="Enter your phone"><br>
        <br>
        <input type="hidden" name="step" value="4">
        <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <input type="submit">
        <br>
    </form>
    </div>
<?php } ?>

<?php if ($myStep == 4) {  ?>
    <div class="container step-four" style="text-align: center;">
        <h1 style="color:green;">Thanks!</h1>
    </div>
    <div class="container" style="text-align: center;">
    <?php 
    if (isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phone'])) {
        echo "<h1>Hello " .$_POST['address'] . "<br> your email is " . $_POST['email'] . "</br> and your phone number is " . $_POST['phone'] ."</h1>"; 
    } ?>
    </div>
<?php } ?>
<!-- Bootstrap JS -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

</body>
</html>
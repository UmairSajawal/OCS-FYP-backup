<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form POST method</title>
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="test.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- calender CSS cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>

<?php 
$myName  = isset($_POST['address']) ? $_POST['address'] : ''; 
$myMeal = isset($_POST['meal']) ? $_POST['meal'] : ''; 
$myPeople = isset($_POST['people']) ? $_POST['people'] : ''; 
$myTime = isset($_POST['time']) ? $_POST['time'] : '';
$myCuisine = isset($_POST['cuisine']) ? $_POST['cuisine'] : '';
$myStove = isset($_POST['stove']) ? $_POST['stove'] : '';
$myBurners = isset($_POST['burners']) ? $_POST['burners'] : '';
$myOven = isset($_POST['oven']) ? $_POST['oven'] : '';
$myDay = isset($_POST['day']) ? $_POST['day'] : '';
$myPackage = isset($_POST['package']) ? $_POST['package'] : '';
$myDietary = isset($_POST['dietary']) ? $_POST['dietary'] : '';
$mySpecifically = isset($_POST['specifically']) ? $_POST['specifically'] : '';
$myChef = isset($_POST['chef']) ? $_POST['chef'] : '';
$myContact = isset($_POST['contact']) ? $_POST['contact'] : '';
$mealType = isset($_POST['mealType']) ? $_POST['mealType'] : '';



$myStep  = isset($_POST['step']) ? $_POST['step'] : 1;
if (!isset($myStep)) { $myStep = 1; }
$myProgress = 0;
if (isset($myStep) && $myStep == 1) { $myProgress = 6; }
if ($myStep == 2) { $myProgress = 12; }
if ($myStep == 3) { $myProgress = 18; }
if ($myStep == 4) { $myProgress = 24; }
if ($myStep == 5) { $myProgress = 30; }
if ($myStep == 6) { $myProgress = 36; }
if ($myStep == 7) { $myProgress = 42; }
if ($myStep == 8) { $myProgress = 48; }
if ($myStep == 9) { $myProgress = 54; }
if ($myStep == 10) { $myProgress = 61; }
if ($myStep == 11) { $myProgress = 68; }
if ($myStep == 12) { $myProgress = 75; }
if ($myStep == 13) { $myProgress = 82; }
if ($myStep == 14) { $myProgress = 91; }
if ($myStep == 15) { $myProgress = 100; }
?>

<div class="pBarContainer">
    <div class="pBar" style="width:<?php echo $myProgress; ?>%"><?php echo $myProgress; ?>%</div>
</div>

<?php 
if ( ($myStep == 1) || (!$myStep) ) { ?>
    
    <div class="container step-one" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
        <h2>We're located in...</h2>
        <input type="text" name="address" class="form-control" placeholder="Enter your address"><br>
        <br>
        <input type="hidden" name="step" value="2">
        <input type="submit">
        <br>
    </form>
    </div>
    
<?php }else if ($myStep == 2) {  ?>
    <div class="container step-two" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
        <h2>We're looking for a Private Chef for...</h2><br>
        <button class="btn-1">One-time experience</button><br><br><br>
        <button class="btn-2">Multiple meals</button><br><br>
        <br>
        <input type="hidden" name="step" value="3">
        <input type="hidden" name="name" value="<?php echo $_POST['address']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>
<?php }else if ($myStep == 3) {  ?>
    <div class="container step-three" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>We are...</h1>
        <button class="btn-a">2 people from Rs.15000</button><br><br>
        <button class="btn-a">3 to 6 people from Rs.25000</button><br><br>
        <button class="btn-a">7 to 12 people from Rs.30000</button><br><br>
        <button class="btn-a">30+ people from Rs.40000</button><br><br>
        <br>
        <input type="hidden" name="step" value="4">
        <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
        <input type="hidden" name="meal" value="<?php echo $_POST['meal']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>


<?php }else if ($myStep == 4) {  ?>
    <div class="container step-four" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>It's for...</h1>
        <button class="btn-b">
        <i class="fas fa-sun"></i> Lunch
        </button><br><br>
        <button class="btn-b">
        <i class="fas fa-moon"></i> Dinner
        </button><br><br>
        <br>
        <input type="hidden" name="step" value="5">
        <input type="hidden" name="meal" value="<?php echo $_POST['meal']; ?>">
        <input type="hidden" name="people" value="<?php echo $_POST['people']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>


<?php }else if ($myStep == 5) {  ?>
    <div class="container step-five" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>Our preferred cuisine is...</h1>
        <button class="btn-c">Local</button>         
        <button class="btn-c">French</button> <br><br>

        <button class="btn-c">Italian</button>       
        <button class="btn-c">Chinese</button> <br><br>

        <button class="btn-c">Mediterranean</button> 
        <button class="btn-c">Sea food/Fish</button> <br><br>

        <button class="btn-c">Desi</button>          
        <button class="btn-c">Surprise me</button><br><br>
        <br>
        <input type="hidden" name="step" value="6">
        <input type="hidden" name="people" value="<?php echo $_POST['people']; ?>">
        <input type="hidden" name="time" value="<?php echo $_POST['time']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>

<?php }else if ($myStep == 6) {  ?>
    <div class="container step-six" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>Our stove top is...</h1>
        <button class="btn-d">Electric</button><br><br>
        <button class="btn-d">induction</button><br><br>
        <button class="btn-d">Gas</button><br><br>
        <br>
        <input type="hidden" name="step" value="7">
        <input type="hidden" name="time" value="<?php echo $_POST['time']; ?>">
        <input type="hidden" name="cuisine" value="<?php echo $_POST['cuisine']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>

<?php }else if ($myStep == 7) {  ?>
    <div class="container step-seven" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>We are...</h1>
        <button class="btn-e">2 stoves</button><br><br>
        <button class="btn-e">3 stoves</button><br><br>
        <button class="btn-e">4 stoves</button><br><br>
        <button class="btn-e">5 stoves</button><br><br>
        <br>
        <input type="hidden" name="step" value="8">
        <input type="hidden" name="cuisine" value="<?php echo $_POST['cuisine']; ?>">
        <input type="hidden" name="stove" value="<?php echo $_POST['stove']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>

<?php }else if ($myStep == 8) {  ?>
    <div class="container step-eight" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>We have an oven..</h1>
        <button class="btn-f1">Yes</button> <br><br>
        <button class="btn-f1">No</button> <br><br>
        <br>
        <input type="hidden" name="step" value="9">
        <input type="hidden" name="stove" value="<?php echo $_POST['stove']; ?>">
        <input type="hidden" name="burners" value="<?php echo $_POST['burners']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>
    <?php }else if ($myStep == 9) {  ?>
    <div class="container step-nine" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>The day...</h1><br><br>
        <label for="date" class="labDate">Select a Date:</label><br><br>
        <input type="text" id="date" name="date" class="inpDate" placeholder="Select Date" data-input><br><br>

        <br>
        <input type="hidden" name="step" value="10">
        <input type="hidden" name="burners" value="<?php echo $_POST['burners']; ?>">
        <input type="hidden" name="oven" value="<?php echo $_POST['oven']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <input type="submit">
        <br>
    </form>
    </div>

    <?php }else if ($myStep == 10) {  ?>
    <div class="container step-ten" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>We're looking for...</h1>
        <button class="btn-g01"><b>Basic</b> <br>Rs.15000-20000 per person</button> <br><br>
        <button class="btn-g01"><b>Indulge</b> <br>Rs.25000-30000 per person</button> <br><br>
        <button class="btn-g01"><b>Exclusive</b> <br>Rs.35000-40000 per person</button> <br><br>
        <br>
        <input type="hidden" name="step" value="11">
        <input type="hidden" name="oven" value="<?php echo $_POST['oven']; ?>">
        <input type="hidden" name="day" value="<?php echo $_POST['day']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>

    <?php }else if ($myStep == 11) {  ?>
    <div class="container step-eleven" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>Any dietary restrictions?.</h1>
        <button class="btn-h0" id="yesButton">Yes</button><br><br>
        <button class="btn-h0" id="noButton">No</button><br><br>
        <br>
        <input type="hidden" name="step" id="stepInput" value="12">
        <input type="hidden" name="day" value="<?php echo $_POST['day']; ?>">
        <input type="hidden" name="package" value="<?php echo $_POST['package']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <br>
    </form>
    </div>


    <?php }else if ($myStep == 12) {  ?>
    <div class="container step-twelve" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>Specifically...</h1>
        <input type="button" class="btnI0" id="dairy" value="Dairy products" onclick="toggleSelection('dairy')"><br><br>
        <input type="button" class="btnI0" id="gluten" value="Gluten" onclick="toggleSelection('gluten')"><br><br>
        <input type="button" class="btnI0" id="nuts" value="Nuts" onclick="toggleSelection('nuts')"><br><br>
        <input type="button" class="btnI0" id="vegetarian" value="Vegetarian" onclick="toggleSelection('vegetarian')"><br><br>
        <textarea class="message-input" placeholder="Type your message here"></textarea>
        <br>
        <input type="hidden" name="step" value="13">
        <input type="hidden" name="package" value="<?php echo $_POST['package']; ?>">
        <input type="hidden" name="dietary" value="<?php echo $_POST['dietary']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        
        <input id="submitBtn" type="submit" value="Submit">
        <br>
    </form>
    </div>
    <script>
        const selectedDietaryRestrictions = [];

function toggleSelection(dietary) {
    const button = document.getElementById(dietary);
    const index = selectedDietaryRestrictions.indexOf(dietary);

    if (index > -1) {
        // If already selected, deselect it
        selectedDietaryRestrictions.splice(index, 1);
        button.classList.remove('selected');
    } else {
        // If not selected, select it
        selectedDietaryRestrictions.push(dietary);
        button.classList.add('selected');
    }

    document.getElementById('dietaryInput').value = selectedDietaryRestrictions.join(', ');
}

// Add CSS for selected class
const style = document.createElement('style');
style.innerHTML = `
    .selected {
        border: 2px solid orange;
        color: black;
    }
`;
document.head.appendChild(style);

    </script>

<?php }else if ($myStep == 13) {  ?>
    <div class="container step-thirteen" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>We'd like the chef to know...</h1>
    <textarea class="message-input" placeholder="Type your message here"></textarea>
        <br>
        <input type="hidden" name="step" value="14">
        <input type="hidden" name="dietary" value="<?php echo $_POST['dietary']; ?>">
        <input type="hidden" name="specifically" value="<?php echo $_POST['specifically']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <input type="submit">
        <br>
    </form>
    </div>

    <?php }else if ($myStep == 14) {  ?>
    <div class="container step-fourteen" style="text-align: center;">
    <form action="test.php?step=<?php echo $myStep; ?>" method="POST">
    <h1>Contact information</h1>
    <input type="text" name="name" class="writeInfo" placeholder="Enter your name"><br><br>
    <input type="text" name="email" class="writeInfo" placeholder="Enter your email"><br><br>
    <input type="text" name="phone" class="writeInfo" placeholder="Enter your phone number"><br>

        <br>
        <input type="hidden" name="step" value="15">
        <input type="hidden" name="specifically" value="<?php echo $_POST['specifically']; ?>">
        <input type="hidden" name="chef" value="<?php echo $_POST['chef']; ?>">
        <button class="btnBack" type="button" onclick="history.back()">Back</button>
        <input type="submit" value="Send">
        <br>
    </form>
    </div>

<?php } ?>

<?php if ($myStep == 15) {  ?>
    <div class="container step-fifteen" style="text-align: center;">
        <h1 style="color:green;">Thanks!</h1>
    </div>
    <div class="container" style="text-align: center;">
    <?php 
    if (isset($_POST['address']) && isset($_POST['meal']) && isset($_POST['people']) && isset($_POST['time']) && isset($_POST['cuisine']) && isset($_POST['stove']) && isset($_POST['burners']) && isset($_POST['oven']) && isset($_POST['day']) && isset($_POST['package']) && isset($_POST['dietary']) && isset($_POST['specifically']) && isset($_POST['chef']) && isset($_POST['contact']) && isset($_POST['mealType'])) {
        echo "<h1>Hello " .$_POST['address'] . "<br> your meal is " . $_POST['meal'] . "</br> and your time is " . $_POST['time'] . $_POST['cuisine'] . $_POST['stove'] . $_POST['burners'] . $_POST['oven'] . $_POST['day'] . $_POST['package'] . $_POST['dietary'] . $_POST['specifically'] . $_POST['chef'] . $_POST['contact'] ."</h1>"; 
    } ?>
    </div>
<?php } ?>


<script src="/final Year Project OCS/test.js"></script>
<!--calender-->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("[data-input]", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>

</body>
</html>

<html>
<head>

<?php include "header.php"; 

include "dbconfigure.php"; 
?>
</head>
<body>
<?php include "nav3.php"; ?>

<div class = container style = "margin-top: 100px">
     <div class = row>
         <div class="col-sm-4 text-center" style="background-color : lightcyan ; height : 100px ; font-size : 20pt ; font-family: cursive">
             <p style = "color : maroon">Total Problems Uploaded<p>
             <p style = "color : purple"> <?php echo totalproblems() ?><p>
         </div>
         <div class="col-sm-4 text-center" style="background-color : mistyrose ; height : 100px ; font-size : 20pt ; font-family: cursive">
             <p style = "color : maroon">Problems In Progress<p>
             <p style = "color : purple"> <?php echo totalproblemsInProgress() ?><p>
         </div>
         <div class="col-sm-4 text-center" style="background-color : wheat ; height : 100px ; font-size : 20pt ; font-family: cursive">
             <p style = "color : maroon">Problems Solved<p>
             <p style = "color : purple"> <?php echo totalproblemsCompleted() ?><p>
         </div>
     </div>  
 </div>
    </body>
   
</html>

</body>
</html>

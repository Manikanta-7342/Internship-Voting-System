<?php include ('head.php');?>

<body>

<div id="wrapper">
            <div class="text-center text-success animateuse" style="background-color: #e0ab68; font-size:25px;text-align:center; margin-top:-10px; padding-top:20px;">
                <a style="color:white; font-weight:bold; font-size:30px;">SIFF-Online Voting</a>
            </div>	
</div>

    <!-- <button><a href="logout.php">Logout</a></button> -->

<div id="page-wrapper">
        <center>
        <label>Category</label><br>
<select id="country" class="form-control" >
            <option value="">Select Category</option>
                           <?php
                           require 'dbcon.php';
                           $query =mysqli_query($conn,"SELECT * FROM category");
while($row=mysqli_fetch_array($query))
{ ?>
<option value="<?php echo $row['category_id'];?>"><?php echo $row['category'];?></option>
<?php
}
?>
            </select>
        </center>
        <div class="panel-heading" style="background-color: #e0ab68;"><center>
                Select Category</center>
                </div>
</div>
                
                <!-- <div class="panel-body" style = "background-color:; display:flex;"> -->
                <form method = "POST" action = "vote_result.php">
                   <div id = "state">
                    
                    </div>
                    
                </form>









<!-- /#page-wrapper -->

<!-- /#wrapper -->
<!-- </?php    
include ('footer.php');
?> -->

<script>
$(document).ready(function(){
$('#country').on('change', function(){
var countryID = $(this).val();
if(countryID){
    $.ajax({
        type:'POST',
        url:'ajaxData.php',
        data:'country_id='+countryID,
        success:function(html){
            $('#state').html(html);
        }
    }); 
}else{
    $('#state').html('<option value="">Select category first</option>');
}
});
});
</script>


</body>
</html>
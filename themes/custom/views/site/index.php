<div class="row-fluid">

		<ul class="thumbnails">
		<?php for($i = 1; $i <= 12; $i++) { ?>
			<li class="span3">
		    	<a href="#" id="<?php echo $i;?>" class="thumbnail">
		      		<img src="<?php echo Yii::app()->params['location']; ?>download<?php echo $i;?>.jpg" style="height: 150px;" alt="">
		    	</a>
		  	</li>
		<?php } ?>
		</ul>		
</div>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade"></div>

<script type="text/javascript">
    $(document).ready(function () {
      $(".thumbnail").live('click', function (event) {  
    	  event.preventDefault(); 
    	  //alert($(this).attr('id'));
    	  $.ajax({
          	type: 'GET',
          	url: "http://localhost/site/pg_details",
          	data:{pg_id: $(this).attr('id')},
          	beforeSend: function(){
          		$("#myModal").html("Loading...");
          		return true;
            },
          	success: function(result) {
          		if(result != "false") {
          			$("#myModal").html(result);
          			$("#myModal").modal("show");
          			return false;	
          		} 
          	}
          })	
      });
    });
</script>
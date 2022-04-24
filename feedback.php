<?php include 'includes/header.php'; ?>
<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn,$sql);
  $feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<h2>Past Feedback</h2>
<?php if(empty($feedback)): ?>
  <p class="lead mt3">No Feedback to Display</p>
  <?php endif;?>

  <?php foreach($feedback as $c): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $c['body']; ?>
       <div class="text-secondary mt-2">
         Submitted By: <?php echo $c['name'] ?> on <?php echo $c['date'] ?>
       </div>
     </div>
   </div>
  <?php endforeach ?>

   <?php include 'includes/footer.php'; ?>
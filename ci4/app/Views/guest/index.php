
<!DOCTYPE html>
<html>
<head>
<title>Comments</title>

  <body>
<section class="content">
<h2>Comments</h2>
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div class="main">
		 <h3><?= esc($guest_item['name']) ?> </h3>
         <p><b>Email: </b><?= esc($guest_item['email']) ?> </p>
         <p><b>Date: </b><?= esc($guest_item['reg_date']) ?> </p>
		 <p><b>Comment: </b><?= esc($guest_item['comment']) ?> </p>
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guests</h3>
    <p>Unable to find any guests for you.</p>
</section>
</body>
<?php endif ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Forum&display=swap');
    /* body style */
    html, body {
      background-image: url('https://giffiles.alphacoders.com/215/215595.gif');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      overflow-x: hidden;
    }
  .content .main{
    background-color: rgb(244, 178, 228);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 4px; 
    font-family: 'Forum', cursive;
    color:rgb(85, 4, 103);
    display: flex;
    flex-direction: column;
    margin: 50px 300px 30px 300px;
    padding-bottom: 200px;
  }
  .content h2{
    font-family: 'Forum', cursive;
    color: white;
    font-size: 48px;
    text-align: center;
  }
  .content h3{
    font-family: 'Forum', cursive;
    text-transform: uppercase;
    font-size: 24px;
    text-align: center;
  }
  .content p {
    padding-left: 100px;
    padding-right:100px;
    font-size: 20px;
    margin: 0px 0px 15px 0px;
  }
	</style>

<!DOCTYPE html>
<html>
<head>
<title>Feedback Form</title>
<body>


<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<div id="panel" class="panel-container">
<h2 style="font-family: 'Forum', cursive;"><b>Leave A Comment</b></h2>
<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>

    <input type="submit" name="submit" value="Submit Comment" style="font-family: 'Forum', cursive; font-size: 18px; background-color: #201f1e; border: 0; border-radius: 4px; color: rgb(193, 109, 238); cursor: pointer; padding: 20px 30px;">
</form>
</div>
<style>
    body {
      background-image: url('https://giffiles.alphacoders.com/215/215595.gif');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      overflow-x: hidden;
    }
    h2 {
        font-size: 48px;
    }
    @import url("https://fonts.googleapis.com/css?family=Muli&display=swap");
    @import url("https://fonts.googleapis.com/css?family=Monserrat&display=swap");
  * {
    box-sizing: border-box;
  }
  .panel-container {
    background-color: rgb(244, 178, 228);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 4px;
    font-size: 24px;
    font-family: 'Forum', cursive;
    color:rgb(85, 4, 103);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    line-height: 60px;
    padding-bottom: 50px;
    margin: 100px 300px -650px 300px;
  }

  .panel-container b {
    line-height: 20px;
  }

  .panel-container p {
    margin: 10px 0;
    line-height: 20px;
  }

  .fa-heart {
    color: rgb(126, 18, 204);
    font-size: 30px;
    margin-bottom: 10px;
  }
    </style>
</body>
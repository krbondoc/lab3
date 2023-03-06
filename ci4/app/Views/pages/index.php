<!DOCTYPE html>
<html>
<head>
  <title>K's CodeLand</title>
  <section>
    <div class="left">
      <div class="column">
        <img src="https://pbs.twimg.com/media/FkcTG3cVsAEib-z?format=jpg&name=medium" width="205" height="245">
        <img src="https://pbs.twimg.com/media/FlhWpkfaYAAORz9?format=jpg&name=medium" width="205" height="245">
      </div>
      <div class="column">
        <img src="https://pbs.twimg.com/media/FlhWp2hacAEP1nH?format=jpg&name=medium" width="205" height="245">
        <img src="https://pbs.twimg.com/media/FlhWpStagAYWt9_?format=jpg&name=medium" width="205" height="245">
      </div>
    </div>
    <div class="right">
      <h1>KYIAN</h1>
      <p>Kylene Naiomi Bondoc or Kyian, is drawn to SFSSMI212 Codeland by her fascination of all things related to technology and coding. As she explores this strange and challenging world, she discovers that there are endless opportunities for learning and growth. Together with her fellow citizens at Codeland SFSSMI212, they use their coding and programming skills to push the boundaries of what is possible and make it a better place for everyone.</p>
      <!-- <span class="javafunc" style="padding-top: 40px; color:aliceblue; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 36px">Good Afternoon</span> -->
    </div>
  </section>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Forum&display=swap');
    /* body style */
    body {
      background-image: url('https://giffiles.alphacoders.com/215/215595.gif');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      overflow-x: hidden;
    }
    .left {
      width: 40%;
      margin-top: 100px;
      float: left;
    }
    .right {
      width: 60%;
      float: left;
    }
    .left .column {
      flex: 50%;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-right: 30px;
      justify-content: right;
      position: relative;
      padding: 0 1px;
    }
    .left .column img {
      border-radius: 20px;
      padding: 13px;
      vertical-align: middle;
    }
    .right h1{
      font-size: 150px;
      letter-spacing: 10px;
      -webkit-text-stroke-width: 2px;
      -webkit-text-stroke-color: rgb(255, 255, 255);
      font-family:'Cinzel Decorative', cursive;
      line-height: 1;
      background: -webkit-linear-gradient(rgb(115, 1, 157),rgb(255, 0, 191));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .right p{
      padding: 10px 10px 10px 10px;
      margin-right:280px;
      margin-left: 30px;
      margin-top: 40px;
      outline-color: rgb(116, 10, 215);
      outline-style: double;
      outline-width: 5px;
      outline-offset: 10px;
      background-color: rgba(0, 0, 0, 0.648);
      font-size: 20px;
      font-weight: bold;
      font-family: 'Forum', cursive;
      text-align: justify;
      line-height: 1.65;
      color: white;
    }
  </style>
</body>
</html>
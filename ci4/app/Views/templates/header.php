<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="wonderland.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap" rel="stylesheet">
</head>

  <section class="hero">
    <header>
      <div class="logo">
        <h2 style="font-family: 'Sevillana', cursive;"><a href="index">K ' s  C o d e L a n d</a></h2>
      </div>
      <nav>
        <ul>
          <li><a href="guest">Comments</a></li>
          <li><a href="about-kyian">About Kyian</a></li>
          <li><a href="aspects">Interesting Aspects in Life</a></li>
          <li><a href="guest/create">Feedback Form</a></li>
        </ul>
      </nav>
    </header>
  </section>
<body></body>
<style>
       .hero{
      height: 100%;
      width: 100%;
      min-height: 100 vh;
      background: linear-gradient(black, 80%, rgb(87, 6, 79));
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .hero header .logo h2 a{
      display: block;
      font-size: 48px;
      margin-left: 50px;
      font-weight: 700;
      text-decoration: none;
      color: white;
    }
    .hero header{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 0 10px;
    }
    nav ul li{
      list-style: none;
      display: inline-block;
    }
    nav ul li a{
      text-decoration: none;
      color: white;
      margin-left: 30px;
      margin-right: 20px;
      font-size: 24px;
      font-family: 'Forum', cursive;
      font-weight: 600;
      border-bottom: 2px solid transparent;
      transition: .4s;
    }
    nav ul li:not(:last-child) a:hover,
    nav ul li:not(:last-child) a:focus{
      border-bottom: 2px solid white;
    }
    </style>
</html>
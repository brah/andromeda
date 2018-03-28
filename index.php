<?PHP
   if($_SERVER["HTTPS"] != "on")
   {
       header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
       exit();
   }
   ?>
<html>
   <head>
      <meta charset="utf-16">
      <link href="https://i.imgur.com/jcILMnV.png" rel="icon" type="image/ico">
      <link href="media/styles.css" rel="stylesheet">
      <link href="media/animate.css" rel="stylesheet">
      <title>andromeda</title>
   </head>
   <body>
      <div class="center">
         <div class="animated fadeInDown">
		    <a href="https://twitter.com/">twitter</a>
            <xxx>&nbsp;//&nbsp;</xxx>
            <a href="https://instagram.com/">instagram</a>
            <xxx>&nbsp;//&nbsp;</xxx>
            <a href="https://kik.me/atlantis">kik</a>
            &nbsp;//&nbsp;
            <a href="https://steamcommunity.com/profiles/76561198405760708">steam</a>
            &nbsp;//&nbsp;
			<a href="https://soundcloud.com/mythical">soundcloud</a>
			<xxx>&nbsp;//&nbsp;</xxx>
            <a href="https://www.youtube.com/channel/UCROOu8LGfue6600x6CBCt8Q?v=">youtube</a><br>
            <a href="#"><img src="media/andromeda.png"></a>
         </div>
         <div class="animated fadeInUp">
            <a href="https://tytto.pw/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tyttö.pw</a>
            <xxx>&nbsp;&nbsp;//&nbsp;</xxx>
            <a href="https://discord.gg">andromeda#0545</a>
			<xxx>&nbsp;&nbsp;//&nbsp;</xxx>
			<a href="https://satirical.site/">satirical.site</a><br>			
         </div>
      </div>
      <!-- 
         Audio
         Song: I Miss You
         Artist: Ta-ku
         -->
      <audio autoplay="" id="audio" loop="">
         <source src="https://tytto.pw/media/a.mp3" type="audio/mp3">
         <script>
            audio.volume = 0.3;
         </script>
      </audio>
   </body>
</html>
<?php if(isset($_POST["submit"])) {

$to = "mushel@gmail.com";
$subject = "Essence Project Booking";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];

$headers = "From: info@theessenceproject.com";
$mailBody="Name: $name\nEmail: $email\n\n$msg";

mail($to,$subject,$mailBody,$headers);
$thankYou="Your message has been sent.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>The Essence Project</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Fredoka+Project Infolay=swap" rel="stylesheet">
  

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#one">Project Info</a></li>
        <li><a href="#two">Flower Essences</a></li>
        <li><a href="#three">7 Bach Flower Groups + Chakras</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#one">Project Info</a></li>
        <li><a href="#two">Flower Essences</a></li>
        <li><a href="#three">7 Bach Flower Groups + Chakras</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br class="hide-on-med-and-down"><br>
        <h1 class="header center">The Essence Project</h1>
        <div class="row center">
          <h5 class="header col s12">The point is to involve dance, dj, yoga and flower essences paired with chakra &amp; crystals to help evolve people into a better place.</h5>
        </div>
        <div class="row center">
          <a href="#contact" id="download-button" class="btn-large waves-effect waves-light wine">Contact Us</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="https://flowersandflowerthings.com/wp-content/uploads/2019/08/Flower-Essences-1024x512.jpg" alt="Essence Project"></div>
  </div>
  <div class="container">
    <div id="one" class="section scrollspy">
      <div class="row">
        <div class="col offset-m2 m8 s12">
          <p>This is normally a day party for a festival with a positive message. Think Lightning in a Bottle, High Sierra, Envision, and Sonic Bloom. It would last about 3 to 4 hours. I would be travelling with a yoga instructor or get paired with one at a festival. </p> 
        </div>
        <div class="col offset-m2 m8 s12">
          <div class="divider"></div>
          <p>We would do a format of yoga then dance with instructional pauses to discuss the flower essences, chakras, and how they connect. There will 7 podiums with corellating flower essence and chakra/spa. These podiums will have some vocabulary and explanations of what they can modify or assist with. Would like to pair with Flora Arcana Flower Essences & Maya Smith or another rad Yogi.</p>

        </div>
      </div>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 center"><h4>Some more information about the project:</h4></div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">change_history</i></h2>
            <h5 class="center indigo-text text-lighten-1">Flower essences that pair with the Chakras</h5>

            <p>Bach Flower Remedies work in harmony with herbs, homeopathy and medication. They are safe for everyone, including childen, pregnant women, pets, the elderly, and even plants.</p>
          </div>
        </div>

        <div class="col s12 m6 l4">
          <div class="icon-block">
            <h2 class="center purple-text"><i class="material-icons">spa</i></h2>
            <h5 class="center green-text">Chakras &amp; Crystals:</h5>
              <p class="purple-text">Crown - Clear Quartz</p>
              <p class="indigo-text text-lighten-1">Third-Eye - Amethyst</p>
              <p class="blue-text">Throat - Lapis Lazuli</p>
              <p class="green-text">Heart - Green Aventurine</p>
              <p class="yellow-text text-darken-3">Solar Plexus - Yellow Aventurine</p>
              <p class="orange-text text-darken-3">Sacral - Orange Aventurine</p>
              <p class="red-text text-darken-1">Root - Red Jasper</p>
          </div>
        </div>

        <div class="col s12 m6 l4">
          <div class="icon-block">
            <h2 class="center red-text text-darken-2"><i class="material-icons">disc_full</i></h2>
            <h5 class="center yellow-text text-darken-3">Music</h5>

            <p>We use sounds that are fun to dance and flow with. During yoga the vibe is calmer.</p>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-2"><i class="material-icons">whatshot</i></h2>
            <h5 class="center blue-text">Yoga</h5>

            <p>Well versed yogis provide a practice that beginners to experts can enjoy. We like to utilize the outdoor grounding experience to our advantage to reconnect with the world around us.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div id="two" class="section no-pad-bot scrollspy">
      <div class="container">
        <div class="row center">
          <h2 class="header col s12 light">So what are flower essences?</h2>      
        </div>      
      </div>
    </div>
    <div class="parallax"><img src="flower.webp" alt="flower essences"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <p>Dr. Edward Bach was a British Physician, who began to see disease as an end product, a final stage, a physical manifestation of unhappiness, fear and worry. He therefore, began to look to nature to find healing flowers. Over a period of years Dr. Bach found 38 healing flowers and plants that with the right preparation became the 38 Bach Flower Remedies. These remedies are enough to remove all negative emotional problems.</p>
        <p>The Bach Flower Remedies is a safe and natural method of healing. They gently restore the balance between mind and body by casting out negative emotions such as fear, worry, hatred and indecision which interfere with the equilibrium of the being as a whole. The Bach Flower Remedies allow peace and happiness to return to the sufferer so that the body is free to heal itself.</p>
        <p>The Bach Flower Remedies are made 100% naturally from spring water infused with wild flowers, either by the sun-steeped method or by boiling. The Remedies are hand produced exclusively in England. The Remedies contain 27% grape based brandy as a preservative. Or the alcohol free versions are preserved in glycerin made from sunflowers.
</p>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div id="three" class="container scrollspy">
        <div class="row center">
          <h2 class="header col s12 light">The 7 Bach Flower Groups &amp; Corellating Chakras</h2>      
        </div>      
      </div>
    </div>
    <div class="parallax"><img src="bridge-pixel.gif" alt="bridge garden"></div>
  </div>
  <div id="second" class="row">
    <div class="col s12">
      <ul id="show" class="chakra-menu">
        <li><a href="#crown" class="purple-text">sahasrara</a></li>
        <li><a href="#thirdeye" class="indigo-text">ajna</a></li>
        <li><a href="#throat" class="blue-text">visudha</a></li>
        <li><a href="#heart" class="green-text">anahata</a></li>
        <li><a href="#solarplexus" class="yellow-text text-darken-3">manipura</a></li>
        <li><a href="#sacral" class="orange-text text-darken-2">svadhistana</a></li>
        <li><a href="#root" class="red-text text-darken-2">muladhara</a></li>
      </ul>

  <div class="container">
    <div class="row">
      <div class="col s12">
        <h5 id="crown" class="purple-text scrollspy"> <div class="sahasrara"></div>Insufficient interest in present circumstances - <i>7) Sahasrara The Crown Chakra</i> - it’s associated with the universal, connection with spirituality, consciousness.</h5>
        <p><strong class="purple-text">Clematis:</strong> For those who find their lives unhappy and withdraw into fantasy worlds. They are ungrounded and indifferent to the details of everyday life. Teaches one to establish a bridge between the physical world and the world of ideas and may foster great creativity. Is also used to bring clarity and alertness to the present moment.</p>
        <p><strong class="purple-text">Honeysuckle:</strong> Helps you to let go of past experiences or events. Your thoughts are in the past rather in the present.</p>
        <p><strong class="purple-text">Wild Rose:</strong> Helps you to take responsibility for your own life and take a lively interest in life, work and the world in general.</p>
        <p><strong class="purple-text">Olive:</strong> Helps you regain energy, vitality and interest in life.</p>
        <p><strong class="purple-text">White Chestnut:</strong> Helps when your mind is cluttered with thoughts usually arguments, ideas, thoughts which you do not wish to have in your mind.</p>
        <p><strong class="purple-text">Mustard:</strong> Helps when you feel suddenly depressed without any reason. It feels like a cold dark cloud that destroys normal happiness and cheerfulness.</p>
        <p><strong class="purple-text">Chestnut Bud:</strong> Helps when you from making the same mistake over and over again. You do not take full advantage of observation and experiences and therefore it takes longer for you to learn a lesson.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
      <div class="col s12">
        <h5 id="thirdeye" class="indigo-text text-lighten-1  scrollspy"><div class="ajna"></div>For Those Who Suffer Uncertainty - <i>6) Ajna The Third Eye Chakra</i> - it evokes intuition, extrasensory perception, inner wisdom.</h5>
        <p><strong class="indigo-text text-lighten-1">Cerato:</strong> Helps trust your own judgment in decision-making. </p>
        <p><strong class="indigo-text text-lighten-1">Scleranthus:</strong> Helps when you have a hard time choosing between two things, such as Mexican or Chinese food, you simply can not decide which restaurant to go to.</p>
        <p><strong class="indigo-text text-lighten-1">Gentian:</strong> Helps when you get discouraged and depressed when things go wrong or when you are faced with even small delays or difficulty.</p>
        <p><strong class="indigo-text text-lighten-1">Gorse:</strong> Helps when you feel great hopelessness, and have given up belief that more can be done.</p>
        <p><strong class="indigo-text text-lighten-1">Hornbeam:</strong> Helps when you feel that you do not  have sufficient amount of strength mentally or physically to carry the burden that life has placed on you.</p>
        <p><strong class="indigo-text text-lighten-1">Wild Oat:</strong> Helps when you are at a crossroad in life and are uncertain as to which direction to choose.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
      <div class="col s12">
        <h5 id="throat" class="blue-text scrollspy"><div class="visudha"></div>Over-care for welfare of others - <i>5) Visudha The Throat Chakra</i> - it symbolizes self expression, expression of truth, creative expression, communication, perfect form and patterns.</h5>
        <p><strong class="blue-text">Chicory:</strong> Helps you to be less critical, opinionated and argumentative. You always find something about others that you believe should be put right.</p>
        <p><strong class="blue-text">Vervain:</strong> For strong-willed people who hold strong views. They put unnecessary effort into everything they undertake, your mind race ahead of events, you may suffer from lack of sleep due to an overactive mind.</p>
        <p><strong class="blue-text">Vine:</strong> Helps you respect other people’s views and ideas, you tend to try to persuade other people to do things your way.</p>
        <p><strong class="blue-text">Beech:</strong> Helps you be less critical toward other people and accept them as they are.</p>
        <p><strong class="blue-text">Rock Water:</strong> Helps when you expect too much of yourself.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
      <div class="col s12">
        <h5 id="heart" class="green-text scrollspy"><div class="anahata"></div>Loneliness - <i>4) Anahata The Heart Chakra</i> - it is connected with love, relating, integration, compassion.</h5>
        <p><strong class="green-text">Water Violet:</strong> Helps you get a warmer relationship with other people. You love being alone, but often find yourself lonely.</p>
        <p><strong class="green-text">Impatiens:</strong> For those who act and think quickly, and have no patience for what they see as the slowness of others. They often prefer to work alone. Teaches empathy and understanding of and patience with others. It is found to be fast-acting in alleviating an impatient attitude and lowering stress.</p>
        <p><strong class="green-text">Heather:</strong> Helps when you are unhappy being alone for any length of time, you are always seeking the companionship and find it necessary to discuss your affairs with others, no matter who it may be.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div> 
      <div class="col s12">
        <h5 id="solarplexus" class="yellow-text text-darken-3 scrollspy"><div class="manipura"></div>Despondency or despair - <i>3) Manipura The Solar Plexus Chakra</i> - it symbolizes mental activities, intellect, personal power, will.</h5>
        <p><strong class="yellow-text text-darken-3">Larch:</strong> Helps you to regain self-esteem and confidence in yourself.</p>
        <p><strong class="yellow-text text-darken-3">Pine:</strong> Helps when you feel guilt and self-reproach, often for other people’s mistakes or just anything that goes wrong. You are never content with your effort and results.</p>
        <p><strong class="yellow-text text-darken-3">Elm:</strong> Helps when your responsibilities overwhelm you. You feel depressed and exhausted and may lose self-esteem.</p>
        <p><strong class="yellow-text text-darken-3">Sweet Chestnut:</strong> Helps you at moments when the anguish is too great and seem to be unbearable. Your mind or body feels as if it has tolerated the uttermost limit of its endurance. It feels as there is nothing but destruction and annihilation left to face.</p>
        <p><strong class="yellow-text text-darken-3">Star of Bethlehem:</strong> Helps when you experience trauma, serious news, loss of someone dear, the fright following an accident etc. The distress and unhappiness feels unbearable.</p>
        <p><strong class="yellow-text text-darken-3">Willow:</strong> Helps when you have suffered adversity or misfortune and find it difficult to accept. You feel sorry for yourself and are grumble and sulky.</p>
        <p><strong class="yellow-text text-darken-3">Oak:</strong> Helps when your inner strength wanes, usually because you are an over-achiever and will overwork and ignore your tiredness.</p>
        <p><strong class="yellow-text text-darken-3">Crab Apple:</strong> Helps when you feel that there is something not quite clean about yourself. You may need to wash hands often, find things dirty without any reason, you may find yourself ugly although others find you very attractive. This is the cleansing Essence.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
      <div class="col s12">
        <h5 id="sacral" class="orange-text text-darken-4 scrollspy"><div class="svadhistana"></div>Over-sensitivity to influences and ideas - <i>2) Svadhistana The Sacral Chakra</i> - it carries meanings associated with emotions, creativity, sexuality, and is associated with water, flow.</h5>
        <p><strong class="orange-text text-darken-4">Agrimony:</strong> Helps you to communicate your real feelings and worries. You are the cheerful, humorous type that gets distressed by argument or quarrel. You often hide your feelings behind humor and you use alcohol or drugs in excess to stimulate yourself.</p>
        <p><strong class="orange-text text-darken-4">Centaury:</strong> Helps when you find it hard to say no, and therefore easily get imposed on. You often find yourself serving others, neglecting your own particulate mission in life.</p>
        <p><strong class="orange-text text-darken-4">Walnut:</strong> Helps you break free from old ties and at times of major life changes. It helps you move forward and make necessary changes in order to be happy. Walnut gives consistency and protection from outside influences.</p>
        <p><strong class="orange-text text-darken-4">Holly:</strong> Helps when you suffer from angry thoughts such as jealousy, envy, revenge and/or suspicion.</p>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
      <div class="col s12">
        <h5 id="root" class="red-text text-darken-2 scrollspy"><div class="muladhara"></div>For Those Who Have Fear - <i>1) Muladhara The Root Chakra</i> - it symbolizes safety, survival, grounding, nourishment from the Earth energy. </h5>
        <p><strong class="red-text text-darken-2">Rock Rose:</strong> Helps when you experience fears, such as terror or fright that makes you feel frozen and unable to move or think clear. </p>
        <p><strong class="red-text text-darken-2">Mimulus:</strong> Helps when you feel fear, the type of fear that you can put a name on such as fear of dogs, spiders, being alone, losing a job, illness etc. Also, fear of speaking freely of it to others or shyness. </p>
        <p><strong class="red-text text-darken-2">Cherry Plum:</strong> For those who fear losing control of their thoughts and actions and doing things they know are bad for them or which they consider wrong. Teaches trust in one’s spontaneous wisdom and the courage to follow one’s path.</p>
        <p><strong class="red-text text-darken-2">Aspen:</strong> Helps when you feel fearful without knowing why. The fear is vague and unexplainable and may haunt you day or night. </p>
        <p><strong class="red-text text-darken-2">Red Chestnut:</strong> Helps when you find it difficult not to be anxious for other people, you are afraid that some unfortunate things may happen to your loved ones.</p>
      </div>
    </div>
  </div>
  </div>
</div>
  <div class="container">
    <div id="contact" class="section scrollspy">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="teal-text text-darken-4">Book Us</h4>
            <form action="#" id="form" method="post">
              <div class="row">
              
              </div>
              <div class="row">
                <div class="input-field col m6 s12">
                        <input name="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                </div>
                <div class="input-field col m6 s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>   
                </div>
              </div>
              <div class="row">
                <div class="input-field col m9 s12">
                      <textarea name="msg" class="materialize-textarea"></textarea>
                      <label for="msg">Message</label>
                      <?=$thankYou?>
                </div>
                <div class="input-field col m3 s12">
                      <button class="btn waves-effect waves-light wine" type="submit" name="submit" value="submit" id="send">Submit
                      </button>    
                </div>                     
              </div>
            </form>             
        </div>
      </div>

    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3>The Essence Project</h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="flowers-in-water.jpeg" alt="flowers in water"></div>
  </div>
  <footer class="page-footer wine">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">The Essence Project</h5>
          <p class="grey-text text-lighten-4">A different type of movement and healing celebration</p>


        </div>
        <div class="col l3 s12">
          
          <ul>
            <li><a class="white-text" href="mailto:mushel@gmail.com">Email Michelle</a></li>
            <li><a class="white-text" href="#two">Contact</a></li>
            <li><a class="white-text" href="#one">About</a></li>
          
          </ul>
        </div>
        <div class="col l3 s12">
          <ul>
            <li>Michelle Currier</li>
            <li>New Orleans, Louisiana</li>
            <li>504.920.2300</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col s12">
            Made by <a class="brown-text text-lighten-3" href="http://mcurrier.com">m. currier designs</a>

          </div>
        </div>
      
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $(document).ready(function(){
      $('.scrollspy').scrollSpy();
    });

    var offsetTop = $("#second").offset().top;

    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > offsetTop) {
        $("#show").fadeIn(400);
      }
    });
  </script>
  </body>
</html>

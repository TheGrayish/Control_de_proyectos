<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
            
            body, html {
              height: 100%;
              line-height: 1.8;
            }
            
            /* Full height image header */
            .bgimg-1 {
              background-position: center;
              background-size: cover;
              background-image: url("/w3images/mac.jpg");
              background-color: black;
              min-height: 100%;
            }
            
            .w3-bar .w3-button {
              padding: 16px;
            }
            
            /* Central Files Section */
            .central-files {
              background-color: #f2f2f2;
              padding: 50px;
            }
            
            .file-preview {
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
              gap: 20px;
            }
            
            .file-preview img {
              max-width: 200px;
              max-height: 200px;
              border: 1px solid #ddd;
              border-radius: 5px;
              box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            
            .file-name {
              text-align: center;
              margin-top: 10px;
              font-size: 16px;
            }
            </style>
            
    </head>
    <body class="antialiased">
       
        <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>

       
 
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>

         @if (Route::has('login'))

                @auth
                    <a href="{{ route('dashboard') }}" class="w3-bar-item w3-button">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                    @endif
                @endauth
           
        @endif
      </div>

      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  
  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  </nav>
  
  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">QCI-HUB</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
      <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
      <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
    </div> 
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </header>
  
  {{-- <!-- Central Files Section -->
  <section class="central-files">
      <h2 class="w3-center">Principales archivos</h2>
      <div class="file-preview">
        <!-- Example File Preview (replace with actual file previews) -->
        <div class="file-item">
          <img src="/path/to/file1.jpg" alt="File 1">
          <p class="file-name">File 1</p>
        </div>
        <div class="file-item">
          <img src="/path/to/file2.jpg" alt="File 2">
          <p class="file-name">File 2</p>
        </div>
        <!-- Add more file previews as needed -->
      </div>
    </section>
   --}}
  
  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ACERCA DE LA EMPRESA</h3>
    <p class="w3-center w3-large">VALORES</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Responsabilidad</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Fidelidad</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Creatividad</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Confianza</p>
      </div>
    </div>
  </div>
  
  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Nuestros archivos.</h3>
        <p>Para pasar a los archivos clique el siguiente boton</p>
        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> Archivos</a></p>
      </div>
      {{-- <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
      </div> --}}
    </div>
  </div>
  
  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">EL EQUIPO</h3>
    <p class="w3-center w3-large">Las principales caras de la empresa</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team2.jpg" alt="Grayish" style="width:100%">
          <div class="w3-container">
            <h3>Abner Yezael Gomez Arellano</h3>
            <p class="w3-opacity">CEO & Founder</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team1.jpg" alt="Guada" style="width:100%">
          <div class="w3-container">
            <h3>José Guadalupe Gutiérrez Navarro</h3>
            <p class="w3-opacity">Art Director</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team3.jpg" alt="Huevo" style="width:100%">
          <div class="w3-container">
            <h3>Kevin Ramsés Ramírez Gómez</h3>
            <p class="w3-opacity">Web Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team4.jpg" alt="BichoOne" style="width:100%">
          <div class="w3-container">
            <h3>Oscar Gerónimo Murillo Alvarado</h3>
            <p class="w3-opacity">Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/w3images/team4.jpg" alt="Kevo" style="width:100%">
          <div class="w3-container">
            <h3>Kevin Shalom Herrera Covarrubias</h3>
            <p class="w3-opacity">Designer</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
      <span class="w3-xxlarge">14+</span>
      <br>Partners
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">55+</span>
      <br>Projects Done
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">89+</span>
      <br>Happy Clients
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">150+</span>
      <br>Meetings
    </div>
  </div>
  
  <!-- Work Section -->
  <div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people</p>
  
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
      </div>
    </div>
  
    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
      </div>
      <div class="w3-col l3 m6">
        <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
      </div>
    </div>
  </div> --}}
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>
  
  <!-- Skills Section -->
  <div class="w3-container w3-light-grey w3-padding-64">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Our Skills.</h3>
        <p>
          Nos dedicamos a proporcionar soluciones tecnologicas inovadoras, especializadas en el desarrollo de programas personalizados para empresas, individuos y entidades publicas. Nuestra misión es impulsar el progreso tecnológico, facilitando soluciones que transformen y mejoren la experiencias digital de nuestros clientes.
        </p>
      </div>
      <div class="w3-col m6">
        <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Programation</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
        </div>
        {{-- <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
        </div> --}}
      </div>
    </div>
  </div>
  
  <!-- Pricing Section -->
  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
    <h3>PRICING</h3>
    <p class="w3-large">Choose a pricing plan that fits your needs.</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16"><b>10GB</b> Storage</li>
          <li class="w3-padding-16"><b>10</b> Emails</li>
          <li class="w3-padding-16"><b>10</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
      <div class="w3-third">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
          <li class="w3-padding-16"><b>25GB</b> Storage</li>
          <li class="w3-padding-16"><b>25</b> Emails</li>
          <li class="w3-padding-16"><b>25</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
          <li class="w3-padding-16"><b>50GB</b> Storage</li>
          <li class="w3-padding-16"><b>50</b> Emails</li>
          <li class="w3-padding-16"><b>50</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ 50</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
 
  
  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</footer>
   
  <script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
  
  
  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");
  
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  
  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
  </script>
  
        
    </body>
</html>

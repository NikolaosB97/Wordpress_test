
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
      navbar.classList.remove('transparent-bg');
      navbar.classList.add('solid-bg');
    } else {
      navbar.classList.remove('solid-bg');
      navbar.classList.add('transparent-bg');
    }
  });
  document.addEventListener('DOMContentLoaded', (event) => {
    const text = "Ciao, sono Nicola Bongiovanni, un full stack developer. Ho una grande passione per lo sviluppo di applicazioni web e la programmazione. Mi piace esplorare nuove tecnologie e migliorare continuamente le mie competenze.";
    let i = 0;
    const speed = 50; // Velocità di digitazione (ms)
    const typingEffect = document.querySelector('.typing-effect');
  
    // Assicurati che il contenitore sia vuoto
    typingEffect.innerHTML = '';
  
    function typeWriter() {
        if (i < text.length) {
            typingEffect.innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        } else {
            typingEffect.classList.add('blink-caret'); // Aggiungiamo l'effetto caret
        }
    }
  
    typeWriter();
  });
  
  // INIZIO SEZIONE CARD 
  document.addEventListener('DOMContentLoaded', () => {
      const card = document.querySelector('.card');
      const skillsPanel = document.querySelector('.skills-panel');
    
      card.addEventListener('mouseover', () => {
        skillsPanel.style.display = 'block';
        skillsPanel.style.opacity = '1';
        skillsPanel.style.transition = 'opacity 0.5s ease-in';
      });
    
      card.addEventListener('mouseleave', () => {
        skillsPanel.style.opacity = '0';
        skillsPanel.style.transition = 'opacity 0.5s ease-out'
        
      });
    })
  
  
    /* {{-- SEZIONE PROGETTI --}} */
    let projectsVisible = false;
    let loading = false;
    
    async function toggleProjects() {
        const projectsGrid = document.getElementById('projects-grid');
        const toggleButton = document.getElementById('toggle-button');
        const buttonText = document.getElementById('button-text');
        const loadingSpinner = document.getElementById('loading-spinner');
    
        if (loading) return;
    
        loading = true;
        loadingSpinner.style.display = 'inline-block';
        buttonText.textContent = 'Caricamento...';
    
        if (!projectsVisible) {
            setTimeout(async () => {
                const username = 'NikolaosB97';
                const response = await fetch(`https://api.github.com/users/${username}/repos`);
                const repos = await response.json();
    
                projectsGrid.style.display = 'flex';
                projectsGrid.innerHTML = '';
    
                repos.forEach(repo => {
                    const projectCard = document.createElement('div');
                    projectCard.className = 'project-card';
    
                    projectCard.innerHTML = `
                        <h3>${repo.name}</h3>
                        <a href="${repo.html_url}" target="_blank">
                            <i class="fab fa-github"></i> Vedi su GitHub
                        </a>
                    `;
    
                    projectsGrid.appendChild(projectCard);
                });
    
                buttonText.textContent = 'Nascondi i miei progetti';
                loadingSpinner.style.display = 'none';
                projectsVisible = true;
                loading = false;
            }, 1500); 
        } else {
            setTimeout(() => {
                buttonText.textContent = 'Scopri i miei progetti su GitHub';
                loadingSpinner.style.display = 'none';
                projectsGrid.style.display = 'none';
                projectsVisible = false;
                loading = false;
            }, 500); 
        }
    }
  //   INZIO CONTATTI
  document.addEventListener('DOMContentLoaded', () => {
      const socialLinks = document.querySelectorAll('.social-link');
  
      socialLinks.forEach(link => {
          link.addEventListener('mouseenter', () => {
              link.style.transform = 'scale(1.1) translateY(-5px)';
              link.style.transition = 'transform 0.3s ease';
          });
  
          link.addEventListener('mouseleave', () => {
              link.style.transform = 'scale(1) translateY(0)';
              link.style.transition = 'transform 0.3s ease';
          });
  
          setTimeout(() => {
              link.style.opacity = '1';
              link.style.transform = 'translateY(0)';
          }, 200); // Ritardo uniforme per tutte le icone, personalizzabile
      });
  });
  //   FINE CONTATTI
  const messages = [
      "Welcome to MyPortfolio",
      "Explore my projects",
      "Get in touch",
      "Let's build something great"
  ];
  let currentMessageIndex = 0;
  let currentCharIndex = 0;
  const messageElement = document.getElementById('dynamic-message');
  const navbar = document.querySelector('.navbar');
  
  function typeMessage() {
      if (currentCharIndex < messages[currentMessageIndex].length) {
          messageElement.textContent += messages[currentMessageIndex].charAt(currentCharIndex);
          currentCharIndex++;
          setTimeout(typeMessage, 100);
      } else {
          setTimeout(deleteMessage, 2000);
      }
  }
  
  function deleteMessage() {
      if (currentCharIndex > 0) {
          messageElement.textContent = messages[currentMessageIndex].substring(0, currentCharIndex - 1);
          currentCharIndex--;
          setTimeout(deleteMessage, 50);
      } else {
          currentMessageIndex = (currentMessageIndex + 1) % messages.length;
          setTimeout(typeMessage, 500);
      }
  }
  
  document.addEventListener('DOMContentLoaded', () => {
      setTimeout(typeMessage, 500);
  });
  
  window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
      } else {
          navbar.classList.remove('scrolled');
      }
  });
  // INZIO VUOI SAPERE
  document.getElementById('download-cv').addEventListener('click', function() {
      var button = this;
      launchRocket(button, '/img/CV-Nicola Bongiovanni.pdf');
  });
  
  document.getElementById('download-certificate').addEventListener('click', function() {
      var button = this;
      launchRocket(button, '/img/Certificato.png');
  });
  
  function launchRocket(button, url) {
      button.style.display = 'none'; // Nascondi il bottone
      var rocket = document.getElementById('rocket');
      rocket.style.display = 'block'; // Mostra l'icona del razzo
      rocket.classList.add('rocket-fly');
  
      // Ritorna il bottone dopo l'animazione del razzo e avvia il download
      setTimeout(function() {
          rocket.style.display = 'none'; // Nascondi il razzo
          rocket.classList.remove('rocket-fly');
          button.style.display = 'inline-block'; // Mostra di nuovo il bottone
  
          // Avvia il download
          var a = document.createElement('a');
          a.href = url;
          a.download = '';
          document.body.appendChild(a);
          a.click();
          document.body.removeChild(a);
      }, 1000); // Durata dell'animazione è di 1 secondo
  }
    // FINE VUOI SAPERE
    document.addEventListener('DOMContentLoaded', () => {
      // Funzione per ottenere l'ora locale in base al fuso orario
      function updateClock() {
          const options = { timeZone: 'Europe/Rome', hour: '2-digit', minute: '2-digit', second: '2-digit' };
          const romeTime = new Intl.DateTimeFormat([], options).format(new Date());
          document.getElementById('rome-time').textContent = romeTime;
  
          options.timeZone = 'America/New_York';
          const nyTime = new Intl.DateTimeFormat([], options).format(new Date());
          document.getElementById('ny-time').textContent = nyTime;
  
          options.timeZone = 'Asia/Tokyo';
          const tokyoTime = new Intl.DateTimeFormat([], options).format(new Date());
          document.getElementById('tokyo-time').textContent = tokyoTime;
      }
  
      // Aggiorna l'orologio ogni secondo
      setInterval(updateClock, 1000);
      updateClock(); // Aggiorna immediatamente l'ora al caricamento della pagina
  });
  
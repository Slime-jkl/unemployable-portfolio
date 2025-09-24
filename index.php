<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ionut C. - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    
    <?php include 'nav-menu.php'; ?>

<!-- Main Content -->
<main class="main-content" id="introduction">
    <!-- Overview Page -->
    <div class="page active" id="overview">
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">
                Hi there <img src="assets/hi.gif" alt="wave">
                </h1>
                <p class="hero-subtitle">I'm a Full Stack Dev & Designer</p>

                    <!-- Mobile image placement -->
                    <div class="hero-image mobile-image">
                    <div class="profile-image"></div>
                    </div>

                <p class="hero-description">
                I build scalable web applications and love working with modern technologies. 
                Currently focused on React, Node.js, and cloud architecture. Always learning, 
                always building, always improving.
                </p>
                <div class="btn-group">
                <a href="#experience" class="btn btn-primary">More about me</a>
                <a href="#contact" class="btn btn-secondary">Get in Touch</a>
                </div>
            </div>

        <!-- Desktop image placement -->
        <div class="hero-image desktop-image">
            <div class="profile-image"></div>
        </div>
    </div>
</div>







                <div class="section-title" id="dev-projects">💻 Dev Projects</div>
                <div class="grid grid-2">
                    <div class="repo-card" id="enclavd">
                        <div class="repo-header">
                            <a href="#enclavd" class="repo-name" data-file="enclavd">Enclavd - Private Social Network</a>
                            <span class="repo-visibility">Dev</span>
                        </div>
                        <p class="repo-description">
                            A new approach to social media, Enclavd is a private platform that introduces an innovative way of interacting online, with psychology based features.
                        </p>
                        <div class="repo-footer">
                            <div class="repo-language">
                                <span class="language-dot php"></span>
                                <span>Php</span>
                                <span class="language-dot javascript"></span>
                                <span>JavaScript</span>
                                <span class="language-dot css"></span>
                                <span>CSS</span>
                            </div>
                        </div>
                    </div>

                    <div class="repo-card">
                        <div class="repo-header">
                            <a href="#danex-manager" class="repo-name" data-file="danex">Danex Manager - Admin Dashboard</a>
                            <span class="repo-visibility">Dev</span>
                        </div>
                        <p class="repo-description">
                            Full-featured admin dashboard with authentication, charts, and real-time data. Showing invoices,
                            expenses, drivers and document management for a B2B delivery company.
                            </br>
                        </p>
                        <div class="repo-footer">
                            <div class="repo-language">
                                <span class="language-dot php"></span>
                                <span>Php</span>
                                <span class="language-dot javascript"></span>
                                <span>JavaScript</span>
                                <span class="language-dot css"></span>
                                <span>CSS</span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="section-title" id="design">🎨 Design</div>
                    <div class="gallery-grid">
                    
                    <div class="gallery-card">
                        <img src="projects/img/design/cyberme.jpg" alt="CyberMe">
                        <div class="gallery-caption">
                        <a class="repo-name" data-file="cyberme">CyberMe Compositing Image</a>
                        </div>
                        <div class="repo-footer" style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px;">
                        <div class="repo-language" style="text-align: right;">
                            <span class="language-dot python"></span>
                            <span>Photoshop</span>
                        </div>
                        </div>
                    </div>

                    <div class="gallery-card">
                        <img src="projects/img/design/outtatime.jpg" alt="Outtatime">
                        <div class="gallery-caption">
                        <a class="repo-name" data-file="outoftime">OutOfTime Compositing Image</a>
                        </div>
                        <div class="repo-footer" style="margin-left: 5px; margin-top: 5px; margin-bottom: 5px;">
                        <div class="repo-language" style="text-align: right;">
                            <span class="language-dot python"></span>
                            <span>Photoshop</span>
                        </div>
                        </div>
                    </div>

                    </div>
                    </br></br>
                    <div class="section-title" id="experience">💼 About Me</div>

<div class="experience-wrapper">
  <section class="experience-entry">
    <h3 class="experience-role">MMO Game - The Start</h3>
    <p class="experience-meta">A little bit about myself, my name is Ionut, I'm from Romania, currently
        living in Southampton, UK. I got into programming and design since a young age, as a hobby and to this
        day I'm still doing it as a hobby, as I never managed to land a job mostly due to the fact that
        I don't have a degree, but.. to be fair.. I never really tried either.</br></br>
        My journey with programming started at a young age, I was 15-ish when I moved from Italy back to Romania
        and everyone in Easter Europe was playing this MMORPG game called Metin2. I started playing too, and I soon
        found out people were creating their own Private-Servers.. So I started making friends online in communities
        and I received help setting up my own server. That's when I first ecountered languages like LUA and Python..</br></br>
        I never really managed to learn how to write code in them, but I could understand the structure and what it did..
         so I could put pices from different scripts together, thinker and patch to make what I wanted to.</br></br>
         Thinking back on this experience, at the time, the only leaked version for the server-files was available in Chinese/Japanese,
         there were big teams dedicating time to translate them to English and they did.. eventually.. after 2-3 years..
         but basically we couldn't even understand anything written in the code, except for the code itself.</br></br>
         Now, to many a game isn't relevant experience.. but I was able to gain a few life lessons from it.. I even found
         a research paper some time ago, where someone actually studied things like 
         "How in-game social hierarchy affects player hevaviour", highlighting how when a player is "well off" 
         in-game, his speech, attitude and non verbal
         cues change drammatically.</br></br>
         This was my first time managing a large community of a few hundred players, having to balance in-game economy,
         sometimes taking money out of it by giving players important items for purchase, in order to keep that mini-world
         running.. In other cases, I observed how players would form guilds and dominate other players, for example, this one
         guild once established a monopoly over boss areas that had important loot crucial for advancement, effectively cutting all
         the server from a resource vital to advancement and making sure they're the only supplier in existence, therfore
         manipulating the price and creating artificial scarcity. Again, to many this might not sound as important.. but
         these are very real scenarios that teach you about life.</br></br>
         But If I had to choose the best lesson I drew from this experience, it has to be how to approach life, you see..
         being the Server Owner I could ban, mute, bribe and cover up anything I wanted.. I had unlimited control and no
         one to answer to.. and because this became boring, I decided to create a player account, and just play without
         cheating.. the goal was to see the player experience and identify areas where something wasn't right or needed
         improvement. And so I did, and I noticed a very strange thing, I asked the big players in town for some gold,
         as I needed to gear up before going out to level up.. and these were high ranking players I talked to everyday
         from my Owner persona, so I could swear they were nice people, right? Well.. it turns out they aren't so nice if they
         have nothing to gain.. In fact, they were talking to me as if they were royalty and I was a paesant.</br></br>
         At the time, this made me smile and I moved on, whenever someone came to bully me.. I moved on, I didn't care..
         I was detached from every situation because in my mind, it's just a game.. And so later on in life, reflecting
         on this, I realized why shouldn't this be my approach to life itself? Why can't I just accept the reality without
         any emotional reaction, make inventory, and move foward with the best option I have at my disposal?</br></br>
    </p>
    <h3 class="experience-role">Managing Communities</h3>
    <p class="experience-meta">Well, anyways.. As time passed by, I started getting involved in other online communities
        and I found a very active one where I was able to join their Staff as a Helper, I kept moving up the ranks
         fast and got promoted to Moderator, Admin and eventually, I became the sole Super-Admin on the platform.</br></br>
        The owner trusted me to run the community however I saw fit, this was big for me because I wasn't dealing with
        a few hundreds users anymore, they were around 80.000, and the community itself was very active.. with around 8.000 online
        users at any given moment. The staff was also pretty large, and I managed to split tasks and order their hierarchy
        to where admins had their own teams with mods answering to a single admin, and so did helpers - moderators. So I spent
         the majority of my time looking at the bigger picture, making changes to community guidelines (to the point where I ended
         up rewriting 80% of rules), and only intervene in issues occasionally or when I noticed something that wasn't right.</br></br>
         I also started thinkering with code again, and offered some improvements for the platform which are still in use to this day,
          years later. Eventually I had to leave, because I had other priorities in life to take care of, and a year or two later
          I was contacted by the owner with a proposal to come back, because they tried to round some of the old staff they had,
          and some of the admins supposedly said they would rejoin if I was to come back as well.. But by that time I was
          in a very unstable point in life financially, and just didn't have the mind for it anymore.
    </p>
    <h3 class="experience-role">New Horizons</h3>
    <p class="experience-meta">And that's a summary of my experience.. I left out a bunch of details and other
        smaller projects I worked or helped on because I would be writing too much otherwise. Currently I'm working on
        the Enclavd community in my spare time, and after the positive feedback I received from the early testers
        I'm inclined to think it's going well, I did try to raise money (and more importantly users) with a Kickstarter
        campaign, hoping kickstarter itself would organically promote it and bring traffic in, but unfortunately it doesn't
        work that way.. A kickstarter only works if you invest in advertisement yourself (which kinda defeats the purpose of
        splitting the fee with them in the first place).. but they won't help the word spread otherwise.</br></br>
        In the near future I want to try Kickstarter again, this time with some guerilla tactics.. My working
        theory is that their process of selecton for awarding the badge "Projects We Love" and featuring you on the
        first page is fully (or, at least in part, automated). And because my goal with them isn't necessarily money but
        exposure, I'm planning to make a troll campagin, with a goal of 100£. Funding it through a few friend donations
        myself, and see if I can make their algorithm think it's a successful campaign by funding it 100% in 24h, pushing
        me to the first page.
    </p>
  </section>

  <section class="experience-entry">
    <h3 class="experience-role">Next steps?</h3>
    <p class="experience-meta">If you've made it this far, it means you're considering employing me and
         I suggest you strike the iron
        while it's hot. Below I will illustrate how you might lose this opportunity.. don't be the Tiger. 👇
        </br>
        <center><video width="320" height="240" controls><source src="assets/duck.mp4" type="video/mp4"></video></center>
        </br>
        </br>
        <p class="experience-meta">If you haven't yet decided, the video below will give you a suggestion on how 
            to take the best decision. 👇</p>
        </br>
        <center><video width="320" height="240" controls><source src="assets/flipism.mp4" type="video/mp4"></video></center>
        </br>
        </br>
        <p class="experience-meta">Here's how I expect to be treated as your employee. 👇</p>
        </br>
        <center><video width="320" height="240" controls><source src="assets/spongebob.mp4" type="video/mp4"></video></center>
        </br>
        <p class="experience-meta">Well that's it. Appreciate your time, and remember what Bugs Bunny said: 
            "don't take life too seriously, you'll never make it out alive."
        </p>
        </br>
        </br>

</p>
  </section>
</div>

<div class="section-title" id="contact">📫 Contact</div>

<div class="contact-wrapper">
  <p><strong>Email:</strong> <a href="mailto:codreanuionut95@gmail.com">codreanuionut95@gmail.com</a></p>
  <p><strong>Location:</strong> Southampton, UK</p>
  <p><strong>Instagram:</strong> <a href="https://instagram.com/Slime.jkl" target="_blank">instagram.com/Slime.jkl</a></p>
  <p><strong>GitHub:</strong> <a href="https://github.com/Slime-jkl" target="_blank">github.com/Slime-jkl</a></p>
</div>




            <div class="project-drawer" id="projectDrawer">
                <div class="drawer-content">
                    <button class="drawer-close" id="drawerClose">Close</button>
                    <div class="drawer-content" id="drawerBody">
                    </div>
                </div>
            </div>
        </main>
    </div>



<script>


let totalSeconds = 3 * 60; // 3 minutes

const mTens = document.getElementById('mTens');
const mOnes = document.getElementById('mOnes');
const sTens = document.getElementById('sTens');
const sOnes = document.getElementById('sOnes');

function updateTimer() {
  let minutes = Math.floor(totalSeconds / 60);
  let seconds = totalSeconds % 60;

  let mT = Math.floor(minutes / 10);
  let mO = minutes % 10;
  let sT = Math.floor(seconds / 10);
  let sO = seconds % 10;

  mTens.textContent = mT;
  mOnes.textContent = mO;
  sTens.textContent = sT;
  sOnes.textContent = sO;
}

updateTimer();

const interval = setInterval(() => {
  if (totalSeconds <= 0) {
    clearInterval(interval);
    return;
  }
  totalSeconds--;
  updateTimer();
}, 1000);

const drawer = document.getElementById('projectDrawer');
const drawerBody = document.getElementById('drawerBody');
const drawerClose = document.getElementById('drawerClose');

document.querySelectorAll('.repo-card .repo-name, .gallery-card .repo-name').forEach(card => {
  card.addEventListener('click', async e => {
    e.preventDefault();
    const projectFile = card.dataset.file;

    try {
      const response = await fetch(`projects/${projectFile}.php`);
      if (!response.ok) throw new Error('Project not found');
      const html = await response.text();
      drawerBody.innerHTML = html;
      drawer.classList.add('active');
      drawer.scrollTop = 0;
      document.body.classList.add('drawer-open');
    } catch (err) {
      drawerBody.innerHTML = `<p style="color:red;">Failed to load project: ${err.message}</p>`;
      drawer.classList.add('active');
      document.body.classList.add('drawer-open');
    }
  });
});


drawerClose.addEventListener('click', () => {
  drawer.classList.remove('active');
  drawerBody.innerHTML = '';
  document.body.classList.remove('drawer-open');
});


const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');


function clearActiveLinks() {
    navLinks.forEach(link => link.classList.remove('active'));
}


window.addEventListener('scroll', () => {
    let scrollPos = window.scrollY + 100;

    sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;

        if (scrollPos >= top && scrollPos < top + height) {
            const id = section.getAttribute('id');
            clearActiveLinks();
            const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
            if (activeLink) activeLink.classList.add('active');
        }
    });
});


navLinks.forEach(link => {
    link.addEventListener('click', () => {
        clearActiveLinks();
        link.classList.add('active');


        const menuToggle = document.querySelector('#menu-toggle');
        if (menuToggle.checked) menuToggle.checked = false;
    });
});

const sidebar = document.querySelector('.sidebar');
const menuToggle = document.querySelector('#menu-toggle');
const hamburger = document.querySelector('.hamburger');

document.addEventListener('mousedown', (e) => {
    if (!menuToggle.checked) return;
    if (sidebar.contains(e.target)) return;
    if (hamburger.contains(e.target)) return;

    menuToggle.checked = false;
});


</script>




</body>
</html>
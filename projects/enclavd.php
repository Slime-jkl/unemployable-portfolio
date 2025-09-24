
  <div class="project-page">

    <header class="project-header">
      <h1 class="page-title">🚀 Enclavd - Private Social Network</h1>
      <p class="page-subtitle">The private social media.</p>
      <div class="separator"></div>
    </header>

    <section>
      <h2>📂 Index</h2>
      <pre>
/project-enclavd
  ├── overview/
  ├── features/
  │   ├── invite-system/
  │   ├── feed/
  │   ├── personality/
  │   ├── ranks/
  │   ├── polls/
  │   └── bit-sized-articles/
  ├── tech-stack
  └── demo
      </pre>
    </section>

    <div class="separator"></div>

    <section id="enclavd-overview">
      <h2>📖 Overview</h2>
      <p>
        Enclavd is a invite-only social platform, focused on privacy with personality-based features at it's core
        and a minimalistic design easy to navigate, intuitive UI and ad-free. Upon registration users go through
        a 40 question assessment that captures key-aspects of their personality into a 4 letter denominative title.</br>
        I made this by myself in 6-8 months time, some more advance features were AI assisted and I also learned a thing
        or two in the process. Altghough most time was spent on coming up with the ideas rather than actual implementation.
      </p>
    </section>

    <div class="separator"></div>

    <section>
      <h2>✨ Features</h2>
      <ul>
        <li>Invite system</li>
        <ul><li>Users can generate invitation codes and share them with others to enable them to join the
          platform.</br>
          <img src="projects/img/enclavd/invite-system.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>
        <ul><li>User profiles display invitation info, to maintain accountability.</br>
          <img src="projects/img/enclavd/invite-profile.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>



        <li>Personality</li>
        <ul><li>Users take a 40 question assessment that I reverse engineered from popular online personality
          tests, this test looks at 4 pairs of aspects (Introversion vs Extroversion) (Intuition vs Sensing) 
          (Thinking vs Feeling) and (Judging vs Perceiving), each dominant trait is then compressed into a 4
          letter personality type, ex: INTJ (Introvert-Intuitive-Thinker-Judger).</br>
          <img src="projects/img/enclavd/personality-profile.jpg" style="max-width: 100%; height: auto;"></img>
          <img src="projects/img/enclavd/personality-profile1.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>
        <ul><li>I then mapped out all the 16 total combinatios of possible personalities into a huge list of
          256 total combinations (order matters so A->B is different from B->A and each type compares itself to
          all 16) 16×16=256. This then shows when visiting another user profile as my original "Synergy Score".</br>
          <img src="projects/img/enclavd/personality-synergy.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>



        <li>Feed</li>
        <ul><li>A feed where users can post and see content, each post is sorted on multiple criteria, that weigh
          in the final order, examples include: if you're following a user, if that post has media attached to it,
          if that post is recent or older, if that post has likes, the interval between those likes (multiple likes
          in a shorter span trigger a 'on-fire' boost to show relevant posts), prestige score (a metric I use
          to calculate how active a user is.. similar to Karma on Reddit)..etc.</br>
          <img src="projects/img/enclavd/feed.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>
        <ul><li>Likes/Comments, with the ability to tag other users in comments.</br>
          <img src="projects/img/enclavd/feed-comment.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>
        <ul><li>Mini-profile cards when hovering a user in feed, showing their profile details.</br>
          <img src="projects/img/enclavd/feed-hover.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>
        <ul><li>Hashtags via text, each hashtag will then link to a sorted version of the feed where
          all the posts with that hashtag are present.
        </li></ul>
        <ul><li>Hashtags via text, each hashtag will then link to a sorted version of the feed where
          all the posts with that hashtag are present.
        </li></ul>
        
        <li>Ranks</li>
        <ul><li>A number of different ranks with different duties.</br>
          <img src="projects/img/enclavd/ranks.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>

        <li>Polls</li>
        <ul><li>Polls where users can cast votes, they take into account a user rank as well, with some ranks
          having more voting power than others.. in the spirit of meritocracy and contribution.. *Socialist vibes*.</br>
          <img src="projects/img/enclavd/polls.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>

        <li>Bit-Sized Articles</li>
        <ul><li>Bit sized articles or study summaries, they aim to cover all topics, users are able to submit them
          in a shorter format and providing sources for each claim, aiming to keep accuracy high and bias low
          this is currently disabled as I decided to focus more on the social aspect of the platform instead of
          spreading too thin everywhere.. Even though I strongly believe he who chases 2 rabbits catches both, let
          us chase them one at a time at least..</br>
          <img src="projects/img/enclavd/bit-sized.jpg" style="max-width: 100%; height: auto;"></img>
        </li></ul>


        The platform was open for a short period of time, however due to lack of funds I wasn't able to spread
        the word, I managed to invite a few early testers, mainly from Reddit. People who managed to see the post
        in the 1-3 minutes before it was taken down due to it's 'self-promotion' nature.</br>
        From the 30 people whom I managed to gather, the feedback was overwhelmingly positive, people liked it a lot
        and they kept using it even in it's earlier stages when there weren't as many features. This happens because
        not only it's a cool concept, but also the '16personality niche' is untapped, and there's no real competition,
        while at the same time, it's increasingly more spread in the younger generation, whrere sometimes they will
        use these personality codes on platforms like instagram by putting them in their BIO, without any native
        support for it. Also the general decline in quality of social platforms (especially Facebook), plays a role too.</br>
        This drop in quality, is caused (but not limited to) AI automation, where individuals flood them with low quality
        AI generated content, spam, self-promotion, bots..etc. Making it impossible to moderate the sheer volume of it.
        This is exactly why I choose an Invitation-Only approach for this.. It's not an original idea, it's been done before
        (controvertially) on torrent-trackers back in the early 2000's.. and they worked in this exact way.. I remember
        how that influenced the community inside, and how it was much tighter and glued together, helping eachother out from everyday problems
        to specialized knowledge. Membership meant something, even if an invitation was around $3.. and many times during
        events you'd even get them for free, people still valued them. Anyways, enough nostaliga.. the concern with This
        it's that it might slow growth.. which is true, however it's more about quality than quantity in this case
        as I learned that inviting the wrong crowd can turn it from a good service into a very very bad one, because
        the users are a reflection of the service.. and I learned that quickly when I decided to aim for numbers instead
        of quality in my earlier attempts.</br>
        As each user invites another, the rate of invites doubles, so the growth becomes exponential. And it also
        gives me time to experiment with what works and what doesen't without making the news.

      </ul>
      
    </section>

    <div class="separator"></div>

    <section>
      <h2>🛠️ Tech Stack</h2>
      <ul>
        <li>Php</li>
        <li>Javascript</li>
        <li>Tailwind</li>
        <li>MariDB</li>
      </ul>
    </section>

    <div class="separator"></div>

    <section>
      <h2>🚦 Demo</h2>
      <ol>
        <li>Website: <code><a href="https://enclavd.com">enclavd.com</a></code></li>
      </ol>
    </section>

  </div>


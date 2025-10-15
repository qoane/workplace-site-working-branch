<?php
return [
    [
        'title' => 'Home',
        'slug' => 'home',
        'menu_label' => 'Home',
        'menu_order' => 1,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 1,
        'external_url' => null,
        'meta_description' => 'Workplace Solutions connects employers with outstanding talent across Lesotho.',
        'body_class' => 'home',
        'is_home' => 1,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero-slider swiper" data-autoplay-delay="6000" data-transition-speed="1200">
  <div class="swiper-wrapper">
    <div class="hero-slide swiper-slide">
      <img class="hero-bg" src="images/hero-meeting.png" alt="" loading="eager">
      <div class="hero-overlay">
        <div class="container">
          <h1 class="hero-title">Do you have the right people for the future you envision?</h1>
          <p class="hero-subtitle">Tailored, reliable HR solutions for Lesotho’s top employers and professionals.</p>
          <div class="btn-group">
            <a href="page.php?slug=contact" class="btn btn-primary">Request Services</a>
            <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener" class="btn btn-secondary">Submit Your CV</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-slide swiper-slide">
      <img class="hero-bg" src="images/hero-construction.png" alt="" loading="lazy">
      <div class="hero-overlay">
        <div class="container">
          <h1 class="hero-title">Do you have the right people for the future you envision?</h1>
          <p class="hero-subtitle">Tailored, reliable HR solutions for Lesotho’s top employers and professionals.</p>
          <div class="btn-group">
            <a href="page.php?slug=contact" class="btn btn-primary">Request Services</a>
            <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener" class="btn btn-secondary">Submit Your CV</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-slide swiper-slide">
      <img class="hero-bg" src="images/hero-mining.png" alt="" loading="lazy">
      <div class="hero-overlay">
        <div class="container">
          <h1 class="hero-title">Do you have the right people for the future you envision?</h1>
          <p class="hero-subtitle">Tailored, reliable HR solutions for Lesotho’s top employers and professionals.</p>
          <div class="btn-group">
            <a href="page.php?slug=contact" class="btn btn-primary">Request Services</a>
            <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener" class="btn btn-secondary">Submit Your CV</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-slide swiper-slide">
      <img class="hero-bg" src="images/hero-farming.png" alt="" loading="lazy">
      <div class="hero-overlay">
        <div class="container">
          <h1 class="hero-title">Do you have the right people for the future you envision?</h1>
          <p class="hero-subtitle">Tailored, reliable HR solutions for Lesotho’s top employers and professionals.</p>
          <div class="btn-group">
            <a href="page.php?slug=contact" class="btn btn-primary">Request Services</a>
            <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener" class="btn btn-secondary">Submit Your CV</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-slide swiper-slide">
      <img class="hero-bg" src="images/hero-psychometric.png" alt="" loading="lazy">
      <div class="hero-overlay">
        <div class="container">
          <h1 class="hero-title">Do you have the right people for the future you envision?</h1>
          <p class="hero-subtitle">Tailored, reliable HR solutions for Lesotho’s top employers and professionals.</p>
          <div class="btn-group">
            <a href="page.php?slug=contact" class="btn btn-primary">Request Services</a>
            <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener" class="btn btn-secondary">Submit Your CV</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="hero-nav hero-prev" aria-label="Previous slide"><i class="fa-solid fa-circle-chevron-left"></i></button>
  <button class="hero-nav hero-next" aria-label="Next slide"><i class="fa-solid fa-circle-chevron-right"></i></button>
  <div class="hero-pagination"></div>
</section>

<section class="who-we-help section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Who We Help</h2>
    <div class="cards">
      <div class="card reveal fade-in">
        <i class="fa-solid fa-building"></i>
        <h3>Employers</h3>
        <p>We partner with corporates, NGOs, and parastatals to source top talent and streamline HR processes.</p>
      </div>
      <div class="card reveal fade-in delay-1">
        <i class="fa-solid fa-users"></i>
        <h3>Candidates</h3>
        <p>We support job seekers with career guidance, CV refinement, and placement into roles that fit their ambitions.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-handshake"></i>
        <h3>Partners</h3>
        <p>We collaborate with training providers and industry partners to empower people and organisations.</p>
      </div>
    </div>
  </div>
</section>

<section class="solutions section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Our Solutions</h2>
    <div class="cards">
      <div class="card reveal fade-in">
        <i class="fa-solid fa-chart-line"></i>
        <h3>Applicant Tracking</h3>
        <p>Monitor applicants from submission to placement using our robust, easy-to-use system.</p>
      </div>
      <div class="card reveal fade-in delay-1">
        <i class="fa-solid fa-user-shield"></i>
        <h3>Compliance</h3>
        <p>Ensure your organisation meets all regulatory requirements and industry best practices.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-brain"></i>
        <h3>Psychometric Assessment</h3>
        <p>Evaluate candidates beyond their CV with science-backed assessments to guarantee cultural fit and performance.</p>
      </div>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="stat"><div class="number" data-target="500">0</div><p>Hires Made</p></div>
    <div class="stat"><div class="number" data-target="1000">0</div><p>CVs Submitted</p></div>
    <div class="stat"><div class="number" data-target="50">0</div><p>Corporate Clients</p></div>
    <div class="stat"><div class="number" data-target="95">0</div><p>% Satisfaction Rate</p></div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <h2 class="section-title reveal fade-in">What Our Clients Say</h2>
    <div class="swiper-container reveal fade-in delay-1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial">
            <p>“Workplace Solutions helped us build a high-performing team faster than we thought possible. Their professionalism and warmth are unmatched.”</p>
            <div class="author">— Nolwazi Moeng, Finance Manager</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial">
            <p>“From compliance to culture fit, they take care of everything. We now have credible people who embody our values.”</p>
            <div class="author">— Mrs. M, CEO</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial">
            <p>“Their applicant tracking and psychometric assessments ensure we hire not just good, but the right people.”</p>
            <div class="author">— Mpho, Entrepreneur</div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="cta section cta-two">
  <div class="container">
    <h2>Ready to Transform Your Workforce?</h2>
    <p>Let Workplace Solutions find the perfect match for your team. Start your journey today.</p>
    <a href="page.php?slug=contact" class="btn btn-primary">Contact Us</a>
  </div>
</section>

<section class="contact section">
  <div class="container flex">
    <div class="contact-info">
      <h2>Contact Us</h2>
      <p><i class="fa-solid fa-location-dot"></i> Our address goes here, Corporate Road, Maseru, Lesotho</p>
      <p><i class="fa-solid fa-phone"></i> +266 2232 5020</p>
      <p><i class="fa-solid fa-envelope"></i> info@workplacesolutions.co.ls</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="contact-form">
      <form action="#" method="post">
        <div class="form-group"><input type="text" name="name" placeholder="Your Name" required /></div>
        <div class="form-group"><input type="email" name="email" placeholder="Your Email" required /></div>
        <div class="form-group"><textarea name="message" placeholder="Your Message" required></textarea></div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Candidates',
        'slug' => 'candidates',
        'menu_label' => 'Candidates',
        'menu_order' => 2,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 2,
        'external_url' => null,
        'meta_description' => 'Resources and guidance for Workplace Solutions candidates.',
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height: 40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Candidates</h1>
    <p class="reveal slide-up delay-1">Empowering job seekers to reach new heights in their careers.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Supporting Your Journey</h2>
    <p class="reveal fade-in">At Workplace Solutions, we believe that every candidate deserves the opportunity to thrive. Our dedicated team is here to help you navigate your career path, providing resources and support at every step.</p>
    <div class="cards" style="margin-top:40px;">
      <div class="card reveal fade-in">
        <i class="fa-solid fa-file-lines service-icon"></i>
        <h3>CV Assistance</h3>
        <p>Our specialists will help you refine your CV, ensuring it highlights your strengths and achievements.</p>
      </div>
      <div class="card reveal fade-in delay-1">
        <i class="fa-solid fa-comments service-icon"></i>
        <h3>Career Guidance</h3>
        <p>Receive expert advice on how to choose the right career path and prepare for interviews.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-network-wired service-icon"></i>
        <h3>Networking</h3>
        <p>We connect you with a network of employers who are looking for talented individuals like you.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta section">
  <div class="container">
    <h2 class="reveal fade-in visible">Ready to Take the Next Step?</h2>
    <p class="reveal fade-in delay-1 visible">Submit your CV today or explore our current vacancies to find your perfect role.</p>
    <div class="btn-group reveal fade-in delay-2">
      <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" class="btn btn-primary" target="_blank" rel="noopener">Submit your CV</a>
      <a href="https://webapp.placementpartner.com/wi/weblinks.php?id=workplacesolutions" class="btn btn-secondary" target="_blank" rel="noopener">View Vacancies</a>
      <a href="page.php?slug=how-to-apply" class="btn btn-secondary">How to apply</a>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Clients',
        'slug' => 'clients',
        'menu_label' => 'Clients',
        'menu_order' => 3,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 3,
        'external_url' => null,
        'meta_description' => 'Tailored HR and recruitment services for employers.',
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height: 40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Clients</h1>
    <p class="reveal slide-up delay-1">Partnering with organisations to build agile, future-ready teams.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">What We Offer</h2>
    <p class="reveal fade-in">Our comprehensive solutions are designed to help organisations find, onboard, and nurture top talent with ease.</p>
    <div class="cards" style="margin-top:40px;">
      <div class="card reveal fade-in">
        <i class="fa-solid fa-magnifying-glass-dollar service-icon"></i>
        <h3>Recruitment</h3>
        <p>End-to-end recruitment support, from job profiling to onboarding, ensuring you attract the right talent quickly.</p>
      </div>
      <div class="card reveal fade-in delay-1">
        <i class="fa-solid fa-user-check service-icon"></i>
        <h3>Talent Matching</h3>
        <p>We match candidates to your organisation’s culture, values, and long-term objectives for sustainable impact.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-users-cog service-icon"></i>
        <h3>Psychometric Assessments</h3>
        <p>Access world-class psychometric tools to evaluate behavioural fit, cognitive ability, and role readiness.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-people-arrows-left-right service-icon"></i>
        <h3>Human Resource Consulting</h3>
        <p>We partner on policy development, employee engagement, rewards, job evaluations, wellness programmes, and more.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-bolt service-icon"></i>
        <h3>Empowerment Offerings</h3>
        <p>From skills gap analysis to conflict resolution, we deliver training and support that builds confident teams.</p>
      </div>
      <div class="card reveal fade-in delay-2">
        <i class="fa-solid fa-user-graduate service-icon"></i>
        <h3>Internship Programme</h3>
        <p>Our graduate internships provide organisations with emerging talent and meaningful CSR impact.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta section">
  <div class="container">
    <h2 class="reveal fade-in visible">Advertise Your Vacancy Today</h2>
    <p class="reveal fade-in delay-1 visible">Let us help you reach qualified candidates and build a strong workforce.</p>
    <a href="page.php?slug=contact" class="btn btn-primary reveal fade-in delay-2">Contact Us</a>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Events',
        'slug' => 'events',
        'menu_label' => 'Events',
        'menu_order' => 4,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 4,
        'external_url' => null,
        'meta_description' => 'Highlights from Workplace Solutions events and community outreach.',
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height: 40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Events</h1>
    <p class="reveal slide-up delay-1">Celebrating partnerships, professional growth, and community impact.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Recent Highlights</h2>
    <p class="reveal fade-in">From award ceremonies to national outreach programmes, we are committed to empowering people and organisations across Lesotho.</p>
    <div class="cards event-grid">
      <div class="card reveal fade-in">
        <img src="images/event_awards2023.jpg" alt="Standard Lesotho Bank Women of Excellence Awards" style="width:100%;height:auto;border-radius:8px;margin-bottom:16px;" />
        <h3>Women of Excellence Awards</h3>
        <p><strong>When:</strong> March&nbsp;2023</p>
        <p><strong>Where:</strong> Maseru, Lesotho</p>
        <p>We hosted the Standard Lesotho Bank Women of Excellence Awards, celebrating 85 nominees across 13 sectors and honouring role models in business, community development, and innovation.</p>
      </div>
      <div class="card reveal fade-in delay-1">
        <img src="images/event_jun2022.jpg" alt="National Registrations Tour" style="width:100%;height:auto;border-radius:8px;margin-bottom:16px;" />
        <h3>National Registrations Tour</h3>
        <p><strong>When:</strong> June&nbsp;2022</p>
        <p><strong>Where:</strong> Across Lesotho</p>
        <p>Workplace Solutions led a ten-district tour to register unskilled labourers, while partnering with Mohlomi Hospital to deliver mental health support and community services.</p>
      </div>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Blog',
        'slug' => 'blog',
        'menu_label' => 'Blog',
        'menu_order' => 5,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 5,
        'external_url' => null,
        'meta_description' => 'Insights, news, and thought leadership from Workplace Solutions.',
        'body_class' => 'inner blog-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<style>
  .blog-page .section--blog {
    padding: 48px 0 96px;
    background: var(--muted-color);
  }
  .blog-grid {
    display: grid;
    gap: 2rem;
  }
  .blog-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 30px 70px rgba(15, 23, 42, 0.12);
    display: flex;
    flex-direction: column;
  }
  .blog-card img {
    width: 100%;
    height: auto;
    display: block;
  }
  .blog-card__meta {
    display: flex;
    justify-content: space-between;
    padding: 12px 20px;
    font-size: 0.85rem;
    color: #6366f1;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    background: rgba(99, 102, 241, 0.08);
  }
  .blog-card__body {
    padding: 20px;
    flex: 1;
  }
  .blog-card__title {
    margin: 0 0 0.75rem;
    font-size: 1.25rem;
    color: #0f172a;
  }
  .blog-card__excerpt {
    margin: 0;
    color: #475569;
    line-height: 1.6;
  }
  .blog-card__actions {
    padding: 20px;
    border-top: 1px solid rgba(15, 23, 42, 0.08);
  }
  .blog-card__actions .btn {
    padding: 10px 18px;
    border-radius: 999px;
    font-size: 0.9rem;
  }
  @media (min-width: 720px) {
    .blog-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }
  @media (min-width: 1024px) {
    .blog-grid {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }
  }
</style>

<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <div class="container">
      <h1 class="hero-title">Insights &amp; Stories</h1>
      <p class="hero-subtitle">News, initiatives and perspectives from Workplace Solutions.</p>
    </div>
  </div>
</section>

<section class="section section--blog">
  <div class="container">
    <h2 class="section-title">Latest posts</h2>
    <div class="blog-grid">
      <article class="blog-card">
        <img src="images/blog_OIPwww.png" alt="HIV/AIDS Champion" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Opinion</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Workplace HIV/AIDS Champion</h3>
          <p class="blog-card__excerpt">In Lesotho, HIV/AIDS Champions raise awareness and reduce risk. These advocates encourage safer practices and give everyone ownership of workplace health initiatives.</p>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_registration1.jpg" alt="National Registrations Tour" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Feb 2024</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF article</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Workplace Solutions Embarks on National Registrations Tour</h3>
          <p class="blog-card__excerpt">A ten-district tour across Lesotho to build an unskilled labour register for adults aged 18–65, including mental-health talks in partnership with Mohlomi Hospital.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/WORKPLACE-SOLUTIONS-EMBARKS-ON-NATIONAL-REGISTRATION-TOUR.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_one.jpg" alt="Fundraising for Mohlomi Hospital" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Feb 2024</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF article</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Workplace Solutions Holds Fundraising for Mohlomi Hospital</h3>
          <p class="blog-card__excerpt">A two-week awareness drive and community fundraisers supporting mental-health services at Mohlomi Hospital under the theme “Stop the Stigma”.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/WORKPLACE-SOLUTIONS-HOLDS-FUNDRAISING-FOR-MOHLOMI-HOSPITAL.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_respect.jpg" alt="Respect What Your Workplace Stands For" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Archive</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF column</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Respect What Your Workplace Stands For…</h3>
          <p class="blog-card__excerpt">A reflection on aligning personal conduct with organisational values both online and offline to protect brand reputation.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/RESPECT-WHAT-YOUR-WORKPLACE-STAND-FOR.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_whee.png" alt="Re-Inventing the Wheel" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Feb 2024</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF article</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Re-Inventing the Wheel</h3>
          <p class="blog-card__excerpt">Encouraging readers to leverage existing data and tools to work smarter and save time.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/RE.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_discrimination.png" alt="Legitimate Invisible Discrimination" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Feb 2024</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF article</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Legitimate Invisible Discrimination</h3>
          <p class="blog-card__excerpt">Exploring how subtle online behaviour can negatively affect clients and why mindful communication matters.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/LIGITIMATE-INVISIBLE-DISCRIMINATION.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>

      <article class="blog-card">
        <img src="images/blog_OIPwww.png" alt="Waithood – The Period of Waiting" />
        <div class="blog-card__meta">
          <span><i class="fa-regular fa-calendar"></i> Feb 2024</span>
          <span><i class="fa-solid fa-file-pdf"></i> PDF article</span>
        </div>
        <div class="blog-card__body">
          <h3 class="blog-card__title">Waithood… The Period of Waiting</h3>
          <p class="blog-card__excerpt">An exploration of the economic challenges young Basotho graduates face while waiting to enter the workforce.</p>
        </div>
        <div class="blog-card__actions">
          <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2024/02/WAITHOOD.pdf" target="_blank" rel="noopener">Read article <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Contact Us',
        'slug' => 'contact',
        'menu_label' => 'Contact Us',
        'menu_order' => 6,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 6,
        'external_url' => null,
        'meta_description' => 'Get in touch with Workplace Solutions for recruitment and HR support.',
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height: 40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Contact Us</h1>
    <p class="reveal slide-up delay-1">We’re ready to help you find the talent and support you need.</p>
  </div>
</section>

<section class="contact-page section">
  <div class="container grid-two">
    <div class="contact-info reveal fade-in">
      <h2>Workplace Solutions</h2>
      <p><i class="fa-solid fa-location-dot"></i> Corporate Road, Maseru, Lesotho</p>
      <p><i class="fa-solid fa-phone"></i> <a href="tel:+26622325020">+266 2232 5020</a></p>
      <p><i class="fa-solid fa-envelope"></i> <a href="mailto:info@workplacesolutions.co.ls">info@workplacesolutions.co.ls</a></p>
      <p><i class="fa-solid fa-clock"></i> Monday – Friday, 8:00 AM – 5:00 PM</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="contact-form reveal fade-in delay-1">
      <form action="#" method="post">
        <div class="form-group"><input type="text" name="name" placeholder="Your Name" required></div>
        <div class="form-group"><input type="email" name="email" placeholder="Your Email" required></div>
        <div class="form-group"><input type="text" name="subject" placeholder="Subject" required></div>
        <div class="form-group"><textarea name="message" placeholder="Your Message" required></textarea></div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Downloads',
        'slug' => 'downloads',
        'menu_label' => 'Downloads',
        'menu_order' => 7,
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'quick_links',
        'footer_order' => 7,
        'external_url' => null,
        'meta_description' => 'Download legal documents, research papers, and our company profile.',
        'body_class' => 'inner downloads-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<style>
  .downloads-page .downloads-section {
    background: var(--muted-color);
    padding: 48px 0 96px;
  }
  .downloads-page .tabs {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
  }
  .downloads-page .tab {
    border: none;
    background: #fff;
    padding: 12px 20px;
    border-radius: 999px;
    font-weight: 600;
    color: #475569;
    cursor: pointer;
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
  }
  .downloads-page .tab.active {
    background: #0d6efd;
    color: #fff;
  }
  .downloads-page .panel {
    display: none;
  }
  .downloads-page .panel.active {
    display: block;
  }
  .downloads-page .files {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.5rem;
  }
  .downloads-page .file {
    background: #fff;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 1rem;
    align-items: start;
  }
  .downloads-page .file i {
    font-size: 2rem;
    color: #0d6efd;
  }
  .downloads-page .file-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-top: 1rem;
  }
</style>

<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <div class="container">
      <h1 class="hero-title">Downloads</h1>
      <p class="hero-subtitle">Legal documents, papers, and our company profile in one place.</p>
    </div>
  </div>
</section>

<section class="downloads-section">
  <div class="container">
    <div class="tabs" role="tablist" aria-label="Downloads categories">
      <button class="tab active" role="tab" aria-selected="true" aria-controls="panel-legal" id="tab-legal"><i class="fa-solid fa-scale-balanced"></i>&nbsp; Legal Documents</button>
      <button class="tab" role="tab" aria-selected="false" aria-controls="panel-papers" id="tab-papers"><i class="fa-solid fa-file-lines"></i>&nbsp; Papers</button>
      <button class="tab" role="tab" aria-selected="false" aria-controls="panel-profile" id="tab-profile"><i class="fa-solid fa-id-badge"></i>&nbsp; Company Profile</button>
    </div>

    <div class="panel active" id="panel-legal" role="tabpanel" aria-labelledby="tab-legal">
      <p class="small" style="margin-bottom:18px;color:#5a6983;">Foundational employment laws for Lesotho to help employers and employees stay compliant.</p>
      <div class="files">
        <div class="file">
          <i class="fa-solid fa-file-pdf"></i>
          <div>
            <h4>Labour Code Order 1992</h4>
            <p>Comprehensive legislation covering labour rights and dispute resolution mechanisms.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2023/07/Labour-code-Order-1992.pdf" target="_blank" rel="noopener">View PDF</a>
            </div>
          </div>
        </div>
        <div class="file">
          <i class="fa-solid fa-file-pdf"></i>
          <div>
            <h4>Lesotho Codes of Good Practice 2003</h4>
            <p>Guidance on fair treatment and workplace standards (Articles 24 &amp; 25).</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2023/07/lesothocodesofgoodpractice2003-art24and25.pdf" target="_blank" rel="noopener">View PDF</a>
            </div>
          </div>
        </div>
        <div class="file">
          <i class="fa-solid fa-file-pdf"></i>
          <div>
            <h4>Wages Order – 1 Jul 2021</h4>
            <p>The latest wage regulations for various sectors effective 1 July 2021.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2023/10/Wages-Order-1Jul21.pdf" target="_blank" rel="noopener">View PDF</a>
            </div>
          </div>
        </div>
        <div class="file">
          <i class="fa-solid fa-file-pdf"></i>
          <div>
            <h4>Workman’s Compensation Regulations 2014</h4>
            <p>Rules detailing compensation procedures for on-the-job injuries.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="https://www.work.co.ls/wp-content/uploads/2023/10/Workmans-Compensation-Regulations%5EJ-2014.pdf" target="_blank" rel="noopener">View PDF</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel" id="panel-papers" role="tabpanel" aria-labelledby="tab-papers">
      <p class="small" style="margin-bottom:18px;color:#5a6983;">Thought leadership exploring workplace dynamics and labour relations.</p>
      <div class="files">
        <div class="file">
          <i class="fa-solid fa-file-lines"></i>
          <div>
            <h4>Adversary or Asset</h4>
            <p>Shifting your mindset to view colleagues as partners rather than adversaries.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="page.php?slug=papers" rel="noopener">Read Summary</a>
            </div>
          </div>
        </div>
        <div class="file">
          <i class="fa-solid fa-file-lines"></i>
          <div>
            <h4>A Stitch in Time Saves Nine</h4>
            <p>Why proactive policies and procedures are essential to prevent disputes.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="page.php?slug=papers" rel="noopener">Read Summary</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel" id="panel-profile" role="tabpanel" aria-labelledby="tab-profile">
      <div class="files">
        <div class="file" style="grid-column: span 12;">
          <i class="fa-solid fa-id-card-clip"></i>
          <div>
            <h4>Company Profile 2023</h4>
            <p>Discover our mission, history and service offerings in a single document.</p>
            <div class="file-actions">
              <a class="btn btn-secondary" href="page.php?slug=company-profile" rel="noopener">View Online</a>
              <a class="btn btn-primary" href="https://www.work.co.ls/wp-content/uploads/2024/06/WPS-Company-Profile-2023-compressed.pdf" target="_blank" rel="noopener">Download PDF</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tabs = Array.from(document.querySelectorAll('.downloads-page .tab'));
    const panels = Array.from(document.querySelectorAll('.downloads-page .panel'));
    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        const target = tab.getAttribute('aria-controls');
        tabs.forEach((t) => {
          t.classList.toggle('active', t === tab);
          t.setAttribute('aria-selected', t === tab ? 'true' : 'false');
        });
        panels.forEach((panel) => {
          panel.classList.toggle('active', panel.id === target);
        });
      });
    });
  });
</script>
HTML
    ],
    [
        'title' => 'Legal Documents',
        'slug' => 'legal-documents',
        'menu_label' => 'Legal Documents',
        'menu_order' => 1,
        'menu_class' => '',
        'parent_slug' => 'downloads',
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'downloads',
        'footer_order' => 1,
        'external_url' => null,
        'meta_description' => 'Essential labour legislation for Lesotho employers and employees.',
        'body_class' => 'inner legal-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Legal Documents</h1>
    <p class="reveal slide-up delay-1">Stay compliant with Lesotho’s labour regulations and codes of practice.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Key Legislation</h2>
    <p class="reveal fade-in">Download foundational legal documents that govern employment relations in Lesotho.</p>
    <div class="cards legal-grid">
      <div class="card reveal fade-in">
        <h3>Labour Code Order 1992</h3>
        <p>The cornerstone legislation setting out labour rights, employer obligations, and dispute resolution mechanisms.</p>
        <a href="https://www.work.co.ls/wp-content/uploads/2023/07/Labour-code-Order-1992.pdf" class="btn btn-primary btn-small" target="_blank" rel="noopener">Download PDF</a>
      </div>
      <div class="card reveal fade-in delay-1">
        <h3>Lesotho Codes of Good Practice 2003</h3>
        <p>Guidelines on fair treatment and workplace standards based on the Labour Code (Articles 24 &amp; 25).</p>
        <a href="https://www.work.co.ls/wp-content/uploads/2023/07/lesothocodesofgoodpractice2003-art24and25.pdf" class="btn btn-primary btn-small" target="_blank" rel="noopener">Download PDF</a>
      </div>
      <div class="card reveal fade-in delay-2">
        <h3>Wages Order – 1 July 2021</h3>
        <p>Official order prescribing minimum wages and working conditions across industries effective from 1 July 2021.</p>
        <a href="https://www.work.co.ls/wp-content/uploads/2023/10/Wages-Order-1Jul21.pdf" class="btn btn-primary btn-small" target="_blank" rel="noopener">Download PDF</a>
      </div>
      <div class="card reveal fade-in delay-3">
        <h3>Workman’s Compensation Regulations 2014</h3>
        <p>Regulations covering compensation for employees injured in the course of employment and employer liability.</p>
        <a href="https://www.work.co.ls/wp-content/uploads/2023/10/Workmans-Compensation-Regulations%5EJ-2014.pdf" class="btn btn-primary btn-small" target="_blank" rel="noopener">Download PDF</a>
      </div>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Papers',
        'slug' => 'papers',
        'menu_label' => 'Papers',
        'menu_order' => 2,
        'parent_slug' => 'downloads',
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'downloads',
        'footer_order' => 2,
        'external_url' => null,
        'meta_description' => 'Thought-provoking perspectives on work, leadership, and HR.',
        'body_class' => 'inner papers-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Papers</h1>
    <p class="reveal slide-up delay-1">Opinion pieces and insights shaping the future of work in Lesotho.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Featured Columns</h2>
    <p class="reveal fade-in">Explore articles that tackle leadership, labour relations, and organisational culture.</p>
    <div class="cards legal-grid">
      <div class="card reveal fade-in">
        <h3>Adversary or Asset</h3>
        <p>We often see colleagues as adversaries or allies based on gut feelings rather than facts. This column urges leaders to view everyone on their team as an asset and focus on the unique value each person brings.</p>
        <a href="https://www.work.co.ls/?page_id=34" class="btn btn-primary btn-small" target="_blank" rel="noopener">Read Article</a>
      </div>
      <div class="card reveal fade-in delay-1">
        <h3>A Stitch in Time Saves Nine</h3>
        <p>Proactive policies and clear procedures prevent small issues from spiralling into major disputes and protect employer–employee relationships.</p>
        <a href="https://www.work.co.ls/?page_id=34" class="btn btn-primary btn-small" target="_blank" rel="noopener">Read Article</a>
      </div>
    </div>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Company Profile',
        'slug' => 'company-profile',
        'menu_label' => 'Company Profile',
        'menu_order' => 3,
        'parent_slug' => 'downloads',
        'show_in_menu' => 1,
        'show_in_footer' => 1,
        'footer_group' => 'downloads',
        'footer_order' => 3,
        'external_url' => null,
        'meta_description' => 'Discover Workplace Solutions’ history, mission, and services.',
        'body_class' => 'inner profile-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">Company Profile</h1>
    <p class="reveal slide-up delay-1">Learn more about who we are and what we do.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Our Story</h2>
    <p class="reveal fade-in">Workplace Solutions was founded with a mission to connect talented individuals with organisations that value and nurture their potential. We have grown into a trusted partner for candidates and employers across Lesotho and South Africa.</p>
    <p class="reveal fade-in delay-1">Our philosophy is rooted in building lasting relationships. We take the time to understand the unique needs of our clients and candidates, creating matches that foster growth, innovation, and success.</p>
    <h2 class="section-title reveal fade-in" style="margin-top:60px;">Mission &amp; Vision</h2>
    <p class="reveal fade-in">Our mission is to offer personalised, efficient, and ethical solutions that empower individuals and organisations alike.</p>
    <p class="reveal fade-in delay-1">Our vision is to be the leading recruitment partner in the region, recognised for integrity, innovation, and unwavering commitment to excellence.</p>
    <h2 class="section-title reveal fade-in" style="margin-top:60px;">Download Our Profile</h2>
    <p class="reveal fade-in">For a comprehensive overview of our services, history, and values, download our company profile document below.</p>
    <a href="https://www.work.co.ls/wp-content/uploads/2024/06/WPS-Company-Profile-2023-compressed.pdf" class="btn btn-primary reveal fade-in delay-1" target="_blank" rel="noopener">Download Profile</a>
  </div>
</section>
HTML
    ],
    [
        'title' => 'How to Apply',
        'slug' => 'how-to-apply',
        'menu_label' => 'How to apply',
        'menu_order' => 2,
        'parent_slug' => 'candidates',
        'show_in_menu' => 1,
        'show_in_footer' => 0,
        'footer_group' => null,
        'footer_order' => 0,
        'external_url' => null,
        'meta_description' => 'Step-by-step guide for submitting your CV to Workplace Solutions.',
        'body_class' => 'inner apply-page',
        'is_home' => 0,
        'is_published' => 1,
        'content' => <<<'HTML'
<section class="hero" style="min-height:40vh;">
  <div class="hero-overlay">
    <h1 class="reveal slide-up">How to Apply</h1>
    <p class="reveal slide-up delay-1">A step-by-step guide to submitting your application successfully.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title reveal fade-in">Application Process</h2>
    <p class="reveal fade-in">Follow these simple steps to submit your CV and apply for vacancies through Workplace Solutions.</p>
    <ul style="margin-top:30px; list-style: none; padding-left:0;">
      <li class="reveal fade-in" style="margin-bottom:20px;"><strong>1. Prepare Your CV:</strong> Ensure your CV is up to date, highlighting your key skills and achievements relevant to the position you are targeting.</li>
      <li class="reveal fade-in delay-1" style="margin-bottom:20px;"><strong>2. Submit Online:</strong> Use our <a href="https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions" target="_blank" rel="noopener">online CV submission form</a> to upload your CV and provide your personal details.</li>
      <li class="reveal fade-in delay-2" style="margin-bottom:20px;"><strong>3. Browse Vacancies:</strong> Visit our <a href="https://webapp.placementpartner.com/wi/weblinks.php?id=workplacesolutions" target="_blank" rel="noopener">vacancies board</a> to explore current opportunities that match your profile.</li>
      <li class="reveal fade-in delay-3" style="margin-bottom:20px;"><strong>4. Apply:</strong> For your suitable vacancy, follow the application instructions provided. Tailor your cover letter to showcase why you are the ideal candidate.</li>
      <li class="reveal fade-in delay-4" style="margin-bottom:20px;"><strong>5. Interview:</strong> If shortlisted, we will contact you to arrange an interview. Prepare by researching the employer and practising common interview questions.</li>
    </ul>
  </div>
</section>
HTML
    ],
    [
        'title' => 'Submit Your CV',
        'slug' => 'submit-your-cv',
        'menu_label' => 'Submit your CV',
        'menu_order' => 1,
        'parent_slug' => 'candidates',
        'show_in_menu' => 1,
        'show_in_footer' => 0,
        'footer_group' => null,
        'footer_order' => 0,
        'external_url' => 'https://webapp.placementpartner.com/wi/application_form.php?id=workplacesolutions',
        'meta_description' => null,
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => '<section class="section"><div class="container"><h1>Submit Your CV</h1><p>This link opens the Placement Partner application form in a new tab.</p></div></section>',
    ],
    [
        'title' => 'Vacancies',
        'slug' => 'vacancies',
        'menu_label' => 'Vacancies',
        'menu_order' => 3,
        'parent_slug' => 'candidates',
        'show_in_menu' => 1,
        'show_in_footer' => 0,
        'footer_group' => null,
        'footer_order' => 0,
        'external_url' => 'https://webapp.placementpartner.com/wi/weblinks.php?id=workplacesolutions',
        'meta_description' => null,
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => '<section class="section"><div class="container"><h1>Vacancies</h1><p>Browse current opportunities on our Placement Partner portal.</p></div></section>',
    ],
    [
        'title' => 'Available Posts',
        'slug' => 'available-posts',
        'menu_label' => 'Available posts',
        'menu_order' => 8,
        'menu_class' => 'btn btn-primary btn-small',
        'parent_slug' => null,
        'show_in_menu' => 1,
        'show_in_footer' => 0,
        'footer_group' => null,
        'footer_order' => 0,
        'external_url' => 'https://webapp.placementpartner.com/wi/weblinks.php?id=workplacesolutions',
        'meta_description' => null,
        'body_class' => 'inner',
        'is_home' => 0,
        'is_published' => 1,
        'content' => '<section class="section"><div class="container"><h1>Available Posts</h1><p>View current opportunities on our Placement Partner vacancies board.</p></div></section>',
    ],
];

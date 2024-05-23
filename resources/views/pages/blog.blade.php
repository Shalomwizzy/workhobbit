@extends('layouts.app')

@section('content')
    <!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
  
      <div class="row">
  
        <div class="col-lg-8 entries">
  
          <article class="entry">
  
            <div class="entry-img">
              <img src="{{ asset('images/blog-1.jpg') }}" alt="" class="img-fluid">
            </div>
  
            <h2 class="entry-title">
                <a href="blog-single.html">The Role of Technology in Remote Work: Navigating the Digital Workspace</a>
              </h2>
  
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Jane Smith</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2024-02-15">Feb 15, 2024</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">8 Comments</a></li>
              </ul>
            </div>
  
            <div class="entry-content">
                <p>
                    As remote work continues to become the new norm, the integration of technology plays a pivotal role in reshaping the modern workplace. Companies worldwide are leveraging innovative tech solutions to bridge the gap between distance and productivity.
                    From virtual collaboration platforms to advanced communication tools, the digital workspace is evolving rapidly to meet the demands of remote teams.
                  </p>
              <div class="read-more">
                <a href="{{ route('blog.single') }}">Read More</a>
              </div>
            </div>
  
          </article><!-- End blog entry -->
  
          <article class="entry">
  
            <div class="entry-img">
              <img src="{{ asset('images/blog-2.jpg') }}" alt="" class="img-fluid">
            </div>
  
            <h2 class="entry-title">
              <a href="blog-single.html">Harnessing AI for Remote Work Efficiency: The Future of Productivity</a>
            </h2>
  
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2024-03-20">Mar 20, 2024</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">10 Comments</a></li>
              </ul>
            </div>
  
            <div class="entry-content">
              <p>
                Artificial Intelligence is revolutionizing the way we work remotely. Explore the latest AI-driven tools and technologies that are enhancing productivity and streamlining workflows for remote teams.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>
  
          </article><!-- End blog entry -->
  
          <article class="entry">
  
            <div class="entry-img">
              <img src="{{ asset('images/blog-3.jpg') }}" alt="" class="img-fluid">
            </div>
  
            <h2 class="entry-title">
              <a href="blog-single.html">The Future of Remote Tech Jobs: Trends to Watch in 2024</a>
            </h2>
  
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Alice Johnson</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2024-04-10">Apr 10, 2024</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">6 Comments</a></li>
              </ul>
            </div>
  
            <div class="entry-content">
              <p>
                As remote work continues to evolve, so do the job opportunities in the tech industry. Stay ahead of the curve with insights into emerging trends and in-demand skills for remote tech jobs in 2024.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>
  
          </article><!-- End blog entry -->
  
          <article class="entry">
  
            <div class="entry-img">
              <img src="{{ asset('images/blog-4.jpg') }}" alt="" class="img-fluid">
            </div>
  
            <h2 class="entry-title">
              <a href="blog-single.html">Cybersecurity Challenges in Remote Work: Protecting Your Digital Assets</a>
            </h2>
  
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Michael Brown</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2024-05-05">May 5, 2024</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">5 Comments</a></li>
              </ul>
            </div>
  
            <div class="entry-content">
              <p>
                With the rise of remote work, cybersecurity has become a critical concern for businesses. Learn about the key cybersecurity challenges faced by remote teams and how to mitigate risks to safeguard your organization's digital assets.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>
  
          </article><!-- End blog entry -->
  
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>
  
        </div><!-- End blog entries list -->
  
        <div class="col-lg-4">
  
          <div class="sidebar">
  
            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->
  
            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Education <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->
  
            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('images/blog-recent-1.jpg') }}" alt="">
                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
  
              <div class="post-item clearfix">
                <img src="{{ asset('images/blog-recent-2.jpg') }}" alt="">
                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
  
              <div class="post-item clearfix">
                <img src="{{ asset('images/blog-3.jpg') }}" alt="">
                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
  
              <div class="post-item clearfix">
                <img src="{{ asset('images/blog-recent-4.jpg') }}" alt="">
                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
  
              <div class="post-item clearfix">
                <img src="{{ asset('images/blog-recent-5.jpg') }}" alt="">
                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
  
            </div><!-- End sidebar recent posts-->
  
            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->
  
          </div><!-- End sidebar -->
  
        </div><!-- End blog sidebar -->
  
      </div>
  
    </div>
  </section>




@endsection
<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
  <div class="sidebar-box pt-md-4">
    <form method="get" action="{{ route('searchPost') }}" onsubmit = "return validateForm()" class="search-form">
      <div class="form-group">
        <span class="icon icon-search"></span>
        <input type="text" id="search" class="form-control" name='search' placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div>
  <div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Categories</h3>
    <ul class="categories">
          @forelse($categories as $category)
      <li><a href="{{route('category',$category->slug)}}">{{$category->name}} <span>({{count($category->posts->where('is_published','1'))}})</span></a></li>
          @empty
          <li>Không có danh mục</li>
          @endforelse
    </ul>
  </div>

  <div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Popular Articles</h3>
    <div class="block-21 mb-4 d-flex">
      <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
      <div class="text">
        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
        <div class="meta">
          <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
    </div>
    <div class="block-21 mb-4 d-flex">
      <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
      <div class="text">
        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
        <div class="meta">
          <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
    </div>
    <div class="block-21 mb-4 d-flex">
      <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
      <div class="text">
        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
        <div class="meta">
          <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
          <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
          <div><a href="#"><span class="icon-chat"></span> 19</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Tag Cloud</h3>
    <ul class="tagcloud">
      <a href="#" class="tag-cloud-link">animals</a>
      <a href="#" class="tag-cloud-link">human</a>
      <a href="#" class="tag-cloud-link">people</a>
      <a href="#" class="tag-cloud-link">cat</a>
      <a href="#" class="tag-cloud-link">dog</a>
      <a href="#" class="tag-cloud-link">nature</a>
      <a href="#" class="tag-cloud-link">leaves</a>
      <a href="#" class="tag-cloud-link">food</a>
    </ul>
  </div>

  <div class="sidebar-box subs-wrap img py-4" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <h3 class="mb-4 sidebar-heading">Newsletter</h3>
    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
    <form action="#" class="subscribe-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email Address">
        <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
      </div>
    </form>
  </div>

  <div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Archives</h3>
    <ul class="categories">
      <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
      <li><a href="#">September 2018 <span>(6)</span></a></li>
      <li><a href="#">August 2018 <span>(8)</span></a></li>
      <li><a href="#">July 2018 <span>(2)</span></a></li>
      <li><a href="#">June 2018 <span>(7)</span></a></li>
      <li><a href="#">May 2018 <span>(5)</span></a></li>
    </ul>
  </div>


  <div class="sidebar-box ftco-animate">
    <h3 class="sidebar-heading">Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
  </div>
</div><!-- END COL -->
</div>
</div>
</section>
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{asset('js/app.js')}}"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
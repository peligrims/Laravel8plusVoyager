
@if(isset($pages) && is_object($pages))
  <section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2><strong>Together</strong> Lets Start Business with future perspective</h2>
             <p>DELIVERING POSITIVE SOCIAL & ENVIRONMENTAL IMPACT THROUGH TRANSITIONAL LENDING AND ALTERNATIVE ASSET MANAGEMENT</p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
      
      </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!--Hero_Section--> 
  <section id="aboutUs">
  <!--Aboutus-->
  <div class="inner_wrapper">
  <div class="container">
    <h2>About Us</h2>
    <div class="inner_section">
        <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset ('assets/img/about-img.jpg')}}" class="img-circle delay-03s animated wow zoomIn" alt="">
            </div>
            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class=" delay-01s animated fadeInDown wow animated">
             <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div> 
            </div>
        </div>      
    </div>
  </div> 
  </div>
  </section>
@endif
  <!--Aboutus--> 
  <!--Service-->
@if(isset($services) && is_object($services))
  <section  id="service">
  <div class="container">
    <h2>HOW WE WORK</h2>
  
    <p>
    We work closely with you to propose products well suited to your return objectives, liquidity constraints and risk tolerance. We have the experience to evaluate how an allocation to our alternative products could improve your returns while decreasing the risk and drawdown characteristics of your portfolio.
    </p>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-3">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-user"></i></span> </div>
            
            <p class="animated fadeInDown wow">We discuss your financial goals and any income required from your portfolio. We work with you to determine the asset allocation and structure the portfolio as per your needs.</p>
          </div>
        </div>
        <div class="col-lg-3 borderLeft">     
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-file"></i></span> </div>
            <p class="animated fadeInDown wow">We send you our investment management agreement once you have decided to work with us. We make your transition seamless including working with your current advisor to transition your assets.</p>
          </div>
        </div>
        <div class="col-lg-3 borderLeft">     
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-bar-chart"></i></span> </div>
            <p class="animated fadeInDown wow">We optimize the fund’s returns in compliance with the agreed strategy. Our investment committee reviews the fund’s strategy and performance. We report on our clients’ investments.</p>
          </div>
        </div>
        <div class="col-lg-3 borderLeft">     
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-phone"></i></span> </div>
            <p class="animated fadeInDown wow">The portfolio management team is available via phone, email, and in person, to address your questions or needs. We provide utmost importance to our clients in having the most relevant information.</p>
          </div>
        </div>
        
      </div>
     <h2>WHAT IT COSTS</h2>
    <p>
   The fee schedules depend on the strategy that is implemented on the client’s behalf. Some of our funds have no management fee and offer a capped cumulative preferred return while some others have a more traditional fee combination of management and performance fees.
    </p>
    
    </div>
  </div>
  </section>
@endif

<!--Service-->
<!-- Portfolio -->
@if(isset($portfolios) && is_object($portfolios))

  <!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    
    @if(isset($tags))
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5></a></li>
          
          @foreach($tags as $tag)
            <li><a class="" href="#" data-filter=".{{$tag}}">
          <h5>{{$tag}}</h5>

          </a></li>
          @endforeach
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    @endif
    
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      
      @foreach($portfolios as $item)
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{ $item->filter }} isotope-item">
        <div class="portfolio_img"> {{ Html::image('assets/img/project/'.$item->images,$item->name)}} </div>        
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">{{ $item->name }}</h4>
            <h4 class="project_name">{{ $item->price }}</h4>
          </div>
        </div>
        </div>
      <!--/Portfolio Item --> 
      
      
      @endforeach

      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
  </section>
    <!--/Portfolio --> 
@endif


@if(isset($peoples) && is_object($peoples))

  <section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    
    <div class="team_section clearfix">
      
      @foreach($peoples as $k=>$people)
      
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-0{{ ($k*3 + 3) }}s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          {{ Html::image('assets/img/team/'.$people->images,$people->name)}}
        </div>
        <h3 class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{$people->name}}</h3>
        <span class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{$people->position}}</span>
        <p class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{$people->text}}</p>
      </div>
      
      @endforeach

    </div>
  </div>
  </section>
  <!--/Team-->
    <!--/Peoples -->
@endif
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft"> 
     <div class="contact_info">
                            <div class="detail">
                                <h4>Alpharock Asset Management</h4>
                                <p> NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+1 000 000000</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>info@alpharock.com</p>
                            </div> 
                        </div>
            
        
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
          <form method="POST" action="{{ route('home')}}" >
            <input class="input-text" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            
            <input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            
            <textarea name="text" class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn" type="submit" value="send message"> 
           {{ csrf_field() }}
          </form>
          </div>
          
          </div>
        </div>
         
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2020, Designed by in <a href="http://  
MOSGOVOI.RU"> mosgovoi.ru</a>. </span> </div>
  </div>
</footer>
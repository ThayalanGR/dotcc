<?php
  session_start();
  require_once('dbconnection.php');

  include('checklogin1.php');
  check_login1();
  //register code
  // include('register.php');
  //login code
  // include('login.php');
  //deciding whether div in login or loggedin
  include('decidelogin.php');
  //including header
  include('header.php');
  //including login register popup module as modal
  // include('loginlogoutmodel.php');
  //forget password code
  // include('forgetpasswordcode.php');
  //including leftpan
  // include('leftpan.php');
  //code for comments
  // include('comments.php');

?>
<div id="wrapper" style="margin-top:60px;">
<!-- all main contents over here -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-12">
        <div class="container-fluid">
        <div class="row bodysection justify-content-center">
          <div class="col ">
              <div class="card" style="width:100%">
                      <img class="card-img-top img-responsive rounded  " style = "filter:opacity(90%);" src="https://venturefizz.com/sites/default/files/styles/blog_masthead/public/m/blog/masthead/events_preview_masthead.png" alt="Card image">
                      <div class="card-img-overlay col-4 bg-white rounded" style = "filter: none;">
                        <h4 class="card-title logo3 " >Title Event Title Event  Title Event </h4>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-text logo2 ">event discription #####*******************gso;fsdkl;jfnweklfjnsdfs\
                            dfkljasnfhdashfslfnl;
                            sdflknsaklfno
                        </p>
                        <a href="#" class="btn btn-warning logo1">Details and Register</a>
                      </div>
              </div>        
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col">
              <div class="card-columns">
                  <div class="card">
                    <img class="card-img-top" src="https://www.techfunnel.com/wp-content/uploads/2018/01/HR-Tech-Conferences-and-Events-to-Follow-2018.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">
                        <small class="text-muted">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                      </footer>
                    </blockquote>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://www.techfunnel.com/wp-content/uploads/2018/01/HR-Tech-Conferences-and-Events-to-Follow-2018.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card bg-primary text-white p-3">
                    <blockquote class="blockquote mb-0">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                      <footer class="blockquote-footer">
                        <small>
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                      </footer>
                    </blockquote>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img" src="https://www.techfunnel.com/wp-content/uploads/2018/01/HR-Tech-Conferences-and-Events-to-Follow-2018.jpg" alt="Card image">
                  </div>
                  <div class="card p-3">
                    <blockquote class="blockquote mb-0">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">
                        <small class="text-muted">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                      </footer>
                    </blockquote>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col">
            <div class="card mb-3">
                <img class="card-img-top" src="https://www.techfunnel.com/wp-content/uploads/2018/01/HR-Tech-Conferences-and-Events-to-Follow-2018.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col">
              <div class="card shadow-lg" style="width:100%">
                      <img class="card-img-top img-responsive rounded  " style = "filter:opacity(90%);" src="https://venturefizz.com/sites/default/files/styles/blog_masthead/public/m/blog/masthead/events_preview_masthead.png" alt="Card image">
                      <div class="card-img-overlay col-4 bg-white shadow-lg rounded" style = "filter: none;">
                        <h4 class="card-title logo3 " >Title Event Title Event  Title Event </h4>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-text logo2 ">event discription #####*******************gso;fsdkl;jfnweklfjnsdfs\
                            dfkljasnfhdashfslfnl;
                            sdflknsaklfno
                        </p>
                        <a href="#" class="btn btn-warning logo1">Details and Register</a>
                      </div>
              </div>        
          </div>

      </div>
      <div class="row justify-content-center">
          <div class="col">
            <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="https://agcdn-2mrybbgckm7omi0k.netdna-ssl.com/wp-content/uploads/2018/05/alphagamma-best-US-tech-events-you-cant-miss-in-2018-entrepreneurship-003.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="https://specials-images.forbesimg.com/imageserve/661062073/960x0.jpg?fit=scale" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="https://agcdn-2mrybbgckm7omi0k.netdna-ssl.com/wp-content/uploads/2018/05/alphagamma-best-US-tech-events-you-cant-miss-in-2018-entrepreneurship-003.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col">
            <div class="card">
            <img class="card-img-bottom" src="https://www.americaninno.com/wp-content/uploads/2018/03/samantha-gades-540989-unsplash-1068x400.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
              
            </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col ">
            <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="https://specials-images.forbesimg.com/imageserve/661062073/960x0.jpg?fit=scale" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
               
              </div>
        </div>
      </div>
        </div>
      </div>
    </div>
     
  </div>
</div>

<?php include('./footer.php'); ?>





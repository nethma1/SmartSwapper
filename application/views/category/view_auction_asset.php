
      <!--Start asset details view  -->
      <div class="pdp-main">
          <div id="product-content-wrapper">

          <div class="row" style="margin-top:20px;">
            <div class="col-md-7 col-sm-7 col-xs-12">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">


                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="https://www.jewellerymonthly.com/wp-content/uploads/2014/11/fake-jewellery.jpg" >
                    </div>

                    <div class="item">
                      <img src="https://i.pinimg.com/originals/a3/7c/c2/a37cc2848b28287379683a57df885c1d.jpg">
                    </div>

                    <div class="item">
                      <img src="http://www.alghad.com/files/510162.jpg">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                <div class="row" style="margin-bottom:50px;height:110px;">
                  <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="https://www.jewellerymonthly.com/wp-content/uploads/2014/11/fake-jewellery.jpg"></li>
                    <li data-target="#myCarousel" data-slide-to="1"><img src="https://i.pinimg.com/originals/a3/7c/c2/a37cc2848b28287379683a57df885c1d.jpg"></li>
                    <li data-target="#myCarousel" data-slide-to="2"><img src="http://www.alghad.com/files/510162.jpg"></li>
                  </ul>
                </div>
              </div>
              
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="details-wrapper">
                <div class="details-top">
                  <div class="details-top-table">
                    <div class="details-top-row">

                      <div class="details-top-cell highlighted">
                        <div class="time-counter">
                          <table class="time-counter-table">
                            <tbody>
                              <tr class="time-counter-row row-values">
                                <td class="time-counter-cell" id="days"></td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td>
                                <td class="time-counter-cell" id="hours"></td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td> 
                                <td class="time-counter-cell" id="minutes"></td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td> 
                                <td class="time-counter-cell" id="seconds"></td>
                              </tr>
                              <tr class="time-counter-row row-labels">
                                <td class="time-counter-cell days">Days</td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td> 
                                <td class="time-counter-cell hours">Hrs</td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td> 
                                <td class="time-counter-cell minutes">Mins</td>
                                <td class="time-counter-cell separator">&nbsp;:&nbsp;</td> 
                                <td class="time-counter-cell seconds">Secs</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="details-top-cell highlighted">
                        <div>Current Bid</div>
                        <div class="price-bids">
                          <span class="price-bids-amount">Rs.25000.00</span>
                          <span class="price-bids-count">(2 bids)</span>
                        </div>
                      </div>

                    </div>

                    <div class="details-top-row">
                      <div class="details-top-cell">
                        <div class="expiration-time">
                          Expires:
                          23/03/2018 09:10:14 am
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="details-bottom product-actions">
                  <div class="auction-bid-form">
                    <ul class="list-group">
                      <li class="list-group-item code"><label for="code">Product Code:</label><input type="text" id="code" class="hidden-input" readonly></li>
                      <li class="list-group-item seller"><label for="seller">Seller:</label><input type="text" id="seller" class="hidden-input" readonly></li>
                      <li class="list-group-item postedDate"><label for="postedDate">Posted:</label><input type="da" id="postedDate" class="hidden-input" readonly></li>
                      <div class="row" style="margin-top:10px;">
                        <form action="#">
                          <div class="col-md-6 col-sm-6 col-xs-12 left">
                            <div class="label">Rs:</div>
                            <input type="text" name="price" id="price" class="input-text">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn">Bid Now</button>
                          </div>
                        </form>
                        
                      </div>
                    </ul>
                  </div>

                </div>

              </div>
            </div>
          </div>
    </div>
  </div>

  <!--Product Details-->
  <div class="details-description" style="margin-top:20px;margin-bottom:20px;">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
        <li><a data-toggle="tab" href="#productDetails">Product Details</a></li>
        <li><a data-toggle="tab" href="#stoneDetails">Stone Details</a></li>
      </ul>

      <div class="tab-content">
        <div id="description" class="tab-pane fade in active">
          <h3>Description</h3>
          <p>Description will be displyed here.</p>
        </div>
        <div id="productDetails" class="tab-pane fade">
          <h3>Product Details</h3>
          <p>Product Details will be displyed here.</p>
        </div>
        <div id="stoneDetails" class="tab-pane fade">
          <h3>Stone Details</h3>
          <p>Stone Details will be displyed here.</p>
        </div>
      </div>
  </div>
  </div>
  </div>

 <script type="text/javascript">
          function countdown() {
              var now=new Date();
              var eventDate=new Date("April 10,2018 00:00:00");

              var currentTime=now.getTime();
              var eventTime=eventDate.getTime();

              var remTime=eventTime-currentTime;

              var seconds=Math.floor(remTime/1000);
              var minutes=Math.floor(seconds/60);
              var hours=Math.floor(minutes/60);
              var days=Math.floor(hours/24);

              hours%=24;
              minutes%=60;
              seconds%=60;

              days=(days<10)?"0"+days:days;
              hours=(hours<10)?"0"+hours:hours;
              minutes=(minutes<10)?"0"+minutes:minutes;
              seconds=(seconds<10)?"0"+seconds:seconds;

              if (days>=0&&hours>=0&&minutes>=0&&seconds>=0) {
                document.getElementById('days').innerHTML=days;
                document.getElementById('hours').innerHTML=hours;
                document.getElementById('minutes').innerHTML=minutes;
                document.getElementById('seconds').innerHTML=seconds;
              }
              else{
                document.getElementById('days').innerHTML="00";
                document.getElementById('hours').innerHTML="00";
                document.getElementById('minutes').innerHTML="00";
                document.getElementById('seconds').innerHTML="00";
                document.getElementById('days').style.color='red';
                document.getElementById('hours').style.color='red';
                document.getElementById('minutes').style.color='red';
                document.getElementById('seconds').style.color='red';

              }

              

          setTimeout(countdown,1000);
        }
       
        countdown();
  </script>
  
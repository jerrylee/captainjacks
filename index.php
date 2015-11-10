<?php include('header.php'); ?>

<section id="splash">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="inner-container valign-wrapper">
          <h1 class="center-align">Captain <i class="fa fa-anchor"></i> Jacks<br />Floating Bar & Grill <br />
          <small>20400 Hackberry Creek Park Road, Frisco, TX 75034</small>
          </h1>
        </div>
      </div>
    </div>
  </div>
</section><!--/splash-->
<section id="foodMenu" ng-app="foodMenu" ng-controller="menuList">
  <div class="container">
    <div class="row" ng-repeat="x in foodMenu" ng-controller="menuList">

        <div class="row">
          <div class="col s8"><h3>{{x.item}}</h3></div>
          <div class="col s4"><h3>{{x.price}}</h3></div>
        </div><!--/row-->

        <div class="row">
          <div class="col s12">{{x.description}}</div>
        </div>

    </div><!--/row -->
    </div><!--/row-->
  </div><!--/container-->
</section><!--/foodMenu-->

<section id="planningEvent">
  <div class="container">
    <div class="row">
      <div class="planningHolder">
        <h3>Planning An Event?</h3>
        <a class="btn-custom modal-trigger" href="#modal1">GET IN TOUCH</a>
        <p>Jack's is the perfect venue for almost any event, big or small.</p>
      </div>
    </div>
  </div>
</section><!--/planningEvent-->

<?php include('footer.php'); ?>

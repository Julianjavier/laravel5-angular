<!DOCTYPE html>
<html lang="en-US" ng-app="productListing">
    <head>
        <title>Laravel 5 AngularJS CRUD Example</title>
        <link href="{{ asset('app/css/styles.css') }}" rel="stylesheet" type="text/css" >
        <!-- Load Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body  ng-controller="productController">
      @include('sections.header')

        <div class="wrapper">
          <div ng-repeat="item in products track by $index" class="col-md-4 col-sm-6 product">
            <!-- <h2><%item.id%></h2> -->
            <div class="img-container">
              {!! Html::image('img/<%item.image_name%>') !!}
            </div>
            <div class="info">
              <h3><%item.product_name%></h3>
              <h3 class="price">$<%item.price%></h3>
              <div class="details">
                {!! Html::link('/details/<%item.id%>', 'DETAILS') !!}
              </div>
            </div>
          </div>
        </div>

      @include('sections.footer')

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.js') ?>"></script>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/productController.js') ?>"></script>
    </body>
</html>

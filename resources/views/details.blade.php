<!DOCTYPE html>
<html lang="en-US" ng-app="productListing">
    <head>
        <title>Laravel 5 AngularJS CRUD Example</title>
        <link href="{{ asset('app/css/styles.css') }}" rel="stylesheet" type="text/css" >
        <!-- Load Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body  ng-controller="productDetailsController">
      @include('sections.header')

        <div class="wrapper">
          <div class="img-details-container col-md-3 col-sm-6">
            {!! Html::image('img/<%products.image_name%>') !!}
          </div>
          <div class="detail-info col-md-9 col-sm-6">
            <h3><%products.product_name%></h3>
            <h3 class="price">$<%products.price%></h3>
            <div class="description">
              <p>
                <%products.description%>
              </p>
            </div>
          </div>

        </div>

      @include('sections.footer')

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.js') ?>"></script>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/productDetailsController.js') ?>"></script>
    </body>
</html>

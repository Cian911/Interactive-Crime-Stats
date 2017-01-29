<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ireland Interactive Crime Statistics</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="dist/styles/main.css">
  <link rel="stylesheet" type="text/css" href="dist/styles/vendor.css">  
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 -padded">
        <!-- Google Map -->
        <div class="js-map"></div>
      </div>
      <div class="col-md-4 -padded">
        <!-- Map Options Selector -->
        <section class="sidebar-left">
          <div class="sidebar-introduction">
            <p>Irish Interactive Crime Statistics - Built by <a href="https://twitter.com/cian_911" target="_blank">@Cian_911</a></p>
            <hr>
          </div>
          <div class="sidebar-options">
            <label for="region-selector">Choose Region:</label>
            <div class="selector region-selector">
              <select name="region" id="region-selector" class="form-control js-region-selector">
                <option>Raheny</option>
              </select>
            </div>

            <div class="selector crime-selector">
              <label for="crime-selector">Choose Crime:</label>
              <select name="crime" id="crime-selector" class="form-control js-crime-selector">
                <option value="1">Attempts/Threats/Murder/Assaults/Harassments</option>       
                <option value="2">Dangerous or negligent acts</option>       
                <option value="3">Kidnapping and related offences</option>       
                <option value="4">Robbery, extortion and hijacking offences</option>       
                <option value="5">Burglary and related offences</option>       
                <option value="6">Theft and related offences</option>       
                <option value="7">Fraud, deception and related offences</option>       
                <option value="8">Controlled drug offences</option>       
                <option value="9">Weapons and Explosives Offences</option>       
                <option value="10">Damage to property and to the environment</option>       
                <option value="11">Public order and other social code offences</option>       
                <option value="12">Offences to government, justice procedures and organisation of crime</option>       
              </select>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <script src="dist/scripts/vendor.min.js" type="text/javascript"></script>
  <script src="dist/scripts/main.min.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiPQl0SsHkbIi1Go-azR1ImM8CVB1KZw0" type="text/javascript"></script>

</body>
</html>
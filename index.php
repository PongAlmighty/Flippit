<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="6">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <title>Flip Example Preset</title>

    <link rel="stylesheet" href="./flip/flip.min.css">

</head>
<body>

<!-- START OF FLIP EXAMPLE PRESET -->

<style>
.tick {
  font-size:2.0rem; 
  white-space:nowrap; 
  font-family:arial,sans-serif;
  text-align:horizontal,vertical-text;
  
}

.tick-label {
  margin-top:.01em;
  font-size:3em;
  color: #595d63 !important; 
  
}

.tick-char {
  width:.5em;
  font-size:2em; 
  text-align:center;
}

.tick-text-inline {
  display:inline-block;text-align:center;min-width:1em;
  color: #595d63 !important; 
  
  font-size:1em;
}

.tick-group {
  margin:0 5.5em;text-align:center;
}

body {
   background-color: #fff !important; 
}

.tick-flip-panel {
   color: #fff !important; 
   background-color: #3c3e3c !important; 
  font-size:1.5em;
    margin:0 0;
}

  
.tick-flip {
  font-family: !important; 
  margin-left: .0625em;
  margin-right: .0625em;
  border-radius:0.12em !important;  
  font-size:3em;
}

.tick-flip-panel-text-wrapper {
   line-height: 1em !important; 
  text-align:center;
   
}



}
</style>

  <div class="tick" data-did-init="handleTickInit" data-layout="horizontal fit">

    <div data-repeat="true" data-layout="horizontal" class="tick-flip-panel" data-transform="upper -> split -> delay(random, 100, 150)" >
        <span data-overlay="center" data-view="flip" data-transform="ascii -> arrive -> char(a-zA-Z0-9)"></span>
    </div>
  </div>

    <div class="tick" data-did-init="handleTickInit2">

    <div data-repeat="true" data-layout="horizontal fit" data-transform="upper -> split -> delay(random, 100, 150)">
        <span data-view="flip" data-style="flip-easing: ease-in-circ" data-transform="ascii -> arrive -> round -> char(a-zA-Z0-9)" class="tick-char"></span>
    </div>
  </div>


  
<script>
    function handleTickInit(tick) {
        // request data from a php file every five seconds
        Tick.data.request(
            'data.php?strVar=1',
            function(response) {
              tick.value = response;
              console.log(response);
            }
        );
    }

    function handleTickInit2(tick) {
        // request data from a php file every five seconds
        Tick.data.request(
            'data.php?strVar=3',
            function(response) {
              tick.value = response;
              console.log(response);
            }
        );
    }

</script>

<!-- END OF FLIP EXAMPLE PRESET -->

<script src="./flip/flip.min.js"></script>

</body>
</html>
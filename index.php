<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta http-equiv="refresh" content="6">-->
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
  font-size:1rem; 
  white-space:nowrap; 
  font-family:"Highway Gothic Regular",sans-serif;
  line-height:2.0;
  
}

.tick-label {
  margin-top:.01em;
  font-size:3em;
  color: #595d63 !important; 
  
}

.tick-char {
  width:1em;
  font-size:2em; 
  text-align:center;
}

.tick-text-inline {
  display:inline-block;text-align:center;min-width:1em;
  color: #595d63 !important; 
  
  font-size:.9em;
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
  font-size:2em;
   
}

  
.tick-flip {
  font-family: !important; 
  margin-left: .0625em;
  margin-right: .0625em;
  border-radius:0.12em !important;  
  font-size:3em;
  text-indent:-.050em
}

.tick-flip-panel-text-wrapper {
   line-height: 1em !important; 
  text-align:center;
   
}
.spacingStuff {
  padding:150px;
  
}



}
</style>
<div class="spacingStuff">
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
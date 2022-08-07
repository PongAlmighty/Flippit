<!DOCTYPE html>
<html lang="en">
<head>
    
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
  font-size:1rem; white-space:nowrap; font-family:arial,sans-serif;
}

.tick-flip,.tick-text-inline {
  font-size:2.5em;
}

.tick-label {
  margin-top:1em;font-size:1em;
}

.tick-char {
  width:1.5em;
}

.tick-text-inline {
  display:inline-block;text-align:center;min-width:1em;
}

.tick-text-inline+.tick-text-inline {
  margin-left:-.325em;
}

.tick-group {
  margin:0 .5em;text-align:center;
}

body {
   background-color: #fff !important; 
}

.tick-text-inline {
   color: #595d63 !important; 
}

.tick-label {
   color: #595d63 !important; 
}

.tick-flip-panel {
   color: #fff !important; 
}

.tick-flip {
   font-family: !important; 
}

.tick-flip-panel-text-wrapper {
   line-height: 1.45 !important; 
}

.tick-flip-panel {
   background-color: #3c3e3c !important; 
}

.tick-flip {
   border-radius:0.12em !important;  
}
</style>

  <div class="tick" data-did-init="handleTickInit">

    <div data-repeat="true" data-layout="horizontal fit" data-transform="upper -> split -> delay(random, 100, 150)">
        <span data-view="flip" data-transform="ascii -> arrive -> round -> char(a-zA-Z)" class="tick-char"></span>
    </div>
  </div>

    <div class="tick2" data-did-init="handleTickInit2">

    <div data-repeat="true" data-layout="horizontal fit" data-transform="upper -> split -> delay(random, 100, 150)">
        <span data-view="flip" data-transform="ascii -> arrive -> round -> char(a-zA-Z)" class="tick-char"></span>
    </div>
  </div>


  
<script>
    function handleTickInit(tick) {
        // request data from a php file every five seconds
        Tick.data.poll(
            'data.php?strVar=1',
            function(response) {
              tick.value = response;
              console.log(response);
            },
            5000
        );
    }

    function handleTickInit2(tick2) {
        // request data from a php file every five seconds
        Tick.data.poll(
            'data.php?strVar=2',
            function(response) {
              tick.value = response;
              console.log(response);
            },
            0
        );
    }






</script>

<!-- END OF FLIP EXAMPLE PRESET -->

<script src="./flip/flip.min.js"></script>

</body>
</html>
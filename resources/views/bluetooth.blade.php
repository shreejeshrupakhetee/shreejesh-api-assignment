<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Live Bluetooth Information</title>
</head>
<body>
<h1 class="text-center"><kbd>Live Bluetooth Information</kbd></h1>


<div class="container">
   <Button type="submit" class="btn btn-secondary">Search Bluetooth Devices</Button>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

<script>
  
  class PlaybulbCandle {

constructor() {
  this.device = null;
  this.onDisconnected = this.onDisconnected.bind(this);
}

request() {
  let options = {
    "filters": [{
      "name": "PLAYBULB Candle"
    }],
    "optionalServices": [0xFF02]
  };
  return navigator.bluetooth.requestDevice(options)
  .then(device => {
    this.device = device;
    this.device.addEventListener('gattserverdisconnected', this.onDisconnected);
  });
}

connect() {
  if (!this.device) {
    return Promise.reject('Device is not connected.');
  }
  return this.device.gatt.connect();
}

writeColor(data) {
  return this.device.gatt.getPrimaryService(0xFF02)
  .then(service => service.getCharacteristic(0xFFFC))
  .then(characteristic => characteristic.writeValue(data));
}

disconnect() {
  if (!this.device) {
    return Promise.reject('Device is not connected.');
  }
  return this.device.gatt.disconnect();
}

onDisconnected() {
  console.log('Device is disconnected.');
}
}

var playbulbCandle = new PlaybulbCandle();

document.querySelector('button').addEventListener('click', event => {
playbulbCandle.request()
.then(_ => playbulbCandle.connect())
.then(_ => { /* Do something with playbulbCandle... */})
.catch(error => { console.log(error) });
});
</script>

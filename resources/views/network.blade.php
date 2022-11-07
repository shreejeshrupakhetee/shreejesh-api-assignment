<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Live Network Information</title>
</head>
<body>
<h1 class="text-center"><kbd>Live Network Information</kbd></h1>


<div class="container">
    <table class="table table-bordered networkTable">
        <thead>
        <tr>
            <th scope="col">Key</th>
            <th scope="col">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        </tr>
        </tbody>
    </table>
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
    navigator.connection.addEventListener('change', logNetworkInfo);

    function logNetworkInfo() {
        // Network type that browser uses
        $('.networkTable').append('<tr> <td>type</td> <td>' + navigator.connection.type + '</td></tr>')
        // Effective bandwidth estimate
        $('.networkTable').append('<tr> <td>downlink</td> <td>' + navigator.connection.downlink + ' Mb/s</td></tr>')
        // Effective round-trip time estimate
        $('.networkTable').append('<tr> <td>rtt</td> <td>' + navigator.connection.rtt + ' ms</td></tr>')
        // Upper bound on the downlink speed of the first network hop
        $('.networkTable').append('<tr> <td>downlinkMax</td> <td>' + navigator.connection.downlinkMax + ' MB/s</td></tr>')
        // Effective connection type determined using a combination of recently
        $('.networkTable').append('<tr> <td>effectiveType</td> <td>' + navigator.connection.effectiveType + ' MB/s</td></tr>')
        // True if the user has requested a reduced data usage mode from the user
        $('.networkTable').append('<tr> <td>saveData</td> <td>' + navigator.connection.saveData + '</td></tr>')
    }

    logNetworkInfo();
</script>

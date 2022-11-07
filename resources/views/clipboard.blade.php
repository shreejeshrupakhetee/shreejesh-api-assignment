<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Live Clipboard Information</title>
</head>
<body>
<h1 class="text-center"><kbd>Live Clipboard Information</kbd></h1>


<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="d-flex">
                <input type="text" name="value" class="form-control" id="value" placeholder="copy text"/>
                <button id="copy" class="btn btn-warning">Copy</button>
            </div>
               
        </div>
    
    <div class="col-md-12" >
        <div class="d-flex">
            <input type="text" class="form-control" name="pest_value" id="pastevalue" placeholder="pest text"/>
            <button id="paste" class="btn btn-secondary">Paste</button>
        </div>
       
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    const copy=document.getElementById('copy');
  const paste=document.getElementById('paste');
  const Value=document.getElementById('value');
  const pest_value=document.getElementById('pastevalue');
  copy.addEventListener('click',async()=>{
    await navigator.clipboard.writeText(Value.value);
    alert('copied!');
  })
  
  paste.addEventListener('click',async()=>{
    let read=await navigator.clipboard.readText();
    pest_value.value=read;
  })

 
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Project</title>
</head>
<body>
    <h1>Demo Project</h1>
    <div>
        <from method="post" action="">
        {{csrf_field()}}   
        
        <input type="text" id ="title" placeholder="Title">
        <input type="text" id ="description" placeholder="Description">
        <input type="text" id ="start_date" placeholder="Start Date">
        <input type="text" id ="end_date" placeholder="End Date">
        <br>

        <input type="checkbox" id="developer1" name="developer1" >
        <label for="vehicle1"> Developer 1</label>
        <input type="checkbox" id="developer2" name="developer2" >
        <label for="vehicle2"> Developer 2</label>
        <input type="checkbox" id="developer3" name="developer3" >
        <label for="vehicle3"> Developer 3</label>
        <input type="checkbox" id="developer4" name="developer4" >
        <label for="vehicle3"> Developer 4</label>


      </from>
    </div>
</body>
</html>
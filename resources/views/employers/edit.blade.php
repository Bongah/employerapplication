<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* .container 
        {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        } */
        form 
        {
            /* Center the form on the page */
            margin: 0 auto;
            width: 500px;
            /* Form outline */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }

        input[type=text], input[type=email] {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
            }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card-header">Update Employer Page</div>
        
            
            <form action="{{ url('update',$employers->id) }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $employers->name}}" class="form-control"></br>
                <label>Email Address</label></br>
                <input type="email" name="email" id="email" class="form-control" value="{{ $employers->email}}" ></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $employers->mobile}}" ></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        
        
    </div>
</body>
</html>
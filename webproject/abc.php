<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>#main_container{
        width:500px;
        height:auto;
        border: 1px solid #ccc;
        margin:auto;
        margin-top: 100px;
        padding: 10px;
        display:flex;
        flex-direction: column;

    }
 
    input{
        width: 97%;
        padding: 10px;
        border-radius :20px;
        font-size: 18px;
        align-self: center;
    }
    input:focus{
        outline:none;
    }
    label{
        margin-top: 15px;
    }
    </style>
</head>
<body>
    <div id="main_container">
        <h1>Insert your Information.</h1>

        
        <form action="def.php" method="POST">
            <label for="ID">ID</label>
            <input type="text" name="ID" id="ID"/>

            <!--Name-->
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name"/>

            <input type="submit" value="Submit">
       </form>

    </div>
    
</body>
</html>
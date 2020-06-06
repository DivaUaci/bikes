<!DOCTYPE html>
<html>
    <head>
        <title>Bikes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            table tr:not(:first-child){
                cursor: pointer; transition: all .29s ease-in-out;
               
            }
            table tr:not(:first-child):hover{background-color: #ddd;}

      body {
  font-family: "Lato", sans-serif;
}

@media screen and (max-height: 450px) {
  .sidenav2 {padding-top: 15px;}
  .sidenav2 a {font-size: 18px;}
}

#container {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  color: #373a3c;
  background-color: #fff; }

table{
    width:80%; 
    margin-left:15%; 
    margin-right:15%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    font-size: 18px;
  }     
#myInput {
  
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-left: 15%;
}


#table th, #myTable td {
  text-align: left;
  padding: 12px;
}

#table tr {
  border-bottom: 1px solid #ddd;
}

#table tr.header, #table tr:hover {
  background-color: #f1f1f1;}

.box {border:1px solid #f1f1f1;
 background:#f1f1f1;color:black;padding:5px;}

.button1 {
    background-color: red;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 16px;
  }

  .button2 {
    background-color: greenyellow;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 16px;
  }

  .button3 {
    background-color: mediumturquoise;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 16px;
  }
  
  .right-text{
      float: right;
      margin-right: 80px;
      margin-top: -50px;
  }
  
  .page-content {
      padding-top: 5%;
  }
</style>

<!-- 2 CORINTHIANS 7:10-->
 </head>

<body id= "container">
    <div class="box">
        <h2>&nbsp;&nbsp;Bikes</h2>
    </div>
         
    <div class="page-content">
        <div class="right-text">
            <button type="submit" class="button2" > ADD </button>
        </div>

        <div id="column" >
            <table border="1" id='table'>
                <thead>
                    <tr class="header">
                      <th>ID</th>
                      <th>Brand</th> 
                      <th>Model</th>
                      <th>Created at</th>              
                      <th>Updated at</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                @foreach($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->brand}}</td>
                    <td>{{$value->model}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td>
                        <button type="submit" class="button3" > Edit </button>
                        <button type="submit" class="button1" > Delete </button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>        
    </div>

               
</body>
</html>

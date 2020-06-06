<!DOCTYPE html>
<html>
    <head>
        <title>Line Supervisor</title>
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

.sidenav2{
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #c6c4c4;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav2 a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav2 a:hover {
  color: #f1f1f1;
}

.sidenav2 .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
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

</style>

<!-- 2 CORINTHIANS 7:10-->
 </head>

<body id= "container">
                <div class="box"><h2>&nbsp;&nbsp;Bikes</h2></div>
                     </br>
                     </br>
                   </br>
                   </br>

                   <div id="column" >
                     <table border="1" id='table'>
                          <thead>
                            <tr class="header">
                              <th>ID</th>
                              <th>Brand</th> 
                              <th>Model</th>
                              <th>Created at</th>
                              <th>Updated at</th>
                            </tr>
                            @foreach($data as $value)
                            <tr>
                             <td>{{$value->id}}</td>
                             <td>{{$value->brand}}</td>
                             <td>{{$value->model}}</td>
                             <td>{{$value->created_at}}</td>
                             <td>{{$value->updated_at}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

               
</body>
</html>

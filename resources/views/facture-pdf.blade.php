<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>facture num</title>



        <style>
        .page-break {
            page-break-after: always;
        }
        table, td, th {  
        border: 1px solid #ddd;
        text-align: left;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 15px;
        }

        ul{
            list-style: none;
        }
        .shop{
            width: 100%;
           
           
             padding-bottom: 100px;
            

        }
        .boss{
           
             width: 35%;
             float: left;
             padding: 2%;
             text-align: left;
            border: #ddd solid 1px;

        }
        .spacer{
            width: 23%;
            float: left;
        }
        .client{
          
             width: 30%;
             padding: 2%;
             float: left;
             text-align: left;
             border: #ddd solid 1px;
        }
        .float-stop{
            clear:both;
            display: block;
           

        }

        .spacer-horizental{
            height: 30px;
        }
        thead{
            background-color: cadetblue;
        }

        </style>
</head>   
<body>
     
    <h1>Shopping-tn</h1>
   
    <div class="shop">
        <div class="boss">
            <ul>
                <li><span>name</span> <span>bosss</span></li>
                <li><span>name</span> <span>bosss</span></li>
                <li><span>name</span> <span>bosss</span></li>
                <li><span>name</span> <span>bosss</span></li>
                <li><span>name</span> <span>bosss</span></li>
                <li><span>name</span> <span>bosss</span></li>
            </ul>

        </div>

        <div class="spacer"></div>

        <div class="client">
            <ul>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
            </ul>
        </div>
    </div>

    <div class="float-stop"></div>
    <div class="spacer-horizental"></div>


      <table class="table table-striped" >
          <thead>
              <tr>
                  <th>name</th>
                  <th>role</th>
                  <th>email</th>
                  <th>status</th>
              </tr>
          </thead>

          <tbody>

                 @foreach ($users  as $user)
                    <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->roles()->first()->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->active}}</td>
                    </tr>
                     
                @endforeach

          </tbody>
      </table>

        <div class="spacer-horizental"></div>

     <div class="shop">
        <div class="boss">
            <ul>
               <li>arrete la facture a la somme de 5 556,780 TND</li>
            </ul>

        </div>

        <div class="spacer"></div>

        <div class="client">
            <ul>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
                <li><span>name</span> <span>client</span></li>
            </ul>
        </div>
    </div>
 <div class="float-stop"></div>
    <div class="shop">
       Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    </div>

   

    
    {{-- <div class="page-break"></div>
    
    <h1>Page 2</h1> --}}

</body>
</html>
<!DOCTYPE html> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
 <head> 
     
            <a href="<?php echo base_url(); ?>" class="logo"></a>
            <ul>
               <li><a href="<?php echo base_url(); ?>hlavni">Úvod</a></li>
               
                 <li><a href="<?php echo base_url(); ?>mesto">Města</a></li>
                  <li><a href="<?php echo base_url(); ?>obor">Obor</a></li>
                  <li><a href="<?php echo base_url(); ?>pocet">Počet</a></li>
            </ul>
     
      <meta charset = "utf-8"> 
      
      <style >
          ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
          
          table{
              color:blue;
              border: 8px solid red;
          }
          
          
          
      </style>
      
      
   </head>
 
    <body>
           
        <div class="container">
            
            <center>
            <h1 class="title is-3">Přehled oborů v seznamu</h1>
            </center>
            <div class="column">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>název</th>
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obor as $obor): ?>
                            <tr>
                                 <td><?= $obor->id ?></td>
                                <td><?= $obor->nazev ?></td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                        
            </div>
        </div>
        
         
            
        
    </body>
</html>
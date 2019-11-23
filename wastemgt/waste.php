 <!DOCTYPE html>
<html>
  <head>
    <title>WASTE MATERIALS</title>
    <link href="css/styles.css" rel="stylesheet" />
  </head>

  <body>
<h1>TYPES OF WASTE</h1>
<





















 <form id="book" class="struct" action="reqval.php" method="POST">
         <blockquote>WASTE MATERIAL COLLECTION FORM.</blockquote>
        <div class="part1">
        <input class="fields2" type="text" name="name" placeholder="Name" required="Please fill in your name">  
        <input class="fields2" type="email" name="email" placeholder="E-mail" required="Please fill in your email id.">   
        <div class="part2">    
        <input class="fields2" type="number" name="numrooms" placeholder="Number of Rooms" required >
        </div>
        <div class="part3" >      
        <input class="fields2" type="number" name="numpeople" placeholder="Number of People" required>
        </div>
        <br>
        
        <div class="part4">
        Budget:
        <br>
                   <input class="bud" type="range" min="0" max ="50000" name="budget" value="0" required>50000</input>
       
           <br>
           <br>
            <fieldset>
              <legend>
                ROOM TYPE:
                <br>
                <br>
              </legend>
              <input type="text" name="select1" list="first" required />
              <datalist id="first">
               <option>Single-Sharing</option>
               <option>Double-Sharing</option>
               <option>Triple-Sharing</option>
              </datalist>
                <br>
                <br>
            </fieldset>     
       </div>
   <br>
   
     <input type="submit" id="sub" value="Proceed">
    </div>
    </div>
    </form>

   <!-- <table>
<tr>
          <th>User name</th>
          <th>Email</th>
           <th>Number Of Rooms</th>
           <th>Number of People</th>
           <th>Budget</th>
           <th>Room Type</th>
           

</tr>
 <?php
        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con, 'project');
        $q = " SELECT * FROM `booking` ";
        $query = mysqli_query($con,$q);    
        while($res = mysqli_fetch_array($query)){
                ?>
         
         <tr>
            <td><?php echo $res['name'] ?></td>
            <td><?php echo $res['email'] ?></td>
            <td><?php echo $res['numrooms'] ?></td>
            <td><?php echo $res['numpeople'] ?></td>
            <td><?php echo $res['budget'] ?></td>
            <td><?php echo $res['select1'] ?></td>
            
              </tr>
        <?php
            
        }
        ?>
        </table> --->
      </body>
      </html>
   
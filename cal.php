<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
    HTML Code is here:

         <form method="post">
            <input type="text" name="numb1">
            <input type="text" name="numb2">
            <select name="operator" id="">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Square</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
         </form>

    Answer =

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                
                if ($operator == 'None') {
                    echo "You need to select any operator";}
                
                elseif($operator == "Add"){
                    echo $result1 + $result2;
                }
                
                elseif($operator == "Subtract"){
                    echo $result1 - $result2;
                }
                
                elseif($operator == "Multiply"){
                    echo $result1 * $result2;
                }

                elseif($operator == "Divide"){
                    if($result2 != 0){
                        echo $result1 / $result2;
                }   else{
                    echo "Division by zero error!";
                }
                
            }elseif($operator == "Square"){
                    echo $result1 ** $result2;
                }

                else{
                    echo "Invalid Operations";
                }
            }
            

            

         ?>
         <br><br>
        This is the Calculated Answers

    </body>
    </html>


    
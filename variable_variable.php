

<?php
//  if (isset($_GET['var_name'])){
//     $varname = $_GET['var_name'];
//     $$varname = 'Avatar name';
//     echo "<script> alert('Your {$$varname} is {$varname}')</script>";
//       $x = 20; //00101
//     $y = 16; //00001
//     echo $y>>$x;
//  }
// echo goo(2,1);
// function goo(mixed $x ,int $z, int $y=5 ){
//   return $x ** $y + $z;
// }
// $thisHarly = [1,2,4,5];
// foreach ($thisHarly as $harly){
//   echo "<pre>";
//   switch($harly){
//     case 1:
//       echo "hired";
//       continue 2;
//     case 2:
//       echo "not hired ";
//       break ;
//       case 4:
//         echo "try again";
//         break;
//       case 5: 
//         echo "ccc";
//         break;
//       default:
//        echo"Hello world";
//   }
//   echo "</pre>";

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>varname</title>

</head>
  <style>
    #inputContainer{
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    #inputContainer form input{
      margin: 10px 20px;
    }
  </style>
        <label for="keys">Enter number of keys:</label>
        <input type="text" id="keys">
        <button onclick="createInputTextboxes()">Submit</button>
        <div id="inputContainer"></div>
      <script>
        function createInputTextboxes(){
        const valKey= document.getElementById("keys").value;
        const inputContainer = document.getElementById('inputContainer');
        inputContainer.innerHTML = '';
        const form_btn = document.createElement('form');
        form_btn.action = "bool.php";
        form_btn.method = "POST";
        inputContainer.appendChild(form_btn);
        for(let i =1; i <=valKey; i++) {
          const input = document.createElement('input');
          input.type = 'text';    
          input.placeholder = 'value of key' + i;
          input.name = 'key_val' + i;
          form_btn.appendChild(input);
          form_btn.appendChild(document.createElement('br'));
        }
        const sub = document.createElement('input');
        const numOfKeys = document.createElement('input');
        numOfKeys.type = "hidden";
        numOfKeys.name = "num_keys";
        numOfKeys.value = valKey; 
        sub.type = 'submit';
        sub.name="submitted";
        form_btn.appendChild(numOfKeys);
        form_btn.appendChild(sub);        
        }
      </script>
<body>
</body>
</html>


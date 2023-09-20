<?php
     
     if(isset($_POST['taskList'])){
             $taskList = $_POST['taskList'];
     }
     else{
          $taskList = array();
     }


    # handling add/delete button
    if(isset($_POST['action'])){
           switch($_POST['action']){
                case 'Add':
                      # take input from textbox
                      $new_task = $_POST['newTask'];
                      # adding new task to tasklist array
                      $taskList[] = $new_task;
                      break;

                case 'Delete':
                      #get the id of task
                      $task_index = $_POST['taskId'];
                      #Delet the value
                      unset($taskList[$task_index]);
                      $taskList = array_values($taskList);
                      break;
           }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h2>Task List Manager </h1>
      <h2>Tasks:</h2>

       <?php if(count($taskList)==0): ?>
          <p>There are no tasks in the task  list.</p>
       <?php else:?>
          <ul>
              <?php foreach($taskList as $key=> $value):?>
                 <li> <?php echo ($key+1). '.'.$value;?></li>
              <?php endforeach;?>  
         </ul>

       <?php endif;?>  

      <h2>Add Task</h2>
      <form action="mini_project.php" method="post">
            <?php foreach($taskList as $value):?>
                <input type="hidden" name="taskList[]" value="<?php echo $value;?>"/>
            <?php endforeach;?>    
         
          <label>Task:</label> 
          <input type="text" name="newTask"/>
          <input type="submit" name="action" value="Add"/>
      </form>

      <h2>Delete Task:</h2>
      <label for="">Task:</label>
      <form action="mini_project.php" method="post">

           <?php foreach($taskList as $value):?>
                <input type="hidden" name="taskList[]" value="<?php echo $value;?>"/>
            <?php endforeach;?>    
           
            <select name="taskId">
                <?php foreach($taskList as $id=>$task):?>
                     <option value="<?php echo $id;?>"><?php echo $task;?></option>
                <?php endforeach;?>    
           </select>
           <input type="submit" name="action" value="Delete"/>

      </form>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
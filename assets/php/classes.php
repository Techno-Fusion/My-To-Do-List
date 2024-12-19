<?php 
class Task{
    public $taskID;
    public $title;
    public $isImportant;
    public $dateTime;
    public $status;
    public function __construct($taskID){
        $this->taskID = $taskID;
    }
    public function getAllTasks(){
        $query = "SELECT * FROM tasks";
        $result = executeQuery($query);

        $tasks = array();

        while($row = mysqli_fetch_assoc($result)){
            $t = new Task($row['taskID']);
            $t->title = $row['title'];
            $t->isImportant = $row['isImportant'];
            $t->dateTime = $row['dateTime'];
            $t->status = $row['status'];
            array_push($tasks, $t);
        }

        return $tasks;
    }
}
?>
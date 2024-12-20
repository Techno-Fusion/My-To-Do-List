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
    public function buildCard(){
        return '<li class="task-item card d-flex justify-content-between align-items-center flex-row">
                    <div class="form-check ps-5">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        '.$this->title.'
                      </label>
                    </div>
                    <div class="action-buttons justify-content-end">
                      <ul class="action-list d-flex flex-wrap">
                        <li class="m-3">
                          <button class="btn-action"><i class="fa-regular fa-star"></i></button>
                        </li>
                        <li class="m-3">
                          <button type="button" class="btn-action" data-bs-toggle="modal"
                            data-bs-target="#editTaskModal"><i class="fa-solid fa-pen-to-square"></i></button>

                          <!-- EDIT TASK MODAL -->
                          <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModelLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="editTaskModelLabel">EDIT YOUR TASK</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <label for="task">Your Task</label>
                                    <input type="text" class="form-control" id="task" name="task">
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="m-3">
                          <button type="button" class="btn-action" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="fa-solid fa-trash"></i></button>
                            
                          <!-- DELETE MODAL -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">DELETE TASK</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <h4>Do you want to delete this task?</h4>
                                  <h6>If you click the delete button, it will be permanently removed from the list.</h6>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>';
    }
    public function updateTask(){
        
    }
}
?>

<?php
include('assets/php/connect.php');
include('assets/php/classes.php');
$task = new Task(null);
$taskList = $task->getAllTasks();

echo "epal si louie";
echo "Helloooooo";
echo "hello world";

?>

<!doctype html>
<html lang="en">

<l>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="assets/img/mytodolist-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-4 col-lg-3 col-xl-2 p-0">
          <!-- SIDEBAR -->
          <div class="sidebar">
            <div class="logo text-center py-3 mb-3"><img src="assets/img/mytodolist-logo.svg" alt="My-To-Do-List Logo"
                class="img-fluid"></div>
            <div class="navigations">
              <ul class="nav-list px-5 text-start">
                <li>
                  <a href="index.php" class="my-tasks"><i class="fa-solid fa-house"></i> My Tasks</a>
                </li>
                <li>
                  <a href="index.php" class="important"><i class="fa-regular fa-star"></i> Important</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8 col-lg-9 col-xl-10 p-0">
          <!-- TASKS CONTAINER -->
          <div class="main-content container-fluid">
            <div class="top d-flex justify-content-between align-items-center">
              <h1 class="p-5">My Tasks</h1>
              <div class="justify-content-end p-5">
                <button type="button" class="btn add-task" data-bs-toggle="modal" data-bs-target="#addNewTaskModal"><i
                    class="fa-solid fa-plus"></i> Add a task</button>

                <!-- ADD NEW TASK MODAL -->
                <div class="modal fade" id="addNewTaskModal" tabindex="-1" aria-labelledby="addNewTaskModelLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addNewTaskModelLabel">ADD NEW TASK</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <label for="new-task">Create New Task</label>
                          <input type="text" class="form-control" id="new-task" name="new-task">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create Task</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="task-container">
                <ul class="task-list px-5">
                  <?php foreach ($taskList as $taskItem) {
                    echo $taskItem->buildCard();
                  } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/49a3347974.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>

</html>